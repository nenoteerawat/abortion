<?php
function monthToString($month){
		switch($month){
			case 1 : return "มกราคม";break;
			case 2 : return "กุมภาพันธ์";break;
			case 3 : return "มีนาคม";break;
			case 4 : return "เมษายน";break;
			case 5 : return "พฤษภาคม";break;
			case 6 : return "มิถุนายน";break;
			case 7 : return "กรกฎาคม";break;
			case 8 : return "สิงหาคม";break;
			case 9 : return "กันยายน";break;
			case 10 : return "ตุลาคม";break;
			case 11 : return "พฤศจิกายน";break;
			case 12 : return "ธันวาคม";break;
			default : return "--เลือก--";
		}
	}
	function dateToString($date){
		$tDate = explode("-",$date);
		$year = $tDate[0];
		$year += 543;
		$month = $tDate[1];
		return shortMonth($month)."/".$year;
	}
	function shortMonth($month){
		switch($month){
			case "01" : return "ม.ค.";break;
			case "02" : return "ก.พ.";break;
			case "03" : return "มี.ค.";break;
			case "04" : return "เม.ย.";break;
			case "05" : return "พ.ค.";break;
			case "06" : return "มิ.ย.";break;
			case "07" : return "ก.ค.";break;
			case "08" : return "ส.ค.";break;
			case "09" : return "ก.ย.";break;
			case "10" : return "ต.ค.";break;
			case "11" : return "พ.ย.";break;
			case "12" : return "ธ.ค.";break;
			default : return $month;
		}
	}