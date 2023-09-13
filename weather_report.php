<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>
    <?php
    // Define the temperature variable
    $temperature = 20; // Change this value to the current temperature

    // Provide weather information based on the temperature range
    if ($temperature < 0) {
        echo "It's freezing!";
    } elseif ($temperature >= 0 && $temperature <= 20) {
        echo "It's cool.";
    } elseif ($temperature > 20) {
        echo "It's warm.";
    } else {
        echo "Invalid temperature.";
    }
    ?>
</body>
</html>
