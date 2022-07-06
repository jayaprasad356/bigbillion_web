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
if (empty($_POST['game_name'])) {
    $response['success'] = false;
    $response['message'] = "Game Name is Empty";
    print_r(json_encode($response));
    return false;
}
$date = $db->escapeString($_POST['date']);
$game_name = $db->escapeString($_POST['game_name']);
$sql = "SELECT *,SUM(points) AS points FROM `games` WHERE game_date = '$date' AND game_name = '$game_name' GROUP BY number ORDER BY number DESC";
$db->sql($sql);
$res = $db->getResult();
$sql = "SELECT SUM(points) AS total_points FROM games WHERE game_date = '$date' AND game_name = '$game_name'";
$db->sql($sql);
$totalpoints = $db->getResult();
$sql = "SELECT * FROM `games` WHERE game_date = '$date' AND game_name = '$game_name' GROUP BY user_id ORDER BY number DESC";
$db->sql($sql);
$resuser = $db->getResult();
$num = $db->numRows($resuser);
$totalpoints = $totalpoints[0]['total_points'];
$sql = "SELECT * FROM `games` WHERE game_type = 'jodi' AND game_date = '$date' AND game_name = '$game_name' GROUP BY game_type";
$db->sql($sql);
$jodi = $db->getResult();
$jodi = $db->numRows($jodi);
$sql = "SELECT * FROM `games` WHERE game_type = 'jodi' AND game_date = '$date' AND game_name = '$game_name'";
$db->sql($sql);
$jodi = $db->getResult();
$jodi = $db->numRows($jodi);
$sql = "SELECT * FROM `games` WHERE game_type = 'odd_even' AND game_date = '$date' AND game_name = '$game_name'";
$db->sql($sql);
$odd_even = $db->getResult();
$odd_even = $db->numRows($odd_even);
$sql = "SELECT * FROM `games` WHERE game_type = 'quick_cross' AND game_date = '$date' AND game_name = '$game_name'";
$db->sql($sql);
$quick_cross = $db->getResult();
$quick_cross = $db->numRows($quick_cross);
$sql = "SELECT * FROM `haruf` WHERE game_date = '$date' AND game_name = '$game_name'";
$db->sql($sql);
$haruf = $db->getResult();
$harufnum = $db->numRows($haruf);
if ($num >= 1 || $harufnum >= 1) {
    $response['success'] = true;
    $response['message'] = "Users listed Successfully";
    $response['total_users'] = $num;
    $response['jodi'] = $jodi;
    $response['odd_even'] = $odd_even;
    $response['quick_cross'] = $quick_cross;
    $response['haruf'] = $harufnum;
    $response['total_points'] = $totalpoints;

    foreach ($res as $row) {
        $temp['number'] = $row['number'];
        $temp['points'] = $row['points'];
        $temp['game_type'] = 'usual';
        $rows[] = $temp;
    }
    foreach ($haruf as $row) {
        $temp['number'] = $row['number'];
        $temp['points'] = $row['points'];
        $temp['game_type'] = 'haruf';
        $rows[] = $temp;
    }
    $response['data'] = $rows;
    print_r(json_encode($response));
}
else{
    $response['success'] = false;
    $response['message'] = "No Bid Found";
    $response['data'] = $res;
    print_r(json_encode($response));

}
?>