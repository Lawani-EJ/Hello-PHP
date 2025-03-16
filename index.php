<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types in PHP</title>
</head>
<body>    
<?php 
// A comment can be written like this
# And a comment can be written like this too
/**And a multiple line comment can be written like this too */
echo "HELLO WORLD \n";

# Variable 
# A variable in PHP is used to store data , or its the name of the memoruy location that holds the data
$language = "PHP \n";
$Language = "PHP is so weird!";
echo $language;
ECHO $Language;

// Creating Data types
$a = 5;
// Integer variable
echo "Integer Variable: $a \n";

$a = 5.55;
// Float variable
echo "Whole Number: $a \n";

$a = "Hiiiii :)";
// string variables can either be written in sigle or double quotes
echo "String Variable: $a \n";
$a = 'nICE To meet you!!';
echo "String Variable: $a \n";

//Boolean
$a = true;
echo "Boolean Variable: $a \n";

//Array
//Indexing an array
$a = array("PHP", "Python", "Java", "C++");
echo "Array Variables: \n";
print_r($a);
echo $a[0];
//Associative Array
//Associative array is an array that uses named keys that you assign to them
//Associative arrays are used to store key value pairs
$a = array("Name" => "John", "Age" => 21);
echo "Associative Array: \n";
print_r($a);
echo $a["Name"];
?>
</body>
</html>
