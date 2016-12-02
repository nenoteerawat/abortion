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
.bt_submit{
	background-image: url(image/Excel.png);
	background-position:  0px 0px;
	background-repeat: no-repeat;
	width: 32px;
	height: 32px;
	border: 0px;
	background-color: Transparent;
	cursor: pointer;
	outline: 0;
	overflow: hidden;
	border: none;
}
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
  <h3>Username : <?php echo $_SESSION["ss_name"]; ?> : <a href="logout.php">Logout</a></h3></div>
  
  <div id="tabs" style="width: 900px; text-align: center;" >
  <ul>
    <li><a href="#tabs-1">ดาวน์โหลดข้อมูลรายปี</a></li>
  </ul>
  <div id="tabs-1">
<div class="broder_set" align="center" style="width:804px" >
<table width="100%" border="0" cellspacing="2" cellpadding="10" class="summarize">
  <tr bgcolor="#3399CC">
    <td width="50%" height="56"><h3><font color="#FFFFFF"><center>ข้อมูลรายปี</center></font></h3></td>
    <td width="50%"><h3><font color="#FFFFFF"><center>ดาวน์โหลด</center></font></h3></td>
  </tr>
  <tr bgcolor="#B4DCED">
    <td class="menu_center">ข้อมูลปี พ.ศ. 2557</td>
    <td class="menu_center"><a href="export_admin_2557.php" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>
    </td>
  </tr>
  <tr >
    <td class="menu_center">ข้อมูลปี พ.ศ. 2558</td>
    <td class="menu_center"><a href="export_admin_2558.php" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>	
	</td>
  </tr>
  <tr bgcolor="#B4DCED">
	<form id="form1" name="form1" method="post" action="export_admin_2559.php">
		<td class="menu_center">ข้อมูล
		เดือน
		<select name="l_month" size="1" id="l_month">
			<option value="0">--เลือก--</option>
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
			$sql = "select distinct MONTH(survey_datefirst) as survey_month from abortionsurvey_main_2559 where (".$sql_text_sum.") order by survey_month";
			$result = mysql_query($sql);

			while ($row = mysql_fetch_assoc($result)){
				?>   
				<option value="<?php echo $row['survey_month'];?>"><?php echo monthToString($row['survey_month']);?></option>
				<?php
			}
			?>
		</select>
		ปี พ.ศ.
		<select name="l_year" size="1" id="l_year" >
			<option value="0">--เลือก--</option>
			<?php
			$sql = "select distinct survey_year from abortionsurvey_main_2559 where (".$sql_text_sum.")";
			$result = mysql_query($sql);

			while ($row = mysql_fetch_assoc($result))
				{    
					$bd_year = $row['survey_year'] + 543;
				?>   
				<option value="<?php echo $row['survey_year']; ?>"><?php echo $bd_year; ?></option>
				<?php
				}
				?>            
			</select>
			
		</td>
		<!--<td class="menu_center">ข้อมูลปี พ.ศ. 2559</td>-->
		<td class="menu_center">
		<input type="submit" class="bt_submit" value="" />
		<!--<a href="export_admin_2559.php" target="_blank"><img src="image/Excel.png" width="32" height="32" /></a>-->
		</td>
	</form>
  </tr>
</table>
</div>  
<br />
<br />

  
</div>



</body>
</html>