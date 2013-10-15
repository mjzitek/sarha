<?php



require_once 'Rooms.php';


class RoomInfo extends Rooms {
	
	
	public function __construct($name) {
		$rd = new RoomsData();
		
		$this->LoadRoomInfo($name, $rd);
	}
	
	
	public function LoadRoomInfo($name, RoomsData $rd)
	{
		$this->_roomInfo = $rd->LoadRoomInfo($name);
		
		$this->_formalName = $this->_roomInfo['formal_name'];
		$this->_shortName = $this->_roomInfo['short_name'];
		$this->_description = $this->_roomInfo['description'];
		$this->_downstairs = $this->_roomInfo['downstairs'];
		$this->_upstairs = $this->_roomInfo['upstairs'];
		$this->_outside = $this->_roomInfo['outside'];
	}
	

	
	public function ListRoomInfo()
	{
		print_r($this->_roomInfo);
	}
	
	public function GetShortName()
	{
		return $this->_shortName;
	}
	
	public function GetFormalName()
	{
		return $this->_formalName;
	}
	
	public function GetDescription()
	{
		return $this->_description;
	}
	
	public function isDownstairs()
	{
		if($this->_downstairs == 1)
		{
			return true;
		} else
		{
			return false;
		}
	}
	
	public function isUpstairs()
	{
		if($this->_upstairs == 1)
		{
			return true;
		} else
		{
			return false;
		}
	}
	
	public function isOutside()
	{
		if($this->_outside == 1)
		{
			return true;
		} else
		{
			return false;
		}
	}
	
}