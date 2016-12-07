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
a{
	text-decoration: none;
}
a:hover{
	font-size: 30px;
}
.head_sum{
	font-size: 30px;
	text-align: center;
	font-weight: bold;
    padding-top: 40px;
    padding-bottom: 40px;
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
  
<div class="head_sum">จำนวนและร้อยละผู้ป่วยแท้งและทำแท้ง จำแนกตาม</div>
<div class="broder_set" align="center" style="width:804px" >

<table width="100%" border="0" cellspacing="2" cellpadding="10" class="summarize">  

<?php
		$sql = "select * from abortionsurvey_menu ";
		$result = mysql_query($sql);
		while($data = mysql_fetch_array($result))

	{
?>
	<tr>  
		<td class="select_menu"><center>
			<p><a href="summarize_search.php?id=<?php echo $data['id_menu']; ?>"><?php echo $data['id_menu'].". ".$data['name_menu']; ?></a></p>
		</center></td>
	</tr>
  
<?php
	}
?>
</table>
</div>  
<br />
<br />

  
</div>



</body>
</html>