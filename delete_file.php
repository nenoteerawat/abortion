<?php
session_start();					

	include("connect.php");
	
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	date_default_timezone_set ("Asia/Bangkok"); 	
	$today = date("Y-m-d");
	$now_time = date("H:i:s");	
	
	$h_id = $_POST['data'];

	//echo "--->".$h_id ;

	$sql = "delete from abortionsurvey_main where survey_id='$h_id'";
	//echo "--->".$sql;
	$result = mysql_query($sql);		
	

//------------------------ add log --------------------------------------

/*		$sql_side = "select * from side_project where id_project = '$data_d[side]'";
		$result_side = mysql_query($sql_side);
		$data_side = mysql_fetch_array($result_side);	

		$sql_project = "select * from project where id = '".$_SESSION["ss_id_project"]."'";
		$result_project = mysql_query($sql_project);
		$data_project = mysql_fetch_array($result_project);	


					$sql = "INSERT INTO log (id,project,event,detail,user,date_event,time_event,ip_user)VALUES ('','".$_SESSION["ss_id_project"]."','delete','Project : $data_project[project_name], Side : $data_side[side_name], ID : ".$data_d[id_file].", file : ".$data_d[name]."','".$_SESSION["ss_id"]."','$today','$now_time','$ipaddress')";
*/
//------------------------------------------------------------------------			

?>