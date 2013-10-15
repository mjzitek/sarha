<html>
<head>

<link rel="stylesheet" href="css/sarha.css">
</head>
<body>
<?php


require_once 'c/Rooms.php';
require_once 'c/RoomInfo.php';
require_once 'c/Readings.php';

$rooms = new Rooms();

print "<table>";
print "<thead><tr><th>Room Name</th><th>Description</th>" .
	   "<th>Downstairs</th><th>Upstairs</th><th>Outside</th></tr></thead>";

foreach($rooms->RetrieveAllRooms() as $row)
{
	print "<tr><td class='room-name'>" . $row['formal_name'] . "</td><td class='room-desc'>" . $row['description'] . "</td>" .
		  "<td class='room-ds'>" . ($row['downstairs'] == true ? 'Yes' : 'No') . "</td>" .
		  "<td class='room-ds'>" . ($row['upstairs'] == true ? 'Yes' : 'No') . "</td>" .
		  "<td class='room-ds'>" . ($row['outside'] == true ? 'Yes' : 'No') . "</td>" .
		  "</tr>";
} 

print "</table>";


/* $rd = new Readings();

echo($rd->RetreiveReadingsBySensor('sen0001', 'temp')); */



?>

<script type='text/javascript' src='js/jquery-2.0.3.min.js'></script>
<script type='text/javascript' src='js/sarha.js'></script>
</body>
</html>