<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$name_one = 'Sam';
$name_two = 'Bob';
echo "<h1>Hello There $name_two</h1>";

function get_name() {
    global $name_one, $name_two;
    if($name_one){
        echo "<p>This is a message for $name_one </p>";
    } else {
        echo "<p>This is a message for $name_two </p>";
    }
}

get_name();

?>
    
</body>
</html>