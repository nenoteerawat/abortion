<?php
	session_start();
	
	include("connect.php");
	$search_query = "";
	if($_SESSION['ss_lavel']== 2){
		$search_query = " and user_add = '".$_SESSION['ss_id']."'";
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
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query;
	$query = preg_replace("/and/","where",$query,1);
	$result_all = mysql_query($query);
	$result_all = mysql_fetch_array($result_all);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and age < 15";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_15 = mysql_query($query);
	$result_all_15 = mysql_fetch_array($result_all_15);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and age >= 15 and age <= 19";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_15_19 = mysql_query($query);
	$result_all_15_19 = mysql_fetch_array($result_all_15_19);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and age >= 20 and age <= 24";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_20_24 = mysql_query($query);
	$result_all_20_24 = mysql_fetch_array($result_all_20_24);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and age >= 25 and age <= 29";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_25_29 = mysql_query($query);
	$result_all_25_29 = mysql_fetch_array($result_all_25_29);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and age >= 30 and age <= 34";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_30_34 = mysql_query($query);
	$result_all_30_34 = mysql_fetch_array($result_all_30_34);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and age >= 35 and age <= 39";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_35_39 = mysql_query($query);
	$result_all_35_39 = mysql_fetch_array($result_all_35_39);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and age >= 40 and age <= 44";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_40_44 = mysql_query($query);
	$result_all_40_44 = mysql_fetch_array($result_all_40_44);
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and age >= 45";
	$query = preg_replace("/and/","where",$query,1);
	$result_all_45 = mysql_query($query);
	$result_all_45 = mysql_fetch_array($result_all_45);
	
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 1";
	$query = preg_replace("/and/","where",$query,1);
	$result_self = mysql_query($query);
	$result_self = mysql_fetch_array($result_self);
	$result_self_15 = mysql_query($query." and age < 15");
	$result_self_15 = mysql_fetch_array($result_self_15);
	$result_self_15_19 = mysql_query($query." and age >= 15 and age <= 19");
	$result_self_15_19 = mysql_fetch_array($result_self_15_19);
	$result_self_20_24 = mysql_query($query." and age >= 20 and age <= 24");
	$result_self_20_24 = mysql_fetch_array($result_self_20_24);
	$result_self_25_29 = mysql_query($query." and age >= 25 and age <= 29");
	$result_self_25_29 = mysql_fetch_array($result_self_25_29);
	$result_self_30_34 = mysql_query($query." and age >= 30 and age <= 34");
	$result_self_30_34 = mysql_fetch_array($result_self_30_34);
	$result_self_35_39 = mysql_query($query." and age >= 35 and age <= 39");
	$result_self_35_39 = mysql_fetch_array($result_self_35_39);
	$result_self_40_44 = mysql_query($query." and age >= 40 and age <= 44");
	$result_self_40_44 = mysql_fetch_array($result_self_40_44);
	$result_self_45 = mysql_query($query." and age >= 45");
	$result_self_45 = mysql_fetch_array($result_self_45);
	
	$query = "select count(*) as count from abortionsurvey_main_2559".$search_query." and cause_abortion = 2";
	$query = preg_replace("/and/","where",$query,1);
	$result_done = mysql_query($query);
	$result_done = mysql_fetch_array($result_done);
	$result_done_15 = mysql_query($query." and age < 15");
	$result_done_15 = mysql_fetch_array($result_done_15);
	$result_done_15_19 = mysql_query($query." and age >= 15 and age <= 19");
	$result_done_15_19 = mysql_fetch_array($result_done_15_19);
	$result_done_20_24 = mysql_query($query." and age >= 20 and age <= 24");
	$result_done_20_24 = mysql_fetch_array($result_done_20_24);
	$result_done_25_29 = mysql_query($query." and age >= 25 and age <= 29");
	$result_done_25_29 = mysql_fetch_array($result_done_25_29);
	$result_done_30_34 = mysql_query($query." and age >= 30 and age <= 34");
	$result_done_30_34 = mysql_fetch_array($result_done_30_34);
	$result_done_35_39 = mysql_query($query." and age >= 35 and age <= 39");
	$result_done_35_39 = mysql_fetch_array($result_done_35_39);
	$result_done_40_44 = mysql_query($query." and age >= 40 and age <= 44");
	$result_done_40_44 = mysql_fetch_array($result_done_40_44);
	$result_done_45 = mysql_query($query." and age >= 45");
	$result_done_45 = mysql_fetch_array($result_done_45);
	
	
?>
<h3 align="center">จำนวนและร้อยละผู้ป่วยแท้งและทำแท้งจำแนกตามกลุ่มอายุ</h3>
<table width="100%" border="0" cellspacing="2" cellpadding="3">
  <tr bgcolor="#3399CC" class="color_text">
    <td width="25%" rowspan="2">กลุ่มอายุ &#40;ปี&#41;</td>
    <td width="25%" colspan="2">แท้งทั้งหมด</td>
    <td width="25%" colspan="2">แท้งเอง</td>
	<td width="25%" colspan="2">ทำแท้ง</td>
  </tr>
  <tr bgcolor="#3399CC" class="color_text">
	<td >จำนวน</td>
	<td >ร้อยละ</td>
	<td >จำนวน</td>
	<td >ร้อยละ</td>
	<td >จำนวน</td>
	<td >ร้อยละ</td>
  </tr>
  <tr bgcolor="#f19f9f" class="color_text">
	<td > </td>
	<td colspan="2">n = <?php echo $result_all['count']?></td>
	<td colspan="2">n = <?php echo $result_self['count']?></td>
	<td colspan="2">n = <?php echo $result_done['count']?></td>
  </tr>
<?php
	
	
?>  
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">&lt; 15 ปี</td>
    <td align="center"><?php echo $result_all_15['count']?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? round($result_all_15['count']/$result_all['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_self_15['count']?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? round($result_self_15['count']/$result_self['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_done_15['count']?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? round($result_done_15['count']/$result_done['count']*100,1):'-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td align="center">15 &ndash; 19 ปี</td>
    <td align="center"><?php echo $result_all_15_19['count']?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? round($result_all_15_19['count']/$result_all['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_self_15_19['count']?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? round($result_self_15_19['count']/$result_self['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_done_15_19['count']?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? round($result_done_15_19['count']/$result_done['count']*100,1):'-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">20 &ndash; 24 ปี</td>
    <td align="center"><?php echo $result_all_20_24['count']?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? round($result_all_20_24['count']/$result_all['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_self_20_24['count']?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? round($result_self_20_24['count']/$result_self['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_done_20_24['count']?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? round($result_done_20_24['count']/$result_done['count']*100,1):'-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td align="center">25 &ndash; 29 ปี</td>
    <td align="center"><?php echo $result_all_25_29['count']?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? round($result_all_25_29['count']/$result_all['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_self_25_29['count']?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? round($result_self_25_29['count']/$result_self['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_done_25_29['count']?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? round($result_done_25_29['count']/$result_done['count']*100,1):'-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">30 &ndash; 34 ปี</td>
    <td align="center"><?php echo $result_all_30_34['count']?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? round($result_all_30_34['count']/$result_all['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_self_30_34['count']?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? round($result_self_30_34['count']/$result_self['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_done_30_34['count']?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? round($result_done_30_34['count']/$result_done['count']*100,1):'-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td align="center">35 &ndash; 39 ปี</td>
    <td align="center"><?php echo $result_all_35_39['count']?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? round($result_all_35_39['count']/$result_all['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_self_35_39['count']?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? round($result_self_35_39['count']/$result_self['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_done_35_39['count']?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? round($result_done_35_39['count']/$result_done['count']*100,1):'-'?></td>
  </tr>
  <tr bgcolor="#ffffff" class="text_table">
    <td align="center">40 &ndash; 44 ปี</td>
    <td align="center"><?php echo $result_all_40_44['count']?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? round($result_all_40_44['count']/$result_all['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_self_40_44['count']?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? round($result_self_40_44['count']/$result_self['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_done_40_44['count']?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? round($result_done_40_44['count']/$result_done['count']*100,1):'-'?></td>
  </tr>
  <tr bgcolor="#B4DCED" class="text_table">
    <td align="center">&ge; 45 ปี</td>
    <td align="center"><?php echo $result_all_45['count']?></td>
	<td align="center"><?php echo $result_all['count'] > 0 ? round($result_all_45['count']/$result_all['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_self_45['count']?></td>
	<td align="center"><?php echo $result_self['count'] > 0 ? round($result_self_45['count']/$result_self['count']*100,1):'-'?></td>
	<td align="center"><?php echo $result_done_45['count']?></td>
	<td align="center"><?php echo $result_done['count'] > 0 ? round($result_done_45['count']/$result_done['count']*100,1):'-'?></td>
  </tr>
</table>