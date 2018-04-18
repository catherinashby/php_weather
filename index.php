<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-script-type" content="text/javascript" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7;" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
	<title>Weather</title>
	<!-- css files -->
	<!-- javascript files -->
  </head>
  <body>
 <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/fd33019fe645d261/conditions/q/PA/Philadelphia.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'current_observation'}->{'display_location'};
 ?>
  <table>
  <caption>
	<?php  echo "Current conditions for ${location}->{'full'}"; ?>
  </caption>
    <thead>
	  <tr><th /></tr>
	</thead>
	<tbody>
	  <tr>
	    <th>Label</th>
		<td>Data</td>
	  </tr>
	</tbody>
  </table>
  </body>
</html>