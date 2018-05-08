<html>
	
	<head>
		<title>Information Gathered</title>
	</head>

	<body>
		<?php
			$firstName = $_POST['first_name'];
			$lastName = $_POST['last_name'];
			$age = $_POST['age'];
			$sex = $_POST['sex'];
			$cpga = $_POST['cgpa'];

			echo $firstName;
			echo $lastName;
			echo $age;
			echo $sex;
			echo $cgpa;
		?>
	</body>
</html>