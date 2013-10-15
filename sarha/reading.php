<?php

/*
 * 	Simple page to add sensor readings to database
 *  via a URL
 *
 */

require_once 'm/ReadingsData.php';

$sensorId = $_GET["s"];
$time =  htmlspecialchars($_GET["t"]);
$temp = htmlspecialchars($_GET["tp"]);


echo $sensorId . "<br />";
echo $time . "<br />";
echo $temp . "<br />";

	$rd = new ReadingsData();
	
	$rd->RecordTemp($sensorId,$time,$temp);
	
	unset($rd);