<?php
	session_start();

	if(empty($_SESSION["ss_id"]) )
		{
			echo"<script>
			window.location = 'login.php';
			</script>";		
		}
	
	include("connect.php");
	
	//$id=$_GET['id'];
	
	//$sql = "select * from abortionsurvey_main where survey_id = '$id'";
	//$result = mysql_query($sql);
	//$data = mysql_fetch_array($result);
	

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



	});



  </script>
<style>

.select_menu
{ 
	color:#FFF;
	font-size:18px;
	text-decoration: none; 	 
	background-color:#3399CC; /* โค๊ดสีพื้นหลัง */
	filter:alpha(opacity=60);
	 -moz-opacity:0.6;opacity:0.6;
	
}
.select_menu:hover { 
text-decoration: none; 
background-color:#339; /* โค๊ดสีพื้นหลัง */
}
.select_menu a:link {
	color: #FFF;
}
.select_menu a:visited {
	color: #FFF;
}
.select_menu a:active {
	color: #FFF;
}
</style>

</head>

<body>

<?php

		
?>
<div class="broder_set" style="width:908px">
<div align="center"><img src="image/h.png" width="900" height="140" /></div>
<div><?php include("menu.php"); ?></div>
<div align="right">
  <h3>Username : <?php echo $_SESSION["ss_name"]; ?> : <a href="logout.php">Logout</a></h3>
</div>
  
  
  <div id="tabs" style="width: 900px; text-align: center;" >
  <ul>
    <li><a href="#tabs-1">สรุปรายงานประจำปี พ.ศ.2557</a></li>
    <li><a href="#tabs-2">สรุปรายงานประจำปี พ.ศ.2558</a></li>
     <li><a href="#tabs-3">สรุปรายงานประจำปี พ.ศ.2559</a></li>
</ul>
  <div id="tabs-1">
  	<table width="100%" border="0" cellspacing="2" cellpadding="10" class="summarize">
  <tr bgcolor="#3399CC">
    <td width="50%" height="56"><h3><font color="#FFFFFF"><center>สรุปรายงานประจำจังหวัด</center></font></h3></td>
    <td width="50%"><h3><font color="#FFFFFF"><center>ดาวน์โหลด</center></font></h3></td>
  </tr>
  <tr bgcolor="#B4DCED">
    <td class="menu_center">สมุทรปราการ</td>
    <td class="menu_center"><a href="summary/summary2557/Summary2557-site 11-สมุทรปราการ.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">พระนครศรีอยุธยา</td>
    <td class="menu_center"><a href="summary/summary2557/Summary2557-site 14-พระนครศรีอยุธยา.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">สระบุรี</td>
    <td class="menu_center"><a href="summary/summary2557/Summary2557-site 19-สระบุรี.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">ชลบุรี</td>
    <td class="menu_center"><a href="summary/summary2557/Summary2557-site 20-ชลบุรี.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">นครราชสีมา</td>
    <td class="menu_center"><a href="summary/summary2557/Summary2557-site 30-นครราชสีมา.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">อุบลราชธานี</td>
    <td class="menu_center"><a href="summary/summary2557/Summary2557-site 34-อุบลราชธานี.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">ขอนแก่น</td>
    <td class="menu_center"><a href="summary/summary2557/Summary2557-site 40-ขอนแก่น.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">เชียงราย</td>
    <td class="menu_center"><a href="summary/summary2557/Summary2557-site 57-เชียงราย.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">นครสวรรค์</td>
    <td class="menu_center"><a href="summary/summary2557/Summary2557-site 60-นครสวรรค์.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">พิษณุโลก</td>
    <td class="menu_center"><a href="summary/summary2557/Summary2557-site 65-พิษณุโลก.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">นครปฐม</td>
    <td class="menu_center"><a href="summary/summary2557/Summary2557-site 73-นครปฐม.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">นครศรีธรรมราช</td>
    <td class="menu_center"><a href="summary/summary2557/Summary2557-site 80-นครศรีธรรมราช.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">สงขลา</td>
    <td class="menu_center"><a href="summary/summary2557/Summary2557-site 90-สงขลา.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
</table>
  </div>
  <div id="tabs-2">
  	<table width="100%" border="0" cellspacing="2" cellpadding="10" class="summarize">
  <tr bgcolor="#3399CC">
    <td width="50%" height="56"><h3><font color="#FFFFFF"><center>สรุปรายงานประจำจังหวัด</center></font></h3></td>
    <td width="50%"><h3><font color="#FFFFFF"><center>ดาวน์โหลด</center></font></h3></td>
  </tr>
  <tr >
    <td class="menu_center">สมุทรปราการ</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 11-สมุทรปราการ.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">พระนครศรีอยุธยา</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 14-พระนครศรีอยุธยา.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr>
    <td class="menu_center">สระบุรี</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 19-สระบุรี.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">ชลบุรี</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 20-ชลบุรี.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr>
    <td class="menu_center">จันทบุรี</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 22-จันทบุรี.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">นครราชสีมา</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 30-นครราชสีมา.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr >
    <td class="menu_center">บุรีรัมย์</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 31-บุรีรัมย์.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">สุรินทร์</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 32-สุรินทร์.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr >
    <td class="menu_center">อุบลราชธานี</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 34-อุบลราชธานี.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">ชัยภูมิ</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 36-ชัยภูมิ.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr >
    <td class="menu_center">ขอนแก่น</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 40-ขอนแก่น.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">เชียงใหม่</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 50-เชียงใหม่.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr >
    <td class="menu_center">แพร่</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 54-แพร่.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">น่าน</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 55-น่าน.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr >
    <td class="menu_center">เชียงราย</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 57-เชียงราย.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">นครสวรรค์</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 60-นครสวรรค์.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr >
    <td class="menu_center">พิษณุโลก</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 65-พิษณุโลก.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">เพชรบูรณ์</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 67-เพชรบูรณ์.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr >
    <td class="menu_center">นครปฐม</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 73-นครปฐม.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">นครศรีธรรมราช</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 80-นครศรีธรรมราช.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr >
    <td class="menu_center">กระบี่</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 81-กระบี่.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">สุราษฎร์ธานี</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 84-สุราษฎร์ธานี.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr >
    <td class="menu_center">สงขลา</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 90-สงขลา.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">ยะลา</td>
    <td class="menu_center"><a href="summary/summary2558/Summary2558-site 95-ยะลา.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
</table>
  </div>
  <div id="tabs-3">
  	<table width="100%" border="0" cellspacing="2" cellpadding="10" class="summarize">
  <tr bgcolor="#3399CC">
    <td width="50%" height="56"><h3><font color="#FFFFFF"><center>สรุปรายงานประจำจังหวัด</center></font></h3></td>
    <td width="50%"><h3><font color="#FFFFFF"><center>ดาวน์โหลด</center></font></h3></td>
  </tr>
  <tr bgcolor="#B4DCED">
    <td class="menu_center">สมุทรปราการ</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 11.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">พระนครศรีอยุธยา</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 14.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">สระบุรี</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 19.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">ชลบุรี</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 20.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">จันทบุรี</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 22.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">นครราชสีมา</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 30.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">บุรีรัมย์</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 31.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">สุรินทร์</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 32.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">อุบลราชธานี</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 34.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">ชัยภูมิ</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 36.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">ขอนแก่น</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 40.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">เชียงใหม่</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 50.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">น่าน</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 55.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">เชียงราย</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 57.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">นครสวรรค์</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 60.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">พิษณุโลก</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 65.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">เพชรบูรณ์</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 67.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">นครปฐม</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 73.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">นครศรีธรรมราช</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 80.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">กระบี่</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 81.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
<tr bgcolor="#B4DCED">
    <td class="menu_center">สุราษฎร์ธานี</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 84.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
</tr>
<tr >
    <td class="menu_center">สงขลา</td>
    <td class="menu_center"><a href="summary/summary2559/Summary2559-site 90.xlsx" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
	</td>
</tr>
</table>
  </div>
  
  
</body>
</html>