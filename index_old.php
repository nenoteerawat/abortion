<?php

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

$h_submit = $_POST['h_submit'];
if(!empty($h_submit))
	{
$hopital_id = $_POST['hopital_id'];
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
$ga = $_POST['ga'];
$plan_pregnant = $_POST['plan_pregnant'];
$contraception = $_POST['contraception'];
$text_contraception1 = $_POST['text_contraception1'];
$text_contraception2 = $_POST['text_contraception2'];
$cause_abortion = $_POST['cause_abortion'];
$problem_money = $_POST['problem_money'];
$text_problem_money = $_POST['text_problem_money'];
$problem_health = $_POST['problem_health'];
$text_problem_health1 = $_POST['text_problem_health1'];
$text_problem_health2 = $_POST['text_problem_health2'];
$text_problem_health3 = $_POST['text_problem_health3'];
$text_problem_health4 = $_POST['text_problem_health4'];
$text_problem_health5 = $_POST['text_problem_health5'];
$problem_family = $_POST['problem_family'];
$text_problem_family = $_POST['text_problem_family'];
$other_reasons = $_POST['other_reasons'];
$group_effect = $_POST['group_effect'];
$text_group_effect = $_POST['text_group_effect'];
$abortion_mode = $_POST['abortion_mode'];
$abortion_personal = $_POST['abortion_personal'];
$text_abortion_personal = $_POST['text_abortion_personal'];
$abortion_method = $_POST['abortion_method'];
$text_abortion_method1 = $_POST['text_abortion_method1'];
$text_abortion_method2 = $_POST['text_abortion_method2'];
$ga2 = $_POST['ga2'];
$lmp = $_POST['lmp'];
$group_complications = $_POST['group_complications'];
$text_group_complications1 = $_POST['text_group_complications1'];
$text_group_complications2 = $_POST['text_group_complications2'];
$text_group_complications3 = $_POST['text_group_complications3'];
$group_disposition = $_POST['group_disposition'];
$text_group_disposition1 = $_POST['text_group_disposition1'];
$text_group_disposition2 = $_POST['text_group_disposition2'];
$data_add = $_POST['data_add'];
$time_add = $_POST['time_add'];
$user_add = $_POST['user_add'];
$status_check ='';
$user_check ='';

$survey_id = $hopital_id.$file_id;


		$sql = "INSERT INTO main (survey_id, survey_agency, survey_district, survey_province, survey_name, survey_position, survey_datefirst, survey_dateend, age, friend_age, text_friend_age, nationality, text_nationality, religion, text_religion, status, first_si, job, text_job1, text_job2, education, text_education, friend_education, text_friend_education, salary, text_salary, friend_salary, text_friend_salary, pregnancy_history, births_history, children_history, last_daughter_history, miscarriage, abortion, first_abortion, ga, plan_pregnant, contraception, text_contraception1, text_contraception2, cause_abortion, problem_money, text_problem_money, problem_health, text_problem_health1, text_problem_health2, text_problem_health3, text_problem_health4, text_problem_health5, problem_family, text_problem_family, other_reasons, group_effect, text_group_effect, abortion_mode, abortion_personal, text_abortion_personal, abortion_method, text_abortion_method1, text_abortion_method2, ga2, lmp, group_complications, text_group_complications1, text_group_complications2, text_group_complications3, group_disposition, text_group_disposition1, text_group_disposition2, data_add, time_add, user_add, ip_add, status_check, user_check) 
		
		VALUES ('$survey_id', '$survey_agency', '$survey_district', '$survey_province', '$survey_name', '$survey_position', '$survey_datefirst', '$survey_dateend', '$age', '$friend_age', '$text_friend_age', '$nationality', '$text_nationality', '$religion', '$text_religion', '$status', '$first_si', '$job', '$text_job1', '$text_job2', '$education', '$text_education', '$friend_education', '$text_friend_education', '$salary', '$text_salary', '$friend_salary', '$text_friend_salary', '$pregnancy_history', '$births_history', '$children_history', '$last_daughter_history', '$miscarriage', '$abortion', '$first_abortion', '$ga', '$plan_pregnant', '$contraception', '$text_contraception1', '$text_contraception2', '$cause_abortion', '$problem_money', '$text_problem_money', '$problem_health', '$text_problem_health1', '$text_problem_health2', '$text_problem_health3', '$text_problem_health4', '$text_problem_health5', '$problem_family', '$text_problem_family', '$other_reasons', '$group_effect', '$text_group_effect', '$abortion_mode', '$abortion_personal', '$text_abortion_personal', '$abortion_method', '$text_abortion_method1', '$text_abortion_method2', '$ga2', '$lmp', '$group_complications', '$text_group_complications1', '$text_group_complications2', '$text_group_complications3', '$group_disposition', '$text_group_disposition1', '$text_group_disposition2', '$today', '$now_time', '$user_add', '$ipaddress', '$status_check', '$user_check')";
		$result = mysql_query($sql);

	}

//echo $sql;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Abortion</title>


  
  	<link rel="stylesheet" href="css/style_site.css">
  	<link rel="stylesheet" href="jquery/css/flick/jquery-ui-1.9.2.custom.css">
    <link rel="stylesheet" href="jquery/css/template.css" type="text/css"/>
  	<!--<script src="jquery/js/jquery-1.10.2.js"></script>-->
    
    <script src="jquery/js/jquery-1.8.3.js"></script>
    
  	<script src="jquery/js/jquery-ui-1.9.2.custom.min.js"></script>
  	<script src="jquery/ui/jquery.ui.tabs.js"></script>
 	<script src="jquery/ui/jquery.ui.datepicker.js"></script>  

	<link rel="stylesheet" href="jquery/css/validationEngine.jquery.css" type="text/css">
	<!--<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>-->
	<script src="jquery/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="jquery/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

  <script>

	jQuery(document).ready( function() {
		// binds form submission and fields to the validation engine
		jQuery("#form1").validationEngine();
	});
		
	$(function() {
		/*$('#tabs').tabs();*/
	$('#tabs').tabs();
		
	

	
	
	$( "input[type=button],button" )
      .button()
      .click(function( event ) {
        event.preventDefault();
      });
	  
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
	$( "#lmp" ).datepicker({

		  	dateFormat: 'dd/mm/yy',
		  	changeMonth: true,
		  	changeYear: true
		});
  	
	//jQuery(".tab_content:first").show();
 
 //------------Next Tab------------
//	$(".nexttab3").click(function() {
//		$("#tabs").tabs("select", "tabs-3");
//		});
	});
	
	
function getSelectedTabIndex(change)  {
    var $tabs = $('#tabs').tabs();
    var selected = $tabs.tabs('option', 'selected') + change;    
    if (selected == 0) {
        $("#prevBtn").hide();
    }
    else {
        $("#prevBtn").show();
    }

    var tabsCount = this.$('#tabs').tabs('length') -1;
    if (selected == tabsCount) {
        $("#nextBtn").hide();
    }
    else {
        $("#nextBtn").show();
    }    
    return selected;
}

function nextOfferTab()  {
    var newTabIndex = parseInt(getSelectedTabIndex(1));
    $('#tabs').tabs('select', newTabIndex);
}

function prevOfferTab()  {
    var newTabIndex = parseInt(getSelectedTabIndex(-1));
    $('#tabs').tabs('select', newTabIndex);
}
  </script>


</head>

<body>
<form id="form1" name="form1" method="post" action="" >

<div id="tabs" style="width:900px">
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
<div align="center"><label><button class="next-product">ต่อไป</button></label></div>
  </div>
  <div id="tabs-2">
    <table width="100%" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td colspan="2" class="menu_left"><strong>ข้อมูลของหน่วยงานและเจ้าหน้าที่เก็บข้อมูล</strong></td>
        <td width="9%">&nbsp;</td>
        <td width="35%">&nbsp;</td>
      </tr>
      <tr>
        <td width="35%" class="menu_right">แบบสอบถามหมายเลข : </td>
        <td colspan="3"><label>
          <input name="hopital_id" type="text" id="hopital_id" size="15" maxlength="15" class="validate[required] text-input"/>
          <input name="file_id" type="text" id="file_id" size="5" maxlength="5" />
        </label></td>
        </tr>
      <tr>
        <td class="menu_right">ชื่อหน่วยงานที่เก็บข้อมูลโรงพยาบาล : </td>
        <td width="21%"><label>
          <input name="survey_agency" type="text" id="survey_agency" size="30" maxlength="50" />
        </label></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="menu_right">อำเภอ : </td>
        <td><label>
          <input name="survey_district" type="text" id="survey_district" size="30" maxlength="50" />
        </label></td>
        <td class="menu_right">จังหวัด : </td>
        <td><label>
          <input name="survey_province" type="text" id="survey_province" size="30" />
        </label></td>
      </tr>
      <tr>
        <td class="menu_right">ชื่อ - สกุล เจ้าหน้าที่เก็บข้อมูล : </td>
        <td><label>
          <input name="survey_name" type="text" id="survey_name" size="30" maxlength="50" />
        </label></td>
        <td class="menu_right">ตำแหน่ง : </td>
        <td><label>
          <input name="survey_position" type="text" id="survey_position" size="30" maxlength="50" />
        </label></td>
      </tr>
      <tr>
        <td class="menu_right">วัน/ เดือน/ ปีที่อาสาสมัครมาโรงพยาบาล  (วันที่แรกรับ) : </td>
        <td><label>
          <input type="text" name="survey_datefirst" id="survey_datefirst" />
        </label></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="menu_right">วัน/ เดือน/ ปีที่จำหน่ายจากโรงพยาบาล : </td>
        <td><label>
          <input type="text" name="survey_dateend" id="survey_dateend" />
        </label></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>

    </table>
<!--<div align="center"><label><button class="next-product">ต่อไป</button></label></div>-->

<!--<button  id="previous2">Previous Tab</button>
<button  id="next2">Next Tab</button>-->

<input type="button" class="btn btn-primary" id="prevBtn" value="Prev" />
    <input type="button" class="btn btn-primary" id="nextBtn" value="Next" />
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
    <td width="11%"></td>
    <td width="17%" class="menu_right"></td>
    <td colspan="2">อายุของท่าน <label>
      <input name="age" type="text" id="age" maxlength="2" />
      ปี (อายุเต็มปัดเศษทิ้ง) </label></td>
    </tr>
  <tr>
    <td rowspan="2">&nbsp;</td> 
    <td rowspan="2" valign="top" class="menu_right"></td>
    <td colspan="2">ทราบอายุของสามีหรือเพื่อนชาย 
            <label>
              <input type="radio" name="friend_age" value="1" id="friend_age_0" />
            ทราบ</label>
      กรุณาระบุ 
      <label>
        <input name="text_friend_age" type="text" id="text_friend_age" maxlength="2" />
      </label>
      ปี (อายุเต็มปัดเศษทิ้ง)</td>
    </tr>
  <tr>
    <td colspan="2">      <label><font color="#FFFFFF">
      ทราบอายุของสามีหรือเพื่อนชาย </font><input type="radio" name="friend_age" value="2" id="friend_age_1"/>
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
    <td width="37%">
      <label>
        <input type="radio" name="nationality" value="1" id="nationality_0" />
        ไทย</label>
      <br />

    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="nationality" value="2" id="nationality_1" />
        อื่นๆ</label>
      ระบุ 
      <label>
        <input name="text_nationality" type="text" id="text_nationality" maxlength="50" />
      </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="label_h">3.  ท่านนับถือศาสนาอะไร</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="religion" value="1" id="religion_0" />
        พุทธ</label>

    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>     <label>
        <input type="radio" name="religion" value="2" id="religion_1" />
        คริสต์</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="religion" value="3" id="religion_2" />
        อิสลาม</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="religion" value="4" id="religion_3" /></label>
        อื่น ๆ ระบุ<label>
        <input name="text_religion" type="text" id="text_religion" maxlength="50" />
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
    <td><label>
          <input type="radio" name="status" value="1" id="status_0" />
          1. โสด (ไม่เคยอยู่กินฉันท์สามีภรรยากับชายใด) </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="status" value="2" id="status_1" />
          2. คู่ (กำลังอยู่กินฉันท์สามีภรรยากับชายใดชายหนึ่ง)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="status" value="3" id="status_2" />
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
      <input name="first_si" type="text" id="first_si" maxlength="2" />
    ปี </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="label_h">6. อาชีพหลักของท่าน </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="job" value="1" id="job_0" />
      1. กำลังศึกษา (ระบุระดับชั้นที่กำลังศึกษา) 
      <input name="text_job1" type="text" id="text_job1" maxlength="50" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="2" id="job_1" />
          2. แม่บ้าน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="3" id="job_2" />
          3. ค้าขาย หรือประกอบธุรกิจส่วนตัว</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="4" id="job_3" />
          4. รับจ้าง </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="5" id="job_4" />
          5. เกษตรกร</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="6" id="job_5" />
          6. รับราชการ/รัฐวิสาหกิจ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="7" id="job_6" />
          7. ลูกจ้างทั่วไป</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
          <input type="radio" name="job" value="8" id="job_7" />
          8. ว่างงาน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="job" value="9" id="job_8" />
      9. อื่น ๆ (โปรดระบุ) 
      <input name="text_job2" type="text" id="text_job2" maxlength="50" />
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
        <input type="radio" name="education" value="1" id="education_0" />
        1. ไม่ทราบ </label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="2" id="education_1" />
        2. ไม่ได้เรียน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="3" id="education_2" />
        3. ประถมศึกษา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="4" id="education_3" />
        4. มัธยมศึกษา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="5" id="education_4" />
        5. อนุปริญญา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="6" id="education_5" />
        6. ปริญญาตรี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="7" id="education_6" />
        7. สูงกว่าปริญญาตรี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="education" value="8" id="education_7" />
        8. อื่นๆ ระบุ 
        <input name="text_education" type="text" id="text_education" maxlength="50" />
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
        <input type="radio" name="friend_education" value="1" id="friend_education_0" />
        1. ไม่ทราบ</label>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="2" id="friend_education_1" />
        2. ไม่ได้เรียน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="3" id="friend_education_2" />
        3. ประถมศึกษา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="4" id="friend_education_3" />
        4. มัธยมศึกษา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="5" id="friend_education_4" />
        5. อนุปริญญา</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="6" id="friend_education_5" />
        6. ปริญญาตรี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="7" id="friend_education_6" />
        7. สูงกว่าปริญญาตรี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_education" value="8" id="friend_education_7" />
        8. อื่นๆ ระบุ</label> <label>
          <input name="text_friend_education" type="text" id="text_friend_education" maxlength="50" />
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
    <td>
      <label>
        <input type="radio" name=" salary" value="1" id="salary_0" />
        1.1 มี ประมาณ</label>
      <label>
        <input name="text_friend" type="text" id="text_friend" maxlength="10" />
      บาท/เดือน </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="salary" value="2" id="salary_1" />
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
    <td>
      <label>
        <input type="radio" name="friend_salary" value="1" id="friend_salary_0" />
        2.1 มี ประมาณ</label>
	  <label>
	    <input name="text_friend_salary" type="text" id="text_friend_salary" maxlength="10" />
	    บาท/เดือน </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_salary" value="2" id="friend_salary_1" />
        2.2 ไม่มี</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="friend_salary" value="3" id="friend_salary_2" />
        2.3 ไม่ทราบ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">10. ประวัติการตั้งครรภ์ การคลอด และจำนวนบุตรมีชีวิตของท่าน</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">1. จำนวนการตั้งครรภ์ 
      <label>
        <input name="pregnancy_history" type="text" id="pregnancy_history" size="3" maxlength="1" />
        ครั้ง (รวมการตั้งครรภ์ครั้งนี้ด้วย)</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>2. จำนวนการคลอด 
      <label>
        <input name="births_history" type="text" id="births_history" size="3" maxlength="1" />
      ครั้ง  </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>3. จำนวนบุตรมีชีวิต 
      <label>
        <input name="children_history" type="text" id="children_history" size="3" maxlength="1" />
      คน  </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>4. บุตรคนสุดท้ายอายุ 
      <label>
        <input name="last_daughter_history" type="text" id="last_daughter_history" size="3" maxlength="2" />
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
    <td>1.  แท้งเอง 
      <label>
<input name="miscarriage" type="text" id="miscarriage" size="3" maxlength="1" />
ครั้ง </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">2.  ทำแท้ง 
      <label>
        <input name="abortion" type="text" id="abortion" size="3" maxlength="1" /></label>
        ครั้ง   &nbsp;ครั้งแรกเมื่ออายุ
        <label><input name="first_abortion" type="text" id="first_abortion" size="3" maxlength="2" />
        ปี</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="label_h">12. อายุครรภ์ของครรภ์นี้</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input name="ga" type="text" id="ga" size="3" maxlength="3" />
      เดือน (ถ้าไม่เต็มเดือนไม่ต้องปัดเศษ)</label></td>
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
        <input type="radio" name="plan_pregnant" value="1" id="plan_pregnant_0" />
        1. ตั้งใจ</label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="plan_pregnant" value="2" id="plan_pregnant_1" />
        2. ไม่ตั้งใจ </label></td>
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
        <input type="radio" name="contraception" value="1" id="contraception_0" />
        1. ไม่ได้ใช้การคุมกำเนิดวิธีใด   ระบุเหตุผล</label>
      
      <label>
        <input name="text_contraception1" type="text" id="text_contraception1" size="50" maxlength="100" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="radio" name="contraception" value="2" id="contraception_1" /></label>
      2. ใช้การคุมกำเนิดวิธีใดวิธีหนึ่ง ระบุวิธี 
      <label><input name="text_contraception2" type="text" id="text_contraception2" size="50" maxlength="100" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">15. สาเหตุของการแท้งครั้งนี้เกิดจากอะไร</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="cause_abortion" value="1" id="cause_abortion_0" />
        1. แท้งเอง (หากแท้งเอง ข้ามไปข้อ 21 - 22) </label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="cause_abortion" value="2" id="cause_abortion_1" />
        2. ทำแท้ง</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">16. เหตุผลที่ทำให้ท่านต้องทำแท้งครั้งนี้ (ตอบได้มากกว่า 1 ข้อ)</td>
    <td>&nbsp;</td>
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
        <input type="checkbox" name="problem_money" value="1" id="problem_money_0" />
        1.1 มีปัญหาเรื่องเงิน</label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_money" value="2" id="problem_money_1" />
        1.2 การตั้งครรภ์เป็นอุปสรรคต่ออาชีพ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="problem_money" value="3" id="problem_money_2" />
      1.3 อื่นๆ ระบุ </label>
      <label>
        <input name="text_problem_money" type="text" id="text_problem_money" size="50" maxlength="100" />
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
        <input type="checkbox" name="problem_health" value="1" id="problem_health_0" />
        2.1 อายุน้อยเกินไป</label>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_health" value="2" id="problem_health_1" />
        2.2 อายุมากเกินไป</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_health" value="3" id="problem_health_2" />
        2.3 ติดเชื้อเอดส์ ขณะตั้งครรภ์</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_health" value="4" id="problem_health_3" />
        2.4 ติดเชื้อหัดเยอรมันขณะตั้งครรภ์</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_health" value="5" id="problem_health_4" />
        2.5 ตั้งครรภ์ไข่ลม</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="problem_health" value="6" id="problem_health_5" /></label>
      2.6 ทารกในครรภ์ผิดปกติ ระบุชื่อโรค 
      <label> <input name="text_problem_health1" type="text" id="text_problem_health1" size="50" maxlength="100" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_health" value="8" id="problem_health_7" />
        2.7 ทารกในครรภ์เสียชีวิต</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_health" value="9" id="problem_health_8" />
        2.8 ทารกในครรภ์เป็นโรคธาลัสซีเมีย</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_health" value="10" id="problem_health_9" />
        2.9 เป็นโรคธาลัสซีเมีย</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_health" value="11" id="problem_health_10" />
        2.10 เป็นโรคเบาหวาน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="problem_health" value="12" id="problem_health_11" /></label>
      2.11 เป็นโรคต่อมไร้ท่ออื่นๆ ระบุชื่อโรค 
      <label><input name="text_problem_health2" type="text" id="text_problem_health2" size="50" maxlength="100" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="problem_health" value="13" id="problem_health_12" /></label>
      2.12 เป็นโรคหัวใจระบุ ระบุชื่อโรค 
      <label><input name="text_problem_health3" type="text" id="text_problem_health3" size="50" maxlength="100" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="problem_health" value="14" id="problem_health_13" /></label>
      2.13 เป็นโรคมะเร็ง ระบุชื่อโรคหรืออวัยวะที่เป็นมะเร็ง 
      <label><input name="text_problem_health4" type="text" id="text_problem_health4" size="50" maxlength="100" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="problem_health" value="15" id="problem_health_14" /></label>
      2.14 อื่นๆ ระบุ 
      <label><input name="text_problem_health5" type="text" id="text_problem_health5" size="50" maxlength="100" />
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
        <input type="checkbox" name="problem_family" value="1" id="problem_family_0" />
        3.1 ยังเรียนไม่จบ</label>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_family" value="2" id="problem_family_1" />
        3.2 ยังไม่พร้อมที่จะแต่งงาน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_family" value="3" id="problem_family_2" />
        3.3 มีบุตรถี่เกินไป</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_family" value="4" id="problem_family_3" />
        3.4 ฝ่ายชายไม่รับผิดชอบ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_family" value="5" id="problem_family_4" />
        3.5 ฝ่ายชายมีครอบครัวแล้ว</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_family" value="6" id="problem_family_5" />
        3.6 มีปัญหากับญาติของฝ่ายชาย</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_family" value="7" id="problem_family_6" />
        3.7 ตั้งครรภ์เนื่องจากถูกข่มขืน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_family" value="8" id="problem_family_7" />
        3.8 ตั้งครรภ์เนื่องจากคุมกำเนิดล้มเหลว</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_family" value="9" id="problem_family_8" />
        3.9 ตั้งครรภ์กับชายอื่นที่ไม่ใช่สามีหรือเพื่อนชายประจำ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="problem_family" value="10" id="problem_family_9" />
      3.10 ตั้งครรภ์กับบุคคลสืบสายเลือดเดียวกันหรือใกล้ชิดทางสายเลือดคือ 
      <input name="text_problem_family" type="text" id="text_problem_family" size="40" maxlength="50" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="problem_family" value="11" id="problem_family_10" />
      3.11 หย่าหรือเลิกกับสามีหรือเพื่อนชายภายหลังจากตั้งครรภ์นี้</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="problem_family" value="12" id="problem_family_11" />
        3.12 มีบุตรพอแล้ว</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">4. เหตุผลอื่นๆ ระบุ 
      <label>
        <input name="other_reasons" type="text" id="other_reasons" size="50" maxlength="100" />
      </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">17. ผู้ที่มีอิทธิพลสูงสุดต่อการตัดสินใจทำแท้ง ครั้งนี้ (เลือกตอบเพียงข้อเดียวเท่านั้น)</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="group_effect" value="1" id="group_effect_0" />
        1. ตัวอาสาสมัครเอง</label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="group_effect" value="2" id="group_effect_1" />
        2. สามี/เพื่อนชาย</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="group_effect" value="3" id="group_effect_2" />
        3. พ่อ/แม่</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="group_effect" value="4" id="group_effect_3" />
        4. พี่/น้อง</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="group_effect" value="5" id="group_effect_4" />
        5. ญาติ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="group_effect" value="6" id="group_effect_5" />
        6. เพื่อน/เพื่อนบ้าน</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="group_effect" value="7" id="group_effect_6" />
        7. ครู/อาจารย์</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="group_effect" value="8" id="group_effect_7" />
        8. แพทย์/พยาบาล</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="radio" name="group_effect" value="9" id="group_effect_8" />
      9. อื่นๆ ระบุ 
      <input name="text_group_effect" type="text" id="text_group_effect" size="50" maxlength="100" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">18. การทำแท้งครั้งนี้ใครเป็นผู้ทำแท้งให้</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">
      <label>
        <input type="radio" name="abortion_mode" value="1" id="abortion_mode_0" />
        1. ทำด้วยตนเอง (หากทำแท้งด้วยตนเอง ข้ามไปตอบข้อที่ 20) </label>
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="abortion_mode" value="2" id="abortion_mode_1" />
        2. ทำโดยผู้อื่น</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">19. อาชีพของผู้ทำแท้งในครั้งนี้ </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="radio" name="abortion_personal" value="1" id="abortion_personal_0" />
        1. แพทย์</label>
      </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="abortion_personal" value="2" id="abortion_personal_1" />
        2. พยาบาล</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="abortion_personal" value="3" id="abortion_personal_2" />
        3. ผู้ช่วยพยาบาล/ เจ้าหน้าที่สาธารณสุข</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="radio" name="abortion_personal" value="4" id="abortion_personal_3" />
      4. ไม่ใช่บุคลากรทางการแพทย์ ระบุ 
      <input name="text_abortion_personal" type="text" id="text_abortion_personal" size="50" maxlength="100" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="radio" name="abortion_personal" value="5" id="abortion_personal_4" />
        5. ไม่ทราบ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">20. วิธีการทำแท้ง (ตอบได้มากกว่า 1 ข้อ)</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="checkbox" name="abortion_method" value="1" id="abortion_method_0" />
        1. ใช้เครื่องสุญญากาศดูดออกทางช่องคลอด</label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="abortion_method" value="2" id="abortion_method_1" />
        2. ใช้เครื่องมือขูดออกทางช่องคลอด</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="abortion_method" value="3" id="abortion_method_2" />
        3. รับประทานยาเม็ด</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="abortion_method" value="4" id="abortion_method_3" />
        4. เหน็บยาเข้าทางช่องคลอด</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="abortion_method" value="5" id="abortion_method_4" />
      5. ใส่สายยางและ/หรือฉีดสารใด ๆ เข้าทางช่องคลอด </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="abortion_method" value="6" id="abortion_method_5" />
      6. ใช้อุปกรณ์ของแข็งสอดและ/หรือ กระทุ้งเข้าทางช่องคลอด</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="abortion_method" value="7" id="abortion_method_6" />
        7. บีบ นวด เค้นบริเวณหน้าท้อง</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="abortion_method" value="8" id="abortion_method_7" />
      8. จงใจให้เกิดอุบัติเหตุโดยวิธีใดวิธีหนึ่ง ระบุ 
      <input name="text_abortion_method1" type="text" id="text_abortion_method1" size="50" maxlength="100" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="abortion_method" value="9" id="abortion_method_8" />
      9. อื่นๆ ระบุ 
      <input name="text_abortion_method2" type="text" id="text_abortion_method2" size="50" maxlength="100" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="abortion_method" value="10" id="abortion_method_9" />
        10. ไม่ทราบ</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
    <div align="center"><label><button class="next-product">ต่อไป</button></label></div>
  </div>
  <div id="tabs-4">
<table width="100%" border="0" cellspacing="2" cellpadding="5">
  <tr>
    <td colspan="3"  valign="top" class="menu_left"><strong>ข้อมูลจากแฟ้มประวัติของอาสาสมัคร</strong></td>
    <td width="35%">&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2"  valign="top" class="menu_right">&nbsp;</td>
    <td colspan="3"  valign="top"  class="label_h">คำถามข้อ 21-22 เจ้าหน้าที่เก็บข้อมูลหาข้อมูลประกอบจากแฟ้มประวัติของอาสาสมัคร</td>
    </tr>
  <tr>
    <td colspan="3"  valign="top"  class="label_h">21. อายุครรภ์ครั้งนี้</td>
  </tr>
  <tr>
    <td width="11%" rowspan="2"></td>
    <td width="17%" class="menu_right"></td>
    <td colspan="2"><label>
      อายุครรภ์ครั้งนี้
        <input name="ga2" type="text" id="textfield33" size="3" maxlength="3" />
    </label>
      สัปดาห์<br /></td>
  </tr>
  <tr>
    <td width="17%" class="menu_right"></td>
    <td colspan="2">LMP วัน 
      <label>
        <input type="text" name="lmp" id="lmp" />
      lmp</label></td>
  </tr>
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td colspan="3" valign="top"   class="label_h">22. ภาวะแทรกซ้อนที่เกิดขึ้นกับอาสาสมัครหลังการแท้งเองหรือทำแท้งครั้งนี้ (ตอบได้มากกว่า 1 ข้อ)</td>
    </tr>
  <tr>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td valign="top" class="menu_right">&nbsp;</td>
    <td width="37%">
      <label>
        <input type="checkbox" name="group_complications" value="1" id="group_complications_0" />
        1. ไม่มีภาวะแทรกซ้อนใด ๆ</label>

    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="group_complications" value="2" id="group_complications_1" />
      2. ตกเลือดมากจนต้องให้เลือด (Excessive Hemorrhage)</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="group_complications" value="3" id="group_complications_2" />
        3. ปากมดลูกฉีกขาด (Cervical Laceration)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="group_complications" value="4" id="group_complications_3" />
        4. มดลูกทะลุ (Uterine Perforation)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="group_complications" value="5" id="group_complications_4" />
      5. ลำไส้ฉีกขาดหรือทะลุ (Bowel Injuries or Perforation )</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="group_complications" value="6" id="group_complications_5" />
      6. อุ้งเชิงกรานอักเสบ (Pelvic Inflammatory Disease - PID)</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="group_complications" value="7" id="group_complications_6" />
        7. เยื่อบุผนังช่องท้องอักเสบ (Peritonitis)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="group_complications" value="8" id="group_complications_7" />
        8. ติดเชื้อบาดทะยัก  (Tetanus)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="group_complications" value="9" id="group_complications_8" />
        9. ติดเชื้อในกระแสเลือด (Septicemia)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="group_complications" value="10" id="group_complications_9" />
        10. ไตวาย (Renal Failure)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="group_complications" value="11" id="group_complications_10" />
        11. หัวใจวาย (Cardiac Failure)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="group_complications" value="12" id="group_complications_11" />
        12. ช็อคจากการเสียเลือด (Haemorrhagic Shock)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
        <input type="checkbox" name="group_complications" value="13" id="group_complications_12" />
        13. ช็อคจากการติดเชื้อ (Septic Shock)</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
        <input type="checkbox" name="group_complications" value="14" id="group_complications_14" />
        14. ตัดมดลูก</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="checkbox" name="group_complications" value="15" id="group_complications_15" />
      15. อื่น ๆ โปรดระบุเป็นศัพท์ทางการแพทย์เขียนด้วยภาษาอังกฤษตัวพิมพ์ใหญ่ในช่องว่างข้างล่าง</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input name="text_group_complications1" type="text" id="textfield34" size="60" maxlength="100" class="validate[required] text-input"/>
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input name="text_group_complications2" type="text" id="text_group_complications2" size="60" maxlength="100" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input name="text_group_complications3" type="text" id="text_group_complications3" size="60" maxlength="100" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="label_h">23.  สรุปผลการรักษา (ตอบได้มากกว่า 1 ข้อ)</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="checkbox" name="group_disposition" value="1" id="group_disposition_0" />
        1. หาย โดยจำหน่ายกลับบ้าน</label>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="group_disposition" value="2" id="group_disposition_1" />
        2. ส่งต่อไปรักษาที่ ร.พ. อื่น </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="group_disposition" value="3" id="group_disposition_2" />
        3. เสียชีวิต</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="group_disposition" value="4" id="group_disposition_3" />
      4. ไม่สมัครใจอยู่รักษาต่อที่โรงพยาบาลนี้ โปรดระบุเหตุผล 
      <input name="text_group_disposition1" type="text" id="text_group_disposition1" size="50" maxlength="100" />
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label>
        <input type="checkbox" name="group_disposition" value="5" id="group_disposition_4" />
        5. หนีออกจากโรงพยาบาล</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">      <label>
      <input type="checkbox" name="group_disposition" value="6" id="group_disposition_5" />
      6. อื่นๆ โปรดระบุ 
      <input name="text_group_disposition2" type="text" id="text_group_disposition2" size="50" maxlength="100" />
    </label></td>
    </tr>
  <tr>
    <td colspan="4" class="menu_center"><h2>โปรดตรวจสอบความถูกต้องสมบูรณ์ของคำถามทุกข้อ  ก่อนสิ้นสุดการตอบแบบสอบถาม<br />
        ขอขอบคุณในความร่วมมือ<br />
        สำนักอนามัยการเจริญพันธุ์  กรมอนามัย  กระทรวงสาธารณสุข<br />
      </h2></td>
    </tr>
</table>
    <div align="center"><label><button class="submit" type="submit">บันทึก</button>
      <input name="h_submit" type="hidden" id="h_submit" value="1" />
    </label>
    </div>

  </div>
</div>

</form>

</body>
</html>