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
$result = (isset($_POST['result']) && $_POST['result'] != "") ? $db->escapeString($_POST['result']) : "0";
$day = $db->escapeString($_POST['day']);
$month = $db->escapeString($_POST['month']);
$year = $db->escapeString($_POST['year']);
$game_name = $db->escapeString($_POST['game_name']);

// $sql = "INSERT INTO winners (user_id, points, game_name,date)
// SELECT id, points, game_name, game_date FROM games WHERE game_date = '$date' AND game_name = '$game_name' AND number = '$result'";
$sql = "SELECT * FROM games WHERE game_date = '$date' AND game_name = '$game_name' AND number = '$result'";
$db->sql($sql);
$res = $db->getResult();
foreach ($res as $row) {
    $points = $row['points'] * 93;
    $user_id = $row['user_id'];
    $sql = "INSERT INTO winners (user_id, points, game_name,date,result) VALUES ('$row[user_id]', '$points', '$game_name', '$date','$result')";
    $db->sql($sql);
    $sql = "UPDATE users SET points = points + '$points' WHERE id = '$row[user_id]'";
    $db->sql($sql);
    $sql = "SELECT * FROM users WHERE id = '$row[user_id]'";
    $db->sql($sql);
    $res = $db->getResult();
    $update_user_points = $res[0]['points'];
    $datetime = Date('Y-m-d H:i:s');
    $date = date('Y-m-d');
    $sql = "INSERT INTO `transactions` (user_id,points,balance,type,game_name,date,date_created) VALUES('$user_id','$points','$update_user_points','correctresult','$game_name','$date','$datetime')" ;
    $db->sql($sql);
}
$harufresult = sprintf("%02d", $result);
$andarresult = substr($harufresult, 0, 1); 
$baharresult = substr($harufresult, 1, 2); 
$sql = "SELECT * FROM haruf WHERE game_date = '$date' AND game_name = '$game_name' AND number = '$andarresult' AND game_type = 'andar";
$db->sql($sql);
$res = $db->getResult();
foreach ($res as $row) {
    $points = round($row['points'] * 9.5);
    $user_id = $row['user_id'];
    $sql = "INSERT INTO winners (user_id, points, game_name,date,result) VALUES ('$row[user_id]', '$points', '$game_name', '$date','$result')";
    $db->sql($sql);
    $sql = "UPDATE users SET points = points + '$points' WHERE id = '$row[user_id]'";
    $db->sql($sql);
    $sql = "SELECT * FROM users WHERE id = '$row[user_id]'";
    $db->sql($sql);
    $res = $db->getResult();
    $update_user_points = $res[0]['points'];
    $datetime = Date('Y-m-d H:i:s');
    $date = date('Y-m-d');
    $sql = "INSERT INTO `transactions` (user_id,points,balance,type,game_name,date,date_created) VALUES('$user_id','$points','$update_user_points','correctresult','$game_name','$date','$datetime')" ;
    $db->sql($sql);

}
$sql = "SELECT * FROM haruf WHERE game_date = '$date' AND game_name = '$game_name' AND number = '$baharresult' AND game_type = 'bahar";
$db->sql($sql);
$res = $db->getResult();
foreach ($res as $row) {
    $points = round($row['points'] * 9.5);
    $user_id = $row['user_id'];
    $sql = "INSERT INTO winners (user_id, points, game_name,date,result) VALUES ('$row[user_id]', '$points', '$game_name', '$date','$result')";
    $db->sql($sql);
    $sql = "UPDATE users SET points = points + '$points' WHERE id = '$row[user_id]'";
    $db->sql($sql);
    $sql = "SELECT * FROM users WHERE id = '$row[user_id]'";
    $db->sql($sql);
    $res = $db->getResult();
    $update_user_points = $res[0]['points'];
    $datetime = Date('Y-m-d H:i:s');
    $date = date('Y-m-d');
    $sql = "INSERT INTO `transactions` (user_id,points,balance,type,game_name,date,date_created) VALUES('$user_id','$points','$update_user_points','correctresult','$game_name','$date','$datetime')" ;
    $db->sql($sql);

}
$sql = "INSERT INTO results (date, result, day, month, year, game_name) VALUES ('$date', '$result', '$day', '$month', '$year', '$game_name')";
$db->sql($sql);
$response['success'] = true;
$response['message'] = "Result Announced Successfully";
print_r(json_encode($response));
?>