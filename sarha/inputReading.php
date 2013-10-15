<?php

/*
 * 	Simple page to add sensor readings to database
 *  via a URL
 *
 */

require_once 'm/ReadingsData.php';

$sensorId = $_GET["s"];
$time =  htmlspecialchars($_GET["t"]);
$sensorType = htmlspecialchars($_GET["ty"]);
$reading = htmlspecialchars($_GET["r"]);


echo 'ID: ' . $sensorId . "<br />";
echo 'Time: ' . $time . "<br />";
echo 'Type: ' . $sensorType . "<br />";
echo 'Reading: ' . $reading . "<br />";

	$rd = new ReadingsData();
	
	if($sensorType == "temp")
	{
		echo 'Temp ' . $rd->RecordTemp($sensorId,$time,$reading);	
	} else if ($sensorType == "humid")
	{
		echo 'Humid ' . $rd->RecordHumidity($sensorId,$time,$reading);				
	} else if ($sensorType == "light")
	{
		echo 'Light ' .  $rd->RecordLight($sensorId,$time,$reading);		
	} else if ($sensorType == "motion")
	{
		echo 'Motion ' .  $rd->RecordMotion($sensorId,$time,$reading);		
	}
	
	unset($rd);