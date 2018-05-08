<html>
	
	<body>
		<h1>First PHP Page</h1>

		<?php
			
			function addNumbers ($num1, $num2) {

				return $num1 + $num2;
			}

			echo "The sum of 4 + 5 = " . addNumbers(4, 5);
		?>
	</body>
</html>
