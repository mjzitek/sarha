<?php


$db_host = '127.0.0.1';
$db_user = 'sarha';
$db_pass = 'sarha';
$db_name = 'sarha';


$con = false;
$result = array();


$dbconn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if($dbconn->connect_error) {
	trigger_error($dbconn->connect_error);
}


$sql = 'SELECT * FROM rooms WHERE short_name=?';

$room = 'living_room';

$stmt = $dbconn->prepare($sql);

$stmt->bind_param('s',$room);

$stmt->execute();

$rs=$stmt->get_result();

$arr = $rs->fetch_all(MYSQLI_ASSOC);

print_r($arr);

