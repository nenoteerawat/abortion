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
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Abortion</title>
  	<link rel="stylesheet" href="css/style_site.css">
 
     <script src="js/jquery-1.9.1.js"></script>
  	<script src="js/jquery-ui.js"></script>

<style>

.select_menu
{ 
	font-weight: bold;
	/*font-size:18px;
	text-decoration: none; 	*/ 

	
}
.select_menu:hover { 
color: #FFF;
text-decoration: none; 
background-color:#339; /* โค๊ดสีพื้นหลัง */	
filter:alpha(opacity=60);
-moz-opacity:0.6;opacity:0.6;
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
    
    <script>
//------------------------------------------- Delete ----------------------------------
	function postData(a)
		{
			
			$.post( "delete_file.php", { data:a} );
			location.reload();
		}
	
	function alert_delete(id) 
		{
			if(confirm('Confirm delete'))
				{ 
					postData(id); 
					return true;
				} 
			else
				{
					return false;		
				}
		}
		
function data_show_seacrh(){
	$.post("search_show.php", { data: $("#search_text").val(), data2 : $("#survey_province").val()}, 
		function(data,data2){

			$("#show_text_2").html(data,data2);
			document.getElementById("show_text_1").disabled='true';
			
		}
	);
}
	</script>

</head>

<body onload="data_show_seacrh()">
<div class="broder_set" style="width:908px">
<div align="center"><img src="image/h.png" width="900" height="140" /></div>
<div><?php include("menu.php"); ?></div>
<div align="right">
  <h3>Username : <?php echo $_SESSION["ss_name"]; ?> : <a href="logout.php">Logout</a></h3></div>
 
<form id="form1" name="form1" method="post" action="">
    <table width="100%" border="0" cellspacing="3" cellpadding="2"  bgcolor="#3399CC">
      <tr>
<?php 
	if($_SESSION["ss_lavel"] != 2 && $_SESSION["ss_lavel"] != 3 )
		{
?>
        <td width="10%"><h3><font color="#FFFFFF">จังหวัด : </font></h3></td>
        <td width="19%"><?php include("list_province_show.php"); ?></td>
<?php
		}
?>	
        <td width="8%"><h3><font color="#FFFFFF">ค้นหา : </font></h3></td>
        <td width="31%"><input name="search_text" type="text" id="search_text"  onkeyup="data_show_seacrh()" /></td>
                    
        <td width="32%" class="menu_right"></td>
      </tr>
    </table>
</form>


<div id="show_text_2">
</div>
</div>


</body>
</html>