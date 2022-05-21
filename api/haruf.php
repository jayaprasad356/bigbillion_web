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
if (empty($_POST['game_name'])) {
    $response['success'] = false;
    $response['message'] = "Game name is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['game_type'])) {
    $response['success'] = false;
    $response['message'] = "Game type is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['game_method'])) {
    $response['success'] = false;
    $response['message'] = "Game method is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['number'])) {
    $response['success'] = false;
    $response['message'] = "Number is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['points'])) {
    $response['success'] = false;
    $response['message'] = "Points is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['total_points'])) {
    $response['success'] = false;
    $response['message'] = "Total Points is Empty";
    print_r(json_encode($response));
    return false;
}


$user_id = $db->escapeString($_POST['user_id']);
$game_name = $db->escapeString($_POST['game_name']);
$game_type = $db->escapeString($_POST['game_type']);
$game_method = $db->escapeString($_POST['game_method']);
$total_points = $db->escapeString($_POST['total_points']);
$number = $_POST['number'];
$points = $_POST['points'];
$points_arr = json_decode($points, true);
$number_arr = json_decode($number, true);

$sql = "SELECT * FROM users WHERE id = '" . $user_id . "'";
$db->sql($sql);
$res = $db->getResult();
$num = $db->numRows($res);
if ($num == 1) {
    $current_points=$res[0]['points'];
    if($current_points>=$total_points){
        $new_points=$current_points-$total_points;
        $sql = "UPDATE `users` SET `points`='$new_points' WHERE id=" . $user_id;
        $db->sql($sql);
        $sql = "INSERT INTO `transactions` (user_id,game_name,game_type,game_method,points,balance) VALUES('$user_id','$game_name'
        ,'$game_type','$game_method','$total_points','$new_points')" ;
        $db->sql($sql);
        for ($i = 0; $i < count($points_arr); $i++) {
            $p = $points_arr[$i] % 5;
            if($points_arr[$i] > 0 && $p == 0){
                $sql = "INSERT INTO `haruf`  (user_id,game_name,game_type,number,points) VALUES('$user_id','$game_name'
                ,'$game_type','$number_arr[$i]','$points_arr[$i]')" ;
                $db->sql($sql);

            }
        }
        $sql = "SELECT * FROM users WHERE id = '" . $user_id . "'";
        $db->sql($sql);
        $res = $db->getResult();
    
        $response['success'] = true;
        $response['message'] = "Game Points Added Successfully";
        $response['data'] = $res;

    }
    else{
        $response['success'] = false;
        $response['message'] = "Insufficient points";

    }


     
}
else{
    $response['success'] = false;
    $response['message'] = "Game Not Found";

}

print_r(json_encode($response));
?>



