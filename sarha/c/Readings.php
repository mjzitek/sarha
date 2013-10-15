<?php

require_once 'm/ReadingsData.php';

class Readings
{
	
	public function RetreiveReadingsBySensor($sensorId, $type)
	{
		$rd = new ReadingsData();
		
		$output = array();
		
		foreach($rd->RetreiveReadingsBySensor($sensorId, $type) as $row)
		{
			array_push($output,$row);
		}
		
		return json_encode($output);
	
	}
	
	
	public function RetreiveLatestReadingsBySensor($sensorId, $type)
	{
		$rd = new ReadingsData();
	
		$output = array();
	
		foreach($rd->RetreiveLatestReadingsBySensor($sensorId, $type) as $row)
		{
			$output[$row['reading_time']] = $row['reading'];
		}
	
		return json_encode($output);
	
	}
	
	
}