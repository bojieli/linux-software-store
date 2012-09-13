<?php
require_once("CPackage.php");
require_once("db_init.php");
if (empty($_GET['dist'])) {
	$dist = 'ubuntu';
} else {
	$dist = addslashes($_GET['dist']);
}
$distname = firstLetterToUpper($dist);
mysql_query("SET CHARSET UTF8");
//$rs = mysql_query("SELECT * FROM cz_pack WHERE did = '$did' AND recommend = 2");
//while ($pack = mysql_fetch_array($rs)) {
/*
			$pack = array(
			   'pid' => 1,
			    'name' =>  'xx软件',	
				'icon_url' => '',
				'url' => 'http://mirrors.ustc.edu.cn/',
				'summary' =>'软件是个好东西'
);
 */

/*
 * in: $dist, $section, $num
 * out: an array contains the package info which meet the query
 */
function getSimplePackageInfo($dist, $section, $num = 10){
	// get dataset from Mysql
	$sql = "SELECT name FROM cz_pack WHERE did = (SELECT did FROM cz_dist WHERE name = '".$dist."') AND pid IN (SELECT pid FROM cz_sec_pack WHERE sid = (SELECT sid FROM cz_section WHERE name = '".$section."')) LIMIT 0,".$num;	//TODO:add order by subquery
//	echo $sql;
	$result = mysql_query($sql);
	$realNum = mysql_num_rows($result);
	$simplePackages = array();
	for($i = 0; $i < $realNum; $i++){
		$rows = mysql_fetch_array($result,MYSQL_ASSOC);
		$tmp = new CPackage($rows["name"], $dist);
		$simplePackages[$i] = $tmp; 
	}
	return $simplePackages;
}

function printVoid(){
	echo '<td class="icon">';
	echo '<a href="#"><img src=""/><img alt="软件图片" style="width: 50px;height: 50px;"/></a>';
	echo '</td>';
	echo '<td class="bre">';
	echo '<p><a href=""></a></p>';
	echo '<comment>暂无数据</comment>';
	echo '</td>';
}
?>

<div id="content-1">
    <script type="text/javascript" language="javascript" src="static/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="static/js/tab.js"></script>
    <div class="tabs">
		<ul>
		<?php
			$TabTitles = array("小站推荐", "办公", "学习","游戏","娱乐","系统","其他");
			$sectionFields = array("recommand", "office", "study", "game","passtime","system","others");	//the name field in cz_section table
			for($tabNo = 0; $tabNo < 7; $tabNo++){
			?>
			<li id="button-<?php echo $tabNo;?>" class="<?php if($tabNo==0) echo "first";?> tab_<?php echo $tabNo;?> button button-dist">
				<?php if($tabNo == 0){?>
				<h2 class="active">
				<?php }else{?>
				<h2>
				<?php }?>
				<?php echo $TabTitles[$tabNo];?></h2>
				<div>
				<p><a href="search_result.php?dist=<?php echo $dist;?>&tid=<?php echo $sectionFields[$tabNo];?>" target="_blank"><?php echo $TabTitles[$tabNo];?>内容</a></p>
                <table class="software">
<?php
				$packages = getSimplePackageInfo($distname, $sectionFields[$tabNo]);
		    	for ($i=0; $i<5; $i++) {
		    	?>
					<tr>
						<?php	
						if(count($packages) > $i * 2){
						?>
                        <td class="icon">
						<a href="intro.php?dist=<?=$dist?>&package=<?php echo $packages[$i * 2]->getszName();?>" target="_blank">
                             <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >
                            </a>
                        </td>
                        <td class="bre" >
							  <p><a href="intro.php?dist=<?=$dist?>&package=<?php echo $packages[$i * 2]->getszName();?>"  target="_blank"><?php echo $packages[$i * 2]->getszName();?></a></p>
                              <comment><?php echo $packages[$i * 2]->getszSummary();?></comment>
                        </td>
						<?php
						}
						else{
							printVoid();
						}
						if(count($packages) > $i * 2 + 1){
						?>
                        <td class="icon" >
						<a href="intro.php?dist=<?=$dist?>&package=<?php echo $packages[$i * 2 + 1]->getszName();?>" target="_blank">
                        <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >
                        </a>
                        </td>
                        <td class="bre" >
						<p><a href="intro.php?dist=<?=$dist?>&package=<?php echo $packages[$i * 2 + 1]->getszName();?>"  target="_blank"><?php echo $packages[$i * 2 + 1]->getszName();?></a></p>
						 <comment><?php echo $packages[$i * 2 + 1]->getszName();?><?echo $packages[$i * 2 + 1]->getszSummary();?></comment>
						</td>
						<?php
						}
						else{
							printVoid();
						}
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
