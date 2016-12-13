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
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self = mysql_query($query);
	$result_self = mysql_fetch_array($result_self);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_done = mysql_query($query);
	$result_done = mysql_fetch_array($result_done);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and plan_pregnant = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_intend = mysql_query($query);
	$result_all_intend = mysql_fetch_array($result_all_intend);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and plan_pregnant = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_intend = mysql_query($query);
	$result_self_intend = mysql_fetch_array($result_self_intend);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and plan_pregnant = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_intend = mysql_query($query);
	$result_done_intend = mysql_fetch_array($result_done_intend);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and plan_pregnant = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_inattentive = mysql_query($query);
	$result_all_inattentive = mysql_fetch_array($result_all_inattentive);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and plan_pregnant = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_inattentive = mysql_query($query);
	$result_self_inattentive = mysql_fetch_array($result_self_inattentive);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and plan_pregnant = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_inattentive = mysql_query($query);
	$result_done_inattentive = mysql_fetch_array($result_done_inattentive);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and plan_pregnant = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_no_info = mysql_query($query);
	$result_all_no_info = mysql_fetch_array($result_all_no_info);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and plan_pregnant = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_no_info = mysql_query($query);
	$result_self_no_info = mysql_fetch_array($result_self_no_info);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and plan_pregnant = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_no_info = mysql_query($query);
	$result_done_no_info = mysql_fetch_array($result_done_no_info);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and plan_pregnant = 2 and contraception = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_inattentive_use = mysql_query($query);
	$result_all_inattentive_use = mysql_fetch_array($result_all_inattentive_use);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and plan_pregnant = 2 and contraception = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_inattentive_use = mysql_query($query);
	$result_self_inattentive_use = mysql_fetch_array($result_self_inattentive_use);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and plan_pregnant = 2 and contraception = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_inattentive_use = mysql_query($query);
	$result_done_inattentive_use = mysql_fetch_array($result_done_inattentive_use);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and plan_pregnant = 2 and contraception = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_inattentive_no_use = mysql_query($query);
	$result_all_inattentive_no_use = mysql_fetch_array($result_all_inattentive_no_use);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and plan_pregnant = 2 and contraception = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_inattentive_no_use = mysql_query($query);
	$result_self_inattentive_no_use = mysql_fetch_array($result_self_inattentive_no_use);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and plan_pregnant = 2 and contraception = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_inattentive_no_use = mysql_query($query);
	$result_done_inattentive_no_use = mysql_fetch_array($result_done_inattentive_no_use);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and plan_pregnant = 2 and contraception = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_inattentive_no_info = mysql_query($query);
	$result_all_inattentive_no_info = mysql_fetch_array($result_all_inattentive_no_info);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and plan_pregnant = 2 and contraception = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_inattentive_no_info = mysql_query($query);
	$result_self_inattentive_no_info = mysql_fetch_array($result_self_inattentive_no_info);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and plan_pregnant = 2 and contraception = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_inattentive_no_info = mysql_query($query);
	$result_done_inattentive_no_info = mysql_fetch_array($result_done_inattentive_no_info);
	
?>
<h3 align="center">จำนวนและร้อยละผู้ป่วยแท้งและทำแท้ง จำแนกตามความตั้งใจ และการคุมกำเนิด</h3>
<table width="100%" border="0" cellspacing="2" cellpadding="3">
  <tr bgcolor="#3399CC" class="color_text">
    <td width="40%" rowspan="2">ความตั้งใจในการตั้งครรภ์ครั้งนี้ และการคุมกำเนิด</td>
    <td width="20%" colspan="2">แท้งทั้งหมด</td>
    <td width="20%" colspan="2">แท้งเอง</td>
	<td width="20%" colspan="2">ทำแท้ง</td>
  </tr>
  <tr bgcolor="#3399CC" class="color_text">
    <td >จำนวน</td>
    <td >ร้อยละ</td>
    <td >จำนวน</td>
    <td >ร้อยละ</td>
	<td >จำนวน</td>
    <td >ร้อยละ</td>
  </tr>
  <tr bgcolor="#f19f9f" class="text_table">
    <td >ความตั้งใจในการตั้งครรภ์ครั้งนี้</td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_all['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_self['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_done['count'])?></td>
  </tr>  
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&ndash;&nbspตั้งใจ</td>
    <td align="center"><?php echo toNumber($result_all_intend['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_intend['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_intend['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_intend['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_intend['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_intend['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&ndash;&nbspไม่ตั้งใจ</td>
    <td align="center"><?php echo toNumber($result_all_inattentive['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_inattentive['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_inattentive['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_inattentive['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_inattentive['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_inattentive['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&ndash;&nbspไม่ยินดีให้ข้อมูล</td>
    <td align="center"><?php echo toNumber($result_all_no_info['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_no_info['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_no_info['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_no_info['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_no_info['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_no_info['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#f19f9f" class="text_table">
    <td >การคุมกำเนิดในการตั้งครรภ์ครั้งนี้</td>
    <td colspan="2" align="center">n = <?php echo toNumber($result_all_inattentive['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_self_inattentive['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_done_inattentive['count'])?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&ndash;&nbspใช้</td>
    <td align="center"><?php echo toNumber($result_all_inattentive_use['count'])?></td>
	<td align="center"><?php echo $result_all_inattentive['count'] > 0 ? toDecimal($result_all_inattentive_use['count']/$result_all_inattentive['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_inattentive_use['count'])?></td>
	<td align="center"><?php echo $result_self_inattentive['count'] > 0 ? toDecimal($result_self_inattentive_use['count']/$result_self_inattentive['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_inattentive_use['count'])?></td>
	<td align="center"><?php echo $result_done_inattentive['count'] > 0 ? toDecimal($result_done_inattentive_use['count']/$result_done_inattentive['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&ndash;&nbspไม่ใช้</td>
    <td align="center"><?php echo toNumber($result_all_inattentive_no_use['count'])?></td>
	<td align="center"><?php echo $result_all_inattentive['count'] > 0 ? toDecimal($result_all_inattentive_no_use['count']/$result_all_inattentive['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_inattentive_no_use['count'])?></td>
	<td align="center"><?php echo $result_self_inattentive['count'] > 0 ? toDecimal($result_self_inattentive_no_use['count']/$result_self_inattentive['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_inattentive_no_use['count'])?></td>
	<td align="center"><?php echo $result_done_inattentive['count'] > 0 ? toDecimal($result_done_inattentive_no_use['count']/$result_done_inattentive['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&ndash;&nbspไม่ยินดีให้ข้อมูล</td>
    <td align="center"><?php echo toNumber($result_all_inattentive_no_info['count'])?></td>
	<td align="center"><?php echo $result_all_inattentive['count'] > 0 ? toDecimal($result_all_inattentive_no_info['count']/$result_all_inattentive['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_inattentive_no_info['count'])?></td>
	<td align="center"><?php echo $result_self_inattentive['count'] > 0 ? toDecimal($result_self_inattentive_no_info['count']/$result_self_inattentive['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_inattentive_no_info['count'])?></td>
	<td align="center"><?php echo $result_done_inattentive['count'] > 0 ? toDecimal($result_done_inattentive_no_info['count']/$result_done_inattentive['count']*100) : '-'?></td>
  </tr>
</table>