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
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and job = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_job_1 = mysql_query($query);
	$result_all_job_1 = mysql_fetch_array($result_all_job_1);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and job = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_job_1 = mysql_query($query);
	$result_self_job_1 = mysql_fetch_array($result_self_job_1);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and job = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_job_1 = mysql_query($query);
	$result_done_job_1 = mysql_fetch_array($result_done_job_1);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and job = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_job_2 = mysql_query($query);
	$result_all_job_2 = mysql_fetch_array($result_all_job_2);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and job = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_job_2 = mysql_query($query);
	$result_self_job_2 = mysql_fetch_array($result_self_job_2);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and job = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_job_2 = mysql_query($query);
	$result_done_job_2 = mysql_fetch_array($result_done_job_2);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and job = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_job_3 = mysql_query($query);
	$result_all_job_3 = mysql_fetch_array($result_all_job_3);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and job = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_job_3 = mysql_query($query);
	$result_self_job_3 = mysql_fetch_array($result_self_job_3);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and job = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_job_3 = mysql_query($query);
	$result_done_job_3 = mysql_fetch_array($result_done_job_3);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and job = 4";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_job_4 = mysql_query($query);
	$result_all_job_4 = mysql_fetch_array($result_all_job_4);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and job = 4";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_job_4 = mysql_query($query);
	$result_self_job_4 = mysql_fetch_array($result_self_job_4);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and job = 4";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_job_4 = mysql_query($query);
	$result_done_job_4 = mysql_fetch_array($result_done_job_4);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and job = 5";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_job_5 = mysql_query($query);
	$result_all_job_5 = mysql_fetch_array($result_all_job_5);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and job = 5";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_job_5 = mysql_query($query);
	$result_self_job_5 = mysql_fetch_array($result_self_job_5);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and job = 5";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_job_5 = mysql_query($query);
	$result_done_job_5 = mysql_fetch_array($result_done_job_5);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and job = 6";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_job_6 = mysql_query($query);
	$result_all_job_6 = mysql_fetch_array($result_all_job_6);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and job = 6";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_job_6 = mysql_query($query);
	$result_self_job_6 = mysql_fetch_array($result_self_job_6);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and job = 6";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_job_6 = mysql_query($query);
	$result_done_job_6 = mysql_fetch_array($result_done_job_6);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and job = 7";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_job_7 = mysql_query($query);
	$result_all_job_7 = mysql_fetch_array($result_all_job_7);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and job = 7";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_job_7 = mysql_query($query);
	$result_self_job_7 = mysql_fetch_array($result_self_job_7);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and job = 7";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_job_7 = mysql_query($query);
	$result_done_job_7 = mysql_fetch_array($result_done_job_7);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and job = 8";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_job_8 = mysql_query($query);
	$result_all_job_8 = mysql_fetch_array($result_all_job_8);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and job = 8";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_job_8 = mysql_query($query);
	$result_self_job_8 = mysql_fetch_array($result_self_job_8);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and job = 8";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_job_8 = mysql_query($query);
	$result_done_job_8 = mysql_fetch_array($result_done_job_8);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and job = 9";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_job_9 = mysql_query($query);
	$result_all_job_9 = mysql_fetch_array($result_all_job_9);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and job = 9";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_job_9 = mysql_query($query);
	$result_self_job_9 = mysql_fetch_array($result_self_job_9);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and job = 9";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_job_9 = mysql_query($query);
	$result_done_job_9 = mysql_fetch_array($result_done_job_9);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and job = 10";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_job_10 = mysql_query($query);
	$result_all_job_10 = mysql_fetch_array($result_all_job_10);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and job = 10";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_job_10 = mysql_query($query);
	$result_self_job_10 = mysql_fetch_array($result_self_job_10);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and job = 10";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_job_10 = mysql_query($query);
	$result_done_job_10 = mysql_fetch_array($result_done_job_10);
	
?>
<h3 align="center">จำนวนและร้อยละผู้ป่วยแท้งและทำแท้ง จำแนกตามอาชีพของผู้ป่วย</h3>
<table width="100%" border="0" cellspacing="2" cellpadding="3">
  <tr bgcolor="#3399CC" class="color_text">
    <td width="40%" rowspan="2">อาชีพ</td>
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
    <td >กำลังศึกษา</td>
    <td align="center"><?php echo toNumber($result_all_job_1['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_job_1['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_job_1['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_job_1['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_job_1['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_job_1['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >แม่บ้าน</td>
    <td align="center"><?php echo toNumber($result_all_job_2['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_job_2['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_job_2['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_job_2['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_job_2['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_job_2['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >ค้าขายหรือประกอบธุรกิจส่วนตัว</td>
    <td align="center"><?php echo toNumber($result_all_job_3['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_job_3['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_job_3['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_job_3['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_job_3['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_job_3['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >รับจ้างรายวัน</td>
    <td align="center"><?php echo toNumber($result_all_job_4['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_job_4['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_job_4['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_job_4['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_job_4['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_job_4['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >เกษตรกร</td>
    <td align="center"><?php echo toNumber($result_all_job_5['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_job_5['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_job_5['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_job_5['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_job_5['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_job_5['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >รับราชการ/รัฐวิสาหกิจ/พนักงานราชการ</td>
    <td align="center"><?php echo toNumber($result_all_job_6['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_job_6['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_job_6['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_job_6['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_job_6['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_job_6['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >ลูกจ้างประจำ/พนักงานบรัทห้างร้าน</td>
    <td align="center"><?php echo toNumber($result_all_job_7['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_job_7['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_job_7['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_job_7['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_job_7['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_job_7['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >ว่างงาน</td>
    <td align="center"><?php echo toNumber($result_all_job_8['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_job_8['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_job_8['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_job_8['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_job_8['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_job_8['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >อื่น ๆ</td>
    <td align="center"><?php echo toNumber($result_all_job_9['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_job_9['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_job_9['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_job_9['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_job_9['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_job_9['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >ไม่ยินดีให้ข้อมูล</td>
    <td align="center"><?php echo toNumber($result_all_job_10['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_job_10['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_job_10['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_job_10['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_job_10['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_job_10['count']/$result_done['count']*100) : '-'?></td>
  </tr>
</table>