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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Abortion</title>
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
	/*
	if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดสมุทรปราการ")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '11-สมุทรปราการ'";}
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดพระนครศรีอยุธยา")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '14-พระนครศรีอยุธยา'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดสระบุรี")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '19-สระบุรี'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดชลบุรี")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '20-ชลบุรี'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดระยอง")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '21-ระยอง'";}

		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดจันทบุรี")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '22-จันทบุรี'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดนครราชสีมา")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '30-นครราชสีมา'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดบุรีรัมย์")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '31-บุรีรัมย์'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดสุรินทร์")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '32-สุรินทร์'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดอุบลราชธานี")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '34-อุบลราชธานี'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดชัยภูมิ")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '36-ชัยภูมิ'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดขอนแก่น")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '40-ขอนแก่น'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดเชียงใหม่")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '50-เชียงใหม่'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดแพร่")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '54-แพร่'";}

		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดน่าน")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '55-น่าน'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดเชียงราย")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '57-เชียงราย'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดนครสวรรค์")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '60-นครสวรรค์'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดพิษณุโลก")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '65-พิษณุโลก'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดเพชรบูรณ์")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '67-เพชรบูรณ์'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดนครปฐม")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '73-นครปฐม'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดนครศรีธรรมราช")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '80-นครศรีธรรมราช'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดกระบี่")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '81-กระบี่'";}
		
		else if($_SESSION["ss_name"]=="	สำนักงานสาธารณสุขจังหวัดสุราษฎร์ธานี")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '84-สุราษฎร์ธานี'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดสงขลา")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '90-สงขลา'";}
		
		else if($_SESSION["ss_name"]=="สำนักงานสาธารณสุขจังหวัดสตูล")
			{$sqlx = "select * from abortionsurvey_main_2559 where survey_province = '91-สตูล'";}
		*/
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
	$sqlx = "select * from abortionsurvey_main_2559 where (".$sql_text_sum.")".$search_sql;
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
