<?php

//require_once 'PHPUnit/Framework.php';
require_once '../c/RoomInfo.php';

class MyFleetTest extends PHPUnit_Framework_TestCase
{
	
	protected $_room = null;
	
	public function setUp()
	{
		$this->_room = new RoomInfo('living_room');
	}
	
	public function tearDown()
	{
		unset($this->_room);
	}
	
	public function testRetrieveShortName()
	{
		$this->assertEquals('living_room', $this->_room->GetShortName());
	}
	
	public function testRetrieveFormalName()
	{

		$this->assertEquals('Living Room', $this->_room->GetFormalName());
	}
	
	public function testRetrieveDescription()
	{
		$this->assertEquals('Living Room', $this->_room->GetDescription());
	}
	
	public function testCheckIfOutside()
	{
		$this->assertFalse($this->_room->isOutside());
	}
	
	public function testCheckIfDownstairs()
	{
		$this->assertTrue($this->_room->isDownstairs());
	}
	
	public function testCheckIfUpstairs()
	{
		$this->assertFalse($this->_room->isUpstairs());
	}
}