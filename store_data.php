<html>
	<head><title>Add Student</title></head>

	<body>
		<?php
		
		if(isset($_POST['submit'])) {

			$data_missing = array();

			if(empty($_POST['first_name'])) {
				$data_missing[] = 'First Name';
			} else  {

				$f_name = trim($_POST['first_name']);
			}

			if(empty($_POST['last_name'])) {
				$data_missing[] = 'Last Name';
			} else  {

				$l_name = trim($_POST['last_name']);
			}

			if(empty($_POST['age'])) {
				$data_missing[] = 'Age';
			} else  {

				$age = trim($_POST['age']);
			}

			if(empty($_POST['sex'])) {
				$data_missing[] = 'Sex';
			} else  {

				$sex = trim($_POST['sex']);
			}

			if(empty($_POST['cgpa'])) {
				$data_missing[] = 'CGPA';
			} else  {

				//Trim the white space
				$cgpa = trim($_POST['cgpa']);
			}

			if(empty($data_missing)) {

				require('../mysqli_connect.php');

				$query = "INSERT INTO students (first_name, last_name, age, sex, cgpa, id) VALUES (?, ?, ?, ?, ?, NULL)";


				$stmt = mysqli_prepare($dbc, $query);

				// i Integers 
				// d Doubles
				// b Blobs 
				// s Strings 

				mysqli_stmt_bind_param($stmt, "ssisd", $f_name, $l_name, $age, $sex, $cgpa);


				mysqli_stmt_execute($stmt);

				$affected_rows = mysqli_stmt_affected_rows($stmt);

				if($affected_rows == 1) {

					echo 'Student Entered';

					mysqli_stmt_close($stmt);

					mysqli_close($dbc);
				}


			} else {

				echo 'You need to enter the following data <br />';

				foreach($data_missing as $dm) {

					echo $dm . "<br>";

				}
			}

		}

		?>

		<form action="store_data.php" method="post">
		
		<b>Add a new Student</b>

		<p>First Name:
		<input type="text" name="first_name" size="30" value="" /></p>

		<p>Last Name:
		<input type="text" name="last_name" size="30" value="" /></p>
		
		<p>Age:
		<input type="text" name="age" size="30" value="" /></p>
		
		<p>Sex:
		<input type="text" name="sex" size="30" value="" /></p>
		
		<p>CGPA:
		<input type="text" name="cgpa" size="30" value="" /></p>
		
		<p>
		<input type="submit" name="submit" value="Send" /></p>

	</form>
	</body>
</html>