<?php

	$province = !empty($_SESSION['ss_hospital_id']) ? $_SESSION['ss_hospital_id'] : "";
	$sql = "select * from abortionsurvey_main_2559 where survey_province like '%$province%' group by survey_agency ";
	
	$result = mysql_query($sql);
	
	
?>
	<select name="survey_hospital" id="survey_hospital" onchange="data_show_seacrh()" >

		<option value="">----- เลือก -----</option>
		
<?php
while($hospital_province = mysql_fetch_array($result))

{ 
	
?>
		<option value="<?php echo $hospital_province['survey_agency']?>" ><?php echo $hospital_province['survey_agency']?></option>		
<?php
		}

?>
	</select>