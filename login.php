<?php 
session_start();

	include("connect.php");
	
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	date_default_timezone_set ("Asia/Bangkok"); 	
	$today = date("Y-m-d");
	$now_time = date("H:i:s");
	
	

if(!empty($_POST['h_submit']))
	{

		$username = $_POST['username'];	
		$password = mysql_real_escape_string($_POST['password']);	
		$_SESSION["ss_pwd"] = $password;
		$_SESSION["ss_usr"] = $username;	
		
		
		
		$sql = "select * from abortionsurvey_member where username= '".$username."' and password = '".$password."' and status = '1'";
		$result = mysql_query($sql);
		$data = mysql_fetch_array($result);
		
		$sql2 = "select * from abortionsurvey_member where username= '".$username."' and status = '1'";
		$result2 = mysql_query($sql2);
		$data2 = mysql_fetch_array($result2);
		
		
		$_SESSION["ss_pwd1"] =$data2['password'];
		$_SESSION["ss_usr1"] = $data2['username'];
		if(!empty($data['member_id']))
				{
						if($data['lavel'] == 1)
							{
								$_SESSION["ss_id"] = $data['member_id'];
								$_SESSION["ss_username"] = $data['username'];
								$_SESSION["ss_name"] = $data['name'];
								$_SESSION["ss_lavel"] = $data['lavel'];
							}
						else
							{
								$_SESSION["ss_id"] = $data['member_id'];
								$_SESSION["ss_username"] = $data['username'];
								$_SESSION["ss_name"] = $data['name'];
								$_SESSION["ss_hospital_id"] = $data['hospital_id'];
								$_SESSION["ss_lavel"] = $data['lavel'];
							}
						
							
							
//------------------------ add log --------------------------------------
							
/*					$sql = "INSERT INTO log (id,project,event,detail,user,date_event,time_event,ip_user)VALUES ('','".$_SESSION["ss_id_project"]."','login','Username : ".$_SESSION["ss_username"]."','".$_SESSION["ss_id"]."','$today','$now_time','$ipaddress')";
					$result = mysql_query($sql);*/

//------------------------------------------------------------------------
							echo"<script>
							window.location = 'index.php';
							</script>";						
				}

			
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="AUTHOR" CONTENT="sinpong kaewsom">
<META NAME="KEYWORDS" CONTENT="ศิลป์พงษ์ แก้วสม sinpong kaewsom">
<title>การเฝ้าระวังการแท้งประเทศไทย</title>

  	<link rel="stylesheet" href="css/style_site.css">

</head>

<body>

<form id="form1" name="form1" method="post" action="">
<div  style="width:902px" class="broder_set">
<div align="center"><img src="image/h.png" width="900" height="140" /></div><br />
<div class="broder_set" align="center" style="width:500px" >

<table width="500" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td width="40%"><h3>ลงชื่อเข้าใช้งานระบบ</h3></td>
    <td width="60%"><?php 
if(!empty($h_submit))
	{
				if ($_SESSION["ss_usr"] == $_SESSION["ss_usr1"])
					{
							echo "<font color='#FF0000'><b>*Password ผิด </b></font><br>";
							echo "<font color='#FF0000'><b>**ลืม Password ติดต่อ <a href='mailto:thutchanut@gmail.com?Subject=Forgot%20Password'>thutchanut@gmail.com</a></b></font>";
						
					}else 
						
						{
							echo "<font color='#FF0000'><b>*ไม่พบ User ในระบบ หรือกรอก User ผิด </b></font><br>";
							echo "<font color='#FF0000'><b>**ลืม User ติดต่อ <a href='mailto:thutchanut@gmail.com?Subject=Forgot%20User'>E-mail : thutchanut@gmail.com</a></b></font>";
						}
				
	}
			  
		  ?></td>
  </tr>
  <tr>
    <td class="menu_right"><h4>ชื่อผู้ใช้ : </h4></td>
    <td><label>
      <input type="text" name="username" id="username" />
      <font color="#FF0000">*</font></label></td>
  </tr>
  <tr>
    <td class="menu_right"><h4>รหัสผ่าน : </h4></td>
    <td><label>
      <input type="password" name="password" id="password" />
      <font color="#FF0000">*</font></label></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <label>
      <input type="submit" name="button" id="button" value="เข้าสู่ระบบ" />
    </label>
      <input name="h_submit" type="hidden" id="h_submit" value="1" />
    </div></td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
</table>
</div><br />

</div>
</form>
</body>
</html>