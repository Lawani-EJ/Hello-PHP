<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types in PHP</title>
</head>
<body>    
<?php
$fuelLevel = 75; 
$fuelString = "75";

// Check if fuel level is equal to 75
if ($fuelLevel == 75) {
    echo "Fuel level is 75%.\n";
}

// Check if fuel level as string is equal to 75
if ($fuelString == 75) {
    echo "Fuel level as string is also 75%.\n";
}

// Check if fuel level is not equal to 100
if ($fuelLevel != 100) {
    echo "Fuel level is not full.\n";
}

// Identical comparison to avoid type conversion issues
if ($fuelString === 75) {
    echo "Fuel level is 75 and type is identical.\n";
} else {
    echo "Fuel level is not identical to 75 (or type mismatch).\n";
}

// Not identical comparison
if ($fuelString !== 75) {
    echo "Fuel string is not identical to fuel level as an integer.\n";
}
?>
</body>
</html>
