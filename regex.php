<!DOCTYPE html>
<html>

<head>
	<title>Regex in PHP</title>
</head>

<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Name: <input type="text" name="fname"><br>
		Surname: <input type="text" name="lname"><br>
		Birth-date: <input type="date" name="bdate"><br>
		<input type="submit">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST['fname'];
			$surname = $_POST['lname'];
			$bdate = $_POST['bdate'];
			$year = intval(date('Y', strtotime($bdate)));
			
			if (preg_match("/[A-Z]/", $name[0]) == 0 || preg_match_all("/[A-Z]/", $name) > 1 || preg_match_all("/[a-zA-Z]/", $name) < strlen($name)) {
				echo "<h3 style=\"color: red;\">Name has to start with uppercase letter and only letters from English alphabet.</h3><br>";			
			}
			elseif (preg_match("/[A-Z]/", $surname[0]) == 0 || preg_match_all("/[A-Z]/", $surname) > 1 || preg_match_all("/[a-zA-Z]/", $surname) < strlen($surname)) {
				echo "<h3 style=\"color: red;\">Surname has to start with uppercase letter and only letters from English alphabet.</h3><br>";
			}
			elseif ($year >= date('Y') || $year < 1950 || inval(date('Y')) - $year >= 18) {
				echo "<h3 style=\"color: red;\">Only a year between now and 1950, also you need to be at least 18.</h3><br>";
			}
			else {

			}
		}
	?>
</body>

</html>
