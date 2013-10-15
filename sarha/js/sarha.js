
function getSensorReadings(sensorId, sensorType)
{
	var url = "getreadings.php?s=" + sensorId + "&t=" + sensorType;
	
	$.getJSON( url, function( data ) {
		  var items = [];
		  $.each( data, function( key, val ) {
		    items.push( "<li id='" + key + "'>" + val + "</li>" );
		  });
		 
		  $( "<ul/>", {
		    "class": "my-new-list",
		    html: items.join( "" )
		  }).appendTo( "body" );
		});


}



$(document).ready(function () {
	

	//getSensorReadings('sen0001', 'temp');
	
});

