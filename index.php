<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types in PHP</title>
</head>
<body>    
<?php 
$spacecraft = array(
    "name" => "Apollo 11",
    "launch_year" => 1969,
    "crew_size" => 3
);

echo "Spacecraft Name: " . $spacecraft["name"] . "\n";
echo "Launch Year: " . $spacecraft["launch_year"] . "\n";
echo "Crew Size: " . $spacecraft["crew_size"] . "\n";
?>
</body>
</html>
