<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types in PHP</title>
</head>
<body>    
<?php
class Video{
    public $title = "PHP under 10 minutes";
}
$my_video = new Video();
echo $my_video->title;
?>
</body>
</html>
