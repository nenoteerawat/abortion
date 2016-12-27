<?php
session_start();
// including the connect file
include('connect.php');

// get request params
$last_id = 0;
$limit = 1000; // default value
$count_row = 0;
$count_bg = 0;
$data = '{"html":"';
if (isset($_POST['last_id'])) {
	$last_id = intval($_POST['last_id']);
}
if (isset($_POST['limit'])) {
	$limit = intval($_POST['limit']);
}
$sql = "select * from abortionsurvey_main_2559 where id > ".$last_id;
if (isset($_POST['sql'])) {
	$sql = $_POST['sql'];
	$sql = $sql." and id > ".$last_id;
	if(!strpos($sql, "where")){
		$sql = preg_replace("/and/","where",$sql,1);
	}
}
if (isset($_POST['count_row'])) {
	$count_row = intval($_POST['count_row']);
}
if (isset($_POST['count_bg'])) {
	$count_bg = intval($_POST['count_bg']);
}
// select items for page params
$sql = $sql." order by id LIMIT 0, ".$limit;
$result = mysql_query($sql);
$last_id = 0;
while($rs = mysql_fetch_array($result)){
    $last_id = intval($rs['id']);
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
    $data = $data."<tr bgcolor=".$bg." class='select_menu'>";
    $data = $data."<td align='center'>".$count_row."</td>";
    $data = $data."<td align='center'>".$rs['survey_id']."</td>";
    $data = $data."<td>".$rs['survey_agency']."</td>";
	$data = $data."<td>".$rs['survey_province']."</td>";
	$data = $data."<td align='center'>".dateToString($rs['survey_datefirst'])."</td>";
	if($_SESSION["ss_lavel"] != 3 && $_SESSION["ss_lavel"] != 4 ){
		$data = $data."<td><div align='center'><a href='edit_page.php?id=".$rs['survey_id']."&year=".$rs['survey_year']."'><img src='image/to_do_list_checked_1.png' width='32' height='32' /></a></div></td>";
		$data = $data."<td><div align='center'><div style='cursor:pointer;'><img src='image/bin_recycle.png' width='32' height='32' onclick='alert_delete('".$rs['survey_id']."','".$rs['survey_year']."')' /></div></div></td>";
	}
    $data = $data.'</tr>';
	$count_row++;
}
if ($last_id != 0) {
	//echo ';$last_id;$count_row">';
	//echo 'var last_id = '.$last_id.';';
	//echo 'var count_row = '.$count_row.';';
	//echo 'var count_bg = '.$count_bg.';';
	//echo '</script>';
	$data = $data.'","last_id":"'.$last_id.'", "count_row":"'.$count_row.'","count_bg":"'.$count_bg.'"}';
}
else{
	$data = $data.'","last_id":null, "count_row":null,"count_bg":null}';
}
echo $data;

// sleep for 1 second to see loader, it must be deleted in prodection
sleep(1);
?>


