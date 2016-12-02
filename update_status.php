<?php
	include("connect.php");

	$sql = "select * from abortionsurvey_member";
	$result = mysql_query($sql);
	while($data = mysql_fetch_array($result))
		{

			$sql_update = "update abortionsurvey_hospital set join_project = '1' where oldhospital_id = '$data[hospital_id]'";
			echo $sql_update."<br>";
			$result_update = mysql_query($sql_update);
			
			
		}
		
	echo "End";

?>