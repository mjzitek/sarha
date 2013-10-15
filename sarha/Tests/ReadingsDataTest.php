<?php

require_once '../m/ReadingsData.php';

class ReadingsDataTest extends PHPUnit_Framework_TestCase
{

	protected $_rd = null;

	public function setUp()
	{
		$this->_rd = new ReadingsData();
	}

	public function tearDown()
	{
		unset($this->_rd);
	}
	
/* 	public function testRetrieveShortName()
	{
		$this->assertEquals('living_room', $this->_room->GetShortName());
	} */
	
	
	public function testInsertTemp()
	{
		$this->assertEquals(1, $this->_rd->RecordTemp('sen0001','2013-10-02 19:30',67));
	}
	
	
	public function testRetreiveReadingsBySensor()
	{
		$this->assertEquals(0, $this->_rd->RetreiveReadingsBySensor('sen0001', 'temp'));
	}
}