<?php
	session_start();
	
	include("connect.php");
	$search_query = "";
	if($_SESSION['ss_lavel']== 2){
		$search_query = " and survey_id like '".$_SESSION['ss_hospital_id']."%'";
	}
	else if($_SESSION['ss_lavel']== 3 || $_SESSION['ss_lavel']== 4){
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
							$sql_text = $sql_text." or ".$sql_h;
						}
				}
		}
		else{
			$sql_text = "survey_province like '%%'";
		}
		$search_query = " and (".$sql_text.")";
	}
	if(!empty($_POST['survey_province'])){
		$survey_province = $_POST['survey_province'];
		$search_query = $search_query." and survey_province = '$survey_province'";
	}
	if(!empty($_POST['month'])){
		$month = $_POST['month'];
		$search_query = $search_query." and MONTH(survey_datefirst) = '$month'";
	}
	if(!empty($_POST['year'])){
		$year = $_POST['year'];
		$search_query = $search_query." and survey_year = '$year'";
	}
	if(!empty($_POST['survey_hospital'])){
		$survey_hospital = $_POST['survey_hospital'];
		$search_query = $search_query." and survey_agency = '$survey_hospital'";
	}
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query;
	$query = preg_replace("/and/","where",$query,1);
	$result_all = mysql_query($query);
	$result_all = mysql_fetch_array($result_all);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and abortionbyself = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_abortionbyself = mysql_query($query);
	$result_all_abortionbyself = mysql_fetch_array($result_all_abortionbyself);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and abortionbymed1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_abortionbymed = mysql_query($query);
	$result_all_abortionbymed = mysql_fetch_array($result_all_abortionbymed);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and abortionbypublic_health1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_abortionbypublic_health = mysql_query($query);
	$result_all_abortionbypublic_health = mysql_fetch_array($result_all_abortionbypublic_health);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and abortionbynotmed1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_abortionbynotmed = mysql_query($query);
	$result_all_abortionbynotmed = mysql_fetch_array($result_all_abortionbynotmed);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and abortionbyunknow1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_abortionbyunknow = mysql_query($query);
	$result_all_abortionbyunknow = mysql_fetch_array($result_all_abortionbyunknow);
?>
<h3 align="center">จำนวนและร้อยละผู้ป่วยทำแท้ง จำแนกตามผู้ให้บริการทำแท้ง</h3>
<table width="100%" border="0" cellspacing="2" cellpadding="3">
  <tr bgcolor="#3399CC" class="color_text">
    <td width="70%" >ผู้ที่ทำแท้งให้</td>
    <td width="15%" >จำนวน</td>
    <td width="15%" >ร้อยละ</td>
  </tr>
  <tr bgcolor="#f19f9f" class="text_table">
    <td ></td>
	<td align="center">n = <?php echo toNumber($result_all['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all['count']/$result_all['count']*100) : '-'?></td>
  </tr>  
  <tr bgcolor="#ffffff" class="text_table">
    <td >ทำด้วยตัวเอง</td>
    <td align="center"><?php echo toNumber($result_all_abortionbyself['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_abortionbyself['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >ทำโดยคนอื่น</td>
    <td align="center"><?php echo toNumber($result_all_abortionbymed['count']+$result_all_abortionbypublic_health['count']+$result_all_abortionbynotmed['count']+$result_all_abortionbyunknow['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal(($result_all_abortionbymed['count']+$result_all_abortionbypublic_health['count']+$result_all_abortionbynotmed['count']+$result_all_abortionbyunknow['count'])/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp แพทย์</td>
    <td align="center"><?php echo toNumber($result_all_abortionbymed['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_abortionbymed['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp เจ้าหน้าที่สาธารณสุขอื่น ๆ</td>
    <td align="center"><?php echo toNumber($result_all_abortionbypublic_health['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_abortionbypublic_health['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp บุคคลที่ไม่ใช่บุคลากรทางการแพทย์</td>
    <td align="center"><?php echo toNumber($result_all_abortionbynotmed['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_abortionbynotmed['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp บุคคลที่ไม่ทราบคุณสมบัติ</td>
    <td align="center"><?php echo toNumber($result_all_abortionbyunknow['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_abortionbyunknow['count']/$result_all['count']*100) : '-'?></td>
  </tr>
</table>