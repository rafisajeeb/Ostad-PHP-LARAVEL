<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>

<h1>Temperature Converter</h1>

<form method="post">
    <label for="temperature">Enter Temperature:</label>
    <input type="number" name="temperature" id="temperature" required step="any">
    
    <label for="direction">Select Conversion:</label>
    <select name="direction" id="direction">
        <option value="celsius-to-fahrenheit">Celsius to Fahrenheit</option>
        <option value="fahrenheit-to-celsius">Fahrenheit to Celsius</option>
    </select>
    
    <input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST["temperature"];
    $direction = $_POST["direction"];

    if ($direction == "celsius-to-fahrenheit") {
        $converted_temperature = ($temperature * 9/5) + 32;
        echo "$temperature Celsius is equal to $converted_temperature Fahrenheit.";
    } elseif ($direction == "fahrenheit-to-celsius") {
        $converted_temperature = ($temperature - 32) * 5/9;
        echo "$temperature Fahrenheit is equal to $converted_temperature Celsius.";
    }
}
?>

</body>
</html>
