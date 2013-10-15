
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title></title>
		<script type="text/javascript" src="js/d3.v3.min.js"></script>
		<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
		<script>
			setTimeout("location.reload(true);", 60000);

		</script>
		<style type="text/css">
			body {
				font-family: Arial, Sans Serif;
				color: #fff;
			}
			
			.rtemp_row {
				width: 250px;
				padding: 2px 0 2px 16px;
				margin-top: 2px;
				margin-bottom: 2px;
				float: both;
				margin-left: auto;
				margin-right: auto;

			}
			
			.rtime {
				padding-top: 5px;
				width: 200px;
				float: left;
			}
			
			.rreading {
				padding-top: 5px;
				width: 50px;
				float: left;
			}
		
		</style>
	</head>
	<body>

	<?php 
	
		require_once 'c/Readings.php';
		
	 	$rd = new Readings();
	
		$array = json_decode($rd->RetreiveReadingsBySensor('sen0001', 'temp')); 
	
		//print_r($array[0]->reading);
		$count = 0;
		
		$greys = [	"#000","#080808","#111","#191919","#222",
				  	"#2a2a2a","#333","#3b3b3b","#444","#4c4c4c",
				  	"#555","#5d5d5d","#666","#6e6e6e","#777",
					"#7f7f7f","#888","#909090","#999","#a1a1a1",
					"#aaa","#b2b2b2","#bbb","#c3c3c3","#ccc",
					"#d4d4d4","#ddd","#e5e5e5","#eee","#f6f6f6",
					"#fff"
				 ];
		
		$first_temp = "";
		
		foreach(array_reverse($array) as $row)
		{
			if($count < 31)
			{
				if($count == 0) { $first_temp = "font-weight: bold;";  }
				else { $first_temp = ""; }
				echo("<div class='rtemp_row' style='color:" . $greys[$count] . ";" . $first_temp 
					. "'><div class='rtime'>" . $row->reading_time 
					. "</div><div class='rreading'>" . $row->reading . "</div></div><br />");
			
				$count++;
			}
		}
		
	?>
	
	</body>
</html>