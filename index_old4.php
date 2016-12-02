<?php
	session_start();

	if(empty($_SESSION["ss_id"]) )
		{
			echo"<script>
			window.location = 'login.php';
			</script>";		
		}
	
	include("connect.php");
	include("check_id.php");
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

$h_submit = $_POST['h_submit'];
if(!empty($h_submit))
	{
		
		$hospital_id = $_POST['hospital_id'];
		$file_id = $_POST['file_id'];
		
		$survey_agency = $_POST['survey_agency'];
		$survey_district = $_POST['survey_district'];
		$survey_province = $_POST['survey_province'];
		$survey_name = $_POST['survey_name'];
		$survey_position = $_POST['survey_position'];
		$survey_datefirst = $_POST['survey_datefirst'];
		$survey_dateend = $_POST['survey_dateend'];
		$age = $_POST['age'];
		$friend_age = $_POST['friend_age'];
		$text_friend_age = $_POST['text_friend_age'];
		$nationality = $_POST['nationality'];
		$text_nationality = $_POST['text_nationality'];
		$religion = $_POST['religion'];
		$text_religion = $_POST['text_religion'];
		$status = $_POST['status'];
		$first_si = $_POST['first_si'];
		$job = $_POST['job'];
		$text_job1 = $_POST['text_job1'];
		$text_job2 = $_POST['text_job2'];
		$education = $_POST['education'];
		$text_education = $_POST['text_education'];
		$friend_education = $_POST['friend_education'];
		$text_friend_education = $_POST['text_friend_education'];
		$salary = $_POST['salary'];
		$text_salary = $_POST['text_salary'];
		$friend_salary = $_POST['friend_salary'];
		$text_friend_salary = $_POST['text_friend_salary'];
		$pregnancy_history = $_POST['pregnancy_history'];
		$births_history = $_POST['births_history'];
		$children_history = $_POST['children_history'];
		$last_daughter_history = $_POST['last_daughter_history'];
		$miscarriage = $_POST['miscarriage'];
		$abortion = $_POST['abortion'];
		$first_abortion = $_POST['first_abortion'];
		$plan_pregnant = $_POST['plan_pregnant'];
		$contraception = $_POST['contraception'];
		$text_contraception1 = $_POST['text_contraception1'];
		$text_contraception2 = $_POST['text_contraception2'];
		$cause_abortion = $_POST['cause_abortion'];
		$problem_money = $_POST['problem_money'];
		
		$problem_money1 = $_POST['problem_money1'];
		$problem_money2 = $_POST['problem_money2'];
		$problem_money3 = $_POST['problem_money3'];
		
		$text_problem_money = $_POST['text_problem_money'];
		
		$problem_health1 = $_POST['problem_health1'];
		$problem_health2 = $_POST['problem_health2'];
		$problem_health3 = $_POST['problem_health3'];
		$problem_health4 = $_POST['problem_health4'];
		$problem_health5 = $_POST['problem_health5'];
		$problem_health6 = $_POST['problem_health6'];
		$problem_health7 = $_POST['problem_health7'];
		$problem_health8 = $_POST['problem_health8'];
		$problem_health9 = $_POST['problem_health9'];
		$problem_health10 = $_POST['problem_health10'];
		$problem_health11 = $_POST['problem_health11'];
		$problem_health12 = $_POST['problem_health12'];
		
		$text_problem_health1 = $_POST['text_problem_health1'];
		$text_problem_health2 = $_POST['text_problem_health2'];
		$text_problem_health3 = $_POST['text_problem_health3'];
		$text_problem_health4 = $_POST['text_problem_health4'];
		$text_problem_health5 = $_POST['text_problem_health5'];
		
		$problem_family1 = $_POST['problem_family1'];
		$problem_family2 = $_POST['problem_family2'];
		$problem_family3 = $_POST['problem_family3'];
		$problem_family4 = $_POST['problem_family4'];
		$problem_family5 = $_POST['problem_family5'];
		$problem_family6 = $_POST['problem_family6'];
		$problem_family7 = $_POST['problem_family7'];
		$problem_family8 = $_POST['problem_family8'];
		$problem_family9 = $_POST['problem_family9'];
		$problem_family10 = $_POST['problem_family10'];
		$problem_family11 = $_POST['problem_family11'];
		$problem_family12 = $_POST['problem_family12'];
		
		$text_problem_family = $_POST['text_problem_family'];
		$other_reasons = $_POST['other_reasons'];
		
		$group_effect1 = $_POST['group_effect1'];
		$group_effect2 = $_POST['group_effect2'];
		$group_effect3 = $_POST['group_effect3'];
		$group_effect4 = $_POST['group_effect4'];
		$group_effect5 = $_POST['group_effect5'];
		$group_effect6 = $_POST['group_effect6'];
		$group_effect7 = $_POST['group_effect7'];
		$group_effect8 = $_POST['group_effect8'];
		$group_effect9 = $_POST['group_effect9'];
		
	
		
		$text_group_effect = $_POST['text_group_effect'];
		$abortion_mode = $_POST['abortion_mode'];
		$abortion_personal = $_POST['abortion_personal'];
		$text_abortion_personal = $_POST['text_abortion_personal'];
		
		$abortion_method1 = $_POST['abortion_method1'];
		$abortion_method2 = $_POST['abortion_method2'];
		$abortion_method3 = $_POST['abortion_method3'];
		$abortion_method4 = $_POST['abortion_method4'];
		$abortion_method5 = $_POST['abortion_method5'];
		$abortion_method6 = $_POST['abortion_method6'];
		$abortion_method7 = $_POST['abortion_method7'];
		$abortion_method8 = $_POST['abortion_method8'];
		$abortion_method9 = $_POST['abortion_method9'];
		$abortion_method10 = $_POST['abortion_method10'];
		$abortion_method11 = $_POST['abortion_method11'];
	
		$select_abortion_method = $_POST['select_abortion_method'];

		$text_abortion_method1 = $_POST['text_abortion_method1'];
		$text_abortion_method2 = $_POST['text_abortion_method2'];
		$ga2 = $_POST['ga2'];
		
		$check_group_complications = $_POST['check_group_complications'];
		
		$group_complications1 = $_POST['group_complications1'];
		$group_complications2 = $_POST['group_complications2'];
		$group_complications3 = $_POST['group_complications3'];
		$group_complications4 = $_POST['group_complications4'];
		$group_complications5 = $_POST['group_complications5'];
		$group_complications6 = $_POST['group_complications6'];
		$group_complications7 = $_POST['group_complications7'];
		$group_complications8 = $_POST['group_complications8'];
		$group_complications9 = $_POST['group_complications9'];
		$group_complications10 = $_POST['group_complications10'];
		$group_complications11 = $_POST['group_complications11'];
		$group_complications12 = $_POST['group_complications12'];
		$group_complications13 = $_POST['group_complications13'];
		$group_complications14 = $_POST['group_complications14'];

		
		$text_group_complications1 = $_POST['text_group_complications1'];
		$text_group_complications2 = $_POST['text_group_complications2'];
		$text_group_complications3 = $_POST['text_group_complications3'];
		
		$group_disposition = $_POST['group_disposition'];

		
		$text_group_disposition1 = $_POST['text_group_disposition1'];
		
		
		$check_problem_money = $_POST['check_problem_money'];
		$check_problem_health = $_POST['check_problem_health'];
		$check_problem_family = $_POST['check_problem_family'];
		$check_group_effect = $_POST['check_group_effect'];

		$data_add = $_POST['data_add'];
		$time_add = $_POST['time_add'];
		$user_add = $_POST['user_add'];
		$status_check ='';
		$user_check ='';
		
		$survey_id = $hospital_id."-".$file_id;
		
if(!empty($survey_datefirst))
	{
		$date = explode("/",$survey_datefirst);
		$day = $date[0];
		$month = $date[1];
		$year  = $date[2];
		$year = $year-543;		
		$survey_datefirst = $year."-".$month."-".$day;		
	}
else
	{
		$survey_datefirst ="";
	}
if(!empty($survey_dateend))
	{
		$date = explode("/",$survey_dateend);
		$day = $date[0];
		$month = $date[1];
		$year  = $date[2];
		$year = $year-543;		
		$survey_dateend = $year."-".$month."-".$day;	
	}
else
	{
		$survey_dateend ="";
	}
if(!empty($lmp))
	{
		$date = explode("/",$lmp);
		$day = $date[0];
		$month = $date[1];
		$year  = $date[2];
		$year = $year-543;		
		$lmp = $year."-".$month."-".$day;	
	}
else
	{
		$lmp ="";
	}

		$sql = "INSERT INTO abortionsurvey_main (survey_id, survey_agency, survey_district, survey_province, survey_name, survey_position, survey_datefirst, survey_dateend, age, friend_age, text_friend_age, nationality, text_nationality, religion, text_religion, status, first_si, job, text_job1, text_job2, education, text_education, friend_education, text_friend_education, salary, text_salary, friend_salary, text_friend_salary, pregnancy_history, births_history, children_history, last_daughter_history, miscarriage, abortion, first_abortion, plan_pregnant, contraception, text_contraception1, text_contraception2, cause_abortion,check_problem_money, problem_money1,problem_money2 ,problem_money3, text_problem_money, check_problem_health,problem_health1,problem_health2,problem_health3,problem_health4,problem_health5 ,problem_health6,problem_health7,problem_health8,problem_health9,problem_health10,problem_health11,problem_health12,text_problem_health1, text_problem_health2, text_problem_health3, text_problem_health4, text_problem_health5, check_problem_family,problem_family1,problem_family2,problem_family3,problem_family4,problem_family5,problem_family6,problem_family7,problem_family8,problem_family9,problem_family10,problem_family11,problem_family12, text_problem_family, other_reasons, check_group_effect,group_effect1,group_effect2,group_effect3,group_effect4,group_effect5,group_effect6,group_effect7,group_effect8,group_effect9, text_group_effect, abortion_mode, abortion_personal, text_abortion_personal, abortion_method1,abortion_method2,abortion_method3,abortion_method4,abortion_method5,abortion_method6,abortion_method7,abortion_method8,abortion_method9,abortion_method10,abortion_method11, text_abortion_method1, text_abortion_method2,select_abortion_method, ga2,  check_group_complications,group_complications1,group_complications2,group_complications3,group_complications4,group_complications5,group_complications6,group_complications7,group_complications8,group_complications9,group_complications10,group_complications11,group_complications12,group_complications13,group_complications14, text_group_complications1, text_group_complications2, text_group_complications3, group_disposition, text_group_disposition1, data_add, time_add, user_add, ip_add, status_check, user_check) 
		
		VALUES ('$survey_id', '$survey_agency', '$survey_district', '$survey_province', '$survey_name', '$survey_position', '$survey_datefirst', '$survey_dateend', '$age', '$friend_age', '$text_friend_age', '$nationality', '$text_nationality', '$religion', '$text_religion', '$status', '$first_si', '$job', '$text_job1', '$text_job2', '$education', '$text_education', '$friend_education', '$text_friend_education', '$salary', '$text_salary', '$friend_salary', '$text_friend_salary', '$pregnancy_history', '$births_history', '$children_history', '$last_daughter_history', '$miscarriage', '$abortion', '$first_abortion', '$plan_pregnant', '$contraception', '$text_contraception1', '$text_contraception2', '$cause_abortion','$check_problem_money' ,'$problem_money1','$problem_money2' ,'$problem_money3', '$text_problem_money','$check_problem_health', '$problem_health1','$problem_health2','$problem_health3','$problem_health4','$problem_health5' ,'$problem_health6','$problem_health7','$problem_health8','$problem_health9','$problem_health10','$problem_health11','$problem_health12', '$text_problem_health1', '$text_problem_health2', '$text_problem_health3', '$text_problem_health4', '$text_problem_health5','$check_problem_family', '$problem_family1','$problem_family2','$problem_family3','$problem_family4','$problem_family5','$problem_family6','$problem_family7','$problem_family8','$problem_family9','$problem_family10','$problem_family11','$problem_family12', '$text_problem_family', '$other_reasons','$check_group_effect', 'group_effect1','group_effect2','group_effect3','group_effect4','group_effect5','group_effect6','group_effect7','group_effect8','group_effect9', '$text_group_effect', '$abortion_mode', '$abortion_personal', '$text_abortion_personal', '$abortion_method1','$abortion_method2','$abortion_method3','$abortion_method4','$abortion_method5','$abortion_method6','$abortion_method7','$abortion_method8','$abortion_method9','$abortion_method10','$abortion_method11', '$text_abortion_method1', '$text_abortion_method2','$select_abortion_method','$ga2', '$check_group_complications','$group_complications1','$group_complications2','$group_complications3','$group_complications4','$group_complications5','$group_complications6','$group_complications7','$group_complications8','$group_complications9','$group_complications10','$group_complications11','$group_complications12','$group_complications13','$group_complications14', '$text_group_complications1', '$text_group_complications2', '$text_group_complications3', '$group_disposition', '$text_group_disposition1', '$today', '$now_time', '".$_SESSION["ss_id"]."', '$ipaddress', '$status_check', '$user_check')";
		$result = mysql_query($sql);

//echo $sql;
	
$_SESSION["ss_survey_name"] = $survey_name;
$_SESSION["ss_survey_position"] = $survey_position;
		echo"<script>
		alert('บันทุกข้อมูล ".$survey_id." เรียบร้อยแล้ว');
		window.location = 'index.php#tabs-2';
		</script>";		
	}

//echo $sql;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Abortion</title>


  
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
					document.getElementById("births_history").value='';	
					document.getElementById("children_history").value='';	
					document.getElementById("last_daughter_history").value='';	
				}
			else
				{
					document.getElementById("births_history").disabled='';
					document.getElementById("children_history").disabled='';
					document.getElementById("last_daughter_history").disabled='';	
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
	
function check_id1()
{
	var h = document.form1.hospital_id.value;
	var fid = document.getElementById("file_id").value; 
	var h_check_id=document.getElementById("h_check_id").value;
	  
	var text = h+'-'+fid;
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
}
  </script>
<script src="js/tabnavi.js"  charset="UTF-8" type="text/javascript"></script>

</head>

<body>
<form id="form1" name="form1" method="post" action="" onsubmit="return check_submit()" >
<?php
		$sql_member = "select * from abortionsurvey_member where member_id= '".$_SESSION["ss_id"]."'";
		$result_member = mysql_query($sql_member);
		$data_member = mysql_fetch_array($result_member);

		$sql_hospital = "select * from abortionsurvey_hospital where hospital_id= '".$_SESSION["ss_hospital_id"]."'";
		$result_hospital = mysql_query($sql_hospital);
		$data_hospital = mysql_fetch_array($result_hospital);
?>
<div class="broder_set" style="width:908px">
<div align="center"><img src="image/h.png" width="900" height="140" /></div>
<div><?php include("menu.php"); ?></div>
<div align="right">
  <h3>Username : <?php echo $_SESSION["ss_username"]; ?> : <a href="logout.php">Logout</a></h3></div>
<div id="tabs" style="width:900px" >
  <ul>
    <li><a href="#tabs-1">ส่วนที่ 1</a></li>
    <li><a href="#tabs-2">ส่วนที่ 2</a></li>
    <li><a href="#tabs-3">ส่วนที่ 3</a></li>
    <li><a href="#tabs-4">ส่วนที่ 4</a></li>
  </ul>
  <div id="tabs-1">
    <p align="center" class="font_table"><strong>แบบสอบถาม</strong><strong> </strong><br />
      <strong>การเฝ้าระวังการแท้งในประเทศไทย</strong><strong> </strong><br />

    </p>
    <table width="100%" border="0" cellspacing="0" cellpadding="3" class="font_table">
      <tr>
        <td>1.<strong> </strong>แบบสอบถามนี้  จัดทำขึ้นเพื่อประกอบการเก็บข้อมูลกลุ่มตัวอย่างอาสาสมัครที่แท้งบุตรและเข้ารับการรักษาในสถานบริการสาธารณสุข  (ในที่นี้ใช้คำว่า “อาสาสมัคร”) ทั้งผู้ที่แท้งเองและเกิดจากการทำแท้งข้อมูลที่ได้จากการตอบแบบสอบถามจะนำไปประกอบการจัดทำแนวทางป้องกันและแก้ไขปัญหาที่เป็นสาเหตุและภาวะแทรกซ้อนของการทำแท้ง</td>
      </tr>
      <tr>
        <td>2. ก่อนทำการตอบแบบสอบถาม  เจ้าหน้าที่เก็บข้อมูลโปรดชี้แจงให้อาสาสมัครเข้าใจวัตถุประสงค์และประโยชน์ของข้อมูลที่ได้จากการตอบแบบสอบถาม  ข้อมูลทั้งหมดจะถือเป็นความลับ การนำเสนอข้อมูลจะนำเสนอเป็นภาพรวมของผลการศึกษาเท่านั้น  การยินยอมหรือไม่ยินยอมตอบแบบสอบถาม จะไม่มีผลต่อการเปลี่ยนแปลงแผนการรักษาของแพทย์แต่อย่างใด<strong> </strong></td>
      </tr>
      <tr>
        <td>3. ทำการเก็บข้อมูลเฉพาะผู้ที่ยินยอม  โดยอาสาสมัครจะต้องลงนามในหนังสือแสดงความยินยอมก่อนจะทำการตอบแบบสอบถามเอง  หรือเจ้าหน้าที่เก็บข้อมูลเป็นผู้เก็บข้อมูลตามแบบสอบถาม ในกรณีที่อาสาสมัครไม่สามารถตอบแบบสอบถามด้วยตนเองได้  </td>
      </tr>
      <tr>
        <td>4.  เจ้าหน้าที่เก็บข้อมูลควรเริ่มต้นด้วยการสร้างความคุ้นเคยกับอาสาสมัครก่อนดำเนินการเก็บข้อมูล  แนะนำความเป็นมาของโครงการ ประโยชน์ของข้อมูลที่ได้จากการตอบแบบสอบถาม  การเก็บรักษาความลับ และมีอิสระในการตอบ  ในระหว่างการตอบแบบสอบถามคำถามใดที่ไม่ยินดีตอบสามารถข้ามไปได้ </td>
      </tr>
      <tr>
        <td>5. ในระหว่างการตอบแบบสอบถาม  อาสาสมัครสามารถสอบถามประเด็นข้อสงสัยเกี่ยวกับคำถามได้  และอนุญาตให้ยุติการตอบได้เมื่อไม่ต้องการตอบคำถามต่อไป<strong> </strong></td>
      </tr>

    </table>
<!--<div align="center"><label><button id="next_p2" class="next_p2">ต่อไป</button></label></div>-->
  </div>
  <div id="tabs-2">
    <table width="100%" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td colspan="2" class="menu_left"><strong>ข้อมูลของหน่วยงานและเจ้าหน้าที่เก็บข้อมูล</strong></td>
        <td width="11%">&nbsp;</td>
        <td width="32%">&nbsp;</td>
      </tr>
      <tr>
        <td class="menu_right">จังหวัด : </td>
        <td colspan="3"><?php if($_SESSION["ss_lavel"] != 1){ ?><label>
          <input name="survey_province" type="text" id="survey_province" value="<?php echo $data_hospital[hospital_province]; ?>" size="20" readonly="readonly" onkeypress="return handleEnter(this, event)" />
        </label>
        <?php } else { include("list_province.php"); } ?> <font color="#FF0000">*</font></td>
      </tr>
      <tr>
        <td class="menu_right">ชื่อหน่วยงานที่เก็บข้อมูลโรงพยาบาล : </td>
        <td colspan="3"><?php if($_SESSION["ss_lavel"] != 1){ ?><label>
          <input name="survey_agency" type="text" id="survey_agency" value="<?php echo $data_hospital[hospital_name]; ?>" size="30" maxlength="50" readonly="readonly" onkeypress="return handleEnter(this, event)" />
        </label><font color="#FF0000">*</font>
        <?php } else { echo "<div id='show_hospitol'></div>"; } ?> </td>
      </tr>
      <tr>
        <td class="menu_right">อำเภอ : </td>
        <td colspan="3"><?php if($_SESSION["ss_lavel"] != 1){ ?><label>
          <input name="survey_district" type="text" id="survey_district" onkeypress="return handleEnter(this, event)" value="<?php echo $data_hospital[hospital_district]; ?>" size="20" maxlength="50" readonly="readonly" />
        </label>
        <?php } else { echo  "
		<label>
          <input type='text' name='survey_district' id='show_hospitol_district'  readonly='readonly'   />
        </label>"; } ?> <font color="#FF0000">*</font></td>
      </tr>
      <tr>
        <td width="36%" class="menu_right">รหัสโรงพยาบาล : </td>
        <td colspan="3"><?php if($_SESSION["ss_lavel"] != 1){ ?><label>
          <input name="hospital_id" type="text"  id="hospital_id" value="<?php echo $data_member[hospital_id]; ?>" size="15" maxlength="15" readonly="readonly" onkeypress="return handleEnter(this, event)" /></label> 
          <?php } else {  echo "       <label>
          <input type='text' name='hospital_id' id='show_hospitol_id' readonly='readonly'  />
        </label>"		  
		  ; } ?>
          <font color="#FF0000">*</font> <span class="menu_right">แบบสอบถามหมายเลข : </span>
          <input name="file_id" type="text" id="file_id" size="3" maxlength="3"  onkeyup="check_int('file_id');check_id1();" onkeypress="return handleEnter(this, event);" />
        </label>
        <font color="#FF0000">*</font></td>
        </tr>
      <tr>
        <td class="menu_right">ชื่อ - สกุล เจ้าหน้าที่เก็บข้อมูล : </td>
        <td width="21%"><label>
          <input name="survey_name" type="text" id="survey_name" value="<?php echo $_SESSION["ss_survey_name"]; ?>" size="20" maxlength="50" onkeypress="return handleEnter(this, event)" />
          </label></td>
        <td class="menu_right">ตำแหน่ง : </td>
        <td><label>
          <input name="survey_position" type="text" id="survey_position" value="<?php echo $_SESSION["ss_survey_position"]; ?>"  size="20" maxlength="50" onkeypress="return handleEnter(this, event);" />
          </label></td>
      </tr>
      <tr>
        <td class="menu_right">วัน/ เดือน/ ปีที่อาสาสมัครมาโรงพยาบาล  : </td>
        <td colspan="3"><label>
          <input name="survey_datefirst" type="text" id="survey_datefirst" readonly="readonly" onkeypress="return handleEnter(this, event)" />
          <font color="#FF0000">*</font>          <span class="menu_right">(วันที่แรกรับ) </span></label></td>
        </tr>
      <tr>
        <td class="menu_right">วัน/ เดือน/ ปีที่จำหน่ายจากโรงพยาบาล : </td>
        <td colspan="3"><label>
          <input name="survey_dateend" type="text" id="survey_dateend" readonly="readonly" onkeypress="return handleEnter(this, event)" />
          <font color="#FF0000">*</font></label></td>
        </tr>

    </table>
<!--<div align="center"><label><button class="next-product">ต่อไป</button></label></div>-->

<!--<button  id="previous2">Previous Tab</button>
<button  id="next2">Next Tab</button>-->


  </div>
  <div id="tabs-3">
<table width="100%" border="0" cellspacing="2" cellpadding="5">
  <tr>
    <td colspan="3"  valign="top" class="menu_left"><strong>ลักษณะทางประชากร สังคม เศรษฐกิจและข้อมูลอื่นๆ ของอาสาสมัคร </strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td  valign="top" class="menu_right">&nbsp;</td>
    <td colspan="2"  valign="top"  class="label_h">1. อายุของท่านและสามีหรือเพื่อนชาย</td>
    <td width="35%">&nbsp;</td>
    </tr>
  <tr>
    <td width="6%"></td>
    <td width="6%" class="menu_right"></td>
    <td colspan="2">อายุของท่าน <label>
      <input name="age" type="text"  id="age" size="3" maxlength="2" onkeyup="check_int('age')" onkeypress="return handleEnter(this, event)"/>
      ปี (อายุเต็มปัดเศษทิ้ง) </label></td>
    </tr>
  <tr>
    <td rowspan="2">&nbsp;</td> 
    <td rowspan="2" valign="top" class="menu_right"></td>
    <td colspan="2">ทราบอายุของสามีหรือเพื่อนชาย 
            <label>
              <input type="radio" name="friend_age" value="1" id="friend_age_0" onclick="other_name('text_friend_age','other')" onkeypress="return handleEnter(this, event)" />
            ทราบ</label>
      กรุณาระบุ 
      <label>
        <input name="text_friend_age" type="text" disabled="disabled" onkeyup="check_int('text_friend_age')" id="text_friend_age" size="3" maxlength="2"  onkeypress="return handleEnter(this, event)"/>
      </label>
      ปี (อายุเต็มปัดเศษทิ้ง)</td>
    </tr>
  <tr>
    <td colspan="2">      <label><font color="#FFFFFF">
      ทราบอายุของสามีหรือเพื่อนชาย </font><input type="radio" name="friend_age" value="2" id="friend_age_1" onclick="other_name('text_friend_age','')" onkeypress="return handleEnter(this, event)"/>
      ไม่ทราบ</label></td>
    </tr>
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td colspan="2" valign="top"   class="label_h">2. ท่านมีสัญชาติอะไร</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td width="53%">
      <label>
        <input type="radio" name="nationality" value="1" id="nationality_0" onclick="other_name('text_nationality','')" onkeypress="return handleEnter(this, event)" />
        ไทย</label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td width="53%">      <label>
        <input type="radio" name="nationality" value="2" id="nationality_1" onclick="other_name('text_nationality','')" onkeypress="return handleEnter(this, event)" />
        พม่า
    </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td width="53%">      <label>
        <input type="radio" name="nationality" value="3" id="nationality_2" onclick="other_name('text_nationality','')" onkeypress="return handleEnter(this, event)" />
        ลาว</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td width="53%">      <label>
        <input type="radio" name="nationality" value="4" id="nationality_3" onclick="other_name('text_nationality','')" onkeypress="return handleEnter(this, event)" />
        กัมพูชา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="nationality" value="5" id="nationality_4" onclick="other_name('text_nationality','other')"  onkeypress="return handleEnter(this, event)" />
        อื่นๆ</label>
      ระบุ 
      <label>
        <input name="text_nationality" type="text" disabled="disabled" class="validate[condRequired[nationality_1]]" id="text_nationality" maxlength="50" onkeypress="return handleEnter(this, event)" />
      </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">3.  ท่านนับถือศาสนาอะไร</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="religion" value="1" id="religion_0" onclick="other_name('text_religion','')"  onkeypress="return handleEnter(this, event)" />
        พุทธ</label>

    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>     <label>
        <input type="radio" name="religion" value="2" id="religion_1" onclick="other_name('text_religion','')"  onkeypress="return handleEnter(this, event)" />
        คริสต์</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="religion" value="3" id="religion_2" onclick="other_name('text_religion','')"  onkeypress="return handleEnter(this, event)" />
        อิสลาม</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="religion" value="4" id="religion_3" onclick="other_name('text_religion','other')"  onkeypress="return handleEnter(this, event)" />
</label>
        อื่น ๆ ระบุ<label>
        <input name="text_religion" type="text" disabled="disabled" class="validate[condRequired[religion_3]]" id="text_religion" maxlength="50" onkeypress="return handleEnter(this, event)" />
    </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">4.  สถานภาพสมรสของท่าน</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="status" value="1" id="status_0"  onkeypress="return handleEnter(this, event)" />
      1. โสด (ไม่เคยอยู่กินฉันท์สามีภรรยากับชายใด) </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="status" value="2" id="status_1"  onkeypress="return handleEnter(this, event)" />
      2. คู่ (กำลังอยู่กินฉันท์สามีภรรยากับชายใดชายหนึ่ง)</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="status" value="3" id="status_2"  onkeypress="return handleEnter(this, event)" />
      3. หม้าย/หย่า/แยก (เคยอยู่กินกับชายใดชายหนึ่งแต่ปัจจุบันเลิกกันแล้วหรือสามีเสียชีวิต)</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">5. อายุเมื่อมีเพศสัมพันธ์ครั้งแรก</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
      <input name="first_si" type="text" id="first_si" maxlength="2"  onkeyup="check_int('first_si');"   onkeypress="return handleEnter2(this, event);" />
    ปี </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">6. อาชีพหลักของท่าน </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="job" value="1" id="job_0" onclick="other_name2('text_job1','','other')"  onkeypress="return handleEnter(this, event)" />
      1. กำลังศึกษา (ระบุระดับชั้นที่กำลังศึกษา) 
      <input name="text_job1" type="text" disabled="disabled" class="validate[condRequired[job_0]]" id="text_job1" maxlength="50"  onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="2" id="job_1"  onclick="other_name2('text_job1','text_job2','')"  onkeypress="return handleEnter(this, event)" />
          2. แม่บ้าน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="3" id="job_2"  onclick="other_name2('text_job1','text_job2','')"  onkeypress="return handleEnter(this, event)" />
          3. ค้าขาย หรือประกอบธุรกิจส่วนตัว</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="4" id="job_3"  onclick="other_name2('text_job1','text_job2','')"  onkeypress="return handleEnter(this, event)" />
          4. รับจ้าง </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="5" id="job_4"  onclick="other_name2('text_job1','text_job2','')"  onkeypress="return handleEnter(this, event)" />
          5. เกษตรกร</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="6" id="job_5"  onclick="other_name2('text_job1','text_job2','')"  onkeypress="return handleEnter(this, event)" />
          6. รับราชการ/รัฐวิสาหกิจ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="7" id="job_6"  onclick="other_name2('text_job1','text_job2','')"  onkeypress="return handleEnter(this, event)" />
          7. ลูกจ้างทั่วไป</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="8" id="job_7"  onclick="other_name2('text_job1','text_job2','')"  onkeypress="return handleEnter(this, event)" />
          8. ว่างงาน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="job" value="9" id="job_8"  onclick="other_name2('','text_job2','other')"  onkeypress="return handleEnter(this, event)" />
      9. อื่น ๆ (โปรดระบุ) 
      <input name="text_job2" type="text" disabled="disabled" class="validate[condRequired[job_8]]" id="text_job2" maxlength="50" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">7. วุฒิการศึกษาสูงสุดของท่าน</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="education" value="1" id="education_0"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        1. ไม่ทราบ </label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="2" id="education_1"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        2. ไม่ได้เรียน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="3" id="education_2"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        3. ประถมศึกษา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="4" id="education_3" onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        4. มัธยมศึกษา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="5" id="education_4"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        5. อนุปริญญา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="6" id="education_5"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        6. ปริญญาตรี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="7" id="education_6"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        7. สูงกว่าปริญญาตรี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="8" id="education_7" onclick="other_name('text_education','other')"  onkeypress="return handleEnter(this, event)" />

        8. อื่นๆ ระบุ 
        <input name="text_education" type="text" disabled="disabled" class="validate[condRequired[education_7]]" id="text_education" maxlength="50" onkeypress="return handleEnter(this, event)" />
    </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">8. วุฒิการศึกษาสูงสุดของสามี หรือเพื่อนชาย</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="friend_education" value="1" id="friend_education_0" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        1. ไม่ทราบ</label>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="2" id="friend_education_1" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        2. ไม่ได้เรียน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="3" id="friend_education_2" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        3. ประถมศึกษา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="4" id="friend_education_3" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        4. มัธยมศึกษา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="5" id="friend_education_4" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        5. อนุปริญญา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="6" id="friend_education_5" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        6. ปริญญาตรี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="7" id="friend_education_6" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        7. สูงกว่าปริญญาตรี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="8" id="friend_education_7" onclick="other_name('text_friend_education','other')"  onkeypress="return handleEnter(this, event)" />
        8. อื่นๆ ระบุ</label> <label>
          <input name="text_friend_education" type="text" disabled="disabled" class="validate[condRequired[friend_education_7]]" id="text_friend_education" maxlength="50" onkeypress="return handleEnter(this, event)" />
        </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">9. รายได้ต่อเดือนของท่านและสามี หรือเพื่อนชาย</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>1. รายได้ต่อเดือนของท่าน </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">
      <label>
        <input type="radio" name="salary" value="1" id="salary_0" onclick="other_name('text_friend','other')"  onkeypress="return handleEnter(this, event)" />
        1.1 มี ประมาณ</label>
      <label>
        <input name="text_friend" type="text" disabled="disabled"  id="text_friend" maxlength="10"  onkeypress="return handleEnter(this, event)" onkeyup="check_int('text_friend');"  onblur="check_large('1000','100000','text_friend');"/>
        บาท/เดือน </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="salary" value="2" id="salary_1" onclick="other_name('text_friend','')"  onkeypress="return handleEnter(this, event)" />
        1.2 ไม่มี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>2. รายได้ต่อเดือนของสามีหรือเพื่อนชาย </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">
      <label>
        <input type="radio" name="friend_salary" value="1" id="friend_salary_0" onclick="other_name('text_friend_salary','other')"  onkeypress="return handleEnter(this, event)" />
        2.1 มี ประมาณ</label>
      <label>
        <input name="text_friend_salary" type="text" disabled="disabled"  id="text_friend_salary" maxlength="10"  onkeypress="return handleEnter(this, event)" onkeyup="check_int('text_friend_salary')" onblur="check_large('1000','100000','text_friend_salary');"/>
        บาท/เดือน </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_salary" value="2" id="friend_salary_1"  onclick="other_name('text_friend_salary','')"  onkeypress="return handleEnter(this, event)" />
        2.2 ไม่มี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_salary" value="3" id="friend_salary_2"  onclick="other_name('text_friend_salary','')"  onkeypress="return handleEnter(this, event)" />
        2.3 ไม่ทราบ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3" class="label_h">10. ประวัติการตั้งครรภ์ การคลอด และจำนวนบุตรมีชีวิตของท่าน</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">1. จำนวนการตั้งครรภ์ 
      <label>
        <input name="pregnancy_history" type="text" id="pregnancy_history" size="3" maxlength="3"  onchange="check_pregnancy_history()" onblur="check_large('0','15','pregnancy_history');" onkeypress="return handleEnter(this, event)" />
        ครั้ง (รวมการตั้งครรภ์ครั้งนี้ด้วย)</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>2. จำนวนการคลอด 
      <label>
        <input name="births_history" type="text" id="births_history" size="3" maxlength="3" onblur="check_large('0','15','births_history');" onkeypress="return handleEnter(this, event)" />
      ครั้ง  </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>3. จำนวนบุตรมีชีวิต 
      <label>
        <input name="children_history" type="text" id="children_history" size="3" maxlength="3" onblur="check_large('0','15','children_history');" onkeypress="return handleEnter(this, event)" />
      คน  </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>4. บุตรคนสุดท้ายอายุ 
      <label>
        <input name="last_daughter_history" type="text" id="last_daughter_history" size="3" maxlength="3"  onkeypress="return handleEnter(this, event)" onblur="check_large('1','15','last_daughter_history');"/>
      ปี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">11. ประวัติการแท้ง (ไม่รวมการแท้งหรือทำแท้งครั้งนี้)</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
      <input type="checkbox" name="check_miscarriage" id="check_miscarriage" onclick="other_name4('check_miscarriage','miscarriage')"/>
    </label>
      1.  แท้งเอง 
      <label>
<input name="miscarriage" type="text" disabled="disabled" class="validate[required,custom[integer],min[0],max[5]] text-input" id="miscarriage" onkeypress="return handleEnter(this, event)" size="3" maxlength="1" />
ครั้ง </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="checkbox" name="check_abortion" id="check_abortion" onclick="other_name6('check_abortion','abortion','first_abortion')"/>
    </label>
      2.  ทำแท้ง 
      <label>
        <input name="abortion" type="text" disabled="disabled" class="validate[required,custom[integer],min[0],max[5]] text-input" id="abortion" onkeypress="return handleEnter(this, event)" size="3" maxlength="1" /></label>
        ครั้ง   &nbsp;ครั้งแรกเมื่ออายุ
        <label><input name="first_abortion" type="text" disabled="disabled" id="first_abortion"  onkeypress="return handleEnter(this, event)" size="3" maxlength="2" />
        ปี</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">12. การตั้งครรภ์ครั้งนี้ ท่านตั้งใจให้เกิดขึ้นหรือไม่</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="plan_pregnant" value="1" id="plan_pregnant_0"  onkeypress="return handleEnter(this, event)" />
        1. ตั้งใจ</label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="plan_pregnant" value="2" id="plan_pregnant_1"  onkeypress="return handleEnter(this, event)" />
        2. ไม่ตั้งใจ </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">13.  การตั้งครรภ์ครั้งนี้ ได้ใช้วิธีการคุมกำเนิดใดๆ หรือไม่</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">
      <label>
        <input type="radio" name="contraception" value="1" id="contraception_0"  onclick="other_name3('text_contraception1','text_contraception2','other')"  onkeypress="return handleEnter(this, event)" />
        1. ไม่ได้ใช้การคุมกำเนิดวิธีใด   ระบุเหตุผล</label>
      
      <label>
        <input name="text_contraception1" type="text" disabled="disabled"  id="text_contraception1" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="contraception" value="2" id="contraception_1"   onclick="other_name3('text_contraception2','text_contraception1','other')"  onkeypress="return handleEnter(this, event)" /></label>
      2. ใช้การคุมกำเนิดวิธีใดวิธีหนึ่ง ระบุวิธี 
      <label><input name="text_contraception2" type="text" disabled="disabled" class="validate[condRequired[contraception_1]]" id="text_contraception2" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">14. สาเหตุของการแท้งครั้งนี้เกิดจากอะไร <font color="#FF0000">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">
      <label>
        <input type="radio" name="cause_abortion" value="1" id="cause_abortion_0"  onkeypress="return handleEnter(this, event)" onclick="dis_16_20('cause_abortion_0')" />
        1. แท้งเอง (หากแท้งเอง ข้ามไปข้อ 20 - 21) </label>
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="cause_abortion" value="2" id="cause_abortion_1"  onkeypress="return handleEnter(this, event)" onclick="dis_16_20('cause_abortion_1')"/>
        2. ทำแท้ง</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3" class="label_h">15. เหตุผลที่ทำให้ท่านต้องทำแท้งครั้งนี้ (ตอบได้มากกว่า 1 ข้อ)</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>1. ด้านเศรษฐกิจ </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="check_problem_money" value="1" id="check_problem_money_0" onclick="other_name9('check_problem_money_0','')" />
        ไม่มี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
        <input type="radio" name="check_problem_money" value="2" id="check_problem_money_1" onclick="other_name9('check_problem_money_1','other')"/>
        มี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>
        <input type="checkbox" disabled="disabled" name="problem_money1" value="1" id="problem_money_0"  onkeypress="return handleEnter(this, event)"  />
        1.1 มีปัญหาเรื่องเงิน</label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled" name="problem_money2" value="1" id="problem_money_1"  onkeypress="return handleEnter(this, event)" />
        1.2 การตั้งครรภ์เป็นอุปสรรคต่ออาชีพ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
      <input type="checkbox" disabled="disabled"  name="problem_money3" value="1" id="problem_money_2" onclick="other_name4('problem_money_2','text_problem_money')" onkeypress="return handleEnter(this, event)" />
      1.3 อื่นๆ ระบุ </label>
      <label>
        <input name="text_problem_money" type="text" disabled="disabled" class="validate[condRequired[problem_money_2]]" id="text_problem_money" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>2. ด้านสุขภาพ</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="check_problem_health" value="1" id="check_problem_health_0"  onclick="other_name10('check_problem_health_0','')"/>
        ไม่มี</label>

    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
        <input type="radio" name="check_problem_health" value="2" id="check_problem_health_1"  onclick="other_name10('check_problem_health_1','other')"/>
        มี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" disabled="disabled"  name="problem_health1" value="1" id="problem_health_2"  onkeypress="return handleEnter(this, event)" />
      2.1 ติดเชื้อเอดส์ ขณะตั้งครรภ์</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled"  name="problem_health2" value="1" id="problem_health_3"  onkeypress="return handleEnter(this, event)" />
        2.2 ติดเชื้อหัดเยอรมันขณะตั้งครรภ์</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="problem_health3" value="1" id="problem_health_4"  onkeypress="return handleEnter(this, event)" />
        2.3 ตั้งครรภ์ไข่ลม</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="problem_health4" value="1" id="problem_health_5" onclick="other_name4('problem_health_5','text_problem_health1')" onkeypress="return handleEnter(this, event)" /></label>
      2.4 ทารกในครรภ์ผิดปกติ ระบุชื่อโรค 
      <label> <input name="text_problem_health1" type="text" disabled="disabled" class="validate[condRequired[problem_health_5]]" id="text_problem_health1" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled"  name="problem_health5" value="1" id="problem_health_7"  onkeypress="return handleEnter(this, event)" />
        2.5 ทารกในครรภ์เสียชีวิต</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="problem_health6" value="1" id="problem_health_8"  onkeypress="return handleEnter(this, event)" />
        2.6 ทารกในครรภ์เป็นโรคธาลัสซีเมีย</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="problem_health7" value="1" id="problem_health_9"  onkeypress="return handleEnter(this, event)" />
        2.7 เป็นโรคธาลัสซีเมีย</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="problem_health8" value="1" id="problem_health_10"  onkeypress="return handleEnter(this, event)" />
        2.8 เป็นโรคเบาหวาน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <label>
      <input type="checkbox" disabled="disabled"  name="problem_health9" value="1" id="problem_health_11" onclick="other_name4('problem_health_11','text_problem_health2')" onkeypress="return handleEnter(this, event)" /></label>
      2.9 เป็นโรคต่อมไร้ท่ออื่นๆ ระบุชื่อโรค 
      <label><input name="text_problem_health2" type="text" disabled="disabled" class="validate[condRequired[problem_health_11]]" id="text_problem_health2" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" disabled="disabled"  name="problem_health10" value="1" id="problem_health_12" onclick="other_name4('problem_health_12','text_problem_health3')" onkeypress="return handleEnter(this, event)" /></label>
      2.10 เป็นโรคหัวใจระบุ ระบุชื่อโรค 
      <label><input name="text_problem_health3" type="text" disabled="disabled" class="validate[condRequired[problem_health_12]]" id="text_problem_health3" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="problem_health11" value="1" id="problem_health_13" onclick="other_name4('problem_health_13','text_problem_health4')" onkeypress="return handleEnter(this, event)" /></label>
      2.11 เป็นโรคมะเร็ง ระบุชื่อโรคหรืออวัยวะที่เป็นมะเร็ง 
      <label><input name="text_problem_health4" type="text" disabled="disabled" class="validate[condRequired[problem_health_13]]" id="text_problem_health4" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" disabled="disabled"  name="problem_health12" value="1" id="problem_health_14" onclick="other_name4('problem_health_14','text_problem_health5')" onkeypress="return handleEnter(this, event)" /></label>
      2.12 อื่นๆ ระบุ 
      <label><input name="text_problem_health5" type="text" disabled="disabled" class="validate[condRequired[problem_health_14]]" id="text_problem_health5" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>3. ด้านสังคม/ครอบครัว</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="check_problem_family" value="1" id="check_problem_family_0" onclick="other_name11('check_problem_family_0','')"/>
        ไม่มี</label>

    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="check_problem_family" value="2" id="check_problem_family_1" onclick="other_name11('check_problem_family_1','other')"/>
        มี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>
        <input type="checkbox" disabled="disabled"  name="problem_family1" value="1" id="problem_family_0"  onkeypress="return handleEnter(this, event)" />
        3.1 ยังเรียนไม่จบ</label>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="problem_family2" value="1" id="problem_family_1"  onkeypress="return handleEnter(this, event)" />
        3.2 ยังไม่พร้อมที่จะแต่งงาน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="problem_family3" value="1" id="problem_family_2"  onkeypress="return handleEnter(this, event)" />
        3.3 มีบุตรถี่เกินไป</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="problem_family4" value="1" id="problem_family_3"  onkeypress="return handleEnter(this, event)" />
        3.4 ฝ่ายชายไม่รับผิดชอบ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="problem_family5" value="1" id="problem_family_4"  onkeypress="return handleEnter(this, event)" />
        3.5 ฝ่ายชายมีครอบครัวแล้ว</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled"  name="problem_family6" value="1" id="problem_family_5"  onkeypress="return handleEnter(this, event)" />
        3.6 มีปัญหากับญาติของฝ่ายชาย</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled"  name="problem_family7" value="1" id="problem_family_6"  onkeypress="return handleEnter(this, event)" />
        3.7 ตั้งครรภ์เนื่องจากถูกข่มขืน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled"  name="problem_family8" value="1" id="problem_family_7"  onkeypress="return handleEnter(this, event)" />
        3.8 ตั้งครรภ์เนื่องจากคุมกำเนิดล้มเหลว</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="problem_family9" value="1" id="problem_family_8"  onkeypress="return handleEnter(this, event)" />
      3.9 ตั้งครรภ์กับชายอื่นที่ไม่ใช่สามีหรือเพื่อนชายประจำ</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" disabled="disabled"  name="problem_family10" value="1" id="problem_family_9" onclick="other_name4('problem_family_9','text_problem_family')" onkeypress="return handleEnter(this, event)" />
      3.10 ตั้งครรภ์กับบุคคลสืบสายเลือดเดียวกันหรือใกล้ชิดทางสายเลือดคือ 
      <input name="text_problem_family" type="text" disabled="disabled" class="validate[condRequired[problem_family_9]]" id="text_problem_family" size="10" maxlength="50" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" disabled="disabled"  name="problem_family11" value="1" id="problem_family_10"  onkeypress="return handleEnter(this, event)" />
      3.11 หย่าหรือเลิกกับสามีหรือเพื่อนชายภายหลังจากตั้งครรภ์นี้</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled"  name="problem_family12" value="1" id="problem_family_11"  onkeypress="return handleEnter(this, event)" />
        3.12 มีบุตรพอแล้ว</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">4. เหตุผลอื่นๆ ระบุ 
      <label>
        <input name="other_reasons" type="text" id="other_reasons" size="30" maxlength="100"  onkeypress="return handleEnter(this, event)" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3" class="label_h">16. ผู้ที่มีอิทธิพลสูงสุดต่อการตัดสินใจทำแท้ง ครั้งนี้ (ตอบได้มากกว่า 1 ข้อ)</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="check_group_effect" value="1" id="check_group_effect_0"  onclick="other_name12('check_group_effect_0','')"/>
        ไม่มี</label>   
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="check_group_effect" value="2" id="check_group_effect_1"  onclick="other_name12('check_group_effect_1','other')"/>
        มี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>
        <input type="checkbox" disabled="disabled"  name="group_effect1" value="1" id="group_effect_0"   onkeypress="return handleEnter(this, event)" />
        1. ตัวอาสาสมัครเอง</label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="group_effect2" value="1" id="group_effect_1"   onkeypress="return handleEnter(this, event)" />
        2. สามี/เพื่อนชาย</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="group_effect3" value="1" id="group_effect_2"  onkeypress="return handleEnter(this, event)" />
        3. พ่อ/แม่</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="group_effect4" value="1" id="group_effect_3"  onkeypress="return handleEnter(this, event)" />
        4. พี่/น้อง</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled"  name="group_effect5" value="1" id="group_effect_4"  onkeypress="return handleEnter(this, event)" />
        5. ญาติ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled"  name="group_effect6" value="1" id="group_effect_5"  onkeypress="return handleEnter(this, event)" />
        6. เพื่อน/เพื่อนบ้าน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled"  name="group_effect7" value="1" id="group_effect_6"  onkeypress="return handleEnter(this, event)" />
        7. ครู/อาจารย์</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="group_effect8" value="1" id="group_effect_7"  onkeypress="return handleEnter(this, event)" />
        8. แพทย์/พยาบาล</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="group_effect9" value="1" id="group_effect_8" onclick="other_name4('group_effect_8','text_group_effect')"  onkeypress="return handleEnter(this, event)" />
      9. อื่นๆ ระบุ 
      <input name="text_group_effect" type="text" disabled="disabled" class="validate[condRequired[group_effect_8]]" id="text_group_effect" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">17. การทำแท้งครั้งนี้ใครเป็นผู้ทำแท้งให้</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">
      <label>
        <input type="radio" name="abortion_mode" value="1" id="abortion_mode_0"  onkeypress="return handleEnter(this, event)" disabled="disabled" onclick="other_name13('abortion_mode_0','')"/>
        1. ทำด้วยตนเอง (หากทำแท้งด้วยตนเอง ข้ามไปตอบข้อที่ 19) </label>
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="abortion_mode" value="2" id="abortion_mode_1"  onkeypress="return handleEnter(this, event)" disabled="disabled" onclick="other_name13('abortion_mode_1','other')"/>
        2. ทำโดยผู้อื่น</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">18. อาชีพของผู้ทำแท้งในครั้งนี้ </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="abortion_personal" value="1" id="abortion_personal_0" onclick="other_name('text_abortion_personal','')"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
        1. แพทย์</label>
      </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="abortion_personal" value="2" id="abortion_personal_1" onclick="other_name('text_abortion_personal','')"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
        2. พยาบาล</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="abortion_personal" value="3" id="abortion_personal_2" onclick="other_name('text_abortion_personal','')"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
        3. ผู้ช่วยพยาบาล/ เจ้าหน้าที่สาธารณสุข</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="radio" name="abortion_personal" value="4" id="abortion_personal_3" onclick="other_name('text_abortion_personal','other')"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
      4. ไม่ใช่บุคลากรทางการแพทย์ ระบุ 
      <input name="text_abortion_personal" type="text" class="validate[condRequired[abortion_personal_3]]" id="text_abortion_personal" size="30" maxlength="100"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="abortion_personal" value="5" id="abortion_personal_4" onclick="other_name('text_abortion_personal','')"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
        5. ไม่ทราบ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">19. วิธีการทำแท้ง (ตอบได้มากกว่า 1 ข้อ)</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="checkbox" disabled="disabled"  name="abortion_method1" value="1" id="abortion_method_0"  onkeypress="return handleEnter(this, event)" />
        1. ใช้เครื่องสุญญากาศดูดออกทางช่องคลอด</label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" disabled="disabled"  name="abortion_method2" value="1" id="abortion_method_1"  onkeypress="return handleEnter(this, event)" />
        2. ใช้เครื่องมือขูดออกทางช่องคลอด</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" disabled="disabled"  name="abortion_method3" value="1" id="abortion_method_2"  onkeypress="return handleEnter(this, event)" />
        3. รับประทานยาเม็ด</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" disabled="disabled"  name="abortion_method4" value="1" id="abortion_method_3"  onkeypress="return handleEnter(this, event)" />
        4. เหน็บยาเข้าทางช่องคลอด</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" disabled="disabled"  name="abortion_method5" value="1" id="abortion_method_4"  onkeypress="return handleEnter(this, event)" />
      5. ใส่สายยางและ/หรือฉีดสารใด ๆ เข้าทางช่องคลอด </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" disabled="disabled"  name="abortion_method6" value="1" id="abortion_method_5"  onkeypress="return handleEnter(this, event)" />
      6. ใช้อุปกรณ์ของแข็งสอดและ/หรือ กระทุ้งเข้าทางช่องคลอด</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" disabled="disabled"  name="abortion_method7" value="1" id="abortion_method_6"  onkeypress="return handleEnter(this, event)" />
        7. บีบ นวด เค้นบริเวณหน้าท้อง</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" disabled="disabled"  name="abortion_method8" value="1" id="abortion_method_7" onclick="other_name4('abortion_method_7','text_abortion_method1')" onkeypress="return handleEnter(this, event)" />
      8. จงใจให้เกิดอุบัติเหตุโดยวิธีใดวิธีหนึ่ง ระบุ 
      <input name="text_abortion_method1" type="text" disabled="disabled" class="validate[condRequired[abortion_method_7]]" id="text_abortion_method1" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" disabled="disabled"  name="abortion_method9" value="1" id="abortion_method_8" onclick="other_name4('abortion_method_8','text_abortion_method2')" onkeypress="return handleEnter(this, event)" />
      9. อื่นๆ ระบุ 
      <input name="text_abortion_method2" type="text" disabled="disabled" class="validate[condRequired[abortion_method_8]]" id="text_abortion_method2" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" disabled="disabled"  name="abortion_method10" value="1" id="abortion_method_9"  onkeypress="return handleEnter(this, event)" onclick="other_name14()"/>
        10. ไม่ทราบ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="checkbox" disabled="disabled"  name="abortion_method11" value="1" id="abortion_method_10" onclick="other_name7()" onkeypress="return handleEnter(this, event)"  />
      11. โรงพยาบาลที่เข้าร่วมโครงการยุติการตั้งครรภ์ด้วยยาในระบบบริการสุขภาพ</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
          <input type="radio" name="select_abortion_method" value="1" id="select_abortion_method_0" disabled="disabled" />
          1. มิฟิพริสโตน</label>
      </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
          <input type="radio" name="select_abortion_method" value="1" id="select_abortion_method_1" disabled="disabled" />
          2. ไมโซพรอสตอล</label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
          <input type="radio" name="select_abortion_method" value="1" id="select_abortion_method_2" disabled="disabled" />
          3. มิฟิพริสโตน และไมโซพรอสตอล</label></td>
  </tr>
</table>
<!--    <div align="center"><label><button class="next-product">ต่อไป</button></label></div>-->
  </div>
  <div id="tabs-4">
<table width="100%" border="0" cellspacing="2" cellpadding="5">
  <tr>
    <td colspan="3"  valign="top" class="menu_left"><strong>ข้อมูลจากแฟ้มประวัติของอาสาสมัคร</strong></td>
    <td width="37%">&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2"  valign="top" class="menu_right">&nbsp;</td>
    <td colspan="3"  valign="top"  class="label_h">คำถามข้อ 21-22 เจ้าหน้าที่เก็บข้อมูลหาข้อมูลประกอบจากแฟ้มประวัติของอาสาสมัคร</td>
    </tr>
  <tr>
    <td colspan="3"  valign="top"  class="label_h">20. อายุครรภ์ครั้งนี้</td>
  </tr>
  <tr>
    <td width="6%" rowspan="2"></td>
    <td width="6%" class="menu_right"></td>
    <td colspan="2" rowspan="2"><label>
      อายุครรภ์ครั้งนี้
        <input name="ga2" type="text" id="ga2" size="2" maxlength="2"  onkeypress="return handleEnter(this, event)"  onblur="check_large('1','42','ga2');" />
    </label>
      สัปดาห์</td>
  </tr>
  <tr>
    <td width="6%" class="menu_right"></td>
    </tr>
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td colspan="3" valign="top"   class="label_h">21. ภาวะแทรกซ้อนที่เกิดขึ้นกับอาสาสมัครหลังการแท้งเองหรือทำแท้งครั้งนี้ (ตอบได้มากกว่า 1 ข้อ)</td>
    </tr>
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td width="51%">
      <label>
        <input type="radio" name="check_group_complications" value="1" id="check_group_complications_0" onclick="other_name8('check_group_complications_0','')"/>
        ไม่มีภาวะแทรกซ้อนใด ๆ</label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td>      <label>
        <input type="radio" name="check_group_complications" value="2" id="check_group_complications_1" onclick="other_name8('check_group_complications_1','other')"/>
        มีภาวะแทรกซ้อน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
      <input type="checkbox" name="group_complications1" value="1" id="group_complications_1"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
      1. ตกเลือดมากจนต้องให้เลือด (Excessive Hemorrhage)</label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
        <input type="checkbox" name="group_complications2" value="1" id="group_complications_2"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
        2. ปากมดลูกฉีกขาด (Cervical Laceration)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" name="group_complications3" value="1" id="group_complications_3"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
        3. มดลูกทะลุ (Uterine Perforation)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" name="group_complications4" value="1" id="group_complications_4"  onkeypress="return handleEnter(this, event)" disabled="disabled"/>
      4. ลำไส้ฉีกขาดหรือทะลุ (Bowel Injuries or Perforation )</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" name="group_complications5" value="1" id="group_complications_5"  onkeypress="return handleEnter(this, event)" disabled="disabled"/>
      5. อุ้งเชิงกรานอักเสบ (Pelvic Inflammatory Disease - PID)</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" name="group_complications6" value="1" id="group_complications_6"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
        6. เยื่อบุผนังช่องท้องอักเสบ (Peritonitis)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" name="group_complications7" value="1" id="group_complications_7"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
        7. ติดเชื้อบาดทะยัก  (Tetanus)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" name="group_complications8" value="1" id="group_complications_8"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
        8. ติดเชื้อในกระแสเลือด (Septicemia)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
<input type="checkbox" name="group_complications9" value="1" id="group_complications_9"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
9. ไตวาย (Renal Failure)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" name="group_complications10" value="1" id="group_complications_10"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
        10. หัวใจวาย (Cardiac Failure)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" name="group_complications11" value="1" id="group_complications_11"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
        11. ช็อคจากการเสียเลือด (Haemorrhagic Shock)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" name="group_complications12" value="1" id="group_complications_12"  onkeypress="return handleEnter(this, event)" disabled="disabled"/>
        12. ช็อคจากการติดเชื้อ (Septic Shock)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" name="group_complications13" value="1" id="group_complications_14"  onkeypress="return handleEnter(this, event)" disabled="disabled"/>
        13. ตัดมดลูก</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" name="group_complications14" value="1" id="group_complications_15" onclick="other_name5()" onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
      14. อื่น ๆ โปรดระบุเป็นศัพท์ทางการแพทย์เขียนด้วยภาษาอังกฤษตัวพิมพ์ใหญ่ในช่องว่างข้างล่าง</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input name="text_group_complications1" type="text" disabled="disabled" id="text_group_complications1" size="60" maxlength="100" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input name="text_group_complications2" type="text" disabled="disabled" id="text_group_complications2" size="60" maxlength="100" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input name="text_group_complications3" type="text" disabled="disabled" id="text_group_complications3" size="60" maxlength="100" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">22.  สรุปผลการรักษา </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="group_disposition" value="1" id="group_disposition_0" onkeypress="return handleEnter(this, event)" onclick="other_name('text_group_disposition1','')" />
        1. หาย โดยจำหน่ายกลับบ้าน</label>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="group_disposition" value="2" id="group_disposition_1" onkeypress="return handleEnter(this, event)"  onclick="other_name('text_group_disposition1','')" />
        2. ส่งต่อไปรักษาที่ ร.พ. อื่น </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="group_disposition" value="3" id="group_disposition_2" onkeypress="return handleEnter(this, event)"  onclick="other_name('text_group_disposition1','')" />
        3. เสียชีวิต</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="radio" name="group_disposition" value="4" id="group_disposition_3"  onkeypress="return handleEnter(this, event)"  onclick="other_name('text_group_disposition1','other')" />
      4. อื่นๆ โปรดระบ 
      <input name="text_group_disposition1" type="text" disabled="disabled" class="validate[condRequired[group_disposition_3]]" id="text_group_disposition1" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td colspan="4" class="menu_center"><h2>โปรดตรวจสอบความถูกต้องสมบูรณ์ของคำถามทุกข้อ  ก่อนสิ้นสุดการตอบแบบสอบถาม<br />
      ขอขอบคุณในความร่วมมือ<br />
      สำนักอนามัยการเจริญพันธุ์  กรมอนามัย  กระทรวงสาธารณสุข<br />
      </h2></td>
  </tr>
</table>
    <div align="center"><label><!--<button  type="submit" name="button" id="button">บันทึก</button>-->
      <input name="h_submit" type="hidden" id="h_submit" value="1" />
    </label>
      <label>
        <input type="submit" name="button" id="button" value="บันทึก" />
      </label>
 
    	</div>

  </div>

<br />

<div class="Footer" >

    <div class="divleft"  style="margin-top:10px">
        <button id="btnMoveLeftTab"  type="button" value="Previous Tab" text="Previous Tab">ย้อนกลับ
        </button>
    </div>
    <div class="divright" style="margin-top:10px">
        <button id="btnMoveRightTab" type="button" value="Next Tab"  text="Next Tab">ถัดไป
        </button>
    </div>
</div>

</div><br /><br /><br />
</div>

</form>

</body>
</html>