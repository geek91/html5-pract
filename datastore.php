<html>
	
	<head>
		<title>Information Gathered</title>
	</head>

	<body>
		<?php
			
			echo "<p>Data Processed</p>";

			date_default_timezone_set('UTC');
			/*Echos the date 
				h : 12 hr format 
				H : 24 hr format
				i : Minutes 
				s : Seconds 
				u : Microseconds
				a : Lowercase am or pm 
				l : Full text for the day 
				F : Full text for the month 
				j : Day of the months 
				S : Suffix for the day st, nd, rd, etc 
				Y : 4 digit Y

				*/
			echo date('h:i:s:u a, l F jS Y e');
		?>
	</body>
</html>