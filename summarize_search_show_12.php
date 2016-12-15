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
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_all = mysql_query($query);
	$result_all = mysql_fetch_array($result_all);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and group_effect1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_effect_1 = mysql_query($query);
	$result_all_effect_1 = mysql_fetch_array($result_all_effect_1);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and group_effect2 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_effect_2 = mysql_query($query);
	$result_all_effect_2 = mysql_fetch_array($result_all_effect_2);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and group_effect3 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_effect_3 = mysql_query($query);
	$result_all_effect_3 = mysql_fetch_array($result_all_effect_3);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and group_effect4 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_effect_4 = mysql_query($query);
	$result_all_effect_4 = mysql_fetch_array($result_all_effect_4);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and group_effect5 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_effect_5 = mysql_query($query);
	$result_all_effect_5 = mysql_fetch_array($result_all_effect_5);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and group_effect6 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_effect_6 = mysql_query($query);
	$result_all_effect_6 = mysql_fetch_array($result_all_effect_6);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and group_effect7 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_effect_7 = mysql_query($query);
	$result_all_effect_7 = mysql_fetch_array($result_all_effect_7);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and group_effect8 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_effect_8 = mysql_query($query);
	$result_all_effect_8 = mysql_fetch_array($result_all_effect_8);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and group_effect9 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_effect_9 = mysql_query($query);
	$result_all_effect_9 = mysql_fetch_array($result_all_effect_9);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and group_effect10 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_effect_10 = mysql_query($query);
	$result_all_effect_10 = mysql_fetch_array($result_all_effect_10);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and group_effect11 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_effect_11 = mysql_query($query);
	$result_all_effect_11 = mysql_fetch_array($result_all_effect_11);
	
?>
<h3 align="center">จำนวนและร้อยละผู้ป่วยทำแท้ง จำแนกตามผุ้มีอิทธิพลต่อการตัดสินใจทำแท้ง</h3>
<table width="100%" border="0" cellspacing="2" cellpadding="3">
  <tr bgcolor="#3399CC" class="color_text">
    <td width="70%" >ผู้มีอิทิพลต่อการตัดสินใจทำแท้ง</td>
    <td width="15%" >จำนวน</td>
    <td width="15%" >ร้อยละ</td>
  </tr>
  <tr bgcolor="#f19f9f" class="text_table">
    <td >ผู้มีอิทิพลต่อการตัดสินใจทำแท้ง</td>
	<td align="center">n = <?php echo toNumber($result_all['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all['count']/$result_all['count']*100) : '-'?></td>
  </tr>  
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ผู้ป่วยเอง</td>
    <td align="center"><?php echo toNumber($result_all_effect_1['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_effect_1['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp สามี/เพื่อนชาย</td>
    <td align="center"><?php echo toNumber($result_all_effect_2['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_effect_2['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp พ่อ/แม่ ฝ่ายหญิง</td>
    <td align="center"><?php echo toNumber($result_all_effect_3['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_effect_3['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp พ่อ/แม่ ฝ่ายชาย</td>
    <td align="center"><?php echo toNumber($result_all_effect_4['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_effect_4['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp พี่/น้อง</td>
    <td align="center"><?php echo toNumber($result_all_effect_5['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_effect_5['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ญาติ</td>
    <td align="center"><?php echo toNumber($result_all_effect_6['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_effect_6['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp เพื่อน</td>
    <td align="center"><?php echo toNumber($result_all_effect_7['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_effect_7['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp เพื่อนบ้าน</td>
    <td align="center"><?php echo toNumber($result_all_effect_8['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_effect_8['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ครู/อาจารย์</td>
    <td align="center"><?php echo toNumber($result_all_effect_9['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_effect_9['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp แพทย์/พยาบาล</td>
    <td align="center"><?php echo toNumber($result_all_effect_10['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_effect_10['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp อื่น ๆ</td>
    <td align="center"><?php echo toNumber($result_all_effect_11['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_effect_11['count']/$result_all['count']*100) : '-'?></td>
  </tr>
</table>