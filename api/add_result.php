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
if (empty($_POST['result'])) {
    $response['success'] = false;
    $response['message'] = "Result is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['date'])) {
    $response['success'] = false;
    $response['message'] = "Date is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['day'])) {
    $response['success'] = false;
    $response['message'] = "Day is Empty";
    print_r(json_encode($response));
    return false;
}
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
if (empty($_POST['game_name'])) {
    $response['success'] = false;
    $response['message'] = "Game Name is Empty";
    print_r(json_encode($response));
    return false;
}
$date = $db->escapeString($_POST['date']);
$result = $db->escapeString($_POST['result']);
$day = $db->escapeString($_POST['day']);
$month = $db->escapeString($_POST['month']);
$year = $db->escapeString($_POST['year']);
$game_name = $db->escapeString($_POST['game_name']);
$sql = "INSERT INTO results (date, result, day, month, year, game_name) VALUES ('$date', '$result', '$day', '$month', '$year', '$game_name')";
$db->sql($sql);
$response['success'] = true;
$response['message'] = "Result Announced Successfully";
print_r(json_encode($response));
?>