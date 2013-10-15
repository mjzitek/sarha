<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title></title>
		<script type="text/javascript" src="js/d3.v3.min.js"></script>
		<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript">

		function getSensorReadings(sensorId, sensorType)
		{
			var url = "getLatestReading.php?s=" + sensorId + "&t=" + sensorType;
			
			$.getJSON( url, function( data ) {

				  $.each( data, function( key, val ) {
					  $('#latest_temp').html(val + "&deg; F");
				  });
						
			});


		}



		$(document).ready(function () {
			
			getSensorReadings('sen0001', 'temp');
			var t =  setInterval(
					function () {
						getSensorReadings('sen0001', 'temp');
					}
					, 60000);
			
		});
				



		</script>
		<style type="text/css">
		
			body {
				font-family: Arial, Sans Serif;
				background-color: #000;
			}
			
			.temp_box {
				  background-color: #000;
				  color: #66E3FF;
				  font-size: 28pt;
				  text-align: center;
				  vertical-align: middle;
				  padding-top: 22px;
			}
		
			.box_round {
			
				width: 100px;
				height: 68px;
			
			  -webkit-border-radius: 12px; /* Android ≤ 1.6, iOS 1-3.2, Safari 3-4 */
			          border-radius: 12px; /* Android 2.1+, Chrome, Firefox 4+, IE 9+, iOS 4+, Opera 10.50+, Safari 5+ */
			
			  /* useful if you don't want a bg color from leaking outside the border: */
			  background-clip: padding-box; /* Android 2.2+, Chrome, Firefox 4+, IE 9+, iOS 4+, Opera 10.50+, Safari 4+ */
			  
							  

			  
			}
			
			
			.box_gradient {
				  background-color: #444444;
				  background-image: -webkit-gradient(linear, left top, left bottom, from(#444444), to(#999999)); /* Chrome, Safari 4+ */
				  background-image: -webkit-linear-gradient(top, #444444, #999999); /* Chrome 10-25, iOS 5+, Safari 5.1+ */
				  background-image:    -moz-linear-gradient(top, #444444, #999999); /* Firefox 3.6-15 */
				  background-image:      -o-linear-gradient(top, #444444, #999999); /* Opera 11.10-12.00 */
				  background-image:         linear-gradient(to bottom, #444444, #999999); /* Chrome 26, Firefox 16+, IE 10+, Opera 12.10+ */
				}
				
				
			.box_shadow {
				  -webkit-box-shadow: 0px 0px 4px 0px #ffffff; /* Android 2.3+, iOS 4.0.2-4.2, Safari 3-4 */
				          box-shadow: 0px 0px 4px 0px #ffffff; /* Chrome 6+, Firefox 4+, IE 9+, iOS 5+, Opera 10.50+ */
			}
			
			#main {
				margin-top: 40px;
				margin-left: auto;
				margin-right: auto;
				width: 110px;
			}
		
		</style>
	</head>
	<body>
		<div id='main'>
			<div class='temp_box box_round box_gradient box_shadow'>
				<span id='latest_temp'></span>
			</div>
		</div>
	</body>
	
</html>





		

