<?php

$db = new mysqli("localhost", "root", "", "crudajax");
if($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}

$result = array();
$message = isset($_POST['message']) ? $_POST['message'] : null;
$from = isset($_POST['from']) ? $_POST['from'] : null;

if(!empty($message) && !empty($from)){
    $sql = "INSERT INTO `chat` (`message`, `from`) VALUES('".$message."','".$from."')";
    $result['send_status'] = $db->query($sql);
}
// Display data
$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$items = $db->query("SELECT * FROM `chat` WHERE `id` > ". $start);

while($row = $items->fetch_assoc()){
    $result['items'][] = $row;
}

$db->close();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

print json_encode($result); 