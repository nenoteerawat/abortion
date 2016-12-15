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
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and ga2 != 0";
	$query = preg_replace("/and/","where",$query,1);
	$result_all = mysql_query($query);
	$result_all = mysql_fetch_array($result_all);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and ga2 < 5 and ga2 != 0";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_5 = mysql_query($query);
	$result_all_5 = mysql_fetch_array($result_all_5);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and ga2 >= 5 and ga2 <= 8";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_5_8 = mysql_query($query);
	$result_all_5_8 = mysql_fetch_array($result_all_5_8);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and ga2 >= 9 and ga2 <= 12";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_9_12 = mysql_query($query);
	$result_all_9_12 = mysql_fetch_array($result_all_9_12);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and ga2 >= 13 and ga2 <= 16";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_13_16 = mysql_query($query);
	$result_all_13_16 = mysql_fetch_array($result_all_13_16);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and ga2 >= 17 and ga2 <= 22";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_17_22 = mysql_query($query);
	$result_all_17_22 = mysql_fetch_array($result_all_17_22);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and ga2 >= 23 and ga2 <= 28";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_23_28 = mysql_query($query);
	$result_all_23_28 = mysql_fetch_array($result_all_23_28);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and ga2 >= 29";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_29 = mysql_query($query);
	$result_all_29 = mysql_fetch_array($result_all_29);
	
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and ga2 != 0";
	$query = preg_replace("/and/","where",$query,1);
	$result_self = mysql_query($query);
	$result_self = mysql_fetch_array($result_self);
	$result_self_5 = mysql_query($query." and ga2 < 5 and ga2 != 0");
	$result_self_5 = mysql_fetch_array($result_self_5);
	$result_self_5_8 = mysql_query($query." and ga2 >= 5 and ga2 <= 8");
	$result_self_5_8 = mysql_fetch_array($result_self_5_8);
	$result_self_9_12 = mysql_query($query." and ga2 >= 9 and ga2 <= 12");
	$result_self_9_12 = mysql_fetch_array($result_self_9_12);
	$result_self_13_16 = mysql_query($query." and ga2 >= 13 and ga2 <= 16");
	$result_self_13_16 = mysql_fetch_array($result_self_13_16);
	$result_self_17_22 = mysql_query($query." and ga2 >= 17 and ga2 <= 22");
	$result_self_17_22 = mysql_fetch_array($result_self_17_22);
	$result_self_23_28 = mysql_query($query." and ga2 >= 23 and ga2 <= 28");
	$result_self_23_28 = mysql_fetch_array($result_self_23_28);
	$result_self_29 = mysql_query($query." and ga2 >= 29");
	$result_self_29 = mysql_fetch_array($result_self_29);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and ga2 != 0";
	$query = preg_replace("/and/","where",$query,1);
	$result_done = mysql_query($query);
	$result_done = mysql_fetch_array($result_done);
	$result_done_5 = mysql_query($query." and ga2 < 5 and ga2 != 0");
	$result_done_5 = mysql_fetch_array($result_done_5);
	$result_done_5_8 = mysql_query($query." and ga2 >= 5 and ga2 <= 8");
	$result_done_5_8 = mysql_fetch_array($result_done_5_8);
	$result_done_9_12 = mysql_query($query." and ga2 >= 9 and ga2 <= 12");
	$result_done_9_12 = mysql_fetch_array($result_done_9_12);
	$result_done_13_16 = mysql_query($query." and ga2 >= 13 and ga2 <= 16");
	$result_done_13_16 = mysql_fetch_array($result_done_13_16);
	$result_done_17_22 = mysql_query($query." and ga2 >= 17 and ga2 <= 22");
	$result_done_17_22 = mysql_fetch_array($result_done_17_22);
	$result_done_23_28 = mysql_query($query." and ga2 >= 23 and ga2 <= 28");
	$result_done_23_28 = mysql_fetch_array($result_done_23_28);
	$result_done_29 = mysql_query($query." and ga2 >= 29");
	$result_done_29 = mysql_fetch_array($result_done_29);
?>
<h3 align="center">จำนวนและร้อยละผู้ป่วยแท้งและทำแท้ง จำแนกตามอายุครรภ์ที่แท้ง</h3>
<table width="100%" border="0" cellspacing="2" cellpadding="3">
  <tr bgcolor="#3399CC" class="color_text">
    <td width="40%" rowspan="2">อายุครรภ์ &#40;สัปดาห์&#41;</td>
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
    <td ></td>
    <td colspan="2" align="center">n = <?php echo toNumber($result_all['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_self['count'])?></td>
	<td colspan="2" align="center">n = <?php echo toNumber($result_done['count'])?></td>
  </tr>  
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">&lt; 5</td>
    <td align="center"><?php echo toNumber($result_all_5['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_5['count']/$result_all['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_self_5['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_5['count']/$result_self['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_done_5['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_5['count']/$result_done['count']*100):'-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td align="center">5 &ndash; 8</td>
    <td align="center"><?php echo toNumber($result_all_5_8['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_5_8['count']/$result_all['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_self_5_8['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_5_8['count']/$result_self['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_done_5_8['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_5_8['count']/$result_done['count']*100):'-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">9 &ndash; 12</td>
    <td align="center"><?php echo toNumber($result_all_9_12['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_9_12['count']/$result_all['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_self_9_12['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_9_12['count']/$result_self['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_done_9_12['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_9_12['count']/$result_done['count']*100):'-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td align="center">13 &ndash; 16</td>
    <td align="center"><?php echo toNumber($result_all_13_16['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_13_16['count']/$result_all['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_self_13_16['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_13_16['count']/$result_self['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_done_13_16['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_13_16['count']/$result_done['count']*100):'-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">17 &ndash; 22</td>
    <td align="center"><?php echo toNumber($result_all_17_22['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_17_22['count']/$result_all['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_self_17_22['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_17_22['count']/$result_self['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_done_17_22['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_17_22['count']/$result_done['count']*100):'-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td align="center">23 &ndash; 28</td>
    <td align="center"><?php echo toNumber($result_all_23_28['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_23_28['count']/$result_all['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_self_23_28['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_23_28['count']/$result_self['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_done_23_28['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_23_28['count']/$result_done['count']*100):'-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">&ge; 29</td>
    <td align="center"><?php echo toNumber($result_all_29['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_29['count']/$result_all['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_self_29['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_29['count']/$result_self['count']*100):'-'?></td>
	<td align="center"><?php echo toNumber($result_done_29['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_29['count']/$result_done['count']*100):'-'?></td>
  </tr>
</table>