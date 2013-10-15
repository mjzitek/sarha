<?php

require_once('m/RoomsData.php');

class Rooms {
	
	private $_shortName;
	private $_formalName;
	private $_description;
	private $_outside;
	private $_downstairs;
	private $_upstairs;
	
	private $_roomInfo = array();
	
	public function RetrieveAllRooms() {
		$rd = new RoomsData();
		
		return $rd->RetrieveAllRooms();
	}
	

}