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
if (empty($_POST['id'])) {
    $response['success'] = false;
    $response['message'] = "Id is Empty";
    print_r(json_encode($response));
    return false;
}
$id = $db->escapeString($_POST['id']);
$sql = "DELETE FROM results WHERE id = '$id'";
$db->sql($sql);
$response['success'] = true;
$response['message'] = "Delete Result Successfully";
print_r(json_encode($response));
?>