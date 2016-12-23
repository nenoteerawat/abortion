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
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_health = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_health = mysql_query($query);
	$result_all_health = mysql_fetch_array($result_all_health);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_health = 1 and problem_health1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_health_1 = mysql_query($query);
	$result_all_health_1 = mysql_fetch_array($result_all_health_1);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_health = 1 and problem_health1 = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_health_2 = mysql_query($query);
	$result_all_health_2 = mysql_fetch_array($result_all_health_2);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_health = 1 and problem_health1 = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_health_3 = mysql_query($query);
	$result_all_health_3 = mysql_fetch_array($result_all_health_3);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_health = 1 and problem_health1 = 4";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_health_4 = mysql_query($query);
	$result_all_health_4 = mysql_fetch_array($result_all_health_4);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_health = 1 and problem_health1 = 4 and problem_health411 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_health_4_1 = mysql_query($query);
	$result_all_health_4_1 = mysql_fetch_array($result_all_health_4_1);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_health = 1 and problem_health1 = 4 and problem_health411 = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_health_4_2 = mysql_query($query);
	$result_all_health_4_2 = mysql_fetch_array($result_all_health_4_2);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_health = 1 and problem_health1 = 4 and problem_health411 = 3";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_health_4_3 = mysql_query($query);
	$result_all_health_4_3 = mysql_fetch_array($result_all_health_4_3);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_health = 1 and problem_health1 = 5";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_health_5 = mysql_query($query);
	$result_all_health_5 = mysql_fetch_array($result_all_health_5);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_health = 1 and problem_health1 = 5 and problem_health511 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_health_5_1 = mysql_query($query);
	$result_all_health_5_1 = mysql_fetch_array($result_all_health_5_1);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_health = 1 and problem_health1 = 5 and problem_health511 = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_health_5_2 = mysql_query($query);
	$result_all_health_5_2 = mysql_fetch_array($result_all_health_5_2);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_health = 1 and problem_health1 = 6";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_health_6 = mysql_query($query);
	$result_all_health_6 = mysql_fetch_array($result_all_health_6);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_money = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_money = mysql_query($query);
	$result_all_money = mysql_fetch_array($result_all_money);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_money = 1 and problem_money1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_money_1 = mysql_query($query);
	$result_all_money_1 = mysql_fetch_array($result_all_money_1);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_money = 1 and problem_money2 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_money_2 = mysql_query($query);
	$result_all_money_2 = mysql_fetch_array($result_all_money_2);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_money = 1 and problem_money3 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_money_3 = mysql_query($query);
	$result_all_money_3 = mysql_fetch_array($result_all_money_3);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_money = 1 and problem_money4 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_money_4 = mysql_query($query);
	$result_all_money_4 = mysql_fetch_array($result_all_money_4);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_family = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_family = mysql_query($query);
	$result_all_family = mysql_fetch_array($result_all_family);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_family = 1 and problem_family1 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_family_1 = mysql_query($query);
	$result_all_family_1 = mysql_fetch_array($result_all_family_1);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_family = 1 and problem_family2 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_family_2 = mysql_query($query);
	$result_all_family_2 = mysql_fetch_array($result_all_family_2);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_family = 1 and problem_family3 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_family_3 = mysql_query($query);
	$result_all_family_3 = mysql_fetch_array($result_all_family_3);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_family = 1 and problem_family4 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_family_4 = mysql_query($query);
	$result_all_family_4 = mysql_fetch_array($result_all_family_4);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_family = 1 and problem_family5 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_family_5 = mysql_query($query);
	$result_all_family_5 = mysql_fetch_array($result_all_family_5);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_family = 1 and problem_family6 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_family_6 = mysql_query($query);
	$result_all_family_6 = mysql_fetch_array($result_all_family_6);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_family = 1 and problem_family7 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_family_7 = mysql_query($query);
	$result_all_family_7 = mysql_fetch_array($result_all_family_7);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_family = 1 and problem_family8 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_family_8 = mysql_query($query);
	$result_all_family_8 = mysql_fetch_array($result_all_family_8);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_family = 1 and problem_family9 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_family_9 = mysql_query($query);
	$result_all_family_9 = mysql_fetch_array($result_all_family_9);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_family = 1 and problem_family10 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_family_10 = mysql_query($query);
	$result_all_family_10 = mysql_fetch_array($result_all_family_10);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_family = 1 and problem_family11 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_family_11 = mysql_query($query);
	$result_all_family_11 = mysql_fetch_array($result_all_family_11);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and check_problem_family = 1 and problem_family12 = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_family_12 = mysql_query($query);
	$result_all_family_12 = mysql_fetch_array($result_all_family_12);
	
?>
<h3 align="center">จำนวนและร้อยละผู้ป่วยทำแท้ง จำแนกตามปัญหาที่พบ</h3>
<table width="100%" border="0" cellspacing="2" cellpadding="3">
  <tr bgcolor="#3399CC" class="color_text">
    <td width="70%" >เหตุผลในการทำแท้ง</td>
    <td width="15%" >จำนวน</td>
    <td width="15%" >ร้อยละ</td>
  </tr>
  <tr bgcolor="#f19f9f" class="text_table">
    <td >1. ด้านสุขภาพ</td>
	<td align="center"><?php echo toNumber($result_all_health['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_health['count']/$result_all['count']*100) : '-'?></td>
  </tr>  
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 1. ทารกเสียชีวิตในครรภ์ &#40;Dead Fetus in Utero: DFIU&#41;</td>
    <td align="center"><?php echo toNumber($result_all_health_1['count'])?></td>
	<td align="center"><?php echo $result_all_health['count'] > 0 ? toDecimal($result_all_health_1['count']/$result_all_health['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2. ตั้งครรภ์ไข่ลม &#40;bligted ovum&#41;</td>
    <td align="center"><?php echo toNumber($result_all_health_2['count'])?></td>
	<td align="center"><?php echo $result_all_health['count'] > 0 ? toDecimal($result_all_health_2['count']/$result_all_health['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 3. ตั้งครรภ์เนื่องจากการคุมกำเนิดล้มเหลว</td>
    <td align="center"><?php echo toNumber($result_all_health_3['count'])?></td>
	<td align="center"><?php echo $result_all_health['count'] > 0 ? toDecimal($result_all_health_3['count']/$result_all_health['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 4. ทารกในครรภ์ผิดปกติ</td>
    <td align="center"><?php echo toNumber($result_all_health_4['count'])?></td>
	<td align="center"><?php echo $result_all_health['count'] > 0 ? toDecimal($result_all_health_4['count']/$result_all_health['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 4.1 ธาลัสซีเมีย</td>
    <td align="center"><?php echo toNumber($result_all_health_4_1['count'])?></td>
	<td align="center"><?php echo $result_all_health['count'] > 0 ? toDecimal($result_all_health_4_1['count']/$result_all_health['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 4.2 หัดเยอรมัน</td>
    <td align="center"><?php echo toNumber($result_all_health_4_2['count'])?></td>
	<td align="center"><?php echo $result_all_health['count'] > 0 ? toDecimal($result_all_health_4_2['count']/$result_all_health['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 4.3 โรคอื่น ๆ</td>
    <td align="center"><?php echo toNumber($result_all_health_4_3['count'])?></td>
	<td align="center"><?php echo $result_all_health['count'] > 0 ? toDecimal($result_all_health_4_3['count']/$result_all_health['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 5. การตั้งครรภ์อาจจะเป็นอันตรายต่อสุขภาพของมารดา</td>
    <td align="center"><?php echo toNumber($result_all_health_5['count'])?></td>
	<td align="center"><?php echo $result_all_health['count'] > 0 ? toDecimal($result_all_health_5['count']/$result_all_health['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 5.1 มารดาเป้นโรคหัวใจ</td>
    <td align="center"><?php echo toNumber($result_all_health_5_1['count'])?></td>
	<td align="center"><?php echo $result_all_health['count'] > 0 ? toDecimal($result_all_health_5_1['count']/$result_all_health['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 5.2 โรคอื่น ๆ</td>
    <td align="center"><?php echo toNumber($result_all_health_5_2['count'])?></td>
	<td align="center"><?php echo $result_all_health['count'] > 0 ? toDecimal($result_all_health_5_2['count']/$result_all_health['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 6. ไม่ยินดีให้ข้อมูล</td>
    <td align="center"><?php echo toNumber($result_all_health_6['count'])?></td>
	<td align="center"><?php echo $result_all_health['count'] > 0 ? toDecimal($result_all_health_6['count']/$result_all_health['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#f19f9f" class="text_table">
    <td >2. ด้านเศรษฐกิจ</td>
	<td align="center"><?php echo toNumber($result_all_money['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_money['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 1. มีปัญหาเรื่องค่าใช้จ่ายในการเลี้ยงดูบุตร</td>
    <td align="center"><?php echo toNumber($result_all_money_1['count'])?></td>
	<td align="center"><?php echo $result_all_money['count'] > 0 ? toDecimal($result_all_money_1['count']/$result_all_money['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2. การตั้งครรภ์เป็นอุปสรรคต่อการประกอบอาชีพ</td>
    <td align="center"><?php echo toNumber($result_all_money_2['count'])?></td>
	<td align="center"><?php echo $result_all_money['count'] > 0 ? toDecimal($result_all_money_2['count']/$result_all_money['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 3. อื่น ๆ</td>
    <td align="center"><?php echo toNumber($result_all_money_3['count'])?></td>
	<td align="center"><?php echo $result_all_money['count'] > 0 ? toDecimal($result_all_money_3['count']/$result_all_money['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 4. ไม่ยินดีให้ข้อมูล</td>
    <td align="center"><?php echo toNumber($result_all_money_4['count'])?></td>
	<td align="center"><?php echo $result_all_money['count'] > 0 ? toDecimal($result_all_money_4['count']/$result_all_money['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#f19f9f" class="text_table">
    <td >3. ด้านสังคมและครอบครัว</td>
	<td align="center"><?php echo toNumber($result_all_family['count'])?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? toDecimal($result_all_family['count']/$result_all['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 1. ตั้งครรภ์เนื่องจากถูกข่มขืน</td>
    <td align="center"><?php echo toNumber($result_all_family_1['count'])?></td>
	<td align="center"><?php echo $result_all_family['count'] > 0 ? toDecimal($result_all_family_1['count']/$result_all_family['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2. มีบุตรถี่เกินไป</td>
    <td align="center"><?php echo toNumber($result_all_family_2['count'])?></td>
	<td align="center"><?php echo $result_all_family['count'] > 0 ? toDecimal($result_all_family_2['count']/$result_all_family['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 3. บุตรพอแล้ว</td>
    <td align="center"><?php echo toNumber($result_all_family_3['count'])?></td>
	<td align="center"><?php echo $result_all_family['count'] > 0 ? toDecimal($result_all_family_3['count']/$result_all_family['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 4. ยังเรียนไม่จบ</td>
    <td align="center"><?php echo toNumber($result_all_family_4['count'])?></td>
	<td align="center"><?php echo $result_all_family['count'] > 0 ? toDecimal($result_all_family_4['count']/$result_all_family['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 5. ยังไม่พร้อมจะแต่งงาน</td>
    <td align="center"><?php echo toNumber($result_all_family_5['count'])?></td>
	<td align="center"><?php echo $result_all_family['count'] > 0 ? toDecimal($result_all_family_5['count']/$result_all_family['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 6. ฝ่ายชายไม่รับผิดชอบ</td>
    <td align="center"><?php echo toNumber($result_all_family_6['count'])?></td>
	<td align="center"><?php echo $result_all_family['count'] > 0 ? toDecimal($result_all_family_6['count']/$result_all_family['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 7. ฝ่ายชายมีครอบครัวแล้ว</td>
    <td align="center"><?php echo toNumber($result_all_family_7['count'])?></td>
	<td align="center"><?php echo $result_all_family['count'] > 0 ? toDecimal($result_all_family_7['count']/$result_all_family['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 8. มีปัญหากับญาติของฝ่ายชาย</td>
    <td align="center"><?php echo toNumber($result_all_family_8['count'])?></td>
	<td align="center"><?php echo $result_all_family['count'] > 0 ? toDecimal($result_all_family_8['count']/$result_all_family['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 9. ตั้งครรภ์กับชายอื่นที่ไม่ใช่สามีหรือเพื่อนชายประจำ</td>
    <td align="center"><?php echo toNumber($result_all_family_9['count'])?></td>
	<td align="center"><?php echo $result_all_family['count'] > 0 ? toDecimal($result_all_family_9['count']/$result_all_family['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 10. หย่าหรือเลิกกับสามีหรือเพื่อนชายภายหลังจากตั้งครรภ์นี้</td>
    <td align="center"><?php echo toNumber($result_all_family_10['count'])?></td>
	<td align="center"><?php echo $result_all_family['count'] > 0 ? toDecimal($result_all_family_10['count']/$result_all_family['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 11. ตั้งครรภ์กับบุคลาสืบสายเลือดเดียวกันหรือใกล้ชิดทางสายเลือด</td>
    <td align="center"><?php echo toNumber($result_all_family_11['count'])?></td>
	<td align="center"><?php echo $result_all_family['count'] > 0 ? toDecimal($result_all_family_11['count']/$result_all_family['count']*100) : '-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 12. ไม่ยินดีให้ข้อมูล</td>
    <td align="center"><?php echo toNumber($result_all_family_12['count'])?></td>
	<td align="center"><?php echo $result_all_family['count'] > 0 ? toDecimal($result_all_family_12['count']/$result_all_family['count']*100) : '-'?></td>
  </tr>
  <?php sleep(1);?>
</table>