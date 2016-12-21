<?php
	include("connect.php");
	$query = "select * from abortionsurvey_main_2559 ";
	$result = mysql_query($query);
	$i=1;
	while($id = mysql_fetch_array($result))
		{
			$query = "update abortionsurvey_main_2559 set id = $i where survey_id = '".$id['survey_id']."' and survey_year = '".$id['survey_year']."'";
			mysql_query($query);
			$i++;
		}
