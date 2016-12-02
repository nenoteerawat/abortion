<?php


	$sql = "select * from abortionsurvey_hospital where join_project = '1' group by hospital_province";
	$result = mysql_query($sql);
	
?>
	<select name="survey_province" id="survey_province" onchange="select_hospitol()" >

		<option value="">----- Select -----</option>
		
<?php
while($hospital_province = mysql_fetch_array($result))

{ 
	
?>
		<option value="<?php echo $hospital_province['hospital_province']?>" 
		<?php
			if(!empty($data_hospital['survey_province'])){
				if($hospital_province['hospital_province'] == $data_hospital['survey_province']){
					?>selected = "true"<?php
				}
			}
		?>
		><?php echo $hospital_province['hospital_province']?></option>		
<?php
		}

?>
	</select>