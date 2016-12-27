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
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications != 0";
	$query = preg_replace("/and/","where",$query,1);
	$result_all = mysql_query($query);
	$result_all = mysql_fetch_array($result_all);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1  and check_group_complications != 0";
	$query = preg_replace("/and/","where",$query,1);
	$result_self = mysql_query($query);
	$result_self = mysql_fetch_array($result_self);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2  and check_group_complications != 0";
	$query = preg_replace("/and/","where",$query,1);
	$result_done = mysql_query($query);
	$result_done = mysql_fetch_array($result_done);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_never = mysql_query($query);
	$result_all_complication_never = mysql_fetch_array($result_all_complication_never);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_never = mysql_query($query);
	$result_self_complication_never = mysql_fetch_array($result_self_complication_never);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_never = mysql_query($query);
	$result_done_complication_never = mysql_fetch_array($result_done_complication_never);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever = mysql_query($query);
	$result_all_complication_ever = mysql_fetch_array($result_all_complication_ever);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever = mysql_query($query);
	$result_self_complication_ever = mysql_fetch_array($result_self_complication_ever);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever = mysql_query($query);
	$result_done_complication_ever = mysql_fetch_array($result_done_complication_ever);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1 and bleed1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever_1 = mysql_query($query);
	$result_all_complication_ever_1 = mysql_fetch_array($result_all_complication_ever_1);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1 and bleed1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever_1 = mysql_query($query);
	$result_self_complication_ever_1 = mysql_fetch_array($result_self_complication_ever_1);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1 and bleed1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever_1 = mysql_query($query);
	$result_done_complication_ever_1 = mysql_fetch_array($result_done_complication_ever_1);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1 and bleed2 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever_2 = mysql_query($query);
	$result_all_complication_ever_2 = mysql_fetch_array($result_all_complication_ever_2);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1 and bleed2 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever_2 = mysql_query($query);
	$result_self_complication_ever_2 = mysql_fetch_array($result_self_complication_ever_2);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1 and bleed2 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever_2 = mysql_query($query);
	$result_done_complication_ever_2 = mysql_fetch_array($result_done_complication_ever_2);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1 and infection1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever_3 = mysql_query($query);
	$result_all_complication_ever_3 = mysql_fetch_array($result_all_complication_ever_3);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1 and infection1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever_3 = mysql_query($query);
	$result_self_complication_ever_3 = mysql_fetch_array($result_self_complication_ever_3);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1 and infection1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever_3 = mysql_query($query);
	$result_done_complication_ever_3 = mysql_fetch_array($result_done_complication_ever_3);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1 and infection2 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever_4 = mysql_query($query);
	$result_all_complication_ever_4 = mysql_fetch_array($result_all_complication_ever_4);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1 and infection2 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever_4 = mysql_query($query);
	$result_self_complication_ever_4 = mysql_fetch_array($result_self_complication_ever_4);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1 and infection2 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever_4 = mysql_query($query);
	$result_done_complication_ever_4 = mysql_fetch_array($result_done_complication_ever_4);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1 and infection3 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever_5 = mysql_query($query);
	$result_all_complication_ever_5 = mysql_fetch_array($result_all_complication_ever_5);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1 and infection3 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever_5 = mysql_query($query);
	$result_self_complication_ever_5 = mysql_fetch_array($result_self_complication_ever_5);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1 and infection3 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever_5 = mysql_query($query);
	$result_done_complication_ever_5 = mysql_fetch_array($result_done_complication_ever_5);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1 and organ1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever_6 = mysql_query($query);
	$result_all_complication_ever_6 = mysql_fetch_array($result_all_complication_ever_6);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1 and organ1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever_6 = mysql_query($query);
	$result_self_complication_ever_6 = mysql_fetch_array($result_self_complication_ever_6);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1 and organ1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever_6 = mysql_query($query);
	$result_done_complication_ever_6 = mysql_fetch_array($result_done_complication_ever_6);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1 and organ2 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever_7 = mysql_query($query);
	$result_all_complication_ever_7 = mysql_fetch_array($result_all_complication_ever_7);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1 and organ2 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever_7 = mysql_query($query);
	$result_self_complication_ever_7 = mysql_fetch_array($result_self_complication_ever_7);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1 and organ2 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever_7 = mysql_query($query);
	$result_done_complication_ever_7 = mysql_fetch_array($result_done_complication_ever_7);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1 and organ3 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever_8 = mysql_query($query);
	$result_all_complication_ever_8 = mysql_fetch_array($result_all_complication_ever_8);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1 and organ3 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever_8 = mysql_query($query);
	$result_self_complication_ever_8 = mysql_fetch_array($result_self_complication_ever_8);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1 and organ3 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever_8 = mysql_query($query);
	$result_done_complication_ever_8 = mysql_fetch_array($result_done_complication_ever_8);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1 and organ4 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever_9 = mysql_query($query);
	$result_all_complication_ever_9 = mysql_fetch_array($result_all_complication_ever_9);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1 and organ4 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever_9 = mysql_query($query);
	$result_self_complication_ever_9 = mysql_fetch_array($result_self_complication_ever_9);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1 and organ4 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever_9 = mysql_query($query);
	$result_done_complication_ever_9 = mysql_fetch_array($result_done_complication_ever_9);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1 and organ5 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever_10 = mysql_query($query);
	$result_all_complication_ever_10 = mysql_fetch_array($result_all_complication_ever_10);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1 and organ5 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever_10 = mysql_query($query);
	$result_self_complication_ever_10 = mysql_fetch_array($result_self_complication_ever_10);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1 and organ5 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever_10 = mysql_query($query);
	$result_done_complication_ever_10 = mysql_fetch_array($result_done_complication_ever_10);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1 and organ6 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever_11 = mysql_query($query);
	$result_all_complication_ever_11 = mysql_fetch_array($result_all_complication_ever_11);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1 and organ6 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever_11 = mysql_query($query);
	$result_self_complication_ever_11 = mysql_fetch_array($result_self_complication_ever_11);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1 and organ6 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever_11 = mysql_query($query);
	$result_done_complication_ever_11 = mysql_fetch_array($result_done_complication_ever_11);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1 and organ7 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever_12 = mysql_query($query);
	$result_all_complication_ever_12 = mysql_fetch_array($result_all_complication_ever_12);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1 and organ7 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever_12 = mysql_query($query);
	$result_self_complication_ever_12 = mysql_fetch_array($result_self_complication_ever_12);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1 and organ7 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever_12 = mysql_query($query);
	$result_done_complication_ever_12 = mysql_fetch_array($result_done_complication_ever_12);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_group_complications = 1 and organ8 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_complication_ever_13 = mysql_query($query);
	$result_all_complication_ever_13 = mysql_fetch_array($result_all_complication_ever_13);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and check_group_complications = 1 and organ8 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_complication_ever_13 = mysql_query($query);
	$result_self_complication_ever_13 = mysql_fetch_array($result_self_complication_ever_13);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and check_group_complications = 1 and organ8 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_complication_ever_13 = mysql_query($query);
	$result_done_complication_ever_13 = mysql_fetch_array($result_done_complication_ever_13);
	
?>
<h3 align="center">จำนวนและร้อยละผู้ป่วยแท้งและทำแท้ง จำแนกตามภาวะแทรกซ้อน</h3>
<table width="100%" border="0" cellspacing="2" cellpadding="3">
  <tr bgcolor="#3399CC" class="color_text">
    <td width="40%" rowspan="2">ภาวะแทรกซ้อน</td>
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
    <td >ภาวะแทรกซ้อน</td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_all['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_self['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_done['count'])?></td>
  </tr>  
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&ndash;&nbspไม่มี</td>
    <td align="center"><?php echo toNumber($result_all_complication_never['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_complication_never['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_never['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_complication_never['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_never['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_complication_never['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&ndash;&nbspมี</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_complication_ever['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_complication_ever['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_complication_ever['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ตกเลือดมากจนต้องให้เลือด</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever_1['count'])?></td>
	<td align="center"><?php echo $result_all_complication_ever['count'] > 0 ? toDecimal($result_all_complication_ever_1['count']/$result_all_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever_1['count'])?></td>
	<td align="center"><?php echo $result_self_complication_ever['count'] > 0 ? toDecimal($result_self_complication_ever_1['count']/$result_self_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever_1['count'])?></td>
	<td align="center"><?php echo $result_done_complication_ever['count'] > 0 ? toDecimal($result_done_complication_ever_1['count']/$result_done_complication_ever['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ช็อกจากการเสียเลือด</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever_2['count'])?></td>
	<td align="center"><?php echo $result_all_complication_ever['count'] > 0 ? toDecimal($result_all_complication_ever_2['count']/$result_all_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever_2['count'])?></td>
	<td align="center"><?php echo $result_self_complication_ever['count'] > 0 ? toDecimal($result_self_complication_ever_2['count']/$result_self_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever_2['count'])?></td>
	<td align="center"><?php echo $result_done_complication_ever['count'] > 0 ? toDecimal($result_done_complication_ever_2['count']/$result_done_complication_ever['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ติดเชื้อบาดทะยัก</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever_3['count'])?></td>
	<td align="center"><?php echo $result_all_complication_ever['count'] > 0 ? toDecimal($result_all_complication_ever_3['count']/$result_all_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever_3['count'])?></td>
	<td align="center"><?php echo $result_self_complication_ever['count'] > 0 ? toDecimal($result_self_complication_ever_3['count']/$result_self_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever_3['count'])?></td>
	<td align="center"><?php echo $result_done_complication_ever['count'] > 0 ? toDecimal($result_done_complication_ever_3['count']/$result_done_complication_ever['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ติดเชื้อในกระแสเลือด</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever_4['count'])?></td>
	<td align="center"><?php echo $result_all_complication_ever['count'] > 0 ? toDecimal($result_all_complication_ever_4['count']/$result_all_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever_4['count'])?></td>
	<td align="center"><?php echo $result_self_complication_ever['count'] > 0 ? toDecimal($result_self_complication_ever_4['count']/$result_self_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever_4['count'])?></td>
	<td align="center"><?php echo $result_done_complication_ever['count'] > 0 ? toDecimal($result_done_complication_ever_4['count']/$result_done_complication_ever['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ช็อกจากการติดเชื้อ</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever_5['count'])?></td>
	<td align="center"><?php echo $result_all_complication_ever['count'] > 0 ? toDecimal($result_all_complication_ever_5['count']/$result_all_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever_5['count'])?></td>
	<td align="center"><?php echo $result_self_complication_ever['count'] > 0 ? toDecimal($result_self_complication_ever_5['count']/$result_self_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever_5['count'])?></td>
	<td align="center"><?php echo $result_done_complication_ever['count'] > 0 ? toDecimal($result_done_complication_ever_5['count']/$result_done_complication_ever['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ปากมดลูกฉีกขาด</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever_6['count'])?></td>
	<td align="center"><?php echo $result_all_complication_ever['count'] > 0 ? toDecimal($result_all_complication_ever_6['count']/$result_all_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever_6['count'])?></td>
	<td align="center"><?php echo $result_self_complication_ever['count'] > 0 ? toDecimal($result_self_complication_ever_6['count']/$result_self_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever_6['count'])?></td>
	<td align="center"><?php echo $result_done_complication_ever['count'] > 0 ? toDecimal($result_done_complication_ever_6['count']/$result_done_complication_ever['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp มดลูกทะลุ</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever_7['count'])?></td>
	<td align="center"><?php echo $result_all_complication_ever['count'] > 0 ? toDecimal($result_all_complication_ever_7['count']/$result_all_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever_7['count'])?></td>
	<td align="center"><?php echo $result_self_complication_ever['count'] > 0 ? toDecimal($result_self_complication_ever_7['count']/$result_self_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever_7['count'])?></td>
	<td align="center"><?php echo $result_done_complication_ever['count'] > 0 ? toDecimal($result_done_complication_ever_7['count']/$result_done_complication_ever['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ลำไส้ฉีกขาดหรือทะลุ</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever_8['count'])?></td>
	<td align="center"><?php echo $result_all_complication_ever['count'] > 0 ? toDecimal($result_all_complication_ever_8['count']/$result_all_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever_8['count'])?></td>
	<td align="center"><?php echo $result_self_complication_ever['count'] > 0 ? toDecimal($result_self_complication_ever_8['count']/$result_self_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever_8['count'])?></td>
	<td align="center"><?php echo $result_done_complication_ever['count'] > 0 ? toDecimal($result_done_complication_ever_8['count']/$result_done_complication_ever['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp อุ้งเชิงกรานอักเสบ</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever_9['count'])?></td>
	<td align="center"><?php echo $result_all_complication_ever['count'] > 0 ? toDecimal($result_all_complication_ever_9['count']/$result_all_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever_9['count'])?></td>
	<td align="center"><?php echo $result_self_complication_ever['count'] > 0 ? toDecimal($result_self_complication_ever_9['count']/$result_self_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever_9['count'])?></td>
	<td align="center"><?php echo $result_done_complication_ever['count'] > 0 ? toDecimal($result_done_complication_ever_9['count']/$result_done_complication_ever['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp เยื่อบุผนังช่องท้องอักเสบ</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever_10['count'])?></td>
	<td align="center"><?php echo $result_all_complication_ever['count'] > 0 ? toDecimal($result_all_complication_ever_10['count']/$result_all_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever_10['count'])?></td>
	<td align="center"><?php echo $result_self_complication_ever['count'] > 0 ? toDecimal($result_self_complication_ever_10['count']/$result_self_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever_10['count'])?></td>
	<td align="center"><?php echo $result_done_complication_ever['count'] > 0 ? toDecimal($result_done_complication_ever_10['count']/$result_done_complication_ever['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ไตวาย</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever_11['count'])?></td>
	<td align="center"><?php echo $result_all_complication_ever['count'] > 0 ? toDecimal($result_all_complication_ever_11['count']/$result_all_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever_11['count'])?></td>
	<td align="center"><?php echo $result_self_complication_ever['count'] > 0 ? toDecimal($result_self_complication_ever_11['count']/$result_self_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever_11['count'])?></td>
	<td align="center"><?php echo $result_done_complication_ever['count'] > 0 ? toDecimal($result_done_complication_ever_11['count']/$result_done_complication_ever['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp หัวใจวาย</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever_12['count'])?></td>
	<td align="center"><?php echo $result_all_complication_ever['count'] > 0 ? toDecimal($result_all_complication_ever_12['count']/$result_all_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever_12['count'])?></td>
	<td align="center"><?php echo $result_self_complication_ever['count'] > 0 ? toDecimal($result_self_complication_ever_12['count']/$result_self_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever_12['count'])?></td>
	<td align="center"><?php echo $result_done_complication_ever['count'] > 0 ? toDecimal($result_done_complication_ever_12['count']/$result_done_complication_ever['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ตัดมดลูก</td>
    <td align="center"><?php echo toNumber($result_all_complication_ever_13['count'])?></td>
	<td align="center"><?php echo $result_all_complication_ever['count'] > 0 ? toDecimal($result_all_complication_ever_13['count']/$result_all_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_complication_ever_13['count'])?></td>
	<td align="center"><?php echo $result_self_complication_ever['count'] > 0 ? toDecimal($result_self_complication_ever_13['count']/$result_self_complication_ever['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_complication_ever_13['count'])?></td>
	<td align="center"><?php echo $result_done_complication_ever['count'] > 0 ? toDecimal($result_done_complication_ever_13['count']/$result_done_complication_ever['count']*100) : '-'?></td>
  </tr>
</table>
<?php sleep(1);?>