<?php

			$sql_text = "";
			if(!empty($_SESSION["ss_hospital_id"])){
				$h = explode("/",$_SESSION["ss_hospital_id"]);
				for($i=0;$i<=sizeof($h)-1;$i++)
					{
						$sql_h = " survey_province like '%".$h[$i]."%'";
						if(empty($sql_text))
							{
								$sql_text = $sql_h;
							}
						else
							{
								$sql_text = $sql_text."=".$sql_h;
							}
					}
			}
			else{
				$sql_text = "survey_province like '%%'";
			}
			$sql_text_sum = str_replace("="," or ",$sql_text);
			

	$sql = "select * from abortionsurvey_main_2559 where (  ".$sql_text_sum." ) group by survey_province ";
	
	$result = mysql_query($sql);
	
	
?>
	<select name="survey_province" id="survey_province" onkeypress="return processWithEnter(event)" >

		<option value="">----- เลือก -----</option>
		
<?php
while($hospital_province = mysql_fetch_array($result))

{ 
	
?>
		<option value="<?php echo $hospital_province['survey_province']?>" ><?php echo $hospital_province['survey_province']?></option>		
<?php
		}

?>
	</select>