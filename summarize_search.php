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
	$menu_id = $_GET['id'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>การเฝ้าระวังการแท้งประเทศไทย</title>
  	<link rel="stylesheet" href="css/style_site.css">
 
     <script src="js/jquery-1.9.1.js"></script>
  	<script src="js/jquery-ui.js"></script>

<style>
.text_table{
	font-weight: bold;
}
.bt_process{
	background-image: url(image/process_icon.png);
	background-size: 40px 40px;
	background-position:  0px 0px;
	background-repeat: no-repeat;
	width: 40px;
	height: 40px;
	border: 0px;
	background-color: Transparent;
	cursor: pointer;
	outline: 0;
	overflow: hidden;
	border: none;
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
		$("#show_text_2").html('');
		$('#loader_sum').show();
		$.post("summarize_search_show_<?php echo $menu_id; ?>.php", { survey_province : $("#survey_province").val(), month : $("#l_month").val(), year : $("#l_year").val(), survey_hospital : $("#survey_hospital").val()}, 
			function(response){
				$("#show_text_2").html(response);
				$('#loader_sum').hide();
				is_loading = false;
			}
		);
	}
}
function processWithEnter(e) {
    if (e.keyCode == 13) {
        data_show_seacrh();
        return false;
    }
}
	</script>

</head>

<body onload="data_show_seacrh()">
<div class="large_block" style="width:908px">
<div align="center"><img src="image/h.png" width="900" height="140" /></div>
<div><?php include("menu.php"); ?></div>
<div align="right">
  <h3>ยินดีต้อนรับ : <?php echo $_SESSION["ss_name"]; ?> : <a href="logout.php">ออกจากระบบ</a></h3></div>
 
<table width="100%" border="0" cellspacing="3" cellpadding="2"  bgcolor="#3399CC">
  <tr>
	<td align="right"><h3><font color="#FFFFFF">เดือน : </font></h3></td>
	<td align="left"><label for="l_month"></label>
	<select name="l_month" size="1" id="l_month"  onkeypress="return processWithEnter(event)"">
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
	<td align="right"><h3><font color="#FFFFFF">ปี : </font></h3></td>
	<td align="left"><label for="l_year"></label>
		<select name="l_year" size="1" id="l_year"  onkeypress="return processWithEnter(event)"">
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

	<td align="right"><h3><font color="#FFFFFF">จังหวัด : </font></h3></td>
	<td align="left"><?php include("list_province_show_sum.php"); ?></td>
	<?php
		}
	if($_SESSION["ss_lavel"] == 3){
	?>
	<td align="right"><h3><font color="#FFFFFF">โรงพยาบาล : </font></h3></td>
	<td align="left"><?php include("list_hospital_show_sum.php"); ?></td>
<?php
}
?>
	<td ><button type="submit" class="bt_process" value="" onclick ="data_show_seacrh()" /></td>
  </tr>
</table>


<div id="show_text_2">
</div>
<p id="loader_sum" align="center"><img src="image/ajax-loader.gif"></p>
</div>


</body>
</html>