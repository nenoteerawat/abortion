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
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and education != 0";
	$query = preg_replace("/and/","where",$query,1);
	$result_all = mysql_query($query);
	$result_all = mysql_fetch_array($result_all);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1  and education != 0";
	$query = preg_replace("/and/","where",$query,1);
	$result_self = mysql_query($query);
	$result_self = mysql_fetch_array($result_self);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2  and education != 0";
	$query = preg_replace("/and/","where",$query,1);
	$result_done = mysql_query($query);
	$result_done = mysql_fetch_array($result_done);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and education = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_e_1 = mysql_query($query);
	$result_all_e_1 = mysql_fetch_array($result_all_e_1);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and education = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_e_1 = mysql_query($query);
	$result_self_e_1 = mysql_fetch_array($result_self_e_1);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and education = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_e_1 = mysql_query($query);
	$result_done_e_1 = mysql_fetch_array($result_done_e_1);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and education = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_e_2 = mysql_query($query);
	$result_all_e_2 = mysql_fetch_array($result_all_e_2);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and education = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_e_2 = mysql_query($query);
	$result_self_e_2 = mysql_fetch_array($result_self_e_2);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and education = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_e_2 = mysql_query($query);
	$result_done_e_2 = mysql_fetch_array($result_done_e_2);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and education = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_e_3 = mysql_query($query);
	$result_all_e_3 = mysql_fetch_array($result_all_e_3);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and education = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_e_3 = mysql_query($query);
	$result_self_e_3 = mysql_fetch_array($result_self_e_3);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and education = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_e_3 = mysql_query($query);
	$result_done_e_3 = mysql_fetch_array($result_done_e_3);
	
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and education = 4";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_e_4 = mysql_query($query);
	$result_all_e_4 = mysql_fetch_array($result_all_e_4);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and education = 4";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_e_4 = mysql_query($query);
	$result_self_e_4 = mysql_fetch_array($result_self_e_4);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and education = 4";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_e_4 = mysql_query($query);
	$result_done_e_4 = mysql_fetch_array($result_done_e_4);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and education = 5";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_e_5 = mysql_query($query);
	$result_all_e_5 = mysql_fetch_array($result_all_e_5);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and education = 5";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_e_5 = mysql_query($query);
	$result_self_e_5 = mysql_fetch_array($result_self_e_5);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and education = 5";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_e_5 = mysql_query($query);
	$result_done_e_5 = mysql_fetch_array($result_done_e_5);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and education = 6";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_e_6 = mysql_query($query);
	$result_all_e_6 = mysql_fetch_array($result_all_e_6);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and education = 6";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_e_6 = mysql_query($query);
	$result_self_e_6 = mysql_fetch_array($result_self_e_6);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and education = 6";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_e_6 = mysql_query($query);
	$result_done_e_6 = mysql_fetch_array($result_done_e_6);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and education = 7";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_e_7 = mysql_query($query);
	$result_all_e_7 = mysql_fetch_array($result_all_e_7);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and education = 7";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_e_7 = mysql_query($query);
	$result_self_e_7 = mysql_fetch_array($result_self_e_7);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and education = 7";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_e_7 = mysql_query($query);
	$result_done_e_7 = mysql_fetch_array($result_done_e_7);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and education = 8";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_e_8 = mysql_query($query);
	$result_all_e_8 = mysql_fetch_array($result_all_e_8);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and education = 8";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_e_8 = mysql_query($query);
	$result_self_e_8 = mysql_fetch_array($result_self_e_8);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and education = 8";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_e_8 = mysql_query($query);
	$result_done_e_8 = mysql_fetch_array($result_done_e_8);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and education = 9";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_e_9 = mysql_query($query);
	$result_all_e_9 = mysql_fetch_array($result_all_e_9);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and education = 9";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_e_9 = mysql_query($query);
	$result_self_e_9 = mysql_fetch_array($result_self_e_9);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and education = 9";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_e_9 = mysql_query($query);
	$result_done_e_9 = mysql_fetch_array($result_done_e_9);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and education = 10";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_e_10 = mysql_query($query);
	$result_all_e_10 = mysql_fetch_array($result_all_e_10);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and education = 10";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_e_10 = mysql_query($query);
	$result_self_e_10 = mysql_fetch_array($result_self_e_10);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and education = 10";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_e_10 = mysql_query($query);
	$result_done_e_10 = mysql_fetch_array($result_done_e_10);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and education = 11";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_e_11 = mysql_query($query);
	$result_all_e_11 = mysql_fetch_array($result_all_e_11);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1 and education = 11";
	$query = preg_replace("/and/","where",$query,1);
	$result_self_e_11 = mysql_query($query);
	$result_self_e_11 = mysql_fetch_array($result_self_e_11);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2 and education = 11";
	$query = preg_replace("/and/","where",$query,1);
	$result_done_e_11 = mysql_query($query);
	$result_done_e_11 = mysql_fetch_array($result_done_e_11);
?>
<h3 align="center">จำนวนและร้อยละผู้ป่วยแท้งและทำแท้ง จำแนกตามวุฒิการศึกษาสูงสุด</h3>
<table width="100%" border="0" cellspacing="2" cellpadding="3">
  <tr bgcolor="#3399CC" class="color_text">
    <td width="40%" rowspan="2">วุฒิการศึกษาสูงสุด</td>
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
    <td >ไม่ได้เรียน</td>
    <td align="center"><?php echo toNumber($result_all_e_1['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_e_1['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_e_1['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_e_1['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_e_1['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_e_1['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >ประถมศึกษา</td>
    <td align="center"><?php echo toNumber($result_all_e_2['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_e_2['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_e_2['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_e_2['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_e_2['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_e_2['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >มัธยมศึกษาตอนต้น</td>
    <td align="center"><?php echo toNumber($result_all_e_3['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_e_3['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_e_3['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_e_3['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_e_3['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_e_3['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >มัธยมศึกษาตอนปลาย</td>
    <td align="center"><?php echo toNumber($result_all_e_4['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_e_4['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_e_4['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_e_4['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_e_4['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_e_4['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >ปวช.</td>
    <td align="center"><?php echo toNumber($result_all_e_5['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_e_5['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_e_5['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_e_5['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_e_5['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_e_5['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >ปวส.</td>
    <td align="center"><?php echo toNumber($result_all_e_6['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_e_6['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_e_6['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_e_6['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_e_6['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_e_6['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >อนุปริญญา</td>
    <td align="center"><?php echo toNumber($result_all_e_7['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_e_7['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_e_7['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_e_7['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_e_7['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_e_7['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >ปริญญาตรี</td>
    <td align="center"><?php echo toNumber($result_all_e_8['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_e_8['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_e_8['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_e_8['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_e_8['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_e_8['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >สูงกว่าปริญญาตรี</td>
    <td align="center"><?php echo toNumber($result_all_e_9['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_e_9['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_e_9['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_e_9['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_e_9['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_e_9['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >อื่น ๆ</td>
    <td align="center"><?php echo toNumber($result_all_e_10['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_e_10['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_e_10['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_e_10['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_e_10['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_e_10['count']/$result_done['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >ไม่ยินดีให้ข้อมูล</td>
    <td align="center"><?php echo toNumber($result_all_e_11['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_e_11['count']/$result_all['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_self_e_11['count'])?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? toDecimal($result_self_e_11['count']/$result_self['count']*100) : '-'?></td>
	<td align="center"><?php echo toNumber($result_done_e_11['count'])?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? toDecimal($result_done_e_11['count']/$result_done['count']*100) : '-'?></td>
  </tr>
</table>
<?php sleep(1);?>