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
	header('Content-Disposition: attachment; filename="data_export.xls"');
	ini_set("memory_limit","1000M");
	$year = 0;
	$month = 0;
	if(!empty($_POST['l_year']))
		$year = $_POST['l_year'];
	if(!empty($_POST['l_month']))
		$month = $_POST['l_month'];
?>
<table width="100%">
<tr>
<?php
$result = mysql_query("SHOW COLUMNS FROM abortionsurvey_main_2559");
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
$search_sql = "";
if($year != 0){
	if($month != 0)
		$search_sql = " and survey_year = '".$year."' and MONTH(survey_datefirst) = '".$month."'";
	else
		$search_sql = " and survey_year ='".$year."'";
}
else{
	if($month != 0)
		$search_sql = " and MONTH(survey_datefirst) = '".$month."'";
}
$sqlx = "select * from abortionsurvey_main_2559 where user_add = '".$_SESSION["ss_id"]."'".$search_sql;
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
