<!DOCTYPE html>
<html>
<head>
    <title>Even Odd Checker</title>
</head>
<body>

<h1>Even Odd Checker</h1>

<form method="post">
    <label for="number">Enter a Number:</label>
    <input type="number" name="number" id="number" required>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    
    if ($number % 2 == 0) {
        echo "<p>$number is an even number.</p>";
    } else {
        echo "<p>$number is an odd number.</p>";
    }
}
?>

</body>
</html>