<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

header('Content-type: application/json');

//db credentials
$db_name = 'hpconnec_hp';
$db_user = 'hpconnec_hp';
$db_pass = 'P@55w0rd';
$db_host = 'localhost';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if($mysqli->connect_error){
    printf('Connection Failed', $mysqli->connect_error);
	$response_array['status'] = 'error';
	$response_array['error_reason'] = 'No database connection';
	echo json_encode($response_array);
	return false;
}else{
    $query = "SELECT * FROM `participants`";
    $result = $mysqli->query($query);
    //echo json_encode($result);
    $reg_pat = array();
    while($row = mysqli_fetch_assoc($result)){
        array_push($reg_pat, $row);
    }

    echo json_encode($reg_pat);


}
