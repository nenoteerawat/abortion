<?php
	session_start();
	
	include("connect.php");

	$text1= $_POST[data];
	$text2= $_POST[data2];
	
	$sql_text1 = "";
	$sql_text2 = "";
	if(!empty($text1))
		{
			$sql_text1 = "survey_agency like '%".$text1."%' or survey_id like '%".$text1."%'";
			$sql_text_level2 = "and  survey_id like '%".$text1."%'";
		}
	if(!empty($text2))
		{
			$sql_text2 = "survey_province like  '%".$text2."%'";
		}
	if(!empty($sql_text1) && empty($sql_text2))
		{
			$text_sql = "where ".$sql_text1;
		}
	if(!empty($sql_text2) && empty($sql_text1) )
		{
			$text_sql = "where ".$sql_text2;
		}
	if(!empty($sql_text1) && !empty($sql_text2))
		{
			$text_sql = "where ".$sql_text1." and ( ".$sql_text2." ) ";
		}
	if(empty($sql_text1) && empty($sql_text2))
		{
			$text_sql = "";
		}
	
	//-------------------------------------------------------------count * ----------------------------------	
		
		if($_SESSION["ss_lavel"] == 1)
			{
				$sql_count_show = "select count(*) from abortionsurvey_main ".$text_sql." order by survey_id";
			}
		if($_SESSION["ss_lavel"] == 2)
			{
				$sql_count_show = "select count(*) from abortionsurvey_main where survey_id like '%".$_SESSION["ss_hospital_id"]."%' ".$sql_text_level2." order by survey_id";
			}
		if($_SESSION["ss_lavel"] == 3)
			{
				$sql_count_show = "select count(*) from abortionsurvey_main where survey_province like '%".$_SESSION["ss_hospital_id"]."%' ".$sql_text_level2."  order by survey_id";
			}
		if($_SESSION["ss_lavel"] == 4)
			{	
				$sql_text = "";	
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
				$sql_text_sum = str_replace("="," or ",$sql_text);
				
					if(!empty($text2))
						{
							$sql_text_sum = "survey_province like  '%".$text2."%'";
						}
								
				$sql_count_show = "select count(*) from abortionsurvey_main where ".$sql_text_sum."  ".$sql_text_level2." order by survey_id";
			}	
	$result_count_show = mysql_query($sql_count_show);
	$count_show = mysql_fetch_array($result_count_show);
	
	//-----------------------------------------------------------------------------------------------------------	
?>

<table width="100%" border="0" cellspacing="3" cellpadding="3">
  <tr >
    <td class="menu_right"><font color="#337ECC"><b>จำนวนรวม : <?php echo $count_show[0]." รายการ";?></b></font></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="2" cellpadding="3">
  <tr bgcolor="#3399CC" class="color_text">
    <td width="15%">เลขแบบสอบถาม</td>
    <td width="49%">โรงพยาบาล</td>
    <td width="21%">จังหวัด</td>
<?php 
	if($_SESSION["ss_lavel"] != 3 && $_SESSION["ss_lavel"] != 4 )
		{
?>
    <td width="4%">แก้ไข</td>
    <td width="4%">ลบ</td>
<?php
		}
?>	
  </tr>
<?php
/*$sql_text1 = "";
$sql_text2 = "";
if(!empty($text1))
	{
		$sql_text1 = "survey_agency like '%".$text1."%' or survey_id like '%".$text1."%'";
		$sql_text_level2 = "and  survey_id like '%".$text1."%'";
	}
if(!empty($text2))
	{
		$sql_text2 = "survey_province like  '%".$text2."%'";
	}
if(!empty($sql_text1) && empty($sql_text2))
	{
		$text_sql = "where ".$sql_text1;
	}
if(!empty($sql_text2) && empty($sql_text1) )
	{
		$text_sql = "where ".$sql_text2;
	}
if(!empty($sql_text1) && !empty($sql_text2))
	{
		$text_sql = "where ".$sql_text1." and ( ".$sql_text2." ) ";
	}
if(empty($sql_text1) && empty($sql_text2))
	{
		$text_sql = "";
	}
*/
	
	
	if($_SESSION["ss_lavel"] == 1)
		{
			$sql_show = "select * from abortionsurvey_main ".$text_sql." order by survey_id";
		}
	if($_SESSION["ss_lavel"] == 2)
		{
			$sql_show = "select * from abortionsurvey_main where survey_id like '%".$_SESSION["ss_hospital_id"]."%' ".$sql_text_level2." order by survey_id";
		}
	if($_SESSION["ss_lavel"] == 3)
		{
			$sql_show = "select * from abortionsurvey_main where survey_province like '%".$_SESSION["ss_hospital_id"]."%' ".$sql_text_level2."  order by survey_id";
		}
	if($_SESSION["ss_lavel"] == 4)
		{	
			$sql_text = "";	
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
			$sql_text_sum = str_replace("="," or ",$sql_text);
			
				if(!empty($text2))
					{
						$sql_text_sum = "survey_province like  '%".$text2."%'";
					}
							
			$sql_show = "select * from abortionsurvey_main where ".$sql_text_sum."  ".$sql_text_level2." order by survey_id";
		}
	$count_bg = 0;
	$result_show = mysql_query($sql_show);
	while($show = mysql_fetch_array($result_show))
		{	
			
			if($count_bg != 0)
				{
					$bg = "#ffffff";
					$count_bg++;
				}
			else
				{
					//$bg = "#91C9E8";
					$bg = "#B4DCED";
					$count_bg--;
				}
?>  
  <tr bgcolor="<?php echo $bg; ?>"  class="select_menu">
    <td><?php echo $show[survey_id]; ?></td>
    <td><?php echo $show[survey_agency]; ?></td>
    <td><?php echo $show[survey_province]; ?></td>
    
<?php 
	if($_SESSION["ss_lavel"] != 3 && $_SESSION["ss_lavel"] != 4 )
		{
?>    
    <td><div align="center"><a href="edit_page.php?id=<?php echo $show[survey_id]; ?>"><img src="image/to_do_list_checked_1.png" width="32" height="32" /></a></div></td>
    <td><div align="center"><div style='cursor:pointer;'><img src="image/bin_recycle.png" width="32" height="32" onclick="alert_delete('<?php echo $show[survey_id]; ?>')" /></div></div></td>
<?php
		}
?>
  </tr>
<?php
		}
		
?>
</table>