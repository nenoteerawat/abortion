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
<title>การเฝ้าระวังการแท้งประเทศไทย</title>
  	<link rel="stylesheet" href="css/style_site.css">
 
    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
  	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

<style>

.select_menu
{ 
	font-weight: bold;
	/*font-size:18px;
	text-decoration: none; 	*/ 

	
}
#loader {
	text-align: center;
	display: none;
}
#loader_show {
	text-align: center;
	display: none;
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
	function postData(id,year)
		{
			
			$.post( "delete_file.php", { survey_id:id, survey_year:year} );
			location.reload();
		}
	
	function alert_delete(id,year) 
		{
			if(confirm('Confirm delete'))
				{ 
					postData(id,year); 
					return true;
				} 
			else
				{
					return false;		
				}
		}
var is_loading = false;	
function data_show_seacrh(){
	if (is_loading == false) {
		is_loading = true;
		$('#loader_show').show();
		$.post("search_show.php", { data: $("#search_text").val(), data2 : $("#survey_province").val(), data3 : $("#l_month").val(), data4 : $("#l_year").val()}, 
			function(data,data2,data3,data4){
				$("#show_text_2").html(data,data2);
				$('#loader_show').hide();
				is_loading = false;
			}
		);
	}
	
}
	</script>

</head>

<body onload="data_show_seacrh()">
<div class="broder_set" style="width:908px">
<div align="center"><img src="image/h.png" width="900" height="140" /></div>
<div><?php include("menu.php"); ?></div>
<div align="right">
  <h3>ยินดีต้อนรับ : <?php echo $_SESSION["ss_name"]; ?> : <a href="logout.php">ออกจากระบบ</a></h3></div>
 
<form id="form1" name="form1" method="post" action="">
    <table width="100%" border="0" cellspacing="3" cellpadding="2"  bgcolor="#3399CC">
      <tr>
        <td width="5%"><h3><font color="#FFFFFF">เดือน</font></h3></td>
        <td width="5%"><label for="l_month"></label>
        <select name="l_month" size="1" id="l_month"  onchange="data_show_seacrh()">
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
		if($_SESSION['ss_lavel']== 2)
			$sql = "select distinct MONTH(survey_datefirst) as survey_month from abortionsurvey_main_2559 where survey_id like '".$_SESSION['ss_hospital_id']."%' order by survey_month";
		$result = mysql_query($sql);

		while ($row = mysql_fetch_assoc($result)){
			?>   
			<option value="<?php echo $row['survey_month'];?>"><?php echo monthToString($row['survey_month']);?></option>
			<?php
		}
		?>

        </select></td>
        <td width="5%"><h3><font color="#FFFFFF">ปี : </font></h3></td>
        <td width="5%"><label for="l_year"></label>
			<select name="l_year" size="1" id="l_year"  onchange="data_show_seacrh()">
			<option value="0">--เลือก--</option>
			<?php
			$sql = "select distinct survey_year from abortionsurvey_main_2559 where (".$sql_text_sum.")";
			if($_SESSION['ss_lavel']== 2)
				$sql = "select distinct survey_year from abortionsurvey_main_2559 where survey_id like '".$_SESSION['ss_hospital_id']."%'";
			$result = mysql_query($sql);

			while ($row = mysql_fetch_assoc($result))
				{    
					$bd_year = $row['survey_year'] + 543;
			?>   
			<option value="<?php echo $row['survey_year']; ?>"><?php echo $bd_year; ?></option>
			<?php
				}
			?>            
			</select></td>
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
	<p id="loader_show" align="center"><img src="image/ajax-loader.gif"></p>
</form>


<div id="show_text_2">
</div>
</div>


</body>
</html>