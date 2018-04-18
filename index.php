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
   // fetch the data
  $json_string = file_get_contents("http://api.wunderground.com/api/fd33019fe645d261/conditions/q/PA/Philadelphia.json");
  $parsed_json = json_decode($json_string);
  $observed = $parsed_json->{'current_observation'};
  $location = $parsed_json->{'current_observation'}->{'observation_location'};
 ?>
  <table>
  <caption>
	<?php  echo "Current conditions for ${location}->{'full'}"; ?>
	<br />
	<?php  echo "${observed}->{'observation_time'}"; ?>
  </caption>
    <thead>
	  <tr><th /></tr>
	</thead>
	<tbody>
	  <tr>
	    <th>Now</th><td><?php echo "$observed->{'weather'}"; ?></td>
	    <th>Temperature</th><td><?php echo "$observed->{'temperature_string'}"; ?></td>
	    <th>Relative Humidity</th><td><?php echo "$observed->{'relative_humidity'}"; ?></td>
	    <th>Wind</th><td><?php echo "$observed->{'wind_string'}"; ?></td>
	    <th>Dewpoint</th><td><?php echo "$observed->{'dewpoint_string'}"; ?></td>
	    <th>Wind Chill</th><td><?php echo "$observed->{'windchill_string'}"; ?></td>
	    <th>Feels Like</th><td><?php echo "$observed->{'feelslike_string'}"; ?></td>
	  </tr>
	</tbody>
  </table>
  <!-- SQL statement -->
  <div>
  </div>
  </body>
</html>