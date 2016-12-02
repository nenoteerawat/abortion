<?php


	
	include("connect.php");
	$text_check_id="";
	$sql_check_id = "select survey_id, survey_year from abortionsurvey_main_2559 ";
	$result_check_id = mysql_query($sql_check_id);
	while($check_id = mysql_fetch_array($result_check_id))
		{
					//echo $check_id[$i]."<br>";
					$text_check_id = $text_check_id.",".$check_id['survey_id'].":".$check_id['survey_year'];

				
		}
		echo $text_check_id;

?>
