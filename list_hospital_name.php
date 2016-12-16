<?php
	include("connect.php");
	
	$select_province = $_POST['data'];
	$sql = "select * from abortionsurvey_hospital where join_project = '1' and  hospital_province='$select_province' group by hospital_name";
	$result = mysql_query($sql);
	
?>
	<select name="survey_agency" id="survey_agency" onchange="select_other_hospitol()" >

		<option value="">----- เลือก -----</option>
		
<?php
while($hospital_name = mysql_fetch_array($result))

{ 
	
?>
		<option value="<?php echo $hospital_name['hospital_name']?>" 
		<?php
			if(!empty($_POST['hospital'])){
				$selected_hos = $_POST['hospital'];
				if($hospital_name['hospital_name'] == $selected_hos){
					?>selected = "true"<?php
				}
			}
		?> 
		><?php echo $hospital_name['hospital_name']?></option>		
<?php
		}

?>
	</select> <font color='#FF0000'>*</font>