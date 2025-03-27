<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types in PHP</title>
</head>
<body>    
<?php 
$planets = array("Mercury", "Venus", "Earth", "Mars");

echo "The 1st planet in our solar system is " . $planets[0] . "\n";
echo "The 4th planet in our solar system is " . $planets[3] . "\n";

// Add a new planet to the array
$planets[] = "Jupiter";
echo "We have added a new planet, now the 5th planet is " . $planets[4] . "\n";

// Update a planet in the array
$planets[1] = "Vulcan";
echo "After renaming, the 2nd planet is " . $planets[1] . "\n";
?>
</body>
</html>
