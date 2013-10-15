<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Electrolize|Coda' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/sarha_dashboard.css">
	<link rel="stylesheet" href="css/buttons.css">
</head>
<body>

<div id='col-left'>
	<div class='button1 button_round'>
	
		<div class='button_upper'>
		Temperature
		</div>
		<div class='button_middle'></div>
		<div class='button_lower'><span id='dash_temp'></span></div>
	</div>
	
	<div class='button1 button_round button_red'>
	
		<div class='button_upper'>
		Humidity
		</div>
		<div class='button_middle'></div>
		<div class='button_lower'><span id='dash_humid'></span></div>
	</div>
	
	
	<div class='button1 button_round button_yellow'>
	
		<div class='button_upper'>
		Light
		</div>
		<div class='button_middle'></div>
		<div class='button_lower'><span id='dash_light'></span></div>
	</div>
</div>
<div id='col-right'>x</div>

<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="js/d3.v3.min.js"></script>
<script type="text/javascript" src="js/sarha_dashboard.js"></script>

</body>

</html>
