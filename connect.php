<?php

	$host = "localhost";
/*	$username = "root";
	$password = "";
	$dbname = "abortionsurvey";*/
	
	$username = "root";
	$password = "anamai#rh29";
	$dbname = "abortion";
	
	$link = mysql_connect($host,$username,$password) or die ("Cannot connect mysql");
	
	mysql_select_db($dbname,$link) or die ("Cannot select $dbname"); 
	
	mysql_query("set NAMES utf8");

	include("function.php");
?>
