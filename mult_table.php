<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
</head>
<body>

<h2>Multiplication Table Generator</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Enter a number (1-100):
    <input type="text" name="user_input" required>
    <input type="submit" value="Generate Table">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST["user_input"];
    if (is_numeric($userInput) && $userInput >= 1 && $userInput <= 100) {
        echo "<h3>Multiplication Table for $userInput</h3>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$userInput x $i</td>";
            echo "<td>" . ($userInput * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='color: red;'>Please enter a valid number between 1 and 100.</p>";
    }
}
?>

</body>
</html>
