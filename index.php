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
			
	$today = $year."-".$month."-".$day;


if(!empty($_POST['h_submit']))
	{
		
		$hospital_id = $_POST['hospital_id'];
		$file_id = $_POST['file_id'];
		for($i = strlen($file_id); $i < 4; $i++)
			$file_id = "0".$file_id ;
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
		$last_daughter_history_2 = $_POST['last_daughter_history_2'];
		
		$abortion_history = $_POST['abortion_history'];
		$check_miscarriage = $_POST['check_miscarriage'];
		$miscarriage = $_POST['miscarriage'];
		$check_abortion = $_POST['check_abortion'];
		$abortion = $_POST['abortion'];
		$first_abortion = $_POST['first_abortion'];
		$unknown_abortion = $_POST['unknown_abortion'];
		$unknown_abortion_n = $_POST['unknown_abortion_n'];
		$not_infor = $_POST['not_infor'];
		
		$plan_pregnant = $_POST['plan_pregnant'];
		
		$contraception = $_POST['contraception'];
		$text_contraception1 = $_POST['text_contraception1'];
		$not_contraception1 = $_POST['not_contraception1'];
		$not_contraception2 = $_POST['not_contraception2'];
		$not_contraception3 = $_POST['not_contraception3'];
		$not_contraception4 = $_POST['not_contraception4'];
		$not_contraception5 = $_POST['not_contraception5'];
		$not_contraception6 = $_POST['not_contraception6'];
		$not_contraception7 = $_POST['not_contraception7'];
		$not_contraception8 = $_POST['not_contraception8'];
		$not_contraception9 = $_POST['not_contraception9'];
		$not_contraception10 = $_POST['not_contraception10'];
		$not_contraception11 = $_POST['not_contraception11'];
		$textnot_contraception11 = $_POST['textnot_contraception11'];
		
		$text_contraception2 = $_POST['text_contraception2'];
		$use_contraception1 = $_POST['use_contraception1'];
		$use_contraception2 = $_POST['use_contraception2'];
		$use_contraception3 = $_POST['use_contraception3'];
		$use_contraception4 = $_POST['use_contraception4'];
		$use_contraception5 = $_POST['use_contraception5'];
		$use_contraception6 = $_POST['use_contraception6'];
		$use_contraception7 = $_POST['use_contraception7'];
		$use_contraception8 = $_POST['use_contraception8'];
		$use_contraception9 = $_POST['use_contraception9'];
		$use_contraception10 = $_POST['use_contraception10'];
		$use_contraception11 = $_POST['use_contraception11'];
		$use_contraception12 = $_POST['use_contraception12'];
		$use_contraception13 = $_POST['use_contraception13'];
		$use_contraception14 = $_POST['use_contraception14'];
		$use_contraception15 = $_POST['use_contraception15'];
		$textuse_contraception15 = $_POST['textuse_contraception15'];
		
		$cause_abortion = $_POST['cause_abortion'];
		$check_problem_health = $_POST['check_problem_health'];
		$problem_health1 = $_POST['problem_health1'];
		
		$problem_health411 = $_POST['problem_health411'];
		$text_thalassemia = $_POST['text_thalassemia'];
		$text_other16_43 = $_POST['text_other16_43'];
		
		$problem_health511 = $_POST['problem_health511'];
		$text_other16_51 = $_POST['text_other16_51'];
		$text_other16_52 = $_POST['text_other16_52'];
		
		$check_problem_money = $_POST['check_problem_money'];		
		$problem_money1 = $_POST['problem_money1'];
		$problem_money2 = $_POST['problem_money2'];
		$problem_money3 = $_POST['problem_money3'];
		$text_problem_money = $_POST['text_problem_money'];
		$problem_money4 = $_POST['problem_money4'];
		
		$check_problem_family = $_POST['check_problem_family'];
		
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
		$text_problem_family = $_POST['text_problem_family'];
		$problem_family12 = $_POST['problem_family12'];
		
		
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
		$group_effect10 = $_POST['group_effect10'];
		$group_effect11 = $_POST['group_effect11'];
		$text_group_effect = $_POST['text_group_effect'];
		
		$abortionbyself = $_POST['abortionbyself'];
		$abortion18_11 = $_POST['abortion18_11'];
		$abortion18_12 = $_POST['abortion18_12'];
		$abortion18_13 = $_POST['abortion18_13'];
		$abortion18_14 = $_POST['abortion18_14'];
		$abortion18_15 = $_POST['abortion18_15'];
		$abortion18_16 = $_POST['abortion18_16'];
		$abortion18_17 = $_POST['abortion18_17'];
		$text_abortion18_17 = $_POST['text_abortion18_17'];
		$abortion18_18 = $_POST['abortion18_18'];
		$text_abortion18_18 = $_POST['text_abortion18_18'];
		
		$abortionbymed1 = $_POST['abortionbymed1'];
		$abortion18_21 = $_POST['abortion18_21'];
		$abortion18_22 = $_POST['abortion18_22'];
		$abortion18_23 = $_POST['abortion18_23'];
		$abortion18_24 = $_POST['abortion18_24'];
		$abortion18_25 = $_POST['abortion18_25'];
		$abortion18_26 = $_POST['abortion18_26'];
		$text_abortion18_26 = $_POST['text_abortion18_26'];
		
		$abortionbypublic_health1 = $_POST['abortionbypublic_health1'];
		$abortion18_31 = $_POST['abortion18_31'];
		$abortion18_32 = $_POST['abortion18_32'];
		$abortion18_33 = $_POST['abortion18_33'];
		$abortion18_34 = $_POST['abortion18_34'];
		$abortion18_35 = $_POST['abortion18_35'];
		$abortion18_36 = $_POST['abortion18_36'];
		$abortion18_37 = $_POST['abortion18_37'];
		$abortion18_38 = $_POST['abortion18_38'];
		$abortion18_39 = $_POST['abortion18_39'];
		$abortion18_310 = $_POST['abortion18_310'];
		$abortion18_311 = $_POST['abortion18_311'];
		$text_abortion18_38 = $_POST['text_abortion18_38'];
		$text_abortion18_39 = $_POST['text_abortion18_39'];
		
		$abortionbynotmed1 = $_POST['abortionbynotmed1'];
		$abortion18_41 = $_POST['abortion18_41'];
		$abortion18_42 = $_POST['abortion18_42'];
		$abortion18_43 = $_POST['abortion18_43'];
		$abortion18_44 = $_POST['abortion18_44'];
		$abortion18_45 = $_POST['abortion18_45'];
		$abortion18_46 = $_POST['abortion18_46'];
		$abortion18_47 = $_POST['abortion18_47'];
		$abortion18_48 = $_POST['abortion18_48'];
		$abortion18_49 = $_POST['abortion18_49'];
		$abortion18_410 = $_POST['abortion18_410'];
		$abortion18_411 = $_POST['abortion18_411'];
		$text_abortion18_48 = $_POST['text_abortion18_48'];
		$text_abortion18_49 = $_POST['text_abortion18_49'];
		
		$abortionbyunknow1 = $_POST['abortionbyunknow1'];
		$abortion18_51 = $_POST['abortion18_51'];
		$abortion18_52 = $_POST['abortion18_52'];
		$abortion18_53 = $_POST['abortion18_53'];
		$abortion18_54 = $_POST['abortion18_54'];
		$abortion18_55 = $_POST['abortion18_55'];
		$abortion18_56 = $_POST['abortion18_56'];
		$abortion18_57 = $_POST['abortion18_57'];
		$abortion18_58 = $_POST['abortion18_58'];
		$abortion18_59 = $_POST['abortion18_59'];
		$abortion18_510 = $_POST['abortion18_510'];
		$abortion18_511 = $_POST['abortion18_511'];
		$text_abortion18_58 = $_POST['text_abortion18_58'];
		$text_abortion18_59 = $_POST['text_abortion18_59'];
		
		$ga2 = $_POST['ga2'];
		
		$check_group_complications = $_POST['check_group_complications'];
		
		$group_complications1 = $_POST['group_complications1'];
		$bleed1 = $_POST['bleed1'];
		$bleed2 = $_POST['bleed2'];
		
		$group_complications2 = $_POST['group_complications2'];
		$infection1 = $_POST['infection1'];
		$infection2 = $_POST['infection2'];
		$infection3 = $_POST['infection3'];
		
		
		$group_complications3 = $_POST['group_complications3'];
		$organ1 = $_POST['organ1'];
		$organ2 = $_POST['organ2'];
		$organ3 = $_POST['organ3'];
		$organ4 = $_POST['organ4'];
		$organ5 = $_POST['organ5'];
		$organ6 = $_POST['organ6'];
		$organ7 = $_POST['organ7'];
		$organ8 = $_POST['organ8'];
		
		
		
		$group_complications4 = $_POST['group_complications4'];
		$text_other_med1 = $_POST['text_other_med1'];
		$text_other_med2 = $_POST['text_other_med2'];
		$text_other_med3 = $_POST['text_other_med3'];
		
				
		$status_baby = $_POST['status_baby'];
		
		$group_disposition = $_POST['group_disposition'];
		
		$text_group_disposition1 = $_POST['text_group_disposition1'];
		
		
		
		

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
		
		$nationality = intval($nationality);
		$religion = intval($religion);
		$status = intval($status);
		$job = intval($job);
		$education = intval($education);
		$friend_education = intval($friend_education);
		$salary = intval($salary);
		$friend_salary = intval($friend_salary);
		$pregnancy_history = intval($pregnancy_history);
		$births_history = intval($births_history);
		$children_history = intval($children_history);
		$last_daughter_history = intval($last_daughter_history);
		$last_daughter_history_2 = intval($last_daughter_history_2);
		$check_miscarriage = intval($check_miscarriage);
		$miscarriage = intval($miscarriage);
		$check_abortion = intval($check_abortion);
		$abortion = intval($abortion);
		$plan_pregnant = intval($plan_pregnant);
		$contraception = intval($contraception);
		$not_contraception1 = intval($not_contraception1);
		$not_contraception2 = intval($not_contraception2);
		$not_contraception3 = intval($not_contraception3);
		$not_contraception4 = intval($not_contraception4);
		$not_contraception5 = intval($not_contraception5);
		$not_contraception6 = intval($not_contraception6);
		$not_contraception7 = intval($not_contraception7);
		$not_contraception8 = intval($not_contraception8);
		$not_contraception9 = intval($not_contraception9);
		$not_contraception10 = intval($not_contraception10);
		$not_contraception11 = intval($not_contraception11);
		$use_contraception1 = intval($use_contraception1);
		$use_contraception2 = intval($use_contraception2);
		$use_contraception3 = intval($use_contraception3);
		$use_contraception4 = intval($use_contraception4);
		$use_contraception5 = intval($use_contraception5);
		$use_contraception6 = intval($use_contraception6);
		$use_contraception7 = intval($use_contraception7);
		$use_contraception8 = intval($use_contraception8);
		$use_contraception9 = intval($use_contraception9);
		$use_contraception10 = intval($use_contraception10);
		$use_contraception11 = intval($use_contraception11);
		$use_contraception12 = intval($use_contraception12);
		$use_contraception13 = intval($use_contraception13);
		$use_contraception14 = intval($use_contraception14);
		$use_contraception15 = intval($use_contraception15);
		$cause_abortion = intval($cause_abortion);
		$check_problem_health = intval($check_problem_health);
		$problem_health1 = intval($problem_health1);
		$problem_health411 = intval($problem_health411);
		$problem_health511 = intval($problem_health511);
		$check_problem_money = intval($check_problem_money);
		$problem_money1 = intval($problem_money1);
		$problem_money2 = intval($problem_money2);
		$problem_money3 = intval($problem_money3);
		$problem_money4 = intval($problem_money4);
		$check_problem_family = intval($check_problem_family);
		$problem_family1 = intval($problem_family1);
		$problem_family2 = intval($problem_family2);
		$problem_family3 = intval($problem_family3);
		$problem_family4 = intval($problem_family4);
		$problem_family5 = intval($problem_family5);
		$problem_family6 = intval($problem_family6);
		$problem_family7 = intval($problem_family7);
		$problem_family8 = intval($problem_family8);
		$problem_family9 = intval($problem_family9);
		$problem_family10 = intval($problem_family10);
		$problem_family11 = intval($problem_family11);
		$problem_family12 = intval($problem_family12);
		$group_effect1 = intval($group_effect1);
		$group_effect2 = intval($group_effect2);
		$group_effect3 = intval($group_effect3);
		$group_effect4 = intval($group_effect4);
		$group_effect5 = intval($group_effect5);
		$group_effect6 = intval($group_effect6);
		$group_effect7 = intval($group_effect7);
		$group_effect8 = intval($group_effect8);
		$group_effect9 = intval($group_effect9);
		$group_effect10 = intval($group_effect10);
		$group_effect11 = intval($group_effect11);
		$abortionbyself = intval($abortionbyself);
		$abortion18_11 = intval($abortion18_11);
		$abortion18_12 = intval($abortion18_12);
		$abortion18_13 = intval($abortion18_13);
		$abortion18_14 = intval($abortion18_14);
		$abortion18_15 = intval($abortion18_15);
		$abortion18_16 = intval($abortion18_16);
		$abortion18_17 = intval($abortion18_17);
		$abortion18_18 = intval($abortion18_18);
		$abortionbymed1 = intval($abortionbymed1);
		$abortion18_21 = intval($abortion18_21);
		$abortion18_22 = intval($abortion18_22);
		$abortion18_23 = intval($abortion18_23);
		$abortion18_24 = intval($abortion18_24);
		$abortion18_25 = intval($abortion18_25);
		$abortion18_26 = intval($abortion18_26);
		$abortion18_26 = intval($abortion18_26);
		$abortionbypublic_health1 = intval($abortionbypublic_health1);
		$abortion18_31 = intval($abortion18_31);
		$abortion18_32 = intval($abortion18_32);
		$abortion18_33 = intval($abortion18_33);
		$abortion18_34 = intval($abortion18_34);
		$abortion18_35 = intval($abortion18_35);
		$abortion18_36 = intval($abortion18_36);
		$abortion18_37 = intval($abortion18_37);
		$abortion18_38 = intval($abortion18_38);
		$abortion18_39 = intval($abortion18_39);
		$abortion18_310 = intval($abortion18_310);
		$abortion18_311 = intval($abortion18_311);
		$abortionbynotmed1 = intval($abortionbynotmed1);
		$abortion18_41 = intval($abortion18_41);
		$abortion18_42 = intval($abortion18_42);
		$abortion18_43 = intval($abortion18_43);
		$abortion18_44 = intval($abortion18_44);
		$abortion18_45 = intval($abortion18_45);
		$abortion18_46 = intval($abortion18_46);
		$abortion18_47 = intval($abortion18_47);
		$abortion18_48 = intval($abortion18_48);
		$abortion18_49 = intval($abortion18_49);
		$abortion18_410 = intval($abortion18_410);
		$abortion18_411 = intval($abortion18_411);
		$abortionbyunknow1 = intval($abortionbyunknow1);
		$abortion18_51 = intval($abortion18_51);
		$abortion18_52 = intval($abortion18_52);
		$abortion18_53 = intval($abortion18_53);
		$abortion18_54 = intval($abortion18_54);
		$abortion18_55 = intval($abortion18_55);
		$abortion18_56 = intval($abortion18_56);
		$abortion18_57 = intval($abortion18_57);
		$abortion18_58 = intval($abortion18_58);
		$abortion18_59 = intval($abortion18_59);
		$abortion18_510 = intval($abortion18_510);
		$abortion18_511 = intval($abortion18_511);
		$ga2 = intval($ga2);
		$check_group_complications = intval($check_group_complications);
		$group_complications1 = intval($group_complications1);
		$bleed1 = intval($bleed1);
		$bleed2 = intval($bleed2);
		$group_complications2 = intval($group_complications2);
		$infection1 = intval($infection1);
		$infection2 = intval($infection2);
		$infection3 = intval($infection3);
		$group_complications3 = intval($group_complications3);
		$organ1 = intval($organ1);
		$organ2 = intval($organ2);
		$organ3 = intval($organ3);
		$organ4 = intval($organ4);
		$organ5 = intval($organ5);
		$organ6 = intval($organ6);
		$organ7 = intval($organ7);
		$organ8 = intval($organ8);
		$group_complications4 = intval($group_complications4);
		$status_baby = intval($status_baby);
		$group_disposition = intval($group_disposition);
		$user_add = intval($user_add);
		$status_check = intval($status_check);
		$user_check = intval($user_check);
		
		$survey_year = date("Y", strtotime($survey_datefirst));
		$sql = "INSERT INTO abortionsurvey_main_2559 (survey_id, survey_agency, survey_district, survey_province, survey_name, survey_position, survey_datefirst, survey_dateend, age, friend_age, text_friend_age, nationality, text_nationality, religion, text_religion, status, first_si, job, text_job1, text_job2, education, text_education, friend_education, text_friend_education, salary, text_salary, friend_salary, text_friend_salary, pregnancy_history, births_history, children_history, last_daughter_history,last_daughter_history_2, abortion_history, check_miscarriage, miscarriage, check_abortion, abortion, first_abortion, unknown_abortion, unknown_abortion_n, not_infor, plan_pregnant, contraception, text_contraception1, not_contraception1, not_contraception2, not_contraception3, not_contraception4, not_contraception5, not_contraception6, not_contraception7, not_contraception8, not_contraception9, not_contraception10, not_contraception11, textnot_contraception11, text_contraception2, use_contraception1, use_contraception2, use_contraception3, use_contraception4, use_contraception5, use_contraception6, use_contraception7, use_contraception8, use_contraception9, use_contraception10, use_contraception11, use_contraception12, use_contraception13, use_contraception14, use_contraception15, textuse_contraception15, cause_abortion, check_problem_health, problem_health1, problem_health411, text_thalassemia, text_other16_43, problem_health511, text_other16_51, text_other16_52, check_problem_money, problem_money1, problem_money2, problem_money3, text_problem_money, problem_money4, check_problem_family, problem_family1, problem_family2, problem_family3,problem_family4, problem_family5, problem_family6, problem_family7, problem_family8, problem_family9, problem_family10, problem_family11, text_problem_family, problem_family12,	other_reasons, group_effect1, group_effect2, group_effect3, group_effect4, group_effect5, group_effect6, group_effect7, group_effect8, group_effect9, group_effect10, group_effect11, text_group_effect, abortionbyself, abortion18_11, abortion18_12, abortion18_13, abortion18_14, abortion18_15, abortion18_16, abortion18_17, text_abortion18_17, abortion18_18, text_abortion18_18,  abortionbymed1, abortion18_21, abortion18_22, abortion18_23, abortion18_24, abortion18_25, abortion18_26, text_abortion18_26, abortionbypublic_health1, abortion18_31, abortion18_32, abortion18_33, abortion18_34, abortion18_35, abortion18_36, abortion18_37, abortion18_38, abortion18_39, text_abortion18_38, abortion18_310, text_abortion18_39, abortion18_311, abortionbynotmed1, abortion18_41, abortion18_42, abortion18_43, abortion18_44, abortion18_45, abortion18_46, abortion18_47, abortion18_48, abortion18_49, text_abortion18_48, abortion18_410, text_abortion18_49, abortion18_411, abortionbyunknow1, abortion18_51, abortion18_52, abortion18_53, abortion18_54, abortion18_55, abortion18_56, abortion18_57, abortion18_58, abortion18_59, text_abortion18_58, abortion18_510, text_abortion18_59, abortion18_511, ga2, check_group_complications, group_complications1, bleed1, bleed2, group_complications2, infection1, infection2, infection3, group_complications3, organ1, organ2, organ3, organ4, organ5, organ6, organ7, organ8, group_complications4, text_other_med1, text_other_med2, text_other_med3, status_baby, group_disposition, text_group_disposition1, data_add, time_add, user_add, ip_add, status_check, user_check, survey_year) 
		VALUES ('$survey_id', '$survey_agency', '$survey_district', '$survey_province', '$survey_name', '$survey_position', '$survey_datefirst', '$survey_dateend', '$age', '$friend_age', '$text_friend_age', '$nationality', '$text_nationality', '$religion', '$text_religion', '$status', '$first_si', '$job', '$text_job1', '$text_job2', '$education', '$text_education', '$friend_education', '$text_friend_education', '$salary', '$text_salary', '$friend_salary', '$text_friend_salary', '$pregnancy_history', '$births_history', '$children_history', '$last_daughter_history', '$last_daughter_history_2', '$abortion_history', '$check_miscarriage', '$miscarriage', '$check_abortion', '$abortion', '$first_abortion', '$unknown_abortion', '$unknown_abortion_n', '$not_infor', '$plan_pregnant', '$contraception', '$text_contraception1', '$not_contraception1', '$not_contraception2', '$not_contraception3', '$not_contraception4', '$not_contraception5', '$not_contraception6', '$not_contraception7', '$not_contraception8', '$not_contraception9', '$not_contraception10', '$not_contraception11', '$textnot_contraception11', '$text_contraception2', '$use_contraception1', '$use_contraception2', '$use_contraception3', '$use_contraception4', '$use_contraception5', '$use_contraception6', '$use_contraception7', '$use_contraception8', '$use_contraception9', '$use_contraception10', '$use_contraception11', '$use_contraception12', '$use_contraception13', '$use_contraception14', '$use_contraception15', '$textuse_contraception15', '$cause_abortion', '$check_problem_health', '$problem_health1', '$problem_health411', '$text_thalassemia', '$text_other16_43', '$problem_health511', '$text_other16_51', '$text_other16_52', '$check_problem_money', '$problem_money1', '$problem_money2', '$problem_money3', '$text_problem_money', '$problem_money4', '$check_problem_family', '$problem_family1', '$problem_family2', '$problem_family3', '$problem_family4', '$problem_family5', '$problem_family6', '$problem_family7', '$problem_family8', '$problem_family9', '$problem_family10', '$problem_family11', '$text_problem_family', '$problem_family12', '$other_reasons', '$group_effect1', '$group_effect2', '$group_effect3', '$group_effect4', '$group_effect5', '$group_effect6', '$group_effect7', '$group_effect8', '$group_effect9', '$group_effect10', '$group_effect11', '$text_group_effect', '$abortionbyself', '$abortion18_11', '$abortion18_12', '$abortion18_13', '$abortion18_14', '$abortion18_15', '$abortion18_16', '$abortion18_17', '$text_abortion18_17', '$abortion18_18', '$text_abortion18_18',  '$abortionbymed1', '$abortion18_21', '$abortion18_22', '$abortion18_23', '$abortion18_24', '$abortion18_25', '$abortion18_26', '$text_abortion18_26', '$abortionbypublic_health1', '$abortion18_31', '$abortion18_32', '$abortion18_33', '$abortion18_34', '$abortion18_35', '$abortion18_36', '$abortion18_37', '$abortion18_38', '$abortion18_39', '$text_abortion18_38', '$abortion18_310', '$text_abortion18_39', '$abortion18_311', '$abortionbynotmed1', '$abortion18_41', '$abortion18_42', '$abortion18_43', '$abortion18_44', '$abortion18_45', '$abortion18_46', '$abortion18_47', '$abortion18_48', '$abortion18_49', '$text_abortion18_48', '$abortion18_410', '$text_abortion18_49', '$abortion18_411', '$abortionbyunknow1', '$abortion18_51', '$abortion18_52', '$abortion18_53', '$abortion18_54', '$abortion18_55', '$abortion18_56', '$abortion18_57', '$abortion18_58', '$abortion18_59', '$text_abortion18_58', '$abortion18_510', '$text_abortion18_59', '$abortion18_511', '$ga2', '$check_group_complications', '$group_complications1', '$bleed1', '$bleed2', '$group_complications2', '$infection1', '$infection2', '$infection3', '$group_complications3', '$organ1', '$organ2', '$organ3', '$organ4', '$organ5', '$organ6', '$organ7', '$organ8', '$group_complications4', '$text_other_med1', '$text_other_med2', '$text_other_med3', '$status_baby', '$group_disposition', '$text_group_disposition1', '$today', '$now_time', '".$_SESSION["ss_id"]."', '$ipaddress', '$status_check', '$user_check', '$survey_year')";
		$result = mysql_query($sql);


//echo $sql;
	
		$_SESSION["ss_survey_name"] = $survey_name;
		$_SESSION["ss_survey_position"] = $survey_position;
		
		if($result){
			echo"<script>
			alert('บันทึกข้อมูล ".$survey_id." เรียบร้อยแล้ว');
			window.location = 'index.php#tabs-2';
			</script>";	
		}
		else{
			echo"<script>
			//alert('".mysql_error()."');
			window.location = 'index.php#tabs-2';
			</script>";
			
		}
		//echo $sql;	
	}

//echo $sql;
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

			
	/*$( "#survey_datefirst" ).datepicker({
		onSelect: function(date) {
			var year = $(this).datepicker('getDate').getFullYear();
            check_id(year);
        },
		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true

     			
		}); 

	$( "#survey_dateend" ).datepicker({
		onSelect: function(date) {
			var dateFirst = $("#survey_datefirst").datepicker('getDate');
            var dateEnd = $(this).datepicker('getDate');
			if(dateFirst > dateEnd){
				alert("วัน/ เดือน/ ปีที่จำหน่ายจากโรงพยาบาลไม่ถูกต้อง");
				document.getElementById("survey_dateend").value="";
			}
        },
		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true

		});*/
		
	var dateFormat = "dd/mm/yy",
		dateFirst = $( "#survey_datefirst" )
			.datepicker({
				defaultDate: "+1w",
				changeMonth: true,
				changeYear: true
			})
			.on( "change", function() {
				dateEnd.datepicker( "option", "minDate", getDate( this ) );
				var year = $(this).datepicker('getDate').getFullYear();
				check_id(year);
			}),
		dateEnd = $( "#survey_dateend" )
			.datepicker({
				defaultDate: "+1w",
				changeMonth: true,
				changeYear: true
			})
			.on( "change", function() {
				dateFirst.datepicker( "option", "maxDate", getDate( this ) );
			});

	function getDate( element ) {
		var date;
		try {
			date = $.datepicker.parseDate( dateFormat, element.value );
		} catch( error ) {
			date = null;
		}

		return date;
	}

  //----------------------------------------------------------------------	


	});
//-------------------- select ID -----------------------
function toId(){
	var id = document.getElementById("file_id").value;
	for(var i = id.length; i < 4; i++){
		id  = "0"+id;
	}
	return id;
}
function convertId(){
	document.getElementById("file_id").value = toId(document.getElementById("file_id").value);
}
function clearDate(){
	$.post("check_id.php",
		function(data){
			$("#h_check_id").val(data);
			var h = document.form1.hospital_id.value;
			var fid = toId(document.getElementById("file_id").value);
			var h_check_id=document.getElementById("h_check_id").value;
			//var h_check_id = document.form1.h_check_id.value;
			  
			var text = h+'-'+fid;
		//----------------------------------------------------- เช็คค่าซ้ำ Array ------------------------------------	
			var array_h_check_id = h_check_id.split(",");
			  for (var i = 1; i < array_h_check_id.length; i++)
			  { 
				var temp = array_h_check_id[i].split(":");
				var id_chk = temp[0];
				if (id_chk == text) 
				{
					document.getElementById("survey_datefirst").value="";
					return true ;
				} 
			  }
		}
	);
}

function check_id(year){
	$.post("check_id.php",
		function(data){
			$("#h_check_id").val(data);
			var h = document.form1.hospital_id.value;
			var fid = toId(document.getElementById("file_id").value);
			document.getElementById("file_id").value = fid;
			var h_check_id=document.getElementById("h_check_id").value;
			//var h_check_id = document.form1.h_check_id.value;
			var text = h+'-'+fid;
		//----------------------------------------------------- เช็คค่าซ้ำ Array ------------------------------------	
			var array_h_check_id = h_check_id.split(",");
		
			  for (var i = 0; i < array_h_check_id.length; i++)
			  {
				var temp = array_h_check_id[i].split(":");
				var id_chk = temp[0];
				var year_chk = temp[1];
				if (id_chk == text && year == year_chk) 
				{
					alert("รหัสนี้ถูกบันทึกในปี "+(year+543)+" เรียบร้อยแล้ว");
					document.getElementById("survey_datefirst").value="";
					document.getElementById("survey_datefirst").focus();
					return true;
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
			var dateFirst = document.getElementById("survey_datefirst").value;
			if(!!dateFirst){
				tDate = dateFirst.split("/")
				var year = tDate[2];
				year -= 543;
				check_id(year);
			}
		}
	);
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
						if (x='')
						{
							document.getElementById("text_contraception1").disabled='true';
							document.getElementById("text_contraception2").disabled='true';
						}
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
	function other_name6(name1,name2,name3,name4)
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
						document.getElementById("problem_health_6").disabled=false;
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
						document.getElementById("problem_health_6").disabled=true;
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
						document.getElementById("problem_health_6").disabled= false;
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
	function other_name101(name1,status)
	{
		var x1=name1;
		var x2=status;
		
		if(x1 == 'check_miscarriage')
			{		

						document.getElementById("check_miscarriage").disabled=false;
						document.getElementById("check_abortion").disabled=false;
						document.getElementById("unknown_abortion").disabled=false;
						document.getElementById("not_infor").disabled=false;
			}
			else
			{
						document.getElementById("check_miscarriage").checked=false;
						document.getElementById("check_abortion").checked=false;
						document.getElementById("unknown_abortion").checked=false;
						document.getElementById("not_infor").checked=false;
						document.getElementById("check_miscarriage").disabled=true;
						document.getElementById("check_abortion").disabled=true;
						document.getElementById("unknown_abortion").disabled=true;
						document.getElementById("not_infor").disabled=true;
						
						
						document.getElementById("miscarriage").value='';
						document.getElementById("miscarriage").disabled=true;
						document.getElementById("abortion").value='';
						document.getElementById("abortion").disabled=true;
						document.getElementById("first_abortion").value='';
						document.getElementById("first_abortion").disabled=true;
						document.getElementById("unknown_abortion_n").value='';
						document.getElementById("unknown_abortion_n").disabled=true;
						
			}
	}
	
	function other_name102(name1,name2,name3)
	{
		var x1=name1;
		var x2=name2;
		var x3=name3;
		
		if(document.getElementById(""+x1).value == 1)
			{		

						document.getElementById(""+x2).disabled=false;
						document.getElementById(""+x3).value='';
						document.getElementById(""+x3).disabled=true;
						
			}else
			{
						document.getElementById(""+x3).disabled=false;
						document.getElementById(""+x2).value='';
						document.getElementById(""+x2).disabled=true;
			}
			
	}
	function other_name103(name1,name2,name3,name4,name5,name6,name7)
	{
		var x1=name1;
		var x2=name2;
		var x3=name3;
		var x4=name4;
		var x5=Number(name5);
		var x6=Number(name6);
		var x7=name7;
		var i=1;
		
		if(document.getElementById(''+x1).checked = true)
		{
			if(x7== 1)
			{		
					document.getElementById('text'+x4+x6).disabled=true;
					document.getElementById('text'+x4+x6).value='';
					for (i=1;i<=x5;i++)
					{
						document.getElementById(x3+i).disabled=false;
					}
					for (i=1;i<=x6;i++)
					{
						document.getElementById(x4+i).checked=false;
						document.getElementById(x4+i).disabled=true;
					}
			}else if(x7== 2)
			{		
					document.getElementById('text'+x4+x6).disabled=true;
					document.getElementById('text'+x4+x6).value='';
					for (i=1;i<=x5;i++)
					{
						document.getElementById(x3+i).disabled=false;
					}
					for (i=1;i<=x6;i++)
					{
						document.getElementById(x4+i).checked=false;
						document.getElementById(x4+i).disabled=true;
					}
			}else
			{
				
				document.getElementById('text'+x3+x5).disabled=true;
				document.getElementById('text'+x3+x5).value='';
				document.getElementById('text'+x4+x6).disabled=true;
				document.getElementById('text'+x4+x6).value='';
				for (i=1;i<=x5;i++)
					{
						document.getElementById(x3+i).checked=false;
						document.getElementById(x3+i).disabled=true;
					}
					for (i=1;i<=x6;i++)
					{
						document.getElementById(x4+i).checked=false;
						document.getElementById(x4+i).disabled=true;
					}
			}
			
			
		}
		
	}
	
		function other_name104(name1,name2,name3)
	{
		var x1=name1;
		var x2=name2;
		var x3=Number(name3);
		var i;
		
		if(document.getElementById(''+x1).value == 4)
			{
				
				document.getElementById("problem_health511").checked =false;
				document.getElementById("problem_health511").disabled=true;
				document.getElementById("problem_health512").checked =false;
				document.getElementById("problem_health512").disabled=true;
				document.getElementById("text_other16_52").value='';
				document.getElementById("text_other16_52").disabled=true;
				document.getElementById("text_other16_51").value='';
				document.getElementById("text_other16_51").disabled=true;
				
				
			}
			else if(document.getElementById(''+x1).value == 5)
			{
				document.getElementById("problem_health411").checked =false;
				document.getElementById("problem_health411").disabled=true;
				document.getElementById("problem_health412").checked =false;
				document.getElementById("problem_health412").disabled=true;
				document.getElementById("problem_health413").checked =false;
				document.getElementById("problem_health413").disabled=true;
				document.getElementById("text_thalassemia").value='';
				document.getElementById("text_thalassemia").disabled=true;
				document.getElementById("text_other16_43").disabled=true;
				document.getElementById("text_other16_43").value='';
				
			}else
			{
				document.getElementById("problem_health511").checked =false;
				document.getElementById("problem_health511").disabled=true;
				document.getElementById("text_thalassemia").value='';
				document.getElementById("text_thalassemia").disabled=true;
				document.getElementById("problem_health512").checked =false;
				document.getElementById("problem_health512").disabled=true;
				document.getElementById("text_other16_43").value='';
				document.getElementById("text_other16_43").disabled=true;
				document.getElementById("problem_health411").checked =false;
				document.getElementById("problem_health411").disabled=true;
				document.getElementById("text_other16_51").value='';
				document.getElementById("text_other16_51").disabled=true;
				document.getElementById("problem_health412").checked =false;
				document.getElementById("problem_health412").disabled=true;
				document.getElementById("text_other16_52").value='';
				document.getElementById("text_other16_52").disabled=true;
				document.getElementById("problem_health413").checked =false;
				document.getElementById("problem_health413").disabled=true;
				
			}
		if(document.getElementById(''+x1).checked = true)
		{
			for (i=1;i<=x3;i++)
					{
						document.getElementById(x2+i).disabled=false;
					}
					
			
			
		}
		else
		{
			for (i=1;i<=x3;i++)
					{
						document.getElementById(x2+i).disabled=true;
					}
			
				
				
				
		}
	}
	function other_name105(name1,name2,name3)
	{
		var x1=name1;
		var x2=name2;
		var x3=name3;
		var i;
		
		if(document.getElementById(""+x1).checked == true && document.getElementById(""+x1).value == 2 )
			{		
					for (i=2;i<=x3;i++)
					{
						document.getElementById(x2+i).checked =false;
						document.getElementById(x2+i).disabled=true;
					}
			}else
			{
				for (i=2;i<=x3;i++)
					{
						
						document.getElementById(x2+i).disabled=false;
					}
			}
			
	}
	
	function other_name106(name1,name2,name3,name4)
	{
		var x1=name1;
		var x2=name2;
		var x3=Number(name3);
		var x4=name4;
		var i;
		
		if(document.getElementById(""+x1).checked == true && document.getElementById(""+x1).value == 2 )
			{		
					document.getElementById(x4).disabled=true;
					document.getElementById(x4).value='';
					for (i=0;i<=x3;i++)
					{
						document.getElementById(x2+i).checked=false;
						document.getElementById(x2+i).disabled=true;
					}
			}else
			{
				for (i=0;i<=x3;i++)
					{
						
						document.getElementById(x2+i).disabled=false;
					}
			}
			
	}
	
	function other_name107(name1,name2,name3,name4,name5)
	{
		var x1=name1;
		var x2=name2;
		var x3=Number(name3);
		var x4=name4;
		var x5=name5;
		var i;
		
		if(document.getElementById(""+x1).checked == true && document.getElementById(""+x1).value == 2 )
			{		
					document.getElementById(x4).disabled=true;
					document.getElementById(x4).value='';
					document.getElementById(x5).disabled=true;
					document.getElementById(x5).value='';
					for (i=0;i<=x3;i++)
					{
						document.getElementById(x2+i).checked=false;
						document.getElementById(x2+i).disabled=true;
					}
			}else
			{
				for (i=0;i<=x3;i++)
					{
						
						document.getElementById(x2+i).disabled=false;
					}
			}
			
	}
	
	function other_name108(name1,name2,name3)
	{
		var x1=name1;
		var x2=name2;
		var x3=name3;
		var i;
		
		if(document.getElementById(x1).value== 1)
			{		
					
						
						document.getElementById(x2).disabled=false;
						document.getElementById(x3).disabled=true;
						document.getElementById(x3).value='';
					
			}else if(document.getElementById(x1).value== 3)
			{
				document.getElementById(x3).disabled=false;
				document.getElementById(x2).disabled=true;
				document.getElementById(x2).value='';
				
			}
			else
			{
				document.getElementById(x2).disabled=true;
				document.getElementById(x3).disabled=true;
				document.getElementById(x2).value='';
				document.getElementById(x3).value='';
			}
	}
	
	function other_name109(name1,name2,name3)
	{
		var x1=name1;
		var x2=name2;
		var x3=Number(name3);
		var j;
		var i;
		
		if(document.getElementById(""+x1).checked == true && document.getElementById(""+x1).value == 2 )
			{		
					
					document.getElementById("bleed1").checked=false;
					document.getElementById("bleed1").disabled=true;
					document.getElementById("bleed2").checked=false;
					document.getElementById("bleed2").disabled=true;
					document.getElementById("infection1").checked=false;
					document.getElementById("infection1").disabled=true;
					document.getElementById("infection2").checked=false;
					document.getElementById("infection2").disabled=true;
					document.getElementById("infection3").checked=false;
					document.getElementById("infection3").disabled=true;
					document.getElementById("text_other_med1").value='';
					document.getElementById("text_other_med1").disabled=true;
					document.getElementById("text_other_med2").value='';
					document.getElementById("text_other_med2").disabled=true;
					document.getElementById("text_other_med3").value='';
					document.getElementById("text_other_med3").disabled=true;
					for (j=1;j<=8;j++)
					{
						document.getElementById("organ"+j).checked=false;
						document.getElementById("organ"+j).disabled=true;
					}
					for (i=0;i<=x3;i++)
					{
						document.getElementById(x2+i).checked=false;
						document.getElementById(x2+i).disabled=true;
					}
			}else
			{
				for (i=0;i<=x3;i++)
					{
						
						document.getElementById(x2+i).disabled=false;
					}
			}
	
	}
	
	function other_name110(name1,name2,name3)
	{
		var x1=name1;
		var x2=name2;
		var x3=Number(name3);
		
		var i;
		
		if(document.getElementById(""+x1).checked == true)
			{		
					
					for (i=1;i<=x3;i++)
					{
						
						document.getElementById(x2+i).disabled=false;
					}
			}else
			{
				for (i=1;i<=x3;i++)
					{
						document.getElementById(x2+i).checked=false;
						document.getElementById(x2+i).disabled=true;
					}
			}
	}
	
	function other_name111(v,name2)
	{
		var x2=name2;
		 
	  if (isNaN(x)) 
	  {
			alert("กรอกเฉพาะตัวเลข");
			document.getElementById(""+v).value = "";
			
			return false;
			
	  }
	}
	
	function other_name112(name1)
	{
		var x1=name1;
		
		
		var i;
		
		if(document.getElementById(""+x1).value != '1')
			{		
						document.getElementById("births_history").disabled=false;			
						document.getElementById("children_history").disabled=false;
						document.getElementById("last_daughter_history").disabled=false;
						document.getElementById("last_daughter_history_2").disabled=false;
						
			
			}else
			{
						document.getElementById("births_history").disabled=true;
						document.getElementById("births_history").value='';
						document.getElementById("children_history").disabled=true;
						document.getElementById("children_history").value='';
						document.getElementById("last_daughter_history").disabled=true;
						document.getElementById("last_daughter_history").value='';
						document.getElementById("last_daughter_history_2").disabled=true;
						document.getElementById("last_daughter_history_2").value='';
				
			}
	}			
			
	
	function cross_part4(name1)
	{
		var x1=name1;
		var i;
		
		if(x1=='cause_abortion_0')
			{		
				
				document.getElementById("check_problem_health_0").disabled=true;
				document.getElementById("check_problem_health_1").disabled=true;
				document.getElementById("check_problem_money_0").disabled=true;
				document.getElementById("check_problem_money_1").disabled=true;
				document.getElementById("check_problem_family_0").disabled=true;
				document.getElementById("check_problem_family_1").disabled=true;
				document.getElementById("abortionbyself1").disabled=true;
				document.getElementById("abortionbyself2").disabled=true;
				document.getElementById("abortionbymed1").disabled=true;
				document.getElementById("abortionbymed2").disabled=true;
				document.getElementById("abortionbypublic_health1").disabled=true;
				document.getElementById("abortionbypublic_health2").disabled=true;
				document.getElementById("abortionbynotmed1").disabled=true;
				document.getElementById("abortionbynotmed2").disabled=true;
				document.getElementById("abortionbyunknow1").disabled=true;
				document.getElementById("abortionbyunknow2").disabled=true;
				document.getElementById("text_group_effect").disabled=true;
				document.getElementById("text_group_effect").value='';
				document.getElementById("other_reasons").value='';
				document.getElementById("other_reasons").disabled='true';
				
				
				
				document.getElementById("check_problem_health_0").checked=false;
				document.getElementById("check_problem_health_1").checked=false;
				document.getElementById("check_problem_money_0").dchecked=false;
				document.getElementById("check_problem_money_1").checked=false;
				document.getElementById("check_problem_family_0").checked=false;
				document.getElementById("check_problem_family_1").checked=false;
				document.getElementById("abortionbyself1").checked=false;
				document.getElementById("abortionbyself2").checked=false;
				document.getElementById("abortionbymed1").checked=false;
				document.getElementById("abortionbymed2").checked=false;
				document.getElementById("abortionbypublic_health1").checked=false;
				document.getElementById("abortionbypublic_health2").checked=false;
				document.getElementById("abortionbynotmed1").checked=false;
				document.getElementById("abortionbynotmed2").checked=false;
				document.getElementById("abortionbyunknow1").checked=false;
				document.getElementById("abortionbyunknow2").checked=false;
				
			
					for (i=0;i<=10;i++)
					{
						document.getElementById("group_effect_"+i).checked =false;
						document.getElementById("group_effect_"+i).disabled=true;
					}
			}else
			{
				document.getElementById("check_problem_health_0").disabled=false;
				document.getElementById("check_problem_health_1").disabled=false;
				document.getElementById("check_problem_money_0").disabled=false;
				document.getElementById("check_problem_money_1").disabled=false;
				document.getElementById("check_problem_family_0").disabled=false;
				document.getElementById("check_problem_family_1").disabled=false;
				document.getElementById("abortionbyself1").disabled=false;
				document.getElementById("abortionbyself2").disabled=false;
				document.getElementById("abortionbymed1").disabled=false;
				document.getElementById("abortionbymed2").disabled=false;
				document.getElementById("abortionbypublic_health1").disabled=false;
				document.getElementById("abortionbypublic_health2").disabled=false;
				document.getElementById("abortionbynotmed1").disabled=false;
				document.getElementById("abortionbynotmed2").disabled=false;
				document.getElementById("abortionbyunknow1").disabled=false;
				document.getElementById("abortionbyunknow2").disabled=false;
				document.getElementById("other_reasons").value='';
				document.getElementById("other_reasons").disabled=false;
				for (i=0;i<=10;i++)
					{
						
						document.getElementById("group_effect_"+i).checked =false;
						document.getElementById("group_effect_"+i).disabled=false;
					}
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
<?php
		$sql_member = "select * from abortionsurvey_member where member_id= '".$_SESSION["ss_id"]."'";
		$result_member = mysql_query($sql_member);
		$data_member = mysql_fetch_array($result_member);
		
		if($_SESSION["ss_lavel"] != 1){
			$sql_hospital = "select * from abortionsurvey_hospital where oldhospital_id= '".$_SESSION["ss_hospital_id"]."'";
			$result_hospital = mysql_query($sql_hospital);
			$data_hospital = mysql_fetch_array($result_hospital);
		}
?>
<div class="broder_set" style="width:908px">
<div align="center"><img src="image/h.png" width="900" height="140" /></div>
<div><?php include("menu.php"); ?></div>
<div align="right">
  <h3>ยินดีต้อนรับ : <?php echo $_SESSION["ss_name"]; ?> : <a href="logout.php">ออกจากระบบ</a></h3></div>
 
<?php 
	if($_SESSION["ss_lavel"] != 3 && $_SESSION["ss_lavel"] != 4 )
		{
?>
  
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
        <td>1.<strong> </strong>แบบสอบถามนี้ จัดทำขึ้นเพื่อประกอบการเก็บข้อมูลกลุ่มตัวอย่างอาสาสมัครที่แท้งบุตรและเข้ารับการรักษาในสถานบริการสาธารณสุข (ในที่นี้ใช้คำว่า “อาสาสมัคร”) ทั้งผู้ที่แท้งเองและเกิดจากการทำแท้งข้อมูลที่ได้จากการตอบแบบสอบถามจะนำไปประกอบการจัดทำแนวทางป้องกันและแก้ไขปัญหาที่เป็นสาเหตุและภาวะแทรกซ้อนของการทำแท้ง</td>
      </tr>
      <tr>
        <td>2. ก่อนทำการตอบแบบสอบถาม เจ้าหน้าที่เก็บข้อมูลโปรดชี้แจงให้อาสาสมัครเข้าใจวัตถุประสงค์และประโยชน์ของข้อมูลที่ได้จากการตอบแบบสอบถาม  ข้อมูลทั้งหมดจะถือเป็นความลับ การนำเสนอข้อมูลจะนำเสนอเป็นภาพรวมของผลการศึกษาเท่านั้น การยินยอมหรือไม่ยินยอมตอบแบบสอบถาม จะไม่มีผลต่อการเปลี่ยนแปลงแผนการรักษาของแพทย์แต่อย่างใด<strong> </strong></td>
      </tr>
      <tr>
        <td>3. ทำการเก็บข้อมูลเฉพาะผู้ที่ยินยอม โดยอาสาสมัครจะต้องลงนามในหนังสือแสดงความยินยอมก่อนจะทำการตอบแบบสอบถามเอง หรือเจ้าหน้าที่เก็บข้อมูลเป็นผู้เก็บข้อมูลตามแบบสอบถาม ในกรณีที่อาสาสมัครไม่สามารถตอบแบบสอบถามด้วยตนเองได้  </td>
      </tr>
      <tr>
        <td>4.  เจ้าหน้าที่เก็บข้อมูลควรเริ่มต้นด้วยการสร้างความคุ้นเคยกับอาสาสมัครก่อนดำเนินการเก็บข้อมูล แนะนำความเป็นมาของโครงการ ประโยชน์ของข้อมูลที่ได้จากการตอบแบบสอบถาม การเก็บรักษาความลับ และมีอิสระในการตอบ ในระหว่างการตอบแบบสอบถามคำถามใดที่ไม่ยินดีตอบสามารถข้ามไปได้ </td>
      </tr>
      <tr>
        <td>5. ในระหว่างการตอบแบบสอบถาม อาสาสมัครสามารถสอบถามประเด็นข้อสงสัยเกี่ยวกับคำถามได้ และอนุญาตให้ยุติการตอบได้เมื่อไม่ต้องการตอบคำถามต่อไป<strong> </strong></td>
      </tr>

    </table>
<!--<div align="center"><label><button id="next_p2" class="next_p2">ต่อไป</button></label></div>-->
  </div>
  <div id="tabs-2">
<input type="hidden" name="h_check_id" id="h_check_id" >
<!--<input type="text" name="h_check_id" id="h_check_id" >-->
    <table width="100%" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td colspan="2" class="menu_left"><strong>ข้อมูลของหน่วยงานและเจ้าหน้าที่เก็บข้อมูล</strong></td>
        <td width="11%">&nbsp;</td>
        <td width="32%">&nbsp;</td>
      </tr>
      <!--<tr>
      
        <td class="menu_right"> <span class="menu_right">แบบสอบถามหมายเลข : </span></td>
        <td colspan="3"><input name="file_id" type="text" id="file_id" size="3" maxlength="3"  onkeyup="check_int('file_id');check_id();check_id1();" onkeypress="return handleEnter(this, event);" />
        </label>
        <font color="#FF0000">*</font></td>
        </tr>  -->
      <tr>
      
        <td class="menu_right">จังหวัด : </td>
        <td colspan="3"><?php if($_SESSION["ss_lavel"] != 1){ ?><label>
          <input name="survey_province" type="text" id="survey_province" value="<?php echo $data_hospital['hospital_province']; ?>" size="20" readonly="readonly" onkeypress="return handleEnter(this, event)" />
        </label>
        <?php } else { include("list_province.php"); } ?> <font color="#FF0000">*</font></td>
      </tr>
      <tr>
        <td class="menu_right">ชื่อหน่วยงานที่เก็บข้อมูลโรงพยาบาล : </td>
        <td colspan="3"><?php if($_SESSION["ss_lavel"] != 1){ ?><label>
          <input name="survey_agency" type="text" id="survey_agency" value="<?php echo $data_hospital['hospital_name']; ?>" size="30" maxlength="50" readonly="readonly" onkeypress="return handleEnter(this, event)" />
        </label><font color="#FF0000">*</font>
        <?php } else { echo "<div id='show_hospitol'></div>"; } ?> </td>
      </tr>
      <tr>
        <td class="menu_right">อำเภอ : </td>
        <td colspan="3"><?php if($_SESSION["ss_lavel"] != 1){ ?><label>
          <input name="survey_district" type="text" id="survey_district" onkeypress="return handleEnter(this, event)" value="<?php echo $data_hospital['hospital_district']; ?>" size="20" maxlength="50" readonly="readonly" />
        </label>
        <?php } else { echo  "
		<label>
          <input type='text' name='survey_district' id='show_hospitol_district'  readonly='readonly'   />
        </label>"; } ?> <font color="#FF0000">*</font></td>
      </tr>
      <tr>
        <td width="36%" class="menu_right">รหัสโรงพยาบาล : </td>
        <td colspan="3"><?php if($_SESSION["ss_lavel"]!= 1){ ?><label>
          <input name="hospital_id" type="text"  id="hospital_id" value="<?php echo $data_hospital['oldhospital_id']; ?>" size="15" maxlength="15" readonly="readonly" onkeypress="return handleEnter(this, event)" /></label> 
          <?php } else {  echo "       <label>
          <input type='text' name='hospital_id' id='show_hospitol_id' readonly='readonly'  />
        </label>"		  
		  ; } ?>
          <font color="#FF0000">*</font> <span class="menu_right"><!--แบบสอบถามหมายเลข : </span>
          <input name="file_id" type="text" id="file_id" size="3" maxlength="3"  onkeyup="check_int('file_id');check_id();check_id1();" onkeypress="return handleEnter(this, event);" />
        </label>
        <font color="#FF0000">*</font>--></td>
        </tr>
        <tr>
      
        <td class="menu_right"> <span class="menu_right">แบบสอบถามหมายเลข : </span></td>
        <td colspan="3"><input name="file_id" type="text" id="file_id" size="4" maxlength="4"  onkeyup="check_int('file_id');clearDate();" onblur="convertId();" onkeypress="return handleEnter(this, event);" />
        </label>
        <font color="#FF0000">*</font></td>
        </tr>
      <tr>
        <td class="menu_right">ชื่อ - สกุล เจ้าหน้าที่เก็บข้อมูล : </td>
        <td width="21%"><label>
          <input name="survey_name" type="text" id="survey_name" value="<?php if(!empty($_SESSION["ss_survey_name"])) echo $_SESSION["ss_survey_name"]; ?>" size="20" maxlength="50" onkeypress="return handleEnter(this, event)" />
          </label></td>
        <td class="menu_right">ตำแหน่ง : </td>
        <td><label>
          <input name="survey_position" type="text" id="survey_position" value="<?php if(!empty($_SESSION["ss_survey_position"])) echo $_SESSION["ss_survey_position"]; ?>"  size="20" maxlength="50" onkeypress="return handleEnter(this, event);" />
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
    <td colspan="2"  valign="top"  class="label_h">1. อายุของท่าน <label>
      <input name="age" type="text"  id="age" size="3" maxlength="2" onkeyup="check_int('age')" onkeypress="return handleEnter(this, event)"/>
      ปี (อายุเต็ม ไม่ระบุ = 99)</label></td>
    <td width="35%">&nbsp;</td>
    </tr>
  <tr>
    <td width="6%"></td>
    
    <td colspan="2" valign="top"  class="label_h">2. อายุของสามีหรือเพื่อนชาย
      <label>
      <input name="text_friend_age"  type="text"  onkeyup="other_name111('text_friend_age1','friend_age_')" id="text_friend_age1" size="3" maxlength="2"  onkeypress="return handleEnter(this, event)" />
      ปี </label></td>
    </tr>
    <tr>
    <td width="6%"></td>
    
    <td colspan="2" valign="top"  class="label_h">
      <label>
     (อายุเต็ม ไม่ทราบ = 98, ไม่ระบุ = 99) </label></td>
    </tr>
  
  <!--
  <tr>
    <td rowspan="3">&nbsp;</td> 
    <td rowspan="3" valign="top" class="menu_right"></td>
   <!-- <td colspan="3"><label>
              <input type="radio" name="friend_age" value="1" id="friend_age_0" onclick="other_name('text_friend_age','other')" onkeypress="return handleEnter(this, event)" />
            ทราบ</label>
      กรุณาระบุ 
      <label>
        <input name="text_friend_age" type="text" disabled="disabled" onkeyup="check_int('text_friend_age')" id="text_friend_age" size="3" maxlength="2"  onkeypress="return handleEnter(this, event)"/>
      </label>
      ปี (อายุเต็มปัดเศษทิ้ง)</td> 
    </tr>
  <tr>
    <td colspan="2"><label>
      <input type="radio" name="friend_age" value="98" id="friend_age_1" onclick="other_name('text_friend_age','')" onkeypress="return handleEnter(this, event)"/>
      ไม่ทราบ </label></td></tr>
      <tr>
      <td colspan="3"><label> 
                      <input type="radio" name="friend_age" value="99" id="friend_age_2" onclick="other_name('text_friend_age','')" onkeypress="return handleEnter(this, event)"/>
      ไม่ระบุ </label></td>
      
      
    </tr>
    
    -->
    
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td colspan="2" valign="top"   class="label_h">3. ท่านมีสัญชาติอะไร</td>
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
        <input name="text_nationality" type="text" disabled="disabled" class="validate[condRequired[nationality_4]]" id="text_nationality" maxlength="50" onkeypress="return handleEnter(this, event)" />
      </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="nationality" value="6" id="nationality_5" onclick="other_name('text_nationality','')"  onkeypress="return handleEnter(this, event)" />
        ไม่ยินดีให้ข้อมูล</label>
      </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">4.  ท่านนับถือศาสนาอะไร</td>
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
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="religion" value="5" id="religion_4" onclick="other_name('text_religion','')"  onkeypress="return handleEnter(this, event)" />
</label>
        ไม่ยินดีให้ข้อมูล</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">5.  สถานภาพสมรสของท่าน</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="status" value="1" id="status_0"  onkeypress="return handleEnter(this, event)" />
      1. ไม่เคยอยู่กินฉันท์สามีภรรยากับชายใด</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="status" value="2" id="status_1"  onkeypress="return handleEnter(this, event)" />
      2. ปัจจุบันอยู่กินฉันท์สามีภรรยากับชายใดชายหนึ่ง</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="status" value="3" id="status_2"  onkeypress="return handleEnter(this, event)" />
      3. เคยอยู่กินกับชายใดชายหนึ่งแต่ปัจจุบันเลิกกันแล้วหรือสามีเสียชีวิต</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="status" value="4" id="status_3"  onkeypress="return handleEnter(this, event)" />
      4. ไม่ยินดีให้ข้อมูล</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">6. อายุเมื่อมีเพศสัมพันธ์ครั้งแรก</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
      <input name="first_si" type="text" id="first_si" maxlength="2" size="3"  onkeyup="check_int('first_si');"   onkeypress="return handleEnter2(this, event);" />
    ปี </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">7. อาชีพหลักของท่านปัจจุบัน </td>
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
          4. รับจ้างรายวัน </label></td>
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
          6. รับราชการ/รัฐวิสาหกิจ/พนักงานราชการ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="7" id="job_6"  onclick="other_name2('text_job1','text_job2','')"  onkeypress="return handleEnter(this, event)" />
          7. ลูกจ้างประจำ/พนักงานบริษัทห้างร้าน</label></td>
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
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="job" value="10" id="job_9"  onclick="other_name2('text_job1','text_job2','')"  onkeypress="return handleEnter(this, event)" />
      10. ไม่ยินดีให้ข้อมูล
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">8. วุฒิการศึกษาสูงสุดของท่าน</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="education" value="1" id="education_0"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        1. ไม่ได้เรียน </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="2" id="education_1"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        2. ประถมศึกษา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="3" id="education_2"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        3. มัธยมศึกษาตอนต้น</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="4" id="education_3" onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        4. มัธยมศึกษาตอนปลาย</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="5" id="education_4"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        5. ปวช.</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="6" id="education_5"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        6. ปวส.</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="7" id="education_6"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        7. อนุปริญญา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="8" id="education_7"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        8. ปริญญาตรี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="9" id="education_8"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        9. สูงกว่าปริญญาตรี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="10" id="education_9" onclick="other_name('text_education','other')"  onkeypress="return handleEnter(this, event)" />

        10. อื่นๆ ระบุ 
        <input name="text_education" type="text" disabled="disabled" class="validate[condRequired[education_9]]" id="text_education" maxlength="50" onkeypress="return handleEnter(this, event)" />
    </label></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="11" id="education_10"  onclick="other_name('text_education','')"  onkeypress="return handleEnter(this, event)" />
        11. ไม่ยินดีให้ข้อมูล</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">9. วุฒิการศึกษาสูงสุดของสามี หรือเพื่อนชาย</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="friend_education" value="1" id="friend_education_0" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        1. ไม่ได้เรียน</label>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="2" id="friend_education_1" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        2. ประถมศึกษา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="3" id="friend_education_2" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        3. มัธยมศึกษาตอนต้น</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="4" id="friend_education_3" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        4. มัธยมศึกษาตอนปลาย</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="5" id="friend_education_4" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        5. ปวช.</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="6" id="friend_education_5" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        6. ปวส.</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="7" id="friend_education_6" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        7. อนุปริญญา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="8" id="friend_education_7" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        8. ปริญญาตรี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="9" id="friend_education_8" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        9. สูงกว่าปริญญาตรี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="10" id="friend_education_9" onclick="other_name('text_friend_education','other')"  onkeypress="return handleEnter(this, event)" />
        10. อื่นๆ ระบุ</label> <label>
          <input name="text_friend_education" type="text" disabled="disabled" class="validate[condRequired[friend_education_9]]" id="text_friend_education" maxlength="50" onkeypress="return handleEnter(this, event)" />
        </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="11" id="friend_education_10" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        11. ไม่ทราบ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="12" id="friend_education_10" onclick="other_name('text_friend_education','')"  onkeypress="return handleEnter(this, event)" />
        12. ไม่ยินดีให้ข้อมูล</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">10. รายได้ต่อเดือนของท่านและสามี หรือเพื่อนชาย</td>
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
        <input type="radio" name="salary" value="1" id="salary_0" onclick="other_name('text_salary','other')"  onkeypress="return handleEnter(this, event)" />
        1.1 มี ประมาณ</label>
      <label>
        <input name="text_salary" type="text" disabled="disabled"  id="text_salary" maxlength="10"  onkeypress="return handleEnter(this, event)" onkeyup="check_int('text_salary');" />
        บาท/เดือน </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="salary" value="2" id="salary_1" onclick="other_name('text_salary','')"  onkeypress="return handleEnter(this, event)" />
        1.2 ไม่มี</label></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="salary" value="3" id="salary_2" onclick="other_name('text_salary','')"  onkeypress="return handleEnter(this, event)" />
        1.3 ไม่ยินดีให้ข้อมูล</label></td>
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
        <input name="text_friend_salary" type="text" disabled="disabled"  id="text_friend_salary" maxlength="10"  onkeypress="return handleEnter(this, event)" onkeyup="check_int('text_friend_salary')" />
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
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_salary" value="4" id="friend_salary_3"  onclick="other_name('text_friend_salary','')"  onkeypress="return handleEnter(this, event)" />
        2.4 ไม่ยินดีให้ข้อมูล</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3" class="label_h">11. ประวัติการตั้งครรภ์ การคลอด และจำนวนบุตรมีชีวิตของท่าน</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">1. จำนวนการตั้งครรภ์ 
      <label>
        <input name="pregnancy_history" type="text" id="pregnancy_history" size="3" maxlength="3"  onkeypress="return handleEnter(this, event)" onkeyup="other_name112('pregnancy_history')" />
        ครั้ง (รวมการตั้งครรภ์ครั้งนี้ด้วย)</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>2. จำนวนการคลอด 
      <label>
        <input name="births_history" type="text" id="births_history" size="3" maxlength="3" onkeypress="return handleEnter(this, event)"  />
      ครั้ง  </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>3. จำนวนบุตรมีชีวิต 
      <label>
        <input name="children_history" type="text" id="children_history" size="3" maxlength="3" onkeypress="return handleEnter(this, event)"/>
      คน  </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>4. บุตรคนสุดท้ายอายุ 
      <label>
        <input name="last_daughter_history" type="text" id="last_daughter_history" size="2" maxlength="2"  onkeypress="return handleEnter(this, event)"  />
      ปี</label>
      <input name="last_daughter_history_2" type="text" id="last_daughter_history_2" size="2" maxlength="2" onkeypress="return handleEnter(this, event)" /></label>
      เดือน</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">12. ประวัติการแท้ง (ไม่รวมการแท้งหรือทำแท้งครั้งนี้)</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    <td colspan="2"><label>
      <input type="radio" name="abortion_history" value="1" id="abortion_history_1" onclick="other_name101('check_miscarriage','other')"  onkeypress="return handleEnter(this, event)" />
    </label>
      1.  เคย 
      </td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" name="check_miscarriage" disabled="disabled" id="check_miscarriage" value="1" onclick="other_name4('check_miscarriage','miscarriage')"/>
    </label>
      1.  แท้งเอง จำนวน 
      <label>
<input name="miscarriage" type="text" disabled="disabled" id="miscarriage" onkeypress="return handleEnter(this, event)" size="3" maxlength="1" />
ครั้ง </label></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" name="check_abortion" id="check_abortion" disabled="disabled" value="1" onclick="other_name6('check_abortion','abortion','first_abortion')"/>
    </label>
      2.  ทำแท้ง จำนวน 
      <label>
        <input name="abortion" type="text" disabled="disabled"  id="abortion" onkeypress="return handleEnter(this, event)" size="3" maxlength="1" /></label>
        ครั้ง   &nbsp;ครั้งแรกเมื่ออายุ
        <label><input name="first_abortion" type="text" disabled="disabled" id="first_abortion"  onkeypress="return handleEnter(this, event)" size="3" maxlength="2" />
        ปี</label></td>
    </tr>
     <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" name="unknown_abortion" id="unknown_abortion" disabled="disabled" value="1" onclick="other_name4('unknown_abortion','unknown_abortion_n')"/>
    </label>
      3.  ไม่ทราบว่าแท้งแบบไหน จำนวน 
      <label>
        <input name="unknown_abortion_n" type="text" disabled="disabled"  id="unknown_abortion_n" onkeypress="return handleEnter(this, event)" size="3" maxlength="1" /></label>
        ครั้ง</td>
    </tr>
     <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" name="not_infor" id="not_infor" disabled="disabled" value="1" onclick="other_name6('check_abortion','abortion','first_abortion','unknown_abortion_n')"/>
    </label>
      4. ไม่ยินดีให้ข้อมูล 
      <label></label></td>
    </tr>
     <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    <td colspan="2"><label>
      <input type="radio" name="abortion_history" value="2" id="abortion_history_2" onclick="other_name101('','other')"  onkeypress="return handleEnter(this, event)" />
    </label>
      2.  ไม่เคย 
      </td>
    
  </tr>
    
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">13. การตั้งครรภ์ครั้งนี้ ท่านตั้งใจให้เกิดขึ้นหรือไม่</td>
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
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="plan_pregnant" value="3" id="plan_pregnant_2"  onkeypress="return handleEnter(this, event)" />
        3. ไม่ยินดีให้ข้อมูล </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">14.  การตั้งครรภ์ครั้งนี้ ได้ใช้วิธีการคุมกำเนิดใดๆ หรือไม่</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">
      <label>
        <input type="radio" name="contraception" value="1" id="contraception_0"  onclick="other_name103('contraception_0','text_contraception','not_contraception','use_contraception',11,15,1)"  onkeypress="return handleEnter(this, event)" />
        1. ไม่ได้ใช้การคุมกำเนิดวิธีใด   ระบุเหตุผล</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(เลือกได้มากกว่า 1 ข้อ)</td>
    </tr>
     <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="not_contraception1" value="1" id="not_contraception1"  onkeypress="return handleEnter(this, event)" disabled="disabled" /> 
    1.1 ต้องการมีบุตร</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="not_contraception2" value="1" id="not_contraception2"    onkeypress="return handleEnter(this, event)" disabled="disabled" /> 
    1.2 กลัวอันตรายต่อสุขภาพ</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="not_contraception3" value="1" id="not_contraception3"    onkeypress="return handleEnter(this, event)" disabled="disabled" /> 
    1.3 ยา/ อุปกรณ์/ บริการคุมกำหนิดมีราคาแพง </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="not_contraception4" value="1" id="not_contraception4"   onkeypress="return handleEnter(this, event)" disabled="disabled" /> 
    1.4 เพิ่งคลอดบุตร/ หลังแท้ง</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="not_contraception5" value="1" id="not_contraception5"    onkeypress="return handleEnter(this, event)"  disabled="disabled"/> 
    1.5
    คิดว่าอายุมากแล้ว/ ไม่มีประจำเดือน</label> </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="not_contraception6" value="1" id="not_contraception6"    onkeypress="return handleEnter(this, event)" disabled="disabled" /> 
    1.6 การเข้าถึงบริการทำได้ยาก (ไกล เดินทางลำบาก ฯลฯ)</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="not_contraception7" value="1" id="not_contraception7"  onkeypress="return handleEnter(this, event)" disabled="disabled" /> 
    1.7 สถานบริการไม่มีวิธีคุมกำเนิดที่ต้องการ</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="not_contraception8" value="1" id="not_contraception8" onkeypress="return handleEnter(this, event)" disabled="disabled"/> 
    1.8 ถูกสามี/ คู่บังคับให้มีเพศสัมพันธ์</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="not_contraception9" value="1" id="not_contraception9"   onkeypress="return handleEnter(this, event)" disabled="disabled"/> 
    1.9 ไม่ได้คิดว่าจะมีเพศสัมพันธ์</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="not_contraception10" value="1" id="not_contraception10" onkeypress="return handleEnter(this, event)" disabled="disabled"/> 
    1.10 ไม่มีเวลาซื้อ/ รับบริการคุมกำเนิด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="not_contraception11" value="1" id="not_contraception11"  onclick="other_name4('not_contraception11','textnot_contraception11')" disabled="disabled"/> 
    1.11 อื่นๆ ระบุ <input name="textnot_contraception11" type="text" disabled="disabled" id="textnot_contraception11" onkeypress="return handleEnter(this, event)" size="30" maxlength="150" /></label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="contraception" value="2" id="contraception_1"   onclick="other_name103('contraception_1','text_contraception','use_contraception','not_contraception',15,11,2)"  onkeypress="return handleEnter(this, event)" /></label>
      2. ใช้การคุมกำเนิดวิธีใดวิธีหนึ่ง ระบุวิธี</td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception1" value="1" id="use_contraception1"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.1 หมันหญิง
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception2" value="1" id="use_contraception2"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.2 หมันชาย
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception3" value="1" id="use_contraception3"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.3 ห่วงอนามัย
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception4" value="1" id="use_contraception4"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.4 ยาฉีดคุมกำเนิด
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception5" value="1" id="use_contraception5"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.5 ยาฝังคุมกำเนิด
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception6" value="1" id="use_contraception6"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.6 ยาเม็ดคุมกำเนิด
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception7" value="1" id="use_contraception7"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.7 ถุงยางอนามัยชาย
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception8" value="1" id="use_contraception8"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.8 ถุงยางอนามัยหญิง
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception9" value="1" id="use_contraception9"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.9 หมวกยางสอดในช่องคลอด
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception10" value="1" id="use_contraception10"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.10 ใช้โฟม/ สารหล่อลื่น
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception11" value="1" id="use_contraception11"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.11 กำลังให้นมบุตร
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception12" value="1" id="use_contraception12"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.12 นับระยะปลอดภัย
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception13" value="1" id="use_contraception13"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.13 หลั่งนอกช่องคลอด
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception14" value="1" id="use_contraception14"  onkeypress="return handleEnter(this, event)" disabled="disabled" />
    2.14 ยาคุมฉุกเฉิน
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="use_contraception15" value="1" id="use_contraception15"  onclick="other_name4('use_contraception15','textuse_contraception15')" disabled="disabled"/>
    2.15 อื่น ๆ ระบุบ <input name="textuse_contraception15" type="text" disabled="disabled" id="textuse_contraception15" onkeypress="return handleEnter(this, event)" size="30" maxlength="150" />
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="contraception" value="3" id="contraception_2" onclick="other_name103('contraception_2','text_contraception','not_contraception','use_contraception',11,15,3)" onkeypress="return handleEnter(this, event)" />
      3. ไม่ยินดีให้ข้อมูล</label>
      </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">15. สาเหตุของการแท้งครั้งนี้เกิดจากอะไร <font color="#FF0000">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">
      <label>
        <input type="radio" name="cause_abortion" value="1" id="cause_abortion_0"  onkeypress="return handleEnter(this, event)" onclick="cross_part4('cause_abortion_0')" />
        1. แท้งเอง <strong>(หากแท้งเอง ข้ามไปส่วนที่ 4)</strong> </label>
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="cause_abortion" value="2" id="cause_abortion_1"  onkeypress="return handleEnter(this, event)" onclick="cross_part4('cause_abortion_1')"/>
        2. ทำแท้ง</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3" class="label_h">16. เหตุผลที่ทำให้ท่านต้องทำแท้งครั้งนี้ (ตอบได้มากกว่า 1 ข้อ)</td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>1. ด้านสุขภาพ</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="check_problem_health" value="2" id="check_problem_health_0"  onclick="other_name105('check_problem_health_0','problem_health_',7)"/>
        ไม่มี</label>

    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
        <input type="radio" name="check_problem_health" value="1" id="check_problem_health_1"  onclick="other_name105('check_problem_health_1','problem_health_',7)"/>
        มี (ถ้ามีให้ระบุ เพียง 1 ข้อ ที่เป็นเหตุผลหลักทำให้ต้องยุติการตั้งครรภ์)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="radio" disabled="disabled"  name="problem_health1" value="1" id="problem_health_2" onclick="other_name104('problem_health_2','','')" onkeypress="return handleEnter(this, event)" />
      1. ทารกเสียชีวิตในครรภ์ (Dead Fetus in Utero: DFIU)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="radio" disabled="disabled"  name="problem_health1" value="2" id="problem_health_3" onclick="other_name104('problem_health_3','','')" onkeypress="return handleEnter(this, event)" />
        2.ตั้งครรภไข่ลม (blighted ovum)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="radio" disabled="disabled"  name="problem_health1" value="3" id="problem_health_4" onclick="other_name104('problem_health_4','','')" onkeypress="return handleEnter(this, event)" />
        3. ตั้งครรภ์เนื่องจากการคุมกำเนิดล้มเหลว
    </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="radio" disabled="disabled"  name="problem_health1" value="4" id="problem_health_5" onclick="other_name104('problem_health_5','problem_health41',3)" onkeypress="return handleEnter(this, event)" />
      4. ทารกในครรภ์ผิดปกติ</label>
      <!--<label> <input name="text_problem_health1" type="text" disabled="disabled" class="validate[condRequired[problem_health_5]]" id="text_problem_health1" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
      </label>--></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="radio" disabled="disabled"  name="problem_health411" value="1" id="problem_health411" onclick="other_name108('problem_health411','text_thalassemia','text_other16_43')" onkeypress="return handleEnter(this, event)" />
        4.1 ธาลัสซีเมีย ระบุ </label> <input type="text" size="30" maxlength="150" disabled="disabled" name="text_thalassemia" id="text_thalassemia"  onkeypress="return handleEnter(this, event)" /></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="radio" disabled="disabled"  name="problem_health411" value="2" id="problem_health412" onclick="other_name108('problem_health412','text_thalassemia','text_other16_43')" onkeypress="return handleEnter(this, event)" />
        4.2 หัดเยอรมัน</label></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="radio" disabled="disabled"  name="problem_health411" value="3" id="problem_health413" onclick="other_name108('problem_health413','text_thalassemia','text_other16_43')" onkeypress="return handleEnter(this, event)" />
        4.3 โรคอื่นๆ ระบุ </label> <input type="text" size="30" maxlength="150" disabled="disabled" name="text_other16_43" id="text_other16_43" onkeypress="return handleEnter(this, event)" /></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="radio" disabled="disabled"  name="problem_health1" value="5" id="problem_health_6" onclick="other_name104('problem_health_6','problem_health51',2)" onkeypress="return handleEnter(this, event)" />
        5. การตั้งครรภ์อาจจะเป็นอันตรายต่อสุขภาพของมารดา</label></td>
    
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="radio" disabled="disabled"  name="problem_health511" value="1" id="problem_health511" onclick="other_name102('problem_health511','text_other16_51','text_other16_52')" onkeypress="return handleEnter(this, event)" />
        5.1 มารดาเป็นโรคหัวใจ ระบุ </label><input type="text" size="30" maxlength="150" disabled="disabled" name="text_other16_51" id="text_other16_51" onkeypress="return handleEnter(this, event)" /></td>
    
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="radio" disabled="disabled"  name="problem_health511" value="2" id="problem_health512" onclick="other_name102('problem_health512','text_other16_51','text_other16_52')" onkeypress="return handleEnter(this, event)" />
        5.2 โรคอื่นๆ ระบุ</label><input type="text" size="30" maxlength="150" disabled="disabled" name="text_other16_52" id="text_other16_52" onkeypress="return handleEnter(this, event)" /></td>
    
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="radio" disabled="disabled"  name="problem_health1" value="6" id="problem_health_7" onclick="other_name104('problem_health_7','','')" onkeypress="return handleEnter(this, event)" />
        6. ไม่ยินดีให้ข้อมููล</label></td>
    <td>&nbsp;</td>
  </tr>
  <!--
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
    -->
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>2. ด้านเศรษฐกิจ </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="check_problem_money" value="2" id="check_problem_money_0" onclick="other_name106('check_problem_money_0','problem_money_',3,'text_problem_money')"  onkeypress="return handleEnter(this, event)"/>
        ไม่มี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
        <input type="radio" name="check_problem_money" value="1" id="check_problem_money_1" onclick="other_name106('check_problem_money_1','problem_money_',3,'text_problem_money')" onkeypress="return handleEnter(this, event)"/>
        มี (ถ้ามีตอบได้มากกว่า 1 ข้อ)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>
        <input type="checkbox" disabled="disabled" name="problem_money1" value="1" id="problem_money_0"  onkeypress="return handleEnter(this, event)"  />
        1. มีปัญหาเรื่องค่าใช้จ่ายในการเลี้ยงดูบุตร</label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled" name="problem_money2" value="1" id="problem_money_1"  onkeypress="return handleEnter(this, event)" />
        2. การตั้งครรภ์เป็นอุปสรรคต่อการประกอบอาชีพ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
      <input type="checkbox" disabled="disabled"  name="problem_money3" value="1" id="problem_money_2" onclick="other_name4('problem_money_2','text_problem_money')" onkeypress="return handleEnter(this, event)" />
      3. อื่นๆ ระบุ </label>
      <label>
        <input name="text_problem_money" type="text" disabled="disabled" class="validate[condRequired[problem_money_2]]" id="text_problem_money" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled" name="problem_money4" value="1" id="problem_money_3"  onkeypress="return handleEnter(this, event)" />
        4. ไม่ยินดีให้ข้อมูล</label></td>
    <td>&nbsp;</td>
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
        <input type="radio" name="check_problem_family" value="2" id="check_problem_family_0" onclick="other_name106('check_problem_family_0','problem_family_',11,'text_problem_family')" onkeypress="return handleEnter(this, event)" />
        ไม่มี</label>

    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="check_problem_family" value="1" id="check_problem_family_1" onclick="other_name106('check_problem_family_1','problem_family_',11,'text_problem_family')" onkeypress="return handleEnter(this, event)" />
        มี (ถ้ามีตอบได้มากกว่า 1 ข้อ)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>
        <input type="checkbox" disabled="disabled"  name="problem_family1" value="1" id="problem_family_0"  onkeypress="return handleEnter(this, event)" />
        1. ตั้งครรภ์เนื่องจากถูกข่มขื่น</label>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="problem_family2" value="1" id="problem_family_1"  onkeypress="return handleEnter(this, event)" />
        2. มีบุตรถี่เกินไป</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="problem_family3" value="1" id="problem_family_2"  onkeypress="return handleEnter(this, event)" />
        3. บุตรพอแล้ว</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="problem_family4" value="1" id="problem_family_3"  onkeypress="return handleEnter(this, event)" />
        4. ยังเรียนไม่จบ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" disabled="disabled"  name="problem_family5" value="1" id="problem_family_4"  onkeypress="return handleEnter(this, event)" />
        5. ยังไม่พร้อมที่จะแต่งงาน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled"  name="problem_family6" value="1" id="problem_family_5"  onkeypress="return handleEnter(this, event)" />
        6. ฝ่ายชายไม่รับผิดชอบ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled"  name="problem_family7" value="1" id="problem_family_6"  onkeypress="return handleEnter(this, event)" />
        7. ฝ่ายชายมีครอบครัวแล้ว</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled"  name="problem_family8" value="1" id="problem_family_7"  onkeypress="return handleEnter(this, event)" />
        8. มีปัญหากับญาติฝ่ายช่าย</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="problem_family9" value="1" id="problem_family_8"  onkeypress="return handleEnter(this, event)" />
      9. ตั้งครรภ์กับชายอื่นที่ไม่ใช่สามีหรือเพื่อนชายประจำ</label></td>
    </tr>
     <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" disabled="disabled"  name="problem_family10" value="1" id="problem_family_9"  onkeypress="return handleEnter(this, event)" />
      10. หย่าหรือเลิกกับสามีหรือเพื่อนชายภายหลังจากตั้งครรภ์นี้</label></td>
    </tr>
  <tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" disabled="disabled"  name="problem_family11" value="1" id="problem_family_10" onclick="other_name4('problem_family_10','text_problem_family')" onkeypress="return handleEnter(this, event)" />
      11. ตั้งครรภ์กับบุคคลสืบสายเลือดเดียวกันหรือใกล้ชิดทางสายเลือด คือ 
      <input name="text_problem_family" type="text" disabled="disabled" class="validate[condRequired[problem_family_10]]" id="text_problem_family" size="10" maxlength="50" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" disabled="disabled"  name="problem_family12" value="1" id="problem_family_11"  onkeypress="return handleEnter(this, event)" />
        12. ไม่ยินดีให้ข้อมูล</label></td>
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
    <td colspan="3" class="label_h">17. ผู้ที่มีอิทธิพลสูงสุดต่อการตัดสินใจทำแท้ง ครั้งนี้ (ตอบได้มากกว่า 1 ข้อ)</td>
    </tr>
  
  <!--
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
  -->
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>
        <input type="checkbox"  name="group_effect1" value="1" id="group_effect_0"   onkeypress="return handleEnter(this, event)" />
        1. ตัวอาสาสมัครเอง</label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox"   name="group_effect2" value="1" id="group_effect_1"   onkeypress="return handleEnter(this, event)" />
        2. สามี/เพื่อนชาย</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox"  name="group_effect3" value="1" id="group_effect_2"  onkeypress="return handleEnter(this, event)" />
        3. พ่อ/แม่</label> 
    ฝ่ายหญิง</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" name="group_effect4" value="1" id="group_effect_3"  onkeypress="return handleEnter(this, event)" />
        4. พ่อ/แม่ ฝ่ายชาย</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox"  name="group_effect5" value="1" id="group_effect_4"  onkeypress="return handleEnter(this, event)" />
        5. พี่น้อง</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox"  name="group_effect6" value="1" id="group_effect_5"  onkeypress="return handleEnter(this, event)" />
        6. ญาติ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox"  name="group_effect7" value="1" id="group_effect_6"  onkeypress="return handleEnter(this, event)" />
        7. เพื่อน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox"   name="group_effect8" value="1" id="group_effect_7"  onkeypress="return handleEnter(this, event)" />
        8. เพื่อนบ้าน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox"  name="group_effect9" value="1" id="group_effect_8"  onkeypress="return handleEnter(this, event)" />
        9. ครู/อาจารย์</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox"  name="group_effect10" value="1" id="group_effect_9"  onkeypress="return handleEnter(this, event)" />
        10. แพทย์/พยาบาล</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox"   name="group_effect11" value="1" id="group_effect_10" onclick="other_name4('group_effect_10','text_group_effect')"  onkeypress="return handleEnter(this, event)" />
      11. อื่นๆ ระบุ 
      <input name="text_group_effect" type="text" disabled="disabled" class="validate[condRequired[group_effect_10]]" id="text_group_effect" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">18. การทำแท้งครั้งนี้ใครเป็นผู้ทำแท้งให้ และทำด้วยวิธีการใด (ตอบได้มากกว่า 1 ข้อ)</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">
      <!--
      <label>
        <input type="radio" name="abortion_mode" value="1" id="abortion_mode_0"  onkeypress="return handleEnter(this, event)" disabled="disabled" onclick="other_name13('abortion_mode_0','')"/>
       -->
       <label> <strong>1. ทำด้วยตนเอง </strong></label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
    <input type="radio" name="abortionbyself" id="abortionbyself1" value="2" onclick="other_name106('abortionbyself1','abortion18_1',7,'text_abortion18_16')"  />
    ไม่ใช่
    
    
    </label>
    </td>
    </tr>
    <tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
    <input type="radio" name="abortionbyself" id="abortionbyself2" value="1" onclick="other_name106('abortionbyself1','abortion18_1',7,'text_abortion18_16')" />
    ใช่ (ถ้าใช่กรุณาระบุวิธี)
    
    </label>
    </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_11" value="1" id="abortion18_10"  onkeypress="return handleEnter(this, event)" />
      1. รับประทานยาเม็ด </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_12" value="1" id="abortion18_11"  onkeypress="return handleEnter(this, event)" />
      2. อมยาใต้ลิ้น/กระพุ้งแก้ม</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_13" value="1" id="abortion18_12"  onkeypress="return handleEnter(this, event)" />
      3. เหน็บยาเข้าทางช่องคลอด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_14" value="1" id="abortion18_13"  onkeypress="return handleEnter(this, event)" />
      4. ใส่สายยางและ/หรือฉีดสารใดๆ เข้าทางช่องคลอด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_15" value="1" id="abortion18_14"  onkeypress="return handleEnter(this, event)" />
      5. ใช้อุปกรณ์ของแข็งสอดและ/หรือ กระทุ้งเข้าทางช่องคลอด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_16" value="1" id="abortion18_15"  onkeypress="return handleEnter(this, event)" />
      6. บีบ นวด เค้นบริเวณหน้าทอง</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_17" value="1" id="abortion18_16"  onkeypress="return handleEnter(this, event)" onclick="other_name4('abortion18_16','text_abortion18_16')" />
      7. จงใจให้เกิดอุบัติเหตุโดยวิธีการหนึ่ง ระบุ 
      <input name="text_abortion18_17" type="text" disabled="disabled" class="validate[condRequired[abortion18_16]]" id="text_abortion18_16" size="30" maxlength="150" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_18" value="1" id="abortion18_17"  onkeypress="return handleEnter(this, event)" onclick="other_name4('abortion18_17','text_abortion18_17')" />
       8. อื่นๆ ระบุ 
      <input name="text_abortion18_18" type="text" disabled="disabled" class="validate[condRequired[abortion18_17]]" id="text_abortion18_17" size="30" maxlength="150" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
    
    
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>     
    	<!--
     <label>
        <input type="radio" name="abortion_mode" value="2" id="abortion_mode_1"  onkeypress="return handleEnter(this, event)" disabled="disabled" onclick="other_name13('abortion_mode_1','other')"/>
        -->
        
        <label><strong>2. ทำโดยแพทย์</strong></label></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
    <input type="radio" name="abortionbymed1" id="abortionbymed1" value="2" onclick="other_name106('abortionbymed1','abortion18_2',5,'text_abortion18_25')"  />
    ไม่ใช่
    
    
    </label></td>
    </tr>
    <tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
    <input type="radio" name="abortionbymed1" id="abortionbymed2" value="1" onclick="other_name106('abortionbymed2','abortion18_2',5,'text_abortion18_25')" />
    ใช่ (ถ้าใช่กรุณาระบุวิธี)
    
    </label>
    </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_21" value="1" id="abortion18_20"  onkeypress="return handleEnter(this, event)" />
      1. ใช้เครื่องสุญญากาศดูดออกทางช่องคลอด (Manual Vacuum Aspiration: MVA)</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_22" value="1" id="abortion18_21"  onkeypress="return handleEnter(this, event)" />
      2. ใช้เครื่องมืดขูดออกทางช่องคลอด (Dilation and Curettage:D&amp;C)</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_23" value="1" id="abortion18_22"  onkeypress="return handleEnter(this, event)" />
      3. รับประทานยาเม็ด </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_24" value="1" id="abortion18_23"  onkeypress="return handleEnter(this, event)" />
      4. อมยาใต้ลิ้น/กระพุ้งแก้ม</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_25" value="1" id="abortion18_24"  onkeypress="return handleEnter(this, event)" />
      5. เหน็บยาเข้าทางช่องคลอด </label></td>
    </tr>
   
     <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_26" value="1" id="abortion18_25" onclick="other_name4('abortion18_25','text_abortion18_25')"  onkeypress="return handleEnter(this, event)" />
      6. อื่นๆ ระบุ 
      <input name="text_abortion18_26" type="text" disabled="disabled" class="validate[condRequired[abortion18_25]]" id="text_abortion18_25" size="30" maxlength="150" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
     
     <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">
      <!--
      <label>
        <input type="radio" name="abortion_mode" value="1" id="abortion_mode_0"  onkeypress="return handleEnter(this, event)" disabled="disabled" onclick="other_name13('abortion_mode_0','')"/>
       -->
       <label> <strong>3. ทำโดยเจ้าหน้าที่สาธารณสุขอื่นๆ </strong></label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
    <input type="radio" name="abortionbypublic_health1" id="abortionbypublic_health1" value="2" onclick="other_name107('abortionbypublic_health1','abortion18_3',10,'text_abortion18_38','text_abortion18_39')"  onkeypress="return handleEnter(this, event)" />
    ไม่ใช่
    
    
    </label>
    </td>
    </tr>
    <tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
    <input type="radio" name="abortionbypublic_health1" id="abortionbypublic_health2" value="1" onclick="other_name107('abortionbypublic_health2','abortion18_3',10,'text_abortion18_38','text_abortion18_39')"  onkeypress="return handleEnter(this, event)"  />
    ใช่ (กรุณาระบุวิธี)
    
    </label>
    </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_31" value="1" id="abortion18_30"  onkeypress="return handleEnter(this, event)" />
      1. ใช้เครื่องสุญญากาศดูดออกทางช่องคลอด (Manual Vacuum Aspiration: MVA) </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_32" value="1" id="abortion18_31"  onkeypress="return handleEnter(this, event)" />
      2. ใช้เครื่องมืดขูดออกทางช่องคลอด (Dilation and Curettage:D&amp;C)</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_33" value="1" id="abortion18_32"  onkeypress="return handleEnter(this, event)" />
      3. รับประทานยาเม็ด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_34" value="1" id="abortion18_33"  onkeypress="return handleEnter(this, event)" />
      4. อมยาใต้ลิ้น/กระพุ้งแก้ม</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_35" value="1" id="abortion18_34"  onkeypress="return handleEnter(this, event)" />
      5. เหน็บยาเข้าทางช่องคลอด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_36" value="1" id="abortion18_35"  onkeypress="return handleEnter(this, event)" />
      6. ใส่สายยางและ/หรือฉีดสารใดๆ เข้าทางช่องคลอด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_37" value="1" id="abortion18_36"  onkeypress="return handleEnter(this, event)" />
      7. ใช้อุปกรณ์ของแข็งสอดและ/หรือ กระทุ้งเข้าทางช่องคลอด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_38" value="1" id="abortion18_37"  onkeypress="return handleEnter(this, event)" />
      8. บีบ นวด เค้นบริเวณหน้าท้อง
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_39" value="1" id="abortion18_38"  onclick="other_name4('abortion18_38','text_abortion18_38')"  onkeypress="return handleEnter(this, event)" />
      
      9. จงใจให้เกิดอุบัติเหตุโดยวิธีการหนึ่ง ระบุ 
      <input name="text_abortion18_38" type="text" disabled="disabled" class="validate[condRequired[abortion18_38]]" id="text_abortion18_38" size="30" maxlength="150" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
    
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_310" value="1" id="abortion18_39"  onclick="other_name4('abortion18_39','text_abortion18_39')"  onkeypress="return handleEnter(this, event)" />
      10. อื่นๆ ระบุ <input type="text" disabled="disabled" name="text_abortion18_39" class="validate[condRequired[abortion18_39]]" id="text_abortion18_39" size="30" maxlength="150" onkeypress="return handleEnter(this, event)" /></label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_311" value="1" id="abortion18_310"  onkeypress="return handleEnter(this, event)" />
      11. ไม่ทราบ</label></td>
    </tr>
    
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">
      <!--
      <label>
        <input type="radio" name="abortion_mode" value="1" id="abortion_mode_0"  onkeypress="return handleEnter(this, event)" disabled="disabled" onclick="other_name13('abortion_mode_0','')"/>
       -->
       <label> <strong>4. ทำโดยบุคคลที่ไม่ใช่บุคคลกรทางการแพทย์ </strong></label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
    <input type="radio" name="abortionbynotmed1" id="abortionbynotmed1" value="2" onclick="other_name107('abortionbynotmed1','abortion18_4',10,'text_abortion18_48','text_abortion18_49')"  onkeypress="return handleEnter(this, event)" />
    ไม่ใช่
    
    
    </label></td>
    </tr>
    <tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
    <input type="radio" name="abortionbynotmed1" id="abortionbynotmed2" value="1" onclick="other_name107('abortionbynotmed2','abortion18_4',10,'text_abortion18_48','text_abortion18_49')"  onkeypress="return handleEnter(this, event)" />
    ใช่ (กรุณาระบุวิธี)
    
    </label>
    </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_41" value="1" id="abortion18_40"  onkeypress="return handleEnter(this, event)" />
      1. ใช้เครื่องสุญญากาศดูดออกทางช่องคลอด (Manual Vacuum Aspiration: MVA) </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_42" value="1" id="abortion18_41"  onkeypress="return handleEnter(this, event)" />
      2. ใช้เครื่องมืดขูดออกทางช่องคลอด (Dilation and Curettage:D&amp;C)</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_43" value="1" id="abortion18_42"  onkeypress="return handleEnter(this, event)" />
      3. รับประทานยาเม็ด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_44" value="1" id="abortion18_43"  onkeypress="return handleEnter(this, event)" />
      4. อมยาใต้ลิ้น/กระพุ้งแก้ม</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_45" value="1" id="abortion18_44"  onkeypress="return handleEnter(this, event)" />
      5. เหน็บยาเข้าทางช่องคลอด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_46" value="1" id="abortion18_45"  onkeypress="return handleEnter(this, event)" />
      6. ใส่สายยางและ/หรือฉีดสารใดๆ เข้าทางช่องคลอด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_47" value="1" id="abortion18_46"  onkeypress="return handleEnter(this, event)" />
      7. ใช้อุปกรณ์ของแข็งสอดและ/หรือ กระทุ้งเข้าทางช่องคลอด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_48" value="1" id="abortion18_47"  onkeypress="return handleEnter(this, event)" />
      8. บีบ นวด เค้นบริเวณหน้าท้อง
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_49" value="1" id="abortion18_48"  onkeypress="return handleEnter(this, event)" onclick="other_name4('abortion18_48','text_abortion18_48')" />
      
      9. จงใจให้เกิดอุบัติเหตุโดยวิธีการหนึ่ง ระบุ 
      <input name="text_abortion18_48" type="text" disabled="disabled" class="validate[condRequired[abortion18_48]]" id="text_abortion18_48" size="30" maxlength="150" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
    
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_410" value="1" id="abortion18_49" onclick="other_name4('abortion18_49','text_abortion18_49')" onkeypress="return handleEnter(this, event)" />
      10. อื่นๆ ระบุ <input type="text" disabled="disabled" name="text_abortion18_49" id="text_abortion18_49" class="validate[condRequired[abortion18_49]]" size="30" maxlength="150" onkeypress="return handleEnter(this, event)"/></label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_411" value="1" id="abortion18_410"  onkeypress="return handleEnter(this, event)" />
      11. ไม่ทราบ</label></td>
    </tr>
    
     <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">
      <!--
      <label>
        <input type="radio" name="abortion_mode" value="1" id="abortion_mode_0"  onkeypress="return handleEnter(this, event)" disabled="disabled" onclick="other_name13('abortion_mode_0','')"/>
       -->
       <label> <strong>5. บุคคลไม่ทราบคุณสมบัติ </strong></label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
    <input type="radio" name="abortionbyunknow1" id="abortionbyunknow1" value="2" onclick="other_name107('abortionbyunknow1','abortion18_5',10,'text_abortion18_58','text_abortion18_59')"  onkeypress="return handleEnter(this, event)"  />
    ไม่ใช่
    
    
    </label>
    </td>
    </tr>
    <tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
    <input type="radio" name="abortionbyunknow1" id="abortionbyunknow2" value="1" onclick="other_name107('abortionbyunknow2','abortion18_5',10,'text_abortion18_58','text_abortion18_59')"  onkeypress="return handleEnter(this, event)" />
    ใช่ (กรุณาระบุวิธี)
    
    </label>
    </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_51" value="1" id="abortion18_50"  onkeypress="return handleEnter(this, event)" />
      1. ใช้เครื่องสุญญากาศดูดออกทางช่องคลอด (Manual Vacuum Aspiration: MVA) </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_52" value="1" id="abortion18_51"  onkeypress="return handleEnter(this, event)" />
      2. ใช้เครื่องมืดขูดออกทางช่องคลอด (Dilation and Curettage:D&amp;C)</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_53" value="1" id="abortion18_52"  onkeypress="return handleEnter(this, event)" />
      3. รับประทานยาเม็ด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_54" value="1" id="abortion18_53"  onkeypress="return handleEnter(this, event)" />
      4. อมยาใต้ลิ้น/กระพุ้งแก้ม</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_55" value="1" id="abortion18_54"  onkeypress="return handleEnter(this, event)" />
      5. เหน็บยาเข้าทางช่องคลอด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_56" value="1" id="abortion18_55"  onkeypress="return handleEnter(this, event)" />
      6. ใส่สายยางและ/หรือฉีดสารใดๆ เข้าทางช่องคลอด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_57" value="1" id="abortion18_56"  onkeypress="return handleEnter(this, event)" />
      7. ใช้อุปกรณ์ของแข็งสอดและ/หรือ กระทุ้งเข้าทางช่องคลอด</label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_58" value="1" id="abortion18_57"  onkeypress="return handleEnter(this, event)" />
      8. บีบ นวด เค้นบริเวณหน้าท้อง
    </label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_59" value="1" id="abortion18_58"  onkeypress="return handleEnter(this, event)" onclick="other_name4('abortion18_58','text_abortion18_58')" />
      
      9. จงใจให้เกิดอุบัติเหตุโดยวิธีการหนึ่ง ระบุ 
      <input name="text_abortion18_58" type="text" disabled="disabled" class="validate[condRequired[abortion18_58]]" id="text_abortion18_58" size="30" maxlength="150" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
    
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_510" value="1" id="abortion18_59"   onkeypress="return handleEnter(this, event)" onclick="other_name4('abortion18_59','text_abortion18_59')" />
      10. อื่นๆ ระบุ <input type="text" disabled="disabled" name="text_abortion18_59" lass="validate[condRequired[abortion18_59]]" id="text_abortion18_59" size="30" maxlength="150" onkeypress="return handleEnter(this, event)" /></label></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" disabled="disabled"  name="abortion18_511" value="1" id="abortion18_510"  onkeypress="return handleEnter(this, event)" />
      11. ไม่ทราบ</label></td>
    </tr>
    
  
   <!-- 
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
          <input type="radio" name="select_abortion_method" value="2" id="select_abortion_method_1" disabled="disabled" />
          2. ไมโซพรอสตอล</label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
          <input type="radio" name="select_abortion_method" value="3" id="select_abortion_method_2" disabled="disabled" />
          3. มิฟิพริสโตน และไมโซพรอสตอล</label></td>
  </tr>
  -->
  
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
    <td colspan="3"  valign="top"  class="label_h">คำถามข้อ 19-22 เจ้าหน้าที่เก็บข้อมูลหาข้อมูลประกอบจากแฟ้มประวัติของอาสาสมัคร</td>
    </tr>
  <tr>
    <td colspan="3"  valign="top"  class="label_h">19. อายุครรภ์ครั้งนี้
        <input name="ga2" type="text" id="ga2" size="2" maxlength="2"  onkeypress="return handleEnter(this, event)"  onblur="check_large('1','42','ga2');" />
    
      สัปดาห์</td>
  </tr>
  
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td colspan="3" valign="top"   class="label_h">20. ภาวะแทรกซ้อนที่เกิดขึ้นกับอาสาสมัครหลังการแท้งเองหรือทำแท้งครั้งนี้ (ตอบได้มากกว่า 1 ข้อ)</td>
    </tr>
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td width="51%">
      <label>
        <input type="radio" name="check_group_complications" value="2" id="check_group_complications1" onclick="other_name109('check_group_complications1','group_complications_',3)"/>
        ไม่มีภาวะแทรกซ้อนใด ๆ</label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td colspan="2">      <label>
        <input type="radio" name="check_group_complications" value="1" id="check_group_complications2" onclick="other_name109('check_group_complications2','group_complications_',3)"/>
        มีภาวะแทรกซ้อน (ถ้ามีให้ระบุแทรกซ้อนได้มากกว่า 1 ข้อ)</label></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
      <input type="checkbox" name="group_complications1" value="1" id="group_complications_0"  onclick="other_name110('group_complications_0','bleed',2)" onkeypress="return handleEnter(this, event)"  disabled="disabled"/><strong>
      1. ตกเลือด (Bleeding)</strong></label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
      <input type="checkbox" name="bleed1" value="1" id="bleed1"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
      1.1 ตกเลือดมากจนต้องให้เลือด (Excessive Hemorrhage) </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
      <input type="checkbox" name="bleed2" value="1" id="bleed2"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
      1.2 ช็อคจากการเสียเลือด (Heamorrhagic Shock) </label></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
      <input type="checkbox" name="group_complications2" value="1" id="group_complications_1" onclick="other_name110('group_complications_1','infection',3)" onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
      <strong>2. ติดเชื้อ (Infection) </strong></label></td>
  </tr>
  
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
      <input type="checkbox" name="infection1" value="1" id="infection1"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
      2.1 ติดเชื้อบาดทะยัก (Tetanus) </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
      <input type="checkbox" name="infection2" value="1" id="infection2"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
      2.2 ติดเชื้อในกระแสเลือด (Septicemia) </label></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
      <input type="checkbox" name="infection3" value="1" id="infection3"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
      2.3 ช็อคจากการติดเชื้อ (Septic Shock)</label></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
      <input type="checkbox" name="group_complications3" value="1" id="group_complications_2" onclick="other_name110('group_complications_2','organ',8)" onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
      <strong>
      3. อวัยวะภายในได้รับบาดเจ็ด (Organ Injury)</strong></label></td>
  </tr>
  
  <!--
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
      <input type="checkbox" name="group_complications1" value="1" id="group_complications_1"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
      1. ตกเลือดมากจนต้องให้เลือด (Excessive Hemorrhage)</label></td>
  </tr>
  -->
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <label>
        <input type="checkbox" name="organ1" value="1" id="organ1"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
        1. ปากมดลูกฉีกขาด (Cervical Laceration)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" name="organ2" value="1" id="organ2"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
        2. มดลูกทะลุ (Uterine Perforation)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" name="organ3" value="1" id="organ3"  onkeypress="return handleEnter(this, event)" disabled="disabled"/>
      3. ลำไส้ฉีกขาดหรือทะลุ (Bowel Injuries or Perforation )</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
      <input type="checkbox" name="organ4" value="1" id="organ4"  onkeypress="return handleEnter(this, event)" disabled="disabled"/>
      4. อุ้งเชิงกรานอักเสบ (Pelvic Inflammatory Disease - PID)</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" name="organ5" value="1" id="organ5"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
        5. เยื่อบุผนังช่องท้องอักเสบ (Peritonitis)</label></td>
    <td>&nbsp;</td>
  </tr>
  
  <!--
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" name="group_complications7" value="1" id="group_complications_7"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
        6. ติดเชื้อบาดทะยัก  (Tetanus)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="checkbox" name="group_complications8" value="1" id="group_complications_8"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
        7. ติดเชื้อในกระแสเลือด (Septicemia)</label></td>
    <td>&nbsp;</td>
  </tr>
  -->
  
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
<input type="checkbox" name="organ6" value="1" id="organ6"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
6. ไตวาย (Renal Failure)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" name="organ7" value="1" id="organ7"  onkeypress="return handleEnter(this, event)"  disabled="disabled"/>
        7. หัวใจวาย (Cardiac Failure)</label></td>
    <td>&nbsp;</td>
  </tr>
  
  <!--
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
  -->
  
  
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
        <input type="checkbox" name="organ8" value="1" id="organ8"  onkeypress="return handleEnter(this, event)" disabled="disabled"/>
        8. ตัดมดลูก</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input type="checkbox" name="group_complications4" value="1" id="group_complications_3"  onclick="other_name110('group_complications_3','text_other_med',3)" onkeypress="return handleEnter(this, event)"  disabled="disabled"/><strong>
      4. อื่น ๆ โปรดระบุเป็นศัพท์ทางการแพทย์เขียนด้วยภาษาอังกฤษตัวพิมพ์ใหญ่ในช่องว่างข้างล่าง </strong></label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input name="text_other_med1" type="text" disabled="disabled" id="text_other_med1" size="70" maxlength="150" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input name="text_other_med2" type="text" disabled="disabled" id="text_other_med2" size="70" maxlength="150" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
      <input name="text_other_med3" type="text" disabled="disabled" id="text_other_med3" size="70" maxlength="150" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  
   <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">21.  สถานะของทารกในครรภ์</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="status_baby" value="1" id="baby_0" onkeypress="return handleEnter(this, event)"  />
        1. เสียชีวิตก่อนคลอด</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="status_baby" value="2" id="baby_1" onkeypress="return handleEnter(this, event)"  />
        2. เสียชีวิตทันทีหลังคลอด</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="status_baby" value="3" id="baby_2" onkeypress="return handleEnter(this, event)"  />
        3. คลอดมีชีวิต</label></td>
    <td>&nbsp;</td>
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
     	 <input type="radio" name="group_disposition" value="4" id="group_disposition_3"  onkeypress="return handleEnter(this, event)"  onclick="other_name4('group_disposition_3','text_group_disposition1')" />
      4. อื่นๆ โปรดระบุ 
      <input name="text_group_disposition1" type="text" disabled="disabled" class="validate[condRequired[group_disposition_3]]" id="text_group_disposition1" size="30" maxlength="100" onkeypress="return handleEnter(this, event)" />
    </label></td>
    </tr>
  <tr>
    <td colspan="4" class="menu_center"><p> </p><br><img src="image/MPH.png"/>
    <h2>โปรดตรวจสอบความถูกต้องสมบูรณ์ของคำถามทุกข้อ  ก่อนสิ้นสุดการตอบแบบสอบถาม<br />
      ขอขอบคุณในความร่วมมือ<br />
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

</div>
<?php

		}
		else
		{
?>
<div id="tabs" style="width:900px" >
  <ul>
    <li><a href="#tabs-1">คำชี้แจง</a></li>
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
 </div>

<?php
		}
?>
<br /><br /><br />
</div>

</form>

</body>
</html>