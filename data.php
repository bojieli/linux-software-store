<?/*php
require_once('connect.php');

$last = $_POST['last'];
$amount = $_POST['amount'];

$list = array('pack0','pack1','pack2','pack3','pack4','pack5');
$query=mysql_query("select * from say order by id desc limit $last,$amount");
while ($row=mysql_fetch_array($query)) {
	$sayList[] = array(
		'name'=>$row['name'],
		'pic'=>$row['pic'],
		'brief'=>$row['brief'],
        'rank'=>$row['rank']
      );
}*/

$last = $_POST['last'];
$amount = $_POST['amount'];
$list = array('pack0','pack1','pack2','pack3','pack4','pack5');
 var pack=0;
 for ($pack<=5;;$pack++){
       $sayList[] = array(
       		'name'=>qq,
       		'pic'=>"http://www.qq.com",
       		'brief'=>"qq is a copy cat!",
            'rank'=>1
             );
 }

echo json_encode($sayList);
?>
