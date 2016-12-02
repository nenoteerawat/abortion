<?php
ob_start();
	session_start();

	if(empty($_SESSION["ss_id"]) )
		{
			echo"<script>
			window.location = 'login.php';
			</script>";		
		}
	
	include("connect.php");
	date_default_timezone_set ("Asia/Bangkok"); 	
	$today = date("Y-m-d");
	$now_time = date("H:i:s");
	$ipaddress = $_SERVER['REMOTE_ADDR'];
		
	header("Content-Type: application/vnd.ms-excel");
	header('Content-Disposition: attachment; filename="data_export_2557.xls"');
	ini_set("memory_limit","1000M");

?>
<table width="100%">
<tr>
<?php
$result = mysql_query("SHOW COLUMNS FROM abortionsurvey_main_2557");
$a = array();
while ($row = mysql_fetch_assoc($result)) {
?>
<td>
<?php echo $row['Field'];
$a[$row['Field']] = $row['Field'];
?>
</td>
<?php } ?>
</tr>
<?php 
$sql_text = "";
if(!empty($_SESSION["ss_hospital_id"])){
	$h = explode("/",$_SESSION["ss_hospital_id"]);
	for($i=0;$i<=sizeof($h)-1;$i++)
		{
			$sql_h = " survey_province like '%".$h[$i]."%'";
			if(empty($sql_text))
				{
					$sql_text = $sql_h;
				}
			else
				{
					$sql_text = $sql_text."=".$sql_h;
				}
		}
}
else{
	$sql_text = "survey_province like '%%'";
}
$sql_text_sum = str_replace("="," or ",$sql_text);
$sqlx = "select * from abortionsurvey_main_2557 where (".$sql_text_sum.")";
$resultx = mysql_query($sqlx);
while($rowx = mysql_fetch_array($resultx)){
?>
<tr>
<?php foreach($a as $v) {?>
<td>
<?php echo $rowx[$v];?>
</td>
<?php }?>

</tr>
<?php }?>
</table>
