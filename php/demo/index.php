<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    <h1>PHP Tutorials</h1>
   
    

    <!-- // echo "<h1> Welcome to our college</h1>";
    // $number = 5;
    // echo "<h1>$number</h1>";
    // $name= "Saharsa";
    // $NAME= "Patna";
    // echo $name."<br>"; 
    // // echo "<br>";
    // echo $NAME;
    // echo "<br>";
    // $txt = "Geekstacks";
    // echo "<h1>I love $txt!</h1>";
    // $x = 5;
    // $y = 4;
    // echo $x + $y;

//     $x = 5; 
//    function myTest() {
//    echo "<p>Variable x inside function is: $x</p>"; 
//    }
//   myTest();
//   echo "<p>Variable x outside function is: $x</p>"; 

//   function myTest1() {
//   $a = 10; 
//   echo "<p>Variable x inside function is: $a</p>"; 
// }
// myTest1();
// echo "<p>Variable x outside function is: $a</p>";  

// $x = 5;
// $y = 10;

// function myTest() {
//   global $x, $y;
//   $y = $x + $y;
//   echo "$y";
// }
// myTest();

// function myTest() {
//   static $x = 0;
//   echo $x;
//   $x++;
// }

// myTest();
// myTest();
// myTest();

// string in php
// $x = "Hello world!";
// $y = 'Hello world!';

// echo "<h1>$x</h1>";
// echo "<br>";
// echo "<h1>$y</h1>";

// var_dump()
// $a = 5985;
// var_dump($a);

// $x = 10.365;
// var_dump($x);

// $x = true;
// $y = false;
// var_dump($x);
// var_dump($y);

// $cars = array("Volvo","BMW","Toyota", 205, 2.05);
// var_dump($cars);


// class Car {
//   public $color;
//   public $model;
//   public function __construct($color, $model) {
//     $this->color = $color;
//     $this->model = $model;
//   }
//   public function message() {
//     return "My car is a " . $this->color . " " . $this->model . "!";
//   }
// }

// $myObj1 = new Car("black", "Volvo");
// echo $myObj1 -> message();
// echo "<br>";
// $myObj2 = new Car("red", "Toyota");
// echo $myObj2 -> message();

// $x = "Hello world!";
// $x = null;
// var_dump($x);

// string method
// echo strlen("Hello world!");
// echo "<br>";
// echo str_word_count("Hello world!");
// echo "<br>";
// echo strrev("Hello world!");
// echo "<br>";
// echo strpos("Hello world!", "world");
// echo "<br>";
// echo str_replace("world", "Dolly", "Hello world!");

//math method
// echo(min(0, 150, 30, 20, -8, -200));   // -200 
// echo "<br>";
// echo(max(0, 150, 30, 20, -8, -200));   //150
// echo "<br>";
// echo(abs(-6.7));  // returns 6.7
// echo "<br>";
// echo(sqrt(64));  // returns 8
// echo "<br>";
// echo "<br>";
// echo(round(0.60));  // returns 1
// echo(round(0.49));  // returns 0
// echo "<br>";
// echo(rand());
// echo "<br>";
// echo(rand(10, 100));

// define keyword-- constant
// define("GREETING", "Welcome to W3Schools.com!");
// echo GREETING;

//increment and 
// $x = 10;  
// echo ++$x; //11

// $x = 10;  
// echo $x++;  // 10
// echo "<br>";
// echo $x;  //11

// $a=2;
// $b=5;
// echo $a+$b;

// echo "<br>";

// $txt1 = "Hello";
// $txt2 = " world!";
// echo $txt1 . $txt2;


// $x = array("a" => "red", "b" => "green");  
// $y = array("c" => "blue", "d" => "yellow");  

// print_r($x + $y);

// $x = array("a" => "red", "b" => "green");  
// $y = array("c" => "blue", "d" => "yellow");  
// var_dump($x == $y);

// $x = array("a" => "red", "b" => "green");  
// $y = array("c" => "blue", "d" => "yellow");  
// var_dump($x === $y);

// conditional statement

// $t = date("h");
// if ($t > "20") {
//   echo "Have a good day!";
// }
// else {
//    echo "Good Night"; 
// }

// $t = date("H");

// if ($t < "10") {
//   echo "Have a good morning!";
// } elseif ($t < "20") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }

// $favcolor = "red";
// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
//   case "blue":
//     echo "Your favorite color is blue!";
//     break;
//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }

//loop 
// while loop

// $x = 1;
// while($x <= 5) {
//   echo "The number is: $x <br>"; //1 2 3 4 5
//   $x++;
// }

// do while loop
// $x = 1;
// do {
//   echo "The number is: $x <br>";  // 1
//   $x++;
// } while ($x >10 ); 

// for loop
// for ($x = 1; $x <= 10; $x++) {
//   echo "The number is: $x <br>";
// }

// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $value) {
//   echo "$value <br>";
// }

// for ($x = 0; $x < 10; $x++) {
//   if ($x == 4) {
//     break;
//   }
//   echo "The number is: $x <br>"; //
// }
// for ($x = 0; $x < 10; $x++) {
//   if ($x == 4) {
//     break;
//   }
//   echo "The number is: $x <br>"; //
// }

//function
// function myFunction($a, $b){
//     echo $a+$b;
// }
// myFunction(10,20);

// function familyName($fname) {
//   echo "$fname Ojha.<br>";
// }
// familyName("Jani");
// familyName("Hege");
// familyName("Stale");
// familyName("Kai Jim");
// familyName("Borge");

// function familyName($fname, $year) {
//   echo "$fname Refsnes. Born in $year <br>";
// }

// familyName("Hege", "1975");
// familyName("Stale", "1978");
// familyName("Kai Jim", "1983");


// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, "5 days"); 

// declare(strict_type=1);  // strict enable
// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, 5);

// declare(strict_type=1); // strict requirement
// function sum(int $x, int $y) {
//   $z = $x + $y;
//   return $z;
// }
// echo "5 + 10 = " . sum(5, 10) . "<br>";
// echo "7 + 13 = " . sum(7, 13) . "<br>";
// echo "2 + 4 = " . sum(2, 4);

// function add_five(&$value) {
//   $value += 5;
// }
// $num = 2;
// add_five($num);
// echo $num;

// array
// $cars = array("Audi", "BMW", "Kia");
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// $cars = array("Volvo", "BMW", "Toyota");
// echo count($cars);

// $cars = array("Volvo", "BMW", "Toyota");
// $arrlength = count($cars);
// for($x = 0; $x < $arrlength-1; $x++) {
//   echo $cars[$x];
//   echo "<br>";
// }

// $cars = array (
//   array("Volvo",22,18),  //arr-1
//   array("BMW",15,13), // arr-2
//   array("Saab",5,2), // arr-3
//   array("Land Rover",17,15)  //arr-4
// );
  
// echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
// echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
// echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
// echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

// $cars = array(10, 18, 7);
// echo sort($cars);

// form handling -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>


</body>
</html>