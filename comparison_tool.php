<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>

<h1>Comparison Tool</h1>

<form method="post">
    <label for="number1">Enter First Number:</label>
    <input type="number" name="number1" id="number1" required>
    
    <label for="number2">Enter Second Number:</label>
    <input type="number" name="number2" id="number2" required>
    
    <input type="submit" value="Compare">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    
    $result = ($number1 > $number2) ? "$number1 is larger." : "$number2 is larger.";
    
    echo "<p>$result</p>";
}
?>

</body>
</html>
