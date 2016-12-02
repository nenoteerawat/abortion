<?php
	include("connect.php");
	
	$select_hospital = $_POST['data'];

	$sql = "select * from abortionsurvey_hospital where join_project = '1' and hospital_name ='$select_hospital' group by hospital_id";
	$result = mysql_query($sql);
	$h_id = mysql_fetch_array($result);
	
	echo $h_id['oldhospital_id'];
	
?>
