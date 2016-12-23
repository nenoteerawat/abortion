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
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_miscarriage = 0 and not_infor != 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_miscarriage_never = mysql_query($query);
	$result_all_miscarriage_never = mysql_fetch_array($result_all_miscarriage_never);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_miscarriage = 0 and not_infor != 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_miscarriage_never = mysql_query($query);
	$result_self_miscarriage_never = mysql_fetch_array($result_self_miscarriage_never);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_miscarriage = 0 and not_infor != 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_miscarriage_never = mysql_query($query);
	$result_done_miscarriage_never = mysql_fetch_array($result_done_miscarriage_never);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_miscarriage = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_miscarriage_ever = mysql_query($query);
	$result_all_miscarriage_ever = mysql_fetch_array($result_all_miscarriage_ever);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_miscarriage = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_miscarriage_ever = mysql_query($query);
	$result_self_miscarriage_ever = mysql_fetch_array($result_self_miscarriage_ever);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_miscarriage = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_miscarriage_ever = mysql_query($query);
	$result_done_miscarriage_ever = mysql_fetch_array($result_done_miscarriage_ever);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_miscarriage = 1 and miscarriage = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_miscarriage_ever_1 = mysql_query($query);
	$result_all_miscarriage_ever_1 = mysql_fetch_array($result_all_miscarriage_ever_1);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_miscarriage = 1 and miscarriage = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_miscarriage_ever_1 = mysql_query($query);
	$result_self_miscarriage_ever_1 = mysql_fetch_array($result_self_miscarriage_ever_1);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_miscarriage = 1 and miscarriage = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_miscarriage_ever_1 = mysql_query($query);
	$result_done_miscarriage_ever_1 = mysql_fetch_array($result_done_miscarriage_ever_1);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_miscarriage = 1 and miscarriage = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_miscarriage_ever_2 = mysql_query($query);
	$result_all_miscarriage_ever_2 = mysql_fetch_array($result_all_miscarriage_ever_2);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_miscarriage = 1 and miscarriage = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_miscarriage_ever_2 = mysql_query($query);
	$result_self_miscarriage_ever_2 = mysql_fetch_array($result_self_miscarriage_ever_2);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_miscarriage = 1 and miscarriage = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_miscarriage_ever_2 = mysql_query($query);
	$result_done_miscarriage_ever_2 = mysql_fetch_array($result_done_miscarriage_ever_2);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_miscarriage = 1 and miscarriage >= 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_miscarriage_ever_3 = mysql_query($query);
	$result_all_miscarriage_ever_3 = mysql_fetch_array($result_all_miscarriage_ever_3);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_miscarriage = 1 and miscarriage >= 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_miscarriage_ever_3 = mysql_query($query);
	$result_self_miscarriage_ever_3 = mysql_fetch_array($result_self_miscarriage_ever_3);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_miscarriage = 1 and miscarriage >= 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_miscarriage_ever_3 = mysql_query($query);
	$result_done_miscarriage_ever_3 = mysql_fetch_array($result_done_miscarriage_ever_3);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_abortion = 0 and not_infor != 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_abortion_never = mysql_query($query);
	$result_all_abortion_never = mysql_fetch_array($result_all_abortion_never);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_abortion = 0 and not_infor != 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_abortion_never = mysql_query($query);
	$result_self_abortion_never = mysql_fetch_array($result_self_abortion_never);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_abortion = 0 and not_infor != 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_abortion_never = mysql_query($query);
	$result_done_abortion_never = mysql_fetch_array($result_done_abortion_never);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_abortion = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_abortion_ever = mysql_query($query);
	$result_all_abortion_ever = mysql_fetch_array($result_all_abortion_ever);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_abortion = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_abortion_ever = mysql_query($query);
	$result_self_abortion_ever = mysql_fetch_array($result_self_abortion_ever);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_abortion = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_abortion_ever = mysql_query($query);
	$result_done_abortion_ever = mysql_fetch_array($result_done_abortion_ever);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_abortion = 1 and abortion = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_abortion_ever_1 = mysql_query($query);
	$result_all_abortion_ever_1 = mysql_fetch_array($result_all_abortion_ever_1);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_abortion = 1 and abortion = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_abortion_ever_1 = mysql_query($query);
	$result_self_abortion_ever_1 = mysql_fetch_array($result_self_abortion_ever_1);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_abortion = 1 and abortion = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_abortion_ever_1 = mysql_query($query);
	$result_done_abortion_ever_1 = mysql_fetch_array($result_done_abortion_ever_1);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_abortion = 1 and abortion = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_abortion_ever_2 = mysql_query($query);
	$result_all_abortion_ever_2 = mysql_fetch_array($result_all_abortion_ever_2);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_abortion = 1 and abortion = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_abortion_ever_2 = mysql_query($query);
	$result_self_abortion_ever_2 = mysql_fetch_array($result_self_abortion_ever_2);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_abortion = 1 and abortion = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_abortion_ever_2 = mysql_query($query);
	$result_done_abortion_ever_2 = mysql_fetch_array($result_done_abortion_ever_2);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_abortion = 1 and abortion >= 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_abortion_ever_3 = mysql_query($query);
	$result_all_abortion_ever_3 = mysql_fetch_array($result_all_abortion_ever_3);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_abortion = 1 and abortion >= 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_abortion_ever_3 = mysql_query($query);
	$result_self_abortion_ever_3 = mysql_fetch_array($result_self_abortion_ever_3);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_abortion = 1 and abortion >= 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_abortion_ever_3 = mysql_query($query);
	$result_done_abortion_ever_3 = mysql_fetch_array($result_done_abortion_ever_3);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and unknown_abortion = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_unknown = mysql_query($query);
	$result_all_unknown = mysql_fetch_array($result_all_unknown);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and unknown_abortion = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_unknown = mysql_query($query);
	$result_self_unknown = mysql_fetch_array($result_self_unknown);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and unknown_abortion = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_unknown = mysql_query($query);
	$result_done_unknown = mysql_fetch_array($result_done_unknown);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and unknown_abortion = 1 and unknown_abortion_n = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_unknown_1 = mysql_query($query);
	$result_all_unknown_1 = mysql_fetch_array($result_all_unknown_1);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and unknown_abortion = 1 and unknown_abortion_n = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_unknown_1 = mysql_query($query);
	$result_self_unknown_1 = mysql_fetch_array($result_self_unknown_1);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and unknown_abortion = 1 and unknown_abortion_n = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_unknown_1 = mysql_query($query);
	$result_done_unknown_1 = mysql_fetch_array($result_done_unknown_1);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and unknown_abortion = 1 and unknown_abortion_n = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_unknown_2 = mysql_query($query);
	$result_all_unknown_2 = mysql_fetch_array($result_all_unknown_2);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and unknown_abortion = 1 and unknown_abortion_n = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_unknown_2 = mysql_query($query);
	$result_self_unknown_2 = mysql_fetch_array($result_self_unknown_2);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and unknown_abortion = 1 and unknown_abortion_n = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_unknown_2 = mysql_query($query);
	$result_done_unknown_2 = mysql_fetch_array($result_done_unknown_2);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and unknown_abortion = 1 and unknown_abortion_n >= 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_unknown_3 = mysql_query($query);
	$result_all_unknown_3 = mysql_fetch_array($result_all_unknown_3);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and unknown_abortion = 1 and unknown_abortion_n >= 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_unknown_3 = mysql_query($query);
	$result_self_unknown_3 = mysql_fetch_array($result_self_unknown_3);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and unknown_abortion = 1 and unknown_abortion_n >= 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_unknown_3 = mysql_query($query);
	$result_done_unknown_3 = mysql_fetch_array($result_done_unknown_3);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and not_infor = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_notinfo = mysql_query($query);
	$result_all_notinfo = mysql_fetch_array($result_all_notinfo);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and not_infor = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_notinfo = mysql_query($query);
	$result_self_notinfo = mysql_fetch_array($result_self_notinfo);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and not_infor = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_notinfo = mysql_query($query);
	$result_done_notinfo = mysql_fetch_array($result_done_notinfo);
	
?>
<h3 align="center">จำนวนและร้อยละผู้ป่วยแท้งและทำแท้ง จำแนกตามประวัติการแท้ง</h3>
<table width="100%" border="0" cellspacing="2" cellpadding="3">
  <tr bgcolor="#3399CC" class="color_text">
    <td width="40%" rowspan="2">ประวัติการแท้ง</td>
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
    <td >ประวัติแท้งเอง &#40;ครั้ง&#41;</td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_all['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_self['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_done['count'])?></td>
  </tr>  
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&ndash;&nbspไม่เคย</td>
    <td align="center"><?php echo toNumber($result_all_miscarriage_never['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_miscarriage_never['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_miscarriage_never['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_miscarriage_never['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_miscarriage_never['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_miscarriage_never['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&ndash;&nbspเคย</td>
    <td align="center"><?php echo toNumber($result_all_miscarriage_ever['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_miscarriage_ever['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_miscarriage_ever['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_miscarriage_ever['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_miscarriage_ever['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_miscarriage_ever['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">1</td>
    <td align="center"><?php echo toNumber($result_all_miscarriage_ever_1['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_miscarriage_ever_1['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_miscarriage_ever_1['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_miscarriage_ever_1['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_miscarriage_ever_1['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_miscarriage_ever_1['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td align="center">2</td>
    <td align="center"><?php echo toNumber($result_all_miscarriage_ever_2['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_miscarriage_ever_2['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_miscarriage_ever_2['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_miscarriage_ever_2['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_miscarriage_ever_2['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_miscarriage_ever_2['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">&ge; 3</td>
    <td align="center"><?php echo toNumber($result_all_miscarriage_ever_3['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_miscarriage_ever_3['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_miscarriage_ever_3['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_miscarriage_ever_3['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_miscarriage_ever_3['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_miscarriage_ever_3['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#f19f9f" class="text_table">
    <td >ประวัติทำแท้ง &#40;ครั้ง&#41;</td>
    <td colspan="2" align="center">n = <?php echo toNumber($result_all['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_self['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_done['count'])?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&ndash;&nbspไม่เคย</td>
    <td align="center"><?php echo toNumber($result_all_abortion_never['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_abortion_never['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_abortion_never['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_abortion_never['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_abortion_never['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_abortion_never['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&ndash;&nbspเคย</td>
    <td align="center"><?php echo toNumber($result_all_abortion_ever['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_abortion_ever['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_abortion_ever['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_abortion_ever['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_abortion_ever['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_abortion_ever['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">1</td>
    <td align="center"><?php echo toNumber($result_all_abortion_ever_1['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_abortion_ever_1['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_abortion_ever_1['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_abortion_ever_1['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_abortion_ever_1['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_abortion_ever_1['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td align="center">2</td>
    <td align="center"><?php echo toNumber($result_all_abortion_ever_2['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_abortion_ever_2['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_abortion_ever_2['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_abortion_ever_2['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_abortion_ever_2['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_abortion_ever_2['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">&ge; 3</td>
    <td align="center"><?php echo toNumber($result_all_abortion_ever_3['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_abortion_ever_3['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_abortion_ever_3['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_abortion_ever_3['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_abortion_ever_3['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_abortion_ever_3['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#f19f9f" class="text_table">
    <td >ไม่ทราบว่าแท้งแบบไหน &#40;ครั้ง&#41;</td>
    <td colspan="2" align="center">n = <?php echo toNumber($result_all['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_self['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_done['count'])?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">1</td>
    <td align="center"><?php echo toNumber($result_all_unknown_1['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_unknown_1['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_unknown_1['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_unknown_1['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_unknown_1['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_unknown_1['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td align="center">2</td>
    <td align="center"><?php echo toNumber($result_all_unknown_2['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_unknown_2['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_unknown_2['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_unknown_2['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_unknown_2['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_unknown_2['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">&ge; 3</td>
    <td align="center"><?php echo toNumber($result_all_unknown_3['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_unknown_3['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_unknown_3['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_unknown_3['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_unknown_3['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_unknown_3['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#f19f9f" class="text_table">
    <td >ไม่ยินดีให้ข้อมูล</td>
    <td colspan="2" align="center">n = <?php echo toNumber($result_all['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_self['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_done['count'])?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&ndash;&nbspไม่ยินดีให้ข้อมูล</td>
    <td align="center"><?php echo toNumber($result_all_notinfo['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_notinfo['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_notinfo['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_notinfo['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_notinfo['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_notinfo['count']/$result_done['count']*100) : '-'?></td>
  </tr>
</table>
<?php sleep(1);?>