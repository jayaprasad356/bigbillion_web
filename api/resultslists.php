<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('Asia/Kolkata');
include_once('../includes/crud.php');

$db = new Database();
$db->connect();
if (empty($_POST['month'])) {
    $response['success'] = false;
    $response['message'] = "Month is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['year'])) {
    $response['success'] = false;
    $response['message'] = "Year is Empty";
    print_r(json_encode($response));
    return false;
}
$month = $db->escapeString($_POST['month']);
$year = $db->escapeString($_POST['year']);
$sql = "SELECT * FROM results WHERE month = '$month' AND year = '$year'";
$db->sql($sql);
$res = $db->getResult();
$num = $db->numRows($res);
    
if ($num >= 1) {
    $response['success'] = true;
    $response['message'] = "Results listed Successfully";
    $response['data'] = $res;
    print_r(json_encode($response));
}
else{
    $response['success'] = false;
    $response['message'] = "No Results Found";
    $response['data'] = $res;
    print_r(json_encode($response));

}
?>