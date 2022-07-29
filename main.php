<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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

function hello(){
    echo "hello\n";
    return 25;
}
$return_var = hello();
echo $return_var;
?>

<form action="greet.php" method="post">
    <label for="greeting">Please say a greeting</label>
    <input name="greeting" type="text" required>
    <button type="submit">Submit</button>
</form>

<form action="main.php" method="post">
    <label for="item">Enter an item</label>
    <input name="item" type="text" required>
    <button type="submit">Submit</button>
</form>
<div class="display-item">
   Your Item:  <?php echo $_POST["item"] = $_POST["item"] ?? " ";?>
</div>
    
</body>
</html>