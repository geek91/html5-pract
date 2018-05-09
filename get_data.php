<?php

require_once('../mysqli_connect.php');

$query = "SELECT id, first_name, last_name, age, sex, cgpa 
			FROM students";

$response = @mysqli_query($dbc, $query);

if ($response) {

	echo '<table align="left"
	cellspacing="5" cellpadding="8">

	<tr><td align="left"><b>Id</b></td>
	<td align="left"><b>First Name</b></td>
	<td align="left"><b>Last Name</b></td>
	<td align="left"><b>Age</b></td>
	<td align="left"><b>Sex</b></td>
	<td align="left"><b>CGPA</b></td> </tr>';

	while($row  = mysqli_fetch_array($response)) {

		echo '<tr><td align="left">' . 
		$row['id'] . '</td><td align="left">' .
		$row['first_name'] . '</td><td align="left">' .
		$row['last_name'] . '</td><td align="left">' .
		$row['age'] . '</td><td align="left">' .
		$row['sex'] . '</td><td align="left">' .
		$row['cgpa'] . '</td><td align="left">' ;

		echo '</tr>';

	}

	echo '</table>';
} else {

	echo "<br>Couldn't issue database query<br>";

	echo mysqli_error($dbc);
}

mysqli_close($dbc);

?>