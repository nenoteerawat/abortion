<?php

	
	$text_check_id="";
	$sql_check_id = "select survey_id from abortionsurvey_main ";
	$result_check_id = mysql_query($sql_check_id);
	while($check_id = mysql_fetch_array($result_check_id))
		{
					//echo $check_id[$i]."<br>";
					$text_check_id = $text_check_id.",".$check_id[survey_id];

				
		}

?>
<input type="hidden" name="h_check_id" id="h_check_id" value="<?php echo $text_check_id;  ?>">
