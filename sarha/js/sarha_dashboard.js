function getSensorReadings(sensorId, sensorType)
{
	var url = "getLatestReading.php?s=" + sensorId + "&t=" + sensorType;
	
	$.getJSON( url, function( data ) {

		  $.each( data, function( key, val ) {
			  if(sensorType == "temp") { $('#dash_temp').html(val); }
			  if(sensorType == "humid") { $('#dash_humid').html(val); }
			  if(sensorType == "light") { $('#dash_light').html(val); }			  
		  });
				
	});


}



$(document).ready(function () {
	
	getSensorReadings('sen0001', 'temp');
	getSensorReadings('sen0001', 'light');
	getSensorReadings('sen0001', 'humid');
	
	var t =  setInterval(
			function () {
				getSensorReadings('sen0001', 'temp');
				getSensorReadings('sen0001', 'light');
				getSensorReadings('sen0001', 'humid');
			}
			, 60000);
	
});