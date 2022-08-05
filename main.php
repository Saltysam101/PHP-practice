<?php 
    session_start();
    $_SESSION['var'] = 'something interesting';

?>

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
    <label for="name">Your name</label>
    <input type="text" name="name">
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
$assoc_array = ["bird" => "cardinal", "sport" => "basketball", "car" => "toyota", "money" => "infinite"];
$assoc_array_two = ["weather" => "clear", "life" => "good"];

echo $assoc_array["bird"]; //prints cardinal
echo "<br>";
echo $assoc_array["money"];//prints infinite
echo "<br>";
$union = $assoc_array + $assoc_array_two;//combines both arrays
echo implode(",",$union);//prints values of newly combined array
echo "<br>";
print_r($union);//prints keys and values of array


function canIDrive($age, $liscense){
    if($age >= 16 && $liscense === TRUE){
        echo "<h1>Yes</h1>";
    } else {
        echo "<h1>No</h1>";
    }
}
canIDrive(16, TRUE);//prints Yes
echo "<br>";
canIDrive(15, TRUE);//prints No
echo "<br>";
canIDrive(18, FALSE);//prints No

function number($num){
    return $num > 10 ? "<h2>The number is greater than 10</h2>" : "<h2>The number is less than 10</h2>";
}

echo number(15);// prints The number is greater than 10
echo "<br>";
echo number(5);// prints The number is less than 10

function noNullAllowed($num=null){
    return $num = $num ?? 1;
}
echo noNullAllowed(15);//prints 15
echo "<br>";
echo noNullAllowed();//prints 1
echo "<br>";

class Pet{
    public $color;
    function __construct($color)
    {
        $this->color = $color;
        echo $color;
    }
    private $favTypeFood;
function myPetsName($pet_name)
{
    return "My pet's name is " . $pet_name;
}
function setFavFoodType($favTypeFood){
    $this->favTypeFood = $favTypeFood;
}
function getFavFoodType(){
    echo $this->favTypeFood;
}
}

$dog = new Pet("white");// prints white
echo "<br>";
echo $dog->color;// prints white too
echo "<br>";
echo $dog->myPetsName("Jax");//prints My pet's name is Jax
echo "<br>";
$dog->setFavFoodType("human food");
echo $dog->getFavFoodType();//prints human food
echo "<br>";
echo $dog->favTypeFood;// prints fatal error becuase var is set to private
echo "<br>";


?>
    
</body>
</html>