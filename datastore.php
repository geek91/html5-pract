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
			$userMarks = $_POST['user_marks'];
			$userAddress = $_POST['userAdd'];

			echo $firstName . "<br />";
			echo $lastName . "<br />";
			echo $age . "<br />";
			echo $sex . "<br />";
			echo "<b>You got : </b>";
			echo $userMarks . "<br />";
			echo "Your address : ";
			echo $userAddress . "<br />";
		?>
	</body>
</html>