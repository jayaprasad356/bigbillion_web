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

if (empty($_POST['status'])) {
    $response['success'] = false;
    $response['message'] = "Status is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['withdrawal_id'])) {
    $response['success'] = false;
    $response['message'] = "Withdrawal Id is Empty";
    print_r(json_encode($response));
    return false;
}
$withdrawal_id = $db->escapeString($_POST['withdrawal_id']);
$status = $db->escapeString($_POST['status']);
$sql = "SELECT * FROM withdrawal WHERE id = '" . $withdrawal_id . "'";
$db->sql($sql);
$res = $db->getResult();
if($status == 1){
    $user_id = $res[0]['id'];
    $amount = $res[0]['points'];
    $sql = "SELECT * FROM users WHERE id = '" . $user_id . "'";
    $db->sql($sql);
    $res = $db->getResult();
    $earn=$res[0]['earn'];
    $new_earn=$earn-$amount;
    $sql = "UPDATE `users` SET `earn`='$new_earn' WHERE id=" . $user_id;
    $db->sql($sql);
    $date = Date('Y-m-d H:i:s');
    $sql = "INSERT INTO `transactions` (user_id,points,balance,type,date_created) VALUES('$user_id','$amount','$new_earn','withdrawal','$date')" ;
    $db->sql($sql);
}
$sql = "UPDATE `withdrawal` SET `status`='$status' WHERE id = " . $withdrawal_id;
$db->sql($sql);
$res = $db->getResult();
$response['success'] = true;
$response['message'] = "Updated Successfully";
print_r(json_encode($response));
?>