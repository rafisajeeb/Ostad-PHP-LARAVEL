<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h1>Simple Calculator</h1>

<?php
$num1 = "";
$num2 = "";
$operation = "";
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];
    
    switch ($operation) {
        case "addition":
            $result = $num1 + $num2;
            break;
        case "subtraction":
            $result = $num1 - $num2;
            break;
        case "multiplication":
            $result = $num1 * $num2;
            break;
        case "division":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero";
            }
            break;
    }
}
?>

<form method="post">
    <label for="num1">Enter First Number:</label>
    <input type="number" name="num1" id="num1" required>
    
    <label for="operation">Select Operation:</label>
    <select name="operation" id="operation">
        <option value="addition">Addition (+)</option>
        <option value="subtraction">Subtraction (-)</option>
        <option value="multiplication">Multiplication (*)</option>
        <option value="division">Division (/)</option>
    </select>
    
    <label for="num2">Enter Second Number:</label>
    <input type="number" name="num2" id="num2" required>
    
    <input type="submit" value="Calculate">
</form>

<?php
if (!empty($result)) {
    echo "<p>Result: $result</p>";
}
?>

</body>
</html>
