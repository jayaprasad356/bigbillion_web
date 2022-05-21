<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
include_once('../includes/crud.php');
include_once('../includes/variables.php');
$db = new Database();
$db->connect();
if (empty($_POST['user_id'])) {
    $response['success'] = false;
    $response['message'] = "User Id is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['account_number'])) {
    $response['success'] = false;
    $response['message'] = "Account number is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['ifsc_code'])) {
    $response['success'] = false;
    $response['message'] = "IFSC code is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['holder_name'])) {
    $response['success'] = false;
    $response['message'] = "Holder Name is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['gpay'])) {
    $response['success'] = false;
    $response['message'] = "Gpay is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['phonepe'])) {
    $response['success'] = false;
    $response['message'] = "Phonepe is Empty";
    print_r(json_encode($response));
    return false;
}

$user_id = $db->escapeString($_POST['user_id']);
$account_number = $db->escapeString($_POST['account_number']);
$ifsc_code = $db->escapeString($_POST['ifsc_code']);
$holder_name = $db->escapeString($_POST['holder_name']);
$gpay = $db->escapeString($_POST['gpay']);
$phonepe = $db->escapeString($_POST['phonepe']);

$sql = "SELECT * FROM users WHERE id = '" . $user_id . "'";
$db->sql($sql);
$res = $db->getResult();
$num = $db->numRows($res);
if ($num == 1) {
    $sql = "UPDATE `users` SET `account_number`='$account_number',`ifsc_code`='$ifsc_code',`holder_name`='$holder_name',`gpay`='$gpay',`phonepe`='$phonepe' WHERE id=" . $user_id;
    $db->sql($sql);

    $sql = "SELECT * FROM users WHERE id = '" . $user_id . "'";
    $db->sql($sql);
    $res = $db->getResult();
    $response['success'] = true;
    $response['message'] = "Account Details Updated Successfully";
    $response['data'] = $res;

}
else{
    $response['success'] = false;
    $response['message'] = "User Not Found";
}

print_r(json_encode($response));




