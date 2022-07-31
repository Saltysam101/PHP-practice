<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
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

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="item">Enter an item</label>
    <input name="item" type="text" required>
    <button type="submit">Submit</button>
</form>
<div class="display-item">
   Your Item:  <?php echo $_POST["item"] = $_POST["item"] ?? " ";?>
</div>

<form id="list-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input id="list-value" name="list_item" type="text">
    <button id="list-btn" type="submit">Submit</button>
</form>
<div>
    <ul id="list-container"></ul>
</div>

<?php 
$my_array = [1, 2, 3, 4];
print_r($my_array);
echo "<br>";

$nested_array = [1, 2, 3, [4, 5, 6, [7, [8], 9]], 10, 11];

echo implode(",", $nested_array[3][3][1]); //prints 8
echo "<br>";
print_r(($nested_array[3][3])); // prints 7, array, 9
echo "<br>";



?>
    
</body>
</html>