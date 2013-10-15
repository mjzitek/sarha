<?php



require_once 'c/Readings.php';

$sensorId = htmlspecialchars($_GET["s"]);
$sensorType = htmlspecialchars($_GET["t"]);


$rd = new Readings();

echo($rd->RetreiveReadingsBySensor($sensorId, $sensorType));

