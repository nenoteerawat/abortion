<?php
	session_start();

	if(empty($_SESSION["ss_id"]) )
		{
			echo"<script>
			window.location = 'login.php';
			</script>";		
		}
	
	include("connect.php");
	date_default_timezone_set ("Asia/Bangkok"); 	
	$today = date("Y-m-d");
	$now_time = date("H:i:s");
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	
	$date = explode("-",$today);
	$year  = $date[0];
	$month = $date[1];
	$day = $date[2];
	$year = $year;
			
	$today = $year."-".$month."-".$day;


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>การเฝ้าระวังการแท้งประเทศไทย</title>


  
  	<link rel="stylesheet" href="css/style_site.css">
 
<!--   	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>-->
    
    <script src="js/jquery-1.9.1.js"></script>
  	<script src="js/jquery-ui.js"></script>
    
     
<!-- <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
     	<script src="jquery/js/jquery-ui-1.9.2.custom.min.js"></script>-->

	<link href="js/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <!--<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>-->

    <!--<script src="js/jquery-ui-1.8.10.offset.datepicker.min.js" type="text/javascript"></script>-->
    <script src="js/jquery.ui.datepicker-th.js" type="text/javascript"></script>
	<!--<script src="js/jquery.ui.datepicker.ext.be.js" type="text/javascript"></script>-->
    <!--<script src="js/jquery.ui.tabs.js" type="text/javascript" charset="utf-8"></script>-->
    
<!--    <script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>-->
    
    

        
    <!--<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.js"></script>-->

  <script>

		
	$(function() {
		/*$('#tabs').tabs();*/
	$('#tabs').tabs();
	/*$( '#tabs' ).tabs({ disabled: [ 1,2,3 ] });*/

	
	$( "input[type=button],button" )
      .button()
      .click(function( event ) {
        event.preventDefault();
      });
//------------------------------------- Date thai -----------------------------------  

			
	$( "#survey_datefirst" ).datepicker({

		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true

     			
		}); 

	$( "#survey_dateend" ).datepicker({

		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true

		});
		


  //----------------------------------------------------------------------	


	});
//-------------------- select ID -----------------------
function check_id(){ 
	$.post("check_id.php",
		function(data){
			$("#h_check_id").val(data);

			var h = document.form1.hospital_id.value;
			var fid = document.getElementById("file_id").value; 
			var h_check_id=document.getElementById("h_check_id").value;
			//var h_check_id = document.form1.h_check_id.value;
			  
			var text = h+'-'+fid;
			
		//----------------------------------------------------- เช็คค่าซ้ำ Array ------------------------------------	
			var array_h_check_id = h_check_id.split(",");
		
			  for (var i = 0; i < array_h_check_id.length; i++)
			  { 
				if (array_h_check_id[i] == text) 
				{
					alert("รหัสนี้ถูกบันทึกไปแล้ว");
					document.getElementById("file_id").value="";
					document.getElementById("file_id").focus(); 
					return true ;
				} 
			  }
		}
	);
}
//--------------------- Select --------------------------
function select_hospitol(){
	$.post("list_hospital_name.php", { data: $("#survey_province").val()}, 
		function(data){
			$("#show_hospitol").html(data);
		}
	);
}
function select_other_hospitol(){
	$.post("list_hospital_id.php", { data: $("#survey_agency").val()}, 
		function(data){
			$("#show_hospitol_id").val(data);
		}
	);
	$.post("list_district.php", { data: $("#survey_agency").val()}, 
		function(data){
			$("#show_hospitol_district").val(data);
		}
	);
	document.getElementById("file_id").focus();
}
//--------------------------------------------------------
	function other_name(name,status)
	{
		var v = name;
		var x = status;
		
		
		if(x !="")
			{		
				
				document.getElementById(""+v).disabled='';
				
			}
		else
			{
				
				document.getElementById(""+v).disabled='true';
				document.getElementById(""+v).value='';
			}			
	}	
	function other_name2(name1,name2,status)
	{
		var v1 = name1;
		var v2 = name2;
		var x = status;
		
		
		if(x !="")
			{		
				if(v1 !="")
					{
						document.getElementById(""+v1).disabled='';
						document.getElementById("text_job2").disabled='true';
						document.getElementById("text_job2").value='';
					}
				if(v2 !="")
					{
						document.getElementById(""+v2).disabled='';
						document.getElementById("text_job1").disabled='true';
						document.getElementById("text_job1").value='';
					}				
				
				
			}
		else
			{
				
				document.getElementById(""+v1).disabled='true';
				document.getElementById(""+v1).value='';
				document.getElementById(""+v2).disabled='true';
				document.getElementById(""+v2).value='';
			}			
	}
	function other_name3(name1,name2,status)
	{
		var v1 = name1;
		var v2 = name2;
		var x = status;
	
				document.getElementById(""+v1).disabled='';
				
				document.getElementById(""+v2).disabled='true';
				document.getElementById(""+v2).value='';
						
	}	
	function other_name4(name1,name2)
	{
		var v1 = name1;
		var v2 = name2;
	
				if(document.getElementById(""+v1).checked == true)
					{
						document.getElementById(""+v2).disabled='';
					}
				else
					{
						document.getElementById(""+v2).disabled='true';
						document.getElementById(""+v2).value='';						
					}			
	}
	function other_name5(name1,name2)
	{

				if(document.getElementById("group_complications_15").checked == true)
					{
						document.getElementById("text_group_complications1").disabled='';
						document.getElementById("text_group_complications2").disabled='';
						document.getElementById("text_group_complications3").disabled='';
					}
				else
					{
						document.getElementById("text_group_complications1").disabled='true';
						document.getElementById("text_group_complications1").value='';			
						document.getElementById("text_group_complications2").disabled='true';
						document.getElementById("text_group_complications2").value='';		
						document.getElementById("text_group_complications3").disabled='true';
						document.getElementById("text_group_complications3").value='';		
					}			
	}
	function other_name6(name1,name2,name3)
	{
		var v1 = name1;
		var v2 = name2;
		var v3 = name3;
	
				if(document.getElementById(""+v1).checked == true)
					{
						document.getElementById(""+v2).disabled='';
						document.getElementById(""+v3).disabled='';
					}
				else
					{
						document.getElementById(""+v2).disabled='true';
						document.getElementById(""+v2).value='';
						document.getElementById(""+v3).disabled='true';
						document.getElementById(""+v3).value='';						
					}			
	}
	function other_name7()
	{

				if(document.getElementById("abortion_method_10").checked == true)
					{
						document.getElementById("select_abortion_method_0").disabled=false;
						document.getElementById("select_abortion_method_1").disabled=false;
						document.getElementById("select_abortion_method_2").disabled=false;
						
					}
				else
					{
						document.getElementById("select_abortion_method_0").disabled=true;
						document.getElementById("select_abortion_method_1").disabled=true;
						document.getElementById("select_abortion_method_2").disabled=true;
						
						document.getElementById("select_abortion_method_0").checked = false;
						document.getElementById("select_abortion_method_1").checked = false;
						document.getElementById("select_abortion_method_2").checked = false;
					}			
	}
	function other_name8(name1,status)
	{

		var v1 = name1;
		var x = status;
		
		
		if(x !="")
			{		

						document.getElementById("group_complications_1").disabled=false;
						document.getElementById("group_complications_2").disabled=false;
						document.getElementById("group_complications_3").disabled=false;
						document.getElementById("group_complications_4").disabled=false;
						document.getElementById("group_complications_5").disabled=false;
						document.getElementById("group_complications_6").disabled=false;
						document.getElementById("group_complications_7").disabled=false;
						document.getElementById("group_complications_8").disabled=false;
						document.getElementById("group_complications_9").disabled=false;
						document.getElementById("group_complications_10").disabled=false;
						document.getElementById("group_complications_11").disabled=false;
						document.getElementById("group_complications_12").disabled=false;
						document.getElementById("group_complications_14").disabled=false;
						document.getElementById("group_complications_15").disabled=false;
						
			}
		else
			{
						document.getElementById("group_complications_1").disabled=true;
						document.getElementById("group_complications_2").disabled=true;
						document.getElementById("group_complications_3").disabled=true;
						document.getElementById("group_complications_4").disabled=true;
						document.getElementById("group_complications_5").disabled=true;
						document.getElementById("group_complications_6").disabled=true;
						document.getElementById("group_complications_7").disabled=true;
						document.getElementById("group_complications_8").disabled=true;
						document.getElementById("group_complications_9").disabled=true;
						document.getElementById("group_complications_10").disabled=true;
						document.getElementById("group_complications_11").disabled=true;
						document.getElementById("group_complications_12").disabled=true;
						document.getElementById("group_complications_14").disabled=true;
						document.getElementById("group_complications_15").disabled=true;

						document.getElementById("group_complications_1").checked = false;
						document.getElementById("group_complications_2").checked = false;
						document.getElementById("group_complications_3").checked = false;
						document.getElementById("group_complications_4").checked = false;
						document.getElementById("group_complications_5").checked = false;
						document.getElementById("group_complications_6").checked = false;
						document.getElementById("group_complications_7").checked = false;
						document.getElementById("group_complications_8").checked = false;
						document.getElementById("group_complications_9").checked = false;
						document.getElementById("group_complications_10").checked = false;
						document.getElementById("group_complications_11").checked = false;
						document.getElementById("group_complications_12").checked = false;
						document.getElementById("group_complications_14").checked = false;
						document.getElementById("group_complications_15").checked = false;

						document.getElementById("text_group_complications1").disabled='true';
						document.getElementById("text_group_complications1").value='';			
						document.getElementById("text_group_complications2").disabled='true';
						document.getElementById("text_group_complications2").value='';		
						document.getElementById("text_group_complications3").disabled='true';
						document.getElementById("text_group_complications3").value='';	
			}	
	}
	function other_name9(name1,status)
	{

		var v1 = name1;
		var x = status;
		
		
		if(x !="")
			{		

						document.getElementById("problem_money_0").disabled=false;
						document.getElementById("problem_money_1").disabled=false;
						document.getElementById("problem_money_2").disabled=false;
	
						
			}
		else
			{
						document.getElementById("problem_money_0").disabled=true;
						document.getElementById("problem_money_1").disabled=true;
						document.getElementById("problem_money_2").disabled=true;

						document.getElementById("problem_money_0").checked = false;
						document.getElementById("problem_money_1").checked = false;
						document.getElementById("problem_money_2").checked = false;
						
						document.getElementById("text_problem_money").disabled='true';
						document.getElementById("text_problem_money").value='';			

			}	
	}
	function other_name10(name1,status)
	{

		var v1 = name1;
		var x = status;
		
		
		if(x !="")
			{		

						document.getElementById("problem_health_2").disabled=false;
						document.getElementById("problem_health_3").disabled=false;
						document.getElementById("problem_health_4").disabled=false;
						document.getElementById("problem_health_5").disabled=false;
						document.getElementById("problem_health_7").disabled=false;
						document.getElementById("problem_health_8").disabled=false;
						document.getElementById("problem_health_9").disabled=false;
						document.getElementById("problem_health_10").disabled=false;
						document.getElementById("problem_health_11").disabled=false;
						document.getElementById("problem_health_12").disabled=false;
						document.getElementById("problem_health_13").disabled=false;
						document.getElementById("problem_health_14").disabled=false;
	
						
			}
		else
			{
						document.getElementById("problem_health_2").disabled=true;
						document.getElementById("problem_health_3").disabled=true;
						document.getElementById("problem_health_4").disabled=true;
						document.getElementById("problem_health_5").disabled=true;
						document.getElementById("problem_health_7").disabled=true;
						document.getElementById("problem_health_8").disabled=true;
						document.getElementById("problem_health_9").disabled=true;
						document.getElementById("problem_health_10").disabled=true;
						document.getElementById("problem_health_11").disabled=true;
						document.getElementById("problem_health_12").disabled=true;
						document.getElementById("problem_health_13").disabled=true;
						document.getElementById("problem_health_14").disabled=true;

						document.getElementById("problem_health_2").checked = false;
						document.getElementById("problem_health_3").checked = false;
						document.getElementById("problem_health_4").checked = false;
						document.getElementById("problem_health_5").checked = false;
						document.getElementById("problem_health_7").checked = false;
						document.getElementById("problem_health_8").checked = false;
						document.getElementById("problem_health_9").checked = false;
						document.getElementById("problem_health_10").checked = false;
						document.getElementById("problem_health_11").checked = false;
						document.getElementById("problem_health_12").checked = false;
						document.getElementById("problem_health_13").checked = false;
						document.getElementById("problem_health_14").checked = false;
						
						document.getElementById("text_problem_health1").disabled=true;
						document.getElementById("text_problem_health2").disabled=true;
						document.getElementById("text_problem_health3").disabled=true;
						document.getElementById("text_problem_health4").disabled=true;
						document.getElementById("text_problem_health5").disabled=true;
						document.getElementById("text_problem_health1").value='';	
						document.getElementById("text_problem_health2").value='';	
						document.getElementById("text_problem_health3").value='';	
						document.getElementById("text_problem_health4").value='';	
						document.getElementById("text_problem_health5").value='';	

			}	
	}
	function other_name11(name1,status)
	{

		var v1 = name1;
		var x = status;
		
		
		if(x !="")
			{		

						document.getElementById("problem_family_0").disabled=false;
						document.getElementById("problem_family_1").disabled=false;
						document.getElementById("problem_family_2").disabled=false;
						document.getElementById("problem_family_3").disabled=false;
						document.getElementById("problem_family_4").disabled=false;
						document.getElementById("problem_family_5").disabled=false;
						document.getElementById("problem_family_6").disabled=false;
						document.getElementById("problem_family_7").disabled=false;
						document.getElementById("problem_family_8").disabled=false;
						document.getElementById("problem_family_9").disabled=false;
						document.getElementById("problem_family_10").disabled=false;
						document.getElementById("problem_family_11").disabled=false;
	
						
			}
		else
			{
						document.getElementById("problem_family_0").disabled=true;
						document.getElementById("problem_family_1").disabled=true;
						document.getElementById("problem_family_2").disabled=true;
						document.getElementById("problem_family_3").disabled=true;
						document.getElementById("problem_family_4").disabled=true;
						document.getElementById("problem_family_5").disabled=true;
						document.getElementById("problem_family_6").disabled=true;
						document.getElementById("problem_family_7").disabled=true;
						document.getElementById("problem_family_8").disabled=true;
						document.getElementById("problem_family_9").disabled=true;
						document.getElementById("problem_family_10").disabled=true;
						document.getElementById("problem_family_11").disabled=true;

						document.getElementById("problem_family_0").checked = false;
						document.getElementById("problem_family_1").checked = false;
						document.getElementById("problem_family_2").checked = false;
						document.getElementById("problem_family_3").checked = false;
						document.getElementById("problem_family_4").checked = false;
						document.getElementById("problem_family_5").checked = false;
						document.getElementById("problem_family_6").checked = false;
						document.getElementById("problem_family_7").checked = false;
						document.getElementById("problem_family_8").checked = false;
						document.getElementById("problem_family_9").checked = false;
						document.getElementById("problem_family_10").checked = false;
						document.getElementById("problem_family_11").checked = false;
						

						document.getElementById("text_problem_family").disabled=true;
						document.getElementById("text_problem_family").value='';
			}	
	}
	function other_name12(name1,status)
	{

		var v1 = name1;
		var x = status;
		
		
		if(x !="")
			{		

						document.getElementById("group_effect_0").disabled=false;
						document.getElementById("group_effect_1").disabled=false;
						document.getElementById("group_effect_2").disabled=false;
						document.getElementById("group_effect_3").disabled=false;
						document.getElementById("group_effect_4").disabled=false;
						document.getElementById("group_effect_5").disabled=false;
						document.getElementById("group_effect_6").disabled=false;
						document.getElementById("group_effect_7").disabled=false;
						document.getElementById("group_effect_8").disabled=false;
	
						
			}
		else
			{
						document.getElementById("group_effect_0").disabled=true;
						document.getElementById("group_effect_1").disabled=true;
						document.getElementById("group_effect_2").disabled=true;
						document.getElementById("group_effect_3").disabled=true;
						document.getElementById("group_effect_4").disabled=true;
						document.getElementById("group_effect_5").disabled=true;
						document.getElementById("group_effect_6").disabled=true;
						document.getElementById("group_effect_7").disabled=true;
						document.getElementById("group_effect_8").disabled=true;

						document.getElementById("group_effect_0").checked = false;
						document.getElementById("group_effect_1").checked = false;
						document.getElementById("group_effect_2").checked = false;
						document.getElementById("group_effect_3").checked = false;
						document.getElementById("group_effect_4").checked = false;
						document.getElementById("group_effect_5").checked = false;
						document.getElementById("group_effect_6").checked = false;
						document.getElementById("group_effect_7").checked = false;
						document.getElementById("group_effect_8").checked = false;
						

						document.getElementById("text_group_effect").disabled=true;
						document.getElementById("text_group_effect").value='';	
			}	
	}
	function other_name13(name1,status)
	{

		var v1 = name1;
		var x = status;
		
		
		if(x !="")
			{		

						document.getElementById("abortion_personal_0").disabled=false;
						document.getElementById("abortion_personal_1").disabled=false;
						document.getElementById("abortion_personal_2").disabled=false;
						document.getElementById("abortion_personal_3").disabled=false;
						document.getElementById("abortion_personal_4").disabled=false;
					
						document.getElementById("abortion_method_0").disabled=false;
						document.getElementById("abortion_method_1").disabled=false;
						document.getElementById("abortion_method_2").disabled=false;
						document.getElementById("abortion_method_3").disabled=false;
						document.getElementById("abortion_method_4").disabled=false;
						document.getElementById("abortion_method_5").disabled=false;
						document.getElementById("abortion_method_6").disabled=false;
						document.getElementById("abortion_method_7").disabled=false;
						document.getElementById("abortion_method_8").disabled=false;
						document.getElementById("abortion_method_9").disabled=false;
						document.getElementById("abortion_method_10").disabled=false;

						
			}
		else
			{
						document.getElementById("abortion_personal_0").disabled=true;
						document.getElementById("abortion_personal_1").disabled=true;
						document.getElementById("abortion_personal_2").disabled=true;
						document.getElementById("abortion_personal_3").disabled=true;
						document.getElementById("abortion_personal_4").disabled=true;
					
/*						document.getElementById("abortion_method_0").disabled=true;
						document.getElementById("abortion_method_1").disabled=true;
						document.getElementById("abortion_method_2").disabled=true;
						document.getElementById("abortion_method_3").disabled=true;
						document.getElementById("abortion_method_4").disabled=true;
						document.getElementById("abortion_method_5").disabled=true;
						document.getElementById("abortion_method_6").disabled=true;
						document.getElementById("abortion_method_7").disabled=true;
						document.getElementById("abortion_method_8").disabled=true;
						document.getElementById("abortion_method_9").disabled=true;
						document.getElementById("abortion_method_10").disabled=true;*/

						document.getElementById("select_abortion_method_0").disabled=true;
						document.getElementById("select_abortion_method_1").disabled=true;
						document.getElementById("select_abortion_method_2").disabled=true;
						
						document.getElementById("abortion_personal_0").checked = false;
						document.getElementById("abortion_personal_1").checked = false;
						document.getElementById("abortion_personal_2").checked = false;
						document.getElementById("abortion_personal_3").checked = false;
						document.getElementById("abortion_personal_4").checked = false;
					
/*						document.getElementById("abortion_method_0").checked = false;
						document.getElementById("abortion_method_1").checked = false;
						document.getElementById("abortion_method_2").checked = false;
						document.getElementById("abortion_method_3").checked = false;
						document.getElementById("abortion_method_4").checked = false;
						document.getElementById("abortion_method_5").checked = false;
						document.getElementById("abortion_method_6").checked = false;
						document.getElementById("abortion_method_7").checked = false;
						document.getElementById("abortion_method_8").checked = false;
						document.getElementById("abortion_method_9").checked = false;
						document.getElementById("abortion_method_10").checked = false;	*/					
						
/*						document.getElementById("select_abortion_method_0").checked = false;
						document.getElementById("select_abortion_method_1").checked = false;
						document.getElementById("select_abortion_method_2").checked = false;*/

						document.getElementById("text_abortion_personal").disabled=true;
/*						document.getElementById("text_abortion_method1").disabled=true;
						document.getElementById("text_abortion_method2").disabled=true;*/

						document.getElementById("text_abortion_personal").value='';	
						document.getElementById("text_abortion_method1").value='';	
						document.getElementById("text_abortion_method2").value='';	
			}	
	}
	function other_name14()
	{

				if(document.getElementById("abortion_method_9").checked == true)
					{

						document.getElementById("abortion_method_0").disabled=true;
						document.getElementById("abortion_method_1").disabled=true;
						document.getElementById("abortion_method_2").disabled=true;
						document.getElementById("abortion_method_3").disabled=true;
						document.getElementById("abortion_method_4").disabled=true;
						document.getElementById("abortion_method_5").disabled=true;
						document.getElementById("abortion_method_6").disabled=true;
						document.getElementById("abortion_method_7").disabled=true;
						document.getElementById("abortion_method_8").disabled=true;
						document.getElementById("abortion_method_10").disabled=true;
		
						document.getElementById("abortion_method_0").checked = false;
						document.getElementById("abortion_method_1").checked = false;
						document.getElementById("abortion_method_2").checked = false;
						document.getElementById("abortion_method_3").checked = false;
						document.getElementById("abortion_method_4").checked = false;
						document.getElementById("abortion_method_5").checked = false;
						document.getElementById("abortion_method_6").checked = false;
						document.getElementById("abortion_method_7").checked = false;
						document.getElementById("abortion_method_8").checked = false;
						document.getElementById("abortion_method_10").checked = false;
						
						document.getElementById("text_abortion_method1").disabled=true;
						document.getElementById("text_abortion_method2").disabled=true;
						document.getElementById("text_abortion_method1").value='';	
						document.getElementById("text_abortion_method2").value='';	

						document.getElementById("select_abortion_method_0").disabled=true;
						document.getElementById("select_abortion_method_1").disabled=true;
						document.getElementById("select_abortion_method_2").disabled=true;

						document.getElementById("select_abortion_method_0").checked = false;
						document.getElementById("select_abortion_method_1").checked = false;
						document.getElementById("select_abortion_method_2").checked = false;
						
					}
				else
					{
						document.getElementById("abortion_method_0").disabled=false;
						document.getElementById("abortion_method_1").disabled=false;
						document.getElementById("abortion_method_2").disabled=false;
						document.getElementById("abortion_method_3").disabled=false;
						document.getElementById("abortion_method_4").disabled=false;
						document.getElementById("abortion_method_5").disabled=false;
						document.getElementById("abortion_method_6").disabled=false;
						document.getElementById("abortion_method_7").disabled=false;
						document.getElementById("abortion_method_8").disabled=false;
						document.getElementById("abortion_method_10").disabled=false;
					}			
	}
	function check_pregnancy_history()
		{
			var x = document.getElementById("pregnancy_history").value;	
			if(x <=1 )
				{
					document.getElementById("births_history").disabled='true';
					document.getElementById("children_history").disabled='true';
					document.getElementById("last_daughter_history").disabled='true';
					document.getElementById("last_daughter_history_2").disabled='true';
					document.getElementById("births_history").value='';	
					document.getElementById("children_history").value='';	
					document.getElementById("last_daughter_history").value='';	
					document.getElementById("last_daughter_history_2").value='';						
					
					document.getElementById("check_miscarriage").disabled='true';	
					document.getElementById("check_abortion").disabled='true';
					document.getElementById("check_miscarriage").checked=false;
					document.getElementById("check_abortion").checked=false;	
					document.getElementById("miscarriage").value='';	
					document.getElementById("abortion").value='';	
					document.getElementById("first_abortion").value='';
					document.getElementById("miscarriage").disabled='true';
					document.getElementById("abortion").disabled='true';
					document.getElementById("first_abortion").disabled='true';
				}
			else
				{
					document.getElementById("births_history").disabled='';
					document.getElementById("children_history").disabled='';
					document.getElementById("last_daughter_history").disabled='';	
					document.getElementById("last_daughter_history_2").disabled='';	
					
					document.getElementById("check_miscarriage").disabled='';	
					document.getElementById("check_abortion").disabled='';	
					

					
					
				}
		}
		
		
function check_int(v)
{
	  var x=document.getElementById(""+v).value;
	  if (isNaN(x)) 
	  {
			alert("กรอกเฉพาะตัวเลข");
			document.getElementById(""+v).value = "";
			return false;
	  }
}
function check_large(mn,mx,v)
{
	var x=document.getElementById(""+v).value;


			m1 = Math.max( x, mn ,mx );
			m2 = Math.min( x, mn ,mx );
			
		
if(x!="")
	{	
	
		if( x != "99")
		{
			if(m2 != mn)  
				{
					alert("ค่าต่ำสุด : "+mn+" ค่าสูงสุด : "+mx);
					document.getElementById(""+v).value = "";
					document.getElementById(""+v).focus();
					return false;
				}
			if(m1 != mx)
				{	
					alert("ค่าต่ำสุด : "+mn+" ค่าสูงสุด : "+mx);
					document.getElementById(""+v).value = "";
					document.getElementById(""+v).focus();
					return false;	
				}
		}
	}
		
	
}

function check_large1(v)
{
	var x=document.getElementById(""+v).value;
	var mn = 1;

			//m1 = Math.max( x, mn );
					
	if(x!="")
		{	
		
			if( x != "99")
			{
				if(x < 1 )  
					{
						alert("ค่าต่ำสุด : 1");
						
						document.getElementById(""+v).value = "";
						
						document.getElementById("check_miscarriage").checked=false;
						document.getElementById("miscarriage").value = "";
						document.getElementById("check_abortion").checked=false;
						document.getElementById("abortion").value = "";
						document.getElementById("first_abortion").value = "";
						
						document.getElementById("check_miscarriage").disabled='';	
						document.getElementById("check_abortion").disabled='';	
						
						
						document.getElementById(""+v).focus();
						
						return false;
					}
	
			}
		}
		
	
}

//-------------------- กด Enter เพื่อนไปช่องอื่น --------------------------
function handleEnter (field, event) 
{
	var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
	if (keyCode == 13) 
		{
			var i;
			for (i = 0; i < field.form.elements.length; i++)
			if (field == field.form.elements[i])
			break;
			i = (i + 1) % field.form.elements.length;
			field.form.elements[i].focus();
			return false;
		} 
	else
		{
			return true;
		}
}

function handleEnter2 (field, event) 
{
	var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
	if (keyCode == 13) 
		{
			var i;
			for (i = 0; i < field.form.elements.length; i++)
			if (field == field.form.elements[i])
			break;
			i = (i + 1) % field.form.elements.length;
			/*check_large(,);*/
			field.form.elements[i].focus();
			return false;
		} 
	else
		{
			
			return true;
		}
}
function dis_16_20(name1) 
{
	var v1 = name1;
	
	
	if(v1 == 'cause_abortion_0')
	{
		document.getElementById("problem_money_0").disabled=true;
		document.getElementById("problem_money_1").disabled=true;
		document.getElementById("problem_money_2").disabled=true;
		
		document.getElementById("problem_health_2").disabled=true;
		document.getElementById("problem_health_3").disabled=true;
		document.getElementById("problem_health_4").disabled=true;
		document.getElementById("problem_health_5").disabled=true;
		document.getElementById("problem_health_7").disabled=true;
		document.getElementById("problem_health_8").disabled=true;
		document.getElementById("problem_health_9").disabled=true;
		document.getElementById("problem_health_10").disabled=true;
		document.getElementById("problem_health_11").disabled=true;
		document.getElementById("problem_health_12").disabled=true;
		document.getElementById("problem_health_13").disabled=true;
		document.getElementById("problem_health_14").disabled=true;
		
		
		document.getElementById("problem_family_0").disabled=true;
		document.getElementById("problem_family_1").disabled=true;
		document.getElementById("problem_family_2").disabled=true;
		document.getElementById("problem_family_3").disabled=true;
		document.getElementById("problem_family_4").disabled=true;
		document.getElementById("problem_family_5").disabled=true;
		document.getElementById("problem_family_6").disabled=true;
		document.getElementById("problem_family_7").disabled=true;
		document.getElementById("problem_family_8").disabled=true;
		document.getElementById("problem_family_9").disabled=true;
		document.getElementById("problem_family_10").disabled=true;
		document.getElementById("problem_family_11").disabled=true;
		
	
		document.getElementById("group_effect_0").disabled=true;
		document.getElementById("group_effect_1").disabled=true;
		document.getElementById("group_effect_2").disabled=true;
		document.getElementById("group_effect_3").disabled=true;
		document.getElementById("group_effect_4").disabled=true;
		document.getElementById("group_effect_5").disabled=true;
		document.getElementById("group_effect_6").disabled=true;
		document.getElementById("group_effect_7").disabled=true;
		document.getElementById("group_effect_8").disabled=true;
		
		document.getElementById("abortion_mode_0").disabled=true;
		document.getElementById("abortion_mode_1").disabled=true;
	
		document.getElementById("abortion_personal_0").disabled=true;
		document.getElementById("abortion_personal_1").disabled=true;
		document.getElementById("abortion_personal_2").disabled=true;
		document.getElementById("abortion_personal_3").disabled=true;
		document.getElementById("abortion_personal_4").disabled=true;
	
		document.getElementById("abortion_method_0").disabled=true;
		document.getElementById("abortion_method_1").disabled=true;
		document.getElementById("abortion_method_2").disabled=true;
		document.getElementById("abortion_method_3").disabled=true;
		document.getElementById("abortion_method_4").disabled=true;
		document.getElementById("abortion_method_5").disabled=true;
		document.getElementById("abortion_method_6").disabled=true;
		document.getElementById("abortion_method_7").disabled=true;
		document.getElementById("abortion_method_8").disabled=true;
		document.getElementById("abortion_method_9").disabled=true;
		document.getElementById("abortion_method_10").disabled=true;
		
		document.getElementById("check_problem_money_0").disabled=true;
		document.getElementById("check_problem_money_1").disabled=true;
		document.getElementById("check_problem_health_0").disabled=true;
		document.getElementById("check_problem_health_1").disabled=true;
		document.getElementById("check_problem_family_0").disabled=true;
		document.getElementById("check_problem_family_1").disabled=true;
		document.getElementById("check_group_effect_0").disabled=true;
		document.getElementById("check_group_effect_1").disabled=true;
		
//----------
		document.getElementById("problem_money_0").checked = false;
		document.getElementById("problem_money_1").checked = false;
		document.getElementById("problem_money_2").checked = false;
		
		document.getElementById("problem_health_2").checked = false;
		document.getElementById("problem_health_3").checked = false;
		document.getElementById("problem_health_4").checked = false;
		document.getElementById("problem_health_5").checked = false;
		document.getElementById("problem_health_7").checked = false;
		document.getElementById("problem_health_8").checked = false;
		document.getElementById("problem_health_9").checked = false;
		document.getElementById("problem_health_10").checked = false;
		document.getElementById("problem_health_11").checked = false;
		document.getElementById("problem_health_12").checked = false;
		document.getElementById("problem_health_13").checked = false;
		document.getElementById("problem_health_14").checked = false;
		
		
		document.getElementById("problem_family_0").checked = false;
		document.getElementById("problem_family_1").checked = false;
		document.getElementById("problem_family_2").checked = false;
		document.getElementById("problem_family_3").checked = false;
		document.getElementById("problem_family_4").checked = false;
		document.getElementById("problem_family_5").checked = false;
		document.getElementById("problem_family_6").checked = false;
		document.getElementById("problem_family_7").checked = false;
		document.getElementById("problem_family_8").checked = false;
		document.getElementById("problem_family_9").checked = false;
		document.getElementById("problem_family_10").checked = false;
		document.getElementById("problem_family_11").checked = false;
		
	
		document.getElementById("group_effect_0").checked = false;
		document.getElementById("group_effect_1").checked = false;
		document.getElementById("group_effect_2").checked = false;
		document.getElementById("group_effect_3").checked = false;
		document.getElementById("group_effect_4").checked = false;
		document.getElementById("group_effect_5").checked = false;
		document.getElementById("group_effect_6").checked = false;
		document.getElementById("group_effect_7").checked = false;
		document.getElementById("group_effect_8").checked = false;
		
		document.getElementById("abortion_mode_0").checked = false;
		document.getElementById("abortion_mode_1").checked = false;
	
		document.getElementById("abortion_personal_0").checked = false;
		document.getElementById("abortion_personal_1").checked = false;
		document.getElementById("abortion_personal_2").checked = false;
		document.getElementById("abortion_personal_3").checked = false;
		document.getElementById("abortion_personal_4").checked = false;
	
		document.getElementById("abortion_method_0").checked = false;
		document.getElementById("abortion_method_1").checked = false;
		document.getElementById("abortion_method_2").checked = false;
		document.getElementById("abortion_method_3").checked = false;
		document.getElementById("abortion_method_4").checked = false;
		document.getElementById("abortion_method_5").checked = false;
		document.getElementById("abortion_method_6").checked = false;
		document.getElementById("abortion_method_7").checked = false;
		document.getElementById("abortion_method_8").checked = false;
		document.getElementById("abortion_method_9").checked = false;
		document.getElementById("abortion_method_10").checked = false;
		
		document.getElementById("check_problem_money_0").checked = false;
		document.getElementById("check_problem_money_1").checked = false;
		document.getElementById("check_problem_health_0").checked = false;
		document.getElementById("check_problem_health_1").checked = false;
		document.getElementById("check_problem_family_0").checked = false;
		document.getElementById("check_problem_family_1").checked = false;
		document.getElementById("check_group_effect_0").checked=false;
		document.getElementById("check_group_effect_1").checked=false;
//---------

		document.getElementById("other_reasons").disabled=true;
		document.getElementById("text_problem_money").disabled=true;
		document.getElementById("text_problem_health1").disabled=true;
		document.getElementById("text_problem_health2").disabled=true;
		document.getElementById("text_problem_health3").disabled=true;
		document.getElementById("text_problem_health4").disabled=true;
		document.getElementById("text_problem_health5").disabled=true;
		document.getElementById("text_problem_family").disabled=true;
		document.getElementById("text_group_effect").disabled=true;
		document.getElementById("text_abortion_personal").disabled=true;
		document.getElementById("text_abortion_method1").disabled=true;
		document.getElementById("text_abortion_method2").disabled=true;
		
		
		document.getElementById("other_reasons").value='';	
		document.getElementById("text_problem_money").value='';	
		document.getElementById("text_problem_health1").value='';	
		document.getElementById("text_problem_health2").value='';	
		document.getElementById("text_problem_health3").value='';	
		document.getElementById("text_problem_health4").value='';	
		document.getElementById("text_problem_health5").value='';	
		document.getElementById("text_problem_family").value='';	
		document.getElementById("text_group_effect").value='';	
		document.getElementById("text_abortion_personal").value='';	
		document.getElementById("text_abortion_method1").value='';	
		document.getElementById("text_abortion_method2").value='';	
		
		document.getElementById("select_abortion_method_0").disabled=true;
		document.getElementById("select_abortion_method_1").disabled=true;
		document.getElementById("select_abortion_method_2").disabled=true;
		
		document.getElementById("select_abortion_method_0").checked = false;
		document.getElementById("select_abortion_method_1").checked = false;
		document.getElementById("select_abortion_method_2").checked = false;
	}
	
	if(v1 == 'cause_abortion_1')
	{
/*		document.getElementById("problem_money_0").disabled=false;
		document.getElementById("problem_money_1").disabled=false;
		document.getElementById("problem_money_2").disabled=false;
		

		document.getElementById("problem_health_2").disabled=false;
		document.getElementById("problem_health_3").disabled=false;
		document.getElementById("problem_health_4").disabled=false;
		document.getElementById("problem_health_5").disabled=false;
		document.getElementById("problem_health_7").disabled=false;
		document.getElementById("problem_health_8").disabled=false;
		document.getElementById("problem_health_9").disabled=false;
		document.getElementById("problem_health_10").disabled=false;
		document.getElementById("problem_health_11").disabled=false;
		document.getElementById("problem_health_12").disabled=false;
		document.getElementById("problem_health_13").disabled=false;
		document.getElementById("problem_health_14").disabled=false;
		
		
		document.getElementById("problem_family_0").disabled=false;
		document.getElementById("problem_family_1").disabled=false;
		document.getElementById("problem_family_2").disabled=false;
		document.getElementById("problem_family_3").disabled=false;
		document.getElementById("problem_family_4").disabled=false;
		document.getElementById("problem_family_5").disabled=false;
		document.getElementById("problem_family_6").disabled=false;
		document.getElementById("problem_family_7").disabled=false;
		document.getElementById("problem_family_8").disabled=false;
		document.getElementById("problem_family_9").disabled=false;
		document.getElementById("problem_family_10").disabled=false;
		document.getElementById("problem_family_11").disabled=false;
		
	
		document.getElementById("group_effect_0").disabled=false;
		document.getElementById("group_effect_1").disabled=false;
		document.getElementById("group_effect_2").disabled=false;
		document.getElementById("group_effect_3").disabled=false;
		document.getElementById("group_effect_4").disabled=false;
		document.getElementById("group_effect_5").disabled=false;
		document.getElementById("group_effect_6").disabled=false;
		document.getElementById("group_effect_7").disabled=false;
		document.getElementById("group_effect_8").disabled=false;*/
		
		document.getElementById("abortion_mode_0").disabled=false;
		document.getElementById("abortion_mode_1").disabled=false;
	
		document.getElementById("abortion_personal_0").disabled=false;
		document.getElementById("abortion_personal_1").disabled=false;
		document.getElementById("abortion_personal_2").disabled=false;
		document.getElementById("abortion_personal_3").disabled=false;
		document.getElementById("abortion_personal_4").disabled=false;
	
		document.getElementById("abortion_method_0").disabled=false;
		document.getElementById("abortion_method_1").disabled=false;
		document.getElementById("abortion_method_2").disabled=false;
		document.getElementById("abortion_method_3").disabled=false;
		document.getElementById("abortion_method_4").disabled=false;
		document.getElementById("abortion_method_5").disabled=false;
		document.getElementById("abortion_method_6").disabled=false;
		document.getElementById("abortion_method_7").disabled=false;
		document.getElementById("abortion_method_8").disabled=false;
		document.getElementById("abortion_method_9").disabled=false;
		document.getElementById("abortion_method_10").disabled=false;

		document.getElementById("check_problem_money_0").disabled=false;
		document.getElementById("check_problem_money_1").disabled=false;
		document.getElementById("check_problem_health_0").disabled=false;
		document.getElementById("check_problem_health_1").disabled=false;
		document.getElementById("check_problem_family_0").disabled=false;
		document.getElementById("check_problem_family_1").disabled=false;

		document.getElementById("check_group_effect_0").disabled=false;
		document.getElementById("check_group_effect_1").disabled=false;
		
/*		document.getElementById("select_abortion_method_0").disabled=false;
		document.getElementById("select_abortion_method_1").disabled=false;
		document.getElementById("select_abortion_method_2").disabled=false;*/

		document.getElementById("select_abortion_method_0").disabled=true;
		document.getElementById("select_abortion_method_1").disabled=true;
		document.getElementById("select_abortion_method_2").disabled=true;
						
		document.getElementById("select_abortion_method_0").checked = false;
		document.getElementById("select_abortion_method_1").checked = false;
		document.getElementById("select_abortion_method_2").checked = false;

		document.getElementById("other_reasons").disabled=false;

		
		
		document.getElementById("other_reasons").value='';	

	}

}
function check_submit()
	{
				if(document.getElementById("survey_province").value=='')
					{
						alert('กรุณารอกข้อมูลในส่วนสำคัญด้วย');
							$(function() {
							$('#tabs').tabs("option", "active", 1);
							  });
						document.getElementById("survey_province").focus();
						return false;
					}
				else if(document.getElementById("survey_agency").value=='')
					{
						alert('กรุณารอกข้อมูลในส่วนสำคัญด้วย');
							$(function() {
							$('#tabs').tabs("option", "active", 1);
							  });
						document.getElementById("survey_agency").focus();
						return false;
					}
				else if(document.getElementById("file_id").value=='')
					{
						alert('กรุณารอกข้อมูลในส่วนสำคัญด้วย');
							$(function() {
							$('#tabs').tabs("option", "active", 1);
							  });
						document.getElementById("file_id").focus();
						return false;
					}
				else if(document.getElementById("survey_datefirst").value=='')
					{
						alert('กรุณารอกข้อมูลในส่วนสำคัญด้วย');
							$(function() {
							$('#tabs').tabs("option", "active", 1);
							  });
						document.getElementById("survey_datefirst").focus();
						return false;
					}
				else if(document.getElementById("survey_dateend").value=='')
					{
						alert('กรุณารอกข้อมูลในส่วนสำคัญด้วย');
							$(function() {
							$('#tabs').tabs("option", "active", 1);
							  });
						document.getElementById("survey_dateend").focus();
						return false;
					}
				
				else if(document.getElementById("cause_abortion_0").checked == false && document.getElementById("cause_abortion_1").checked == false)
					{
						alert('กรุณารอกข้อมูลในส่วนสำคัญด้วย');
							$(function() {
							$('#tabs').tabs("option", "active", 2);
							  });
						document.getElementById("cause_abortion_0").focus();
						return false;
					}
	}
	
/*function check_id1()
{
	var h = document.form1.hospital_id.value;
	var fid = document.getElementById("file_id").value; 
	var h_check_id=document.getElementById("h_check_id").value;
	//var h_check_id = document.form1.h_check_id.value;
	  
	var text = h+'-'+fid;
	
	alert(text);
	alert(h_check_id);
//----------------------------------------------------- เช็คค่าซ้ำ Array ----------------------------------------------------	
	var array_h_check_id = h_check_id.split(",");

	  for (var i = 0; i < array_h_check_id.length; i++)
	  { 
		if (array_h_check_id[i] == text) 
		{
			alert("รหัสนี้ถูกบันทึกไปแล้ว");
			document.getElementById("file_id").value="";
			document.getElementById("file_id").focus(); 
			return true ;
		} 
	  }


//--------------------------------------------------------------------------------------------	 
	  
	 
/*	  if (isNaN(x)) 
	  {
			alert("กรอกเฉพาะตัวเลข");
			document.getElementById(""+v).value = "";
			return false;
	  }*/
//}
  </script>
<script src="js/tabnavi.js"  charset="UTF-8" type="text/javascript"></script>

</head>

<body>
<form id="form1" name="form1" method="post" action="" onsubmit="return check_submit()" >
<div class="broder_set" style="width:908px">
<div align="center"><img src="image/h.png" width="900" height="140" /></div>
<div><?php include("menu.php"); ?></div>
<div align="right">
  <h3>ยินดีต้อนรับ : <?php echo $_SESSION["ss_name"]; ?> : <a href="logout.php">ออกจากระบบ</a></h3></div>
 

<div id="tabs" style="width: 900px; text-align: center;" >
  <ul>
    <li><a href="#tabs-1">เอกสารดาวน์โหลด</a></li>
  </ul>
  <div id="tabs-1">
 <table width="100%" border="0" cellspacing="2" cellpadding="3">
  <tr bgcolor="#3399CC">
    <td width="91%"><h3><font color="#FFFFFF"><center>เอกสาร</center></font></h3></td>
    <td width="9%"><h3><font color="#FFFFFF"><center>ดาวน์โหลด</center></font></h3></td>
  </tr>
  <tr>
    <td class="menu_left">แบบยินยอม</td>
    <td class="menu_center"><a href="file/แบบยินยอม.pdf" target="_blank"><img src="image/pdf.png" width="32" height="32" /></a></td>
  </tr>
  <tr bgcolor="#B4DCED">
    <td class="menu_left">แบบรายงานของโรงพยาบาล</td>
    <td class="menu_center"><a href="file/แบบรายงานของโรงพยาบาล.pdf" target="_blank"><img src="image/pdf.png" width="32" height="32" /></a></td>
  </tr>
  <tr>
    <td class="menu_left">แบบรายงานของสำนักงานสาธารณสุขจังหวัด</td>
    <td class="menu_center"><a href="file/แบบรายงานของสำนักงานสาธารณสุขจังหวัด.pdf" target="_blank"><img src="image/pdf.png" width="32" height="32" /></a></td>
  </tr>
  <tr bgcolor="#B4DCED">
    <td class="menu_left">แบบสอบถาม</td>
    <td class="menu_center"><a href="file/แบบสอบถาม_update_02-03-2559.pdf" target="_blank"><img src="image/pdf.png" width="32" height="32" /></a></td>
  </tr>
  <tr>
    <td class="menu_left">Code Book ของฐานข้อมูล ปี พ.ศ.2557-2558</td>
    <td class="menu_center"><a href="file/codebook_2557-2558.xls" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a></td>
  </tr>
  <tr bgcolor="#B4DCED">
    <td class="menu_left">Code Book ของฐานข้อมูล ปี พ.ศ.2559</td>
    <td class="menu_center"><a href="file/codebook_2559.xls" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a></td>
  </tr>
</table>

 
 
  </div>
 </div>
</div>

</form>

</body>
</html>