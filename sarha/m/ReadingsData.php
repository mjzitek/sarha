<?php

require_once('sql.php');

class ReadingsData extends Database
{
	
	public function RecordTemp($sensorId, $time, $temp)
	{
		
		$this->connect();
		
		$query = 'INSERT INTO sensor_temp (sensor_name, reading_time, reading) VALUES (?,?,?)';
		
		$stmt = $this->dbconn->prepare($query);
		
		if($stmt === false) {
			trigger_error($this->dbconn->error, E_USER_ERROR);
		}
		
		$stmt->bind_param('ssd', $sensorId,$time,$temp);
		
		$stmt->execute();
		
		$affRows = $stmt->affected_rows;
		
		$stmt->close();
		
		return $affRows;
	}
	
	public function RecordHumidity($sensorId, $time, $humid)
	{
		$this->connect();
		
		$query = 'INSERT INTO sensor_humidity (sensor_name, reading_time, reading) VALUES (?,?,?)';
		
		$stmt = $this->dbconn->prepare($query);
		
		if($stmt === false) {
			trigger_error($this->dbconn->error, E_USER_ERROR);
		}
		
		$stmt->bind_param('ssd', $sensorId,$time,$humid);
		
		$stmt->execute();
		
		$affRows = $stmt->affected_rows;
		
		$stmt->close();
		
		return $affRows;
	}
	
	public function RecordLight($sensorId, $time, $light)
	{
		$this->connect();
		
		$query = 'INSERT INTO sensor_light (sensor_name, reading_time, reading) VALUES (?,?,?)';
		
		$stmt = $this->dbconn->prepare($query);
		
		if($stmt === false) {
			trigger_error($this->dbconn->error, E_USER_ERROR);
		}
		
		$stmt->bind_param('ssd', $sensorId,$time,$light);
		
		$stmt->execute();
		
		$affRows = $stmt->affected_rows;
		
		$stmt->close();
		
		return $affRows;
	}
	
	public function RecordMotion($sensorId, $time, $motion)
	{
		$this->connect();
		
		$query = 'INSERT INTO sensor_motion (sensor_name, reading_time, reading) VALUES (?,?,?)';
		
		$stmt = $this->dbconn->prepare($query);
		
		if($stmt === false) {
			trigger_error($this->dbconn->error, E_USER_ERROR);
		}
		
		$stmt->bind_param('ssd', $sensorId,$time,$motion);
		
		$stmt->execute();
		
		$affRows = $stmt->affected_rows;
		
		$stmt->close();
		
		return $affRows;
	}
	
	public function RetreiveReadingsBySensor($sensorId, $type)
	{
		$this->connect();
		
		// 
		$this->dbconn->query("SET @sensorId = " . "'" . $sensorId . "'");
		$this->dbconn->query("SET @sensorType = " . "'" . $type . "'");		
		$stmt = $this->dbconn->query("CALL RetreiveReadingsBySensor(@sensorId,@sensorType)");
		
		if($stmt->num_rows > 0)
		{
			$sensorData = $stmt->fetch_all(MYSQLI_ASSOC);
		} 
		else {
			$sensorData = 0;
			
		}
		
		return $sensorData;
		
	}
	
	
	public function RetreiveLatestReadingsBySensor($sensorId, $type)
	{
		$this->connect();
	
		//
		$this->dbconn->query("SET @sensorName = " . "'" . $sensorId . "'");
		$this->dbconn->query("SET @sensorType = " . "'" . $type . "'");
		$stmt = $this->dbconn->query("CALL RetreiveLatestReadingsBySensor(@sensorName,@sensorType)");
	
				if($stmt->num_rows > 0)
				{
				$sensorData = $stmt->fetch_all(MYSQLI_ASSOC);
				}
				else {
				$sensorData = 0;
					
				}
	
				return $sensorData;
	
	}
	
	public function RetrieveReadingsByRoom($room, $type)
	{
		$this->connect();
	}
	
	
	/* 	
	    $mysqli = new MySQLI('host','user','pass','db');
		$result = $mysqli->query("CALL sp_somestoredproc()");
		$data = $result->fetch_assoc();
		$result->free(); 
	*/
		
}