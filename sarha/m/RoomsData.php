<?php

require_once 'sql.php';

class RoomsData
{

	public function LoadRoomInfo($name)
	{
		$db = new Database();
		
		$sql = 'SELECT short_name,formal_name,description,outside,downstairs,upstairs FROM rooms WHERE short_name=?';
	
		$db->connect();
	
		$stmt = $db->dbconn->prepare($sql);
	
		$stmt->bind_param('s', $name);
	
		$stmt->execute();
	
		$rs = $stmt->get_result();
		$rs->data_seek(0);
		$roomData = $rs->fetch_array(MYSQLI_ASSOC);
	
		return $roomData;
		
	}
	
	public function RetrieveAllRooms()
	{
		$db = new Database();
		
		$sql = 'SELECT short_name,formal_name,description,outside,downstairs,upstairs FROM rooms';
		
		$db->connect();
		
		$rs = $db->dbconn->query($sql);
		
		$roomData = $rs->fetch_all(MYSQLI_ASSOC);
		
		return $roomData;
	}
}