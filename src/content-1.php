<?php
require_once("CPackage.php");
require_once("common_funcs.php");
if (empty($_GET['dist'])) {
	$dist = 'ubuntu';
} else {
	$dist = addslashes($_GET['dist']);
}
$distname = firstLetterToUpper($dist);

/*
 * in: $dist, $section, $num
 * out: an array contains the package info which meet the query
 */
function getSimplePackageInfo($dist, $section, $num = 10){
	$dist = strtolower($dist);
	// get dataset from Mysql
	$sql = "SELECT name FROM cz_pack WHERE did = (SELECT did FROM cz_dist WHERE name = '".$dist."') AND pid IN (SELECT pid FROM cz_sec_pack WHERE sid = (SELECT sid FROM cz_section WHERE name = '".$section."')) LIMIT 0,".$num;	//TODO:add order by subquery
	//echo $sql;
    echo $sql;
	if (!($result = mysql_query($sql)))
	{
		return array();
	}
	$realNum = mysql_num_rows($result);
	$simplePackages = array();
	for($i = 0; $i < $realNum; $i++){
		$rows = mysql_fetch_array($result,MYSQL_ASSOC);
        var_dump($rows);
		$tmp = new CPackage($rows["name"], $dist);
		$simplePackages[$i] = $tmp; 
	}
	return $simplePackages;
}

function printVoid(){
	echo '<td class="icon">';
	echo '<a href="#"><img src="" alt="软件图片" style="width: 50px;height: 50px;"/></a>';
	echo '</td>';
	echo '<td class="bre">';
	echo '<p><a href=""></a></p>';
	echo '<comment>暂无数据</comment>';
	echo '</td>';
}
?>

<div id="content-1">
    <script type="text/javascript" language="javascript" src="../static/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="../static/js/tab.js"></script>
    <div class="tabs">
		<ul>
		<?php
            $num = 0;
            $rs = mysql_query("SELECT sid,name FROM cz_section");
            while ($s = mysql_fetch_array($rs)) {
                $num++;
			?>
			<li id="button-<?=$num?>" class="<?php if($num==1) echo "first";?> tab_<?=$num?> button button-dist">
				<h2 class="<?=$num==1 ? 'active' : ''?>"><?=$s['name']?></h2>
				<div>
				<p><a href="search_result.php?dist=<?=$dist?>&tid=<?=$s['name']?>" target="_blank"><?=$s['name']?>内容</a></p>
                <table class="software">
<?php
				$packages = getSimplePackageInfo($distname, $s['sid']);
				for ($i=0; $i<5; $i++) {
		    	?>
					<tr>
					<?php
					for ($j = 0; $j < 2; $j++){
						$currIdx = $i * 2 + $j;
						if(count($packages) > $currIdx){
						?>
                        <td class="icon">
						<a href="intro.php?dist=<?=$dist?>&package=<?php echo $packages[$currIdx]->getszName();?>" target="_blank">
                             <img src="<?php echo $packages[$currIdx]->getszIcon();?>" alt="软件图片" style="width: 50px;height: 50px;" >
                            </a>
                        </td>
                        <td class="bre" >
							  <p><a href="intro.php?dist=<?=$dist?>&package=<?php echo $packages[$currIdx]->getszName();?>"  target="_blank"><?php echo $packages[$currIdx]->getszName();?></a></p>
                              <comment><?php echo $packages[$currIdx]->getszSummary();?></comment>
                        </td>
						<?php
						}
						else{
							printVoid();
						}
					}//end of for
				?>
                    </tr>
				<?php
				}
				?>
				</table>
                </div>
			</li>
			<?php
			}
			?>
        </ul>
    </div>
</div>
