
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title></title>
		<script type="text/javascript" src="js/d3.v3.min.js"></script>
		<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
		<style type="text/css">
		
			div.bar {
				display: inline-block;
				width: 20px;
				height: 75px;	/* Gets overriden by D3-assigned height below */
				margin-right: 2px;
				background-color: teal;
			}
		
		</style>
	</head>
	<body>
		<script type="text/javascript">

		function getSensorReadings(sensorId, sensorType)
		{
			var url = "getreadings.php?s=" + sensorId + "&t=" + sensorType;
			var dataset = [];

			
			$.getJSON( url, function( data ) {

				$.each(data, function(key, val) {
					dataset.push(val);
					//$('body').append(val + "<br />");
				});

				$('body').append("Length: " + dataset.length + "<br />");

				/*
				$.each(dataset, function(index, item) {
					$('body').append(index + ". " + item + "<br />");
				});
				*/

				//Width and height
				var w = 5000;
				var h = 400;
				var barPadding = 1;
				
				
				//Create SVG element
				var svg = d3.select("body")
				            .append("svg")
				            .attr("width", w)
				            .attr("height", h);
				
				svg.selectAll("rect")
				   .data(dataset)
				   .enter()
				   .append("rect")
					.attr("x", function(d, i) {
					    return i * (w / dataset.length);
					})
				   .attr("y", function(d) {
					    return h  - (d * 4);  //Height minus data value
					})
				   .attr("width", w / dataset.length - barPadding)
				   .attr("height", function(d) {
					    return d * 4;  //Just the data value
					    
					})
					.attr("fill", "teal");


			});


		}

		$(document).ready(function() {
				getSensorReadings('sen0001','temp');
		});


		
		</script>
		<div id="ouput"></div>
	</body>
</html>