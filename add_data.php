<html>
<head>
<title> Excel Hospital</title>
</head>
<body>
<?php
	//*** Get Document Path ***//
	$strPath = realpath(basename(getenv($_SERVER["SCRIPT_NAME"]))); // C:/AppServ/www/myphp
	$OpenFile = "hospital_new.xls";
	//*** Create Exce.Application ***//

	$xlApp = new COM("Excel.Application");
	$xlBook = $xlApp->Workbooks->Open($strPath."/".$OpenFile);

	$xlSheet1 = $xlBook->Worksheets(1);	

	

	//*** Insert to MySQL Database ***//
	
	$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
	$objDB = mysql_select_db("abortionsurvey");
	mysql_query("SET character_set_results=tis620");
	mysql_query("SET character_set_client=tis620");
	mysql_query("SET character_set_connection=tis620");

	for($i=2;$i<=20000;$i++){
		if(trim($xlSheet1->Cells->Item($i,1)) != "")
		{
			/*
			$strSQL = "";
			$strSQL .= "INSERT INTO customer ";
			$strSQL .= "(CustomerID,Name,Email,CountryCode,Budget,Used) ";
			$strSQL .= "VALUES ";
			$strSQL .= "('".$xlSheet1->Cells->Item($i,1)."','".$xlSheet1->Cells->Item($i,2)."' ";
			$strSQL .= ",'".$xlSheet1->Cells->Item($i,3)."','".$xlSheet1->Cells->Item($i,4)."' ";
			$strSQL .= ",'".$xlSheet1->Cells->Item($i,5)."') ";
			mysql_query($strSQL);
			*/
			$zero = '';
             $id =  $xlSheet1->Cells->Item($i,1);
			 //echo "---".$id."---";
			 $count = strlen($id);

/*			 $count = 6 - $count;
			 for($ii=0;$ii<$count;$ii++)
			 	{
					$zero = $zero."0";
				}
			 $id = $zero.$id;*/
			 

			//==================Insert To DB ====================================//
			// 29
/*$sql = "insert into personnel  values('$xlSheet1->Cells->Item($i,1)','$xlSheet1->Cells->Item($i,2)','$xlSheet1->Cells->Item($i,3)','$xlSheet1->Cells->Item($i,4)','$xlSheet1->Cells->Item($i,5')' ";*/
			$sql = " INSERT INTO abortionsurvey_hospital ("; 
			$sql .= " id, ";
			$sql .= " hospital_id, "; 
			$sql .= " hospital_name, "; 
			$sql .= " agency_type, "; 
			$sql .= " ministry, "; 
			$sql .= " bed, "; 
			$sql .= " service_status, "; 
			$sql .= " hospital_address, "; 
			$sql .= " hospital_province, "; 
			$sql .= " hospital_district , "; 
			$sql .= " hospital_subdistrict, "; 
			$sql .= " hospital_village_no, "; 
			$sql .= " date_input, "; 
			$sql .= " hospital_tel, "; 
			$sql .= " hospital_fax, "; 
			$sql .= " hospital_post, "; 
			$sql .= " oldhospital_id, "; 
			$sql .= " network_agency, "; 
			$sql .= " date_id, "; 
			$sql .= " service_level, "; 
			$sql .= " date_service, "; 
			$sql .= " group_id, "; 
			$sql .= " responsible_population, "; 
			$sql .= " responsible_subdistrict, "; 
			$sql .= " responsible_village_no,";
			$sql .= " join_project";  
			

			$sql .= " ) VALUES "; 
			$sql .= "('','".$xlSheet1->Cells->Item($i,1)."','".$xlSheet1->Cells->Item($i,2)."' ";
			$sql .= ",'".$xlSheet1->Cells->Item($i,3)."','".$xlSheet1->Cells->Item($i,4)."' ";
			$sql .= ",'".$xlSheet1->Cells->Item($i,5)."','".$xlSheet1->Cells->Item($i,6)."' ";
			$sql .= ",'".$xlSheet1->Cells->Item($i,7)."','".$xlSheet1->Cells->Item($i,8)."' ";
			$sql .= ",'".$xlSheet1->Cells->Item($i,9)."','".$xlSheet1->Cells->Item($i,10)."' ";
			$sql .= ",'".$xlSheet1->Cells->Item($i,11)."','".$xlSheet1->Cells->Item($i,12)."' ";
			$sql .= ",'".$xlSheet1->Cells->Item($i,13)."','".$xlSheet1->Cells->Item($i,14)."' ";
			$sql .= ",'".$xlSheet1->Cells->Item($i,15)."','".$xlSheet1->Cells->Item($i,16)."' ";
			$sql .= ",'".$xlSheet1->Cells->Item($i,17)."','".$xlSheet1->Cells->Item($i,18)."' ";
			$sql .= ",'".$xlSheet1->Cells->Item($i,19)."','".$xlSheet1->Cells->Item($i,20)."' ";
			$sql .= ",'".$xlSheet1->Cells->Item($i,21)."','".$xlSheet1->Cells->Item($i,22)."' ";
			$sql .= ",'".$xlSheet1->Cells->Item($i,23)."','".$xlSheet1->Cells->Item($i,24)."','') ";
//echo $sql;
			mysql_query($sql) or die(mysql_error()); 
			//==================End Insert To DB ====================================//
		}
	}
	
	//*** Close MySQL ***//
	@mysql_close($objConnect);

	//*** Close & Quit ***//
	$xlApp->Application->Quit();
	$xlApp = null;
	$xlBook = null;
	$xlSheet1 = null;
?>
Data Import/Inserted.
</body>
</html>