<?php
	include("connect.php");
	$select_hospital = $_POST['data'];
	
	$sql = "select * from abortionsurvey_hospital where join_project = '1' and hospital_name ='$select_hospital' group by hospital_district";
	$result = mysql_query($sql);
	$hospital_district = mysql_fetch_array($result);
	
	echo $hospital_district['hospital_district'];
	
?>
