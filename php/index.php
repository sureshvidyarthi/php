<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <h1>Callbac Function</h1>
    <?php
    // function myFunction($item) {
    // return strlen($item);
    // }
    // $strings = ["apple", "orange", "banana", "coconut"];
    // $lengths = array_map("myFunction", $strings);
    // print_r($lengths);

    // Exception

    // $a= 10;
    // $b=0;
    // echo $a/$b;

// function divide($dividend, $divisor) {
//   if($divisor == 0) {
//     throw new Exception("Division by zero");
//   }
//   return $dividend / $divisor;
// }

// try {
//   echo divide(5, 0);
// } catch(Exception $e) {
//   echo "Unable to divide.";
// }

// class and object

// class Fruit {
  // Properties
//   public $name;
//   public $color;

  // Methods or function
//   function set_name($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
//   function set_color($color) {
//     $this->color = $color;
//   }
//   function get_color() {
//     return $this->color;
//   }
// }

// $apple = new Fruit();
// $apple->set_name('Apple');
// $apple->set_color('Red');
// echo "Name: " . $apple->get_name();
// echo "<br>";
// echo "Color: " . $apple->get_color();
// construtor
// class Fruit {
//   public $name;
//   public $color;
//   function __construct($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
// }
// $apple = new Fruit("Apple");
// echo $apple->get_name();


// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name) {
//     $this->name = $name;
//   }
//   function __destruct() {
//     echo "The fruit is {$this->name}.";
//   }
// }
// $apple = new Fruit("Apple");

// access modifiers

// class Fruit {
//   public $name;
//   protected $color;  
//   private $weight;
// }

// $mango = new Fruit();
// $mango->name = 'Mango'; 
// $mango->color = 'Yellow';  
// $mango->weight = '300'; 
// echo ($mango->name);
// echo ($mango->color);
// echo ($mango->weight);


//inheritance
// class Fal {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   public function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }
// // Jamun is inherited from Fal
// class Jamun extends Fal {
//   public function message() {
//     echo "Am I a fruit or a berry? ";
//   }
// }
// $jamun1 = new Jamun("Jamun", "Purple");
// $jamun1->message();
// $jamun1->intro();

//override

// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   public function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// class Strawberry extends Fruit {
//   public $weight;
//   public function __construct($name, $color, $weight) {
//     $this->name = $name;
//     $this->color = $color;
//     $this->weight = $weight;
//   }
//   public function intro() {
//     echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
// // echo "Hello World";
// }
// }

// $strawberry = new Strawberry("Strawberry", "red", 50);
// $strawberry->intro();


// class Goodbye {
//   const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
// }

// echo Goodbye::LEAVING_MESSAGE; // resolution operator ::

//Abstract class
// abstract class Car {
//   public $name;
//   public function __construct($name) {
//     $this->name = $name;
//   }
//   abstract public function intro() : string;
// }

// // Child classes
// class Audi extends Car {
//   public function intro() : string {
//     return "Choose German quality! I'm an $this->name!";
//   }
// }

// class Volvo extends Car {
//   public function intro() : string {
//     return "Proud to be Swedish! I'm a $this->name!";
//   }
// }

// class Citroen extends Car {
//   public function intro() : string {
//     return "French extravagance! I'm a $this->name!";
//   }
// }

// // Create objects from the child classes
// $audi = new audi("Audi");
// echo $audi->intro();
// echo "<br>";

// $volvo = new volvo("Volvo");
// echo $volvo->intro();
// echo "<br>";

// $citroen = new citroen("Citroen");
// echo $citroen->intro();


//Traits 
trait message1 {
public function msg1() {
    echo "OOPs is fun! ";
  }
}
class Welcome {
  use message1;
}
$obj = new Welcome();
$obj->msg1();


?>
</body>
</html>