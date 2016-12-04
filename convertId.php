<?php
	include("connect.php");
	$query = "select survey_id from abortionsurvey_main_2559";
	$result = mysql_query($query);
	while($old_id = mysql_fetch_array($result)){
		$temp_split = explode("-",$old_id['survey_id']);
		$hospital_id = $temp_split[0];
		$q_id = $temp_split[1];
		for($i = strlen($q_id); $i < 4; $i++)
			$q_id = "0".$q_id;
		$new_id = $hospital_id."-".$q_id;
		$query = "update abortionsurvey_main_2559 set survey_id = '$new_id' where survey_id = '".$old_id['survey_id']."'";
		mysql_query($query);
		//echo $new_id."<br>";
	}