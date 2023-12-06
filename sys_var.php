<!DOCTYPE html>

<html>

<head>
	<title>System variables</title>
</head>

<body>
	
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  Name: <input type="text" name="fname"><br>
	  Surname: <input type="text" name="lname"><br>
	  Age: <input type="text" name="age"><br>
	  <input type="submit">
	</form>

	<?php
		echo "<h3>Browser info:</h3> <br>";
		echo $_SERVER['HTTP_USER_AGENT'];
		$browser_info = get_browser();
		print_r($browser_info);
		echo "<br>";
		echo "<h3>GET name, surname, age</h3>";
		if (htmlspecialchars($_GET["name"]) == null || 
		htmlspecialchars($_GET["surname"]) == null ||
		htmlspecialchars($_GET["age"]) == null) {
			echo "Use: '?name=name&surname=Surname&age=21'";
		} else {
			echo "Hello, " . htmlspecialchars($_GET["name"]) . " " . htmlspecialchars($_GET["surname"]) . ", you are " . htmlspecialchars($_GET["age"]) . " years old.";
		}
		echo "<br>";
		echo "<h3>POST</h3>";
		echo "<br>";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  // collect value of input field
		  $name = $_POST['fname'];
		  $surname = $_POST['lname'];
		  $age = $_POST['age'];
		  if (empty($name) || empty($surname) || empty($age) || ! is_numeric($age)) {
		    echo "Something is empty or age is not a number";
		  } else {
		    echo $name . " " . $surname . " " . $age;
		  }
		}

	?>

</body>

</html>
