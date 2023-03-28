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

if (empty($_POST['user_id'])) {
    $response['success'] = false;
    $response['message'] = "User Id is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['date'])) {
    $response['success'] = false;
    $response['message'] = "Date is Empty";
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
$game_name = $db->escapeString($_POST['game_name']);
$user_id = $db->escapeString($_POST['user_id']);


if($game_name =='FD'){
    $game_time = '05:45 PM';
}
else if($game_name =='GB'){
    $game_time = '07:45 PM';
}
else if($game_name =='GL'){
    $game_time = '10:45 PM';
}
else if($game_name =='DS'){
    $game_time = '02:20 AM';
}

$start_date = $date .' '.$game_time;
$start_date = new DateTime($start_date);
$now = new DateTime();
$now  = $now->format('Y-m-d h:i A');
$end_date = new DateTime($now);

if ($start_date < $end_date) {
    //$game_date = date('Y-m-d', strtotime($game_date . ' +1 day'));
    $response['success'] = false;
    $response['message'] = "GAME OVER";
    print_r(json_encode($response));
    return false;
}
$sql = "SELECT * FROM games WHERE user_id = '$user_id' AND game_name = '$game_name' AND game_date = '$date'";
$db->sql($sql);
$res = $db->getResult();
$num = $db->numRows($res);
$sql = "SELECT SUM(points) AS total_points FROM games WHERE user_id = '$user_id' AND game_name = '$game_name' AND game_date = '$date'";
$db->sql($sql);
$resg = $db->getResult();
$sql = "SELECT SUM(points) AS total_points FROM haruf WHERE user_id = '$user_id' AND game_name = '$game_name' AND game_date = '$date'";
$db->sql($sql);
$resh = $db->getResult();
$totalpoints = $resg[0]['total_points'] + $resh[0]['total_points'];
$sql = "SELECT * FROM users WHERE id = '" . $user_id . "'";
$db->sql($sql);
$res = $db->getResult();
$points = $res[0]['points'];
$newpoints = $points + $totalpoints;
$sql = "UPDATE users SET points = '" . $newpoints . "' WHERE id = '" . $user_id . "'";
$db->sql($sql);
$sql = "SELECT * FROM users WHERE id = '" . $user_id . "'";
$db->sql($sql);
$res = $db->getResult();
$sql = "DELETE FROM games WHERE user_id = '$user_id' AND game_name = '$game_name' AND game_date = '$date'";
$db->sql($sql);
$sql = "DELETE FROM haruf WHERE user_id = '$user_id' AND game_name = '$game_name' AND game_date = '$date'";
$db->sql($sql);
$datetime = Date('Y-m-d H:i:s');
$date = date('Y-m-d');
$sql = "INSERT INTO `transactions` (user_id,points,balance,type,game_name,date,date_created) VALUES('$user_id','$totalpoints','$newpoints','delete_bids','$game_name','$date','$datetime')" ;
$db->sql($sql);
$response['success'] = true;
$response['message'] = "Bids Deleted Successfully";
$response['points'] = $points;
$response['totalpoints'] = $totalpoints;
$response['data'] = $res;
print_r(json_encode($response));

?>