<!DOCTYPE html>
<html>
<body>

<?php
class car {
  public $name;
  public $color;
  public $brand;
  public $year;
  public function __construct($name, $color,$brand,$year) {
    $this->name = $name;
    $this->color = $color; 
    $this->brand=$brand;
    $this->year=$year;
  }
  public function intro() {
    echo "The car is {$this->name} and the color is {$this->color}.and the brand is {$this->brand}."; 
  }
}

// Strawberry is inherited from Fruit
class car1 extends car {

  public function message() {
    echo "year is {$this->year} "; 
  }
}

$c1 = new car1("defender", "black","land rover","2016");

$c1->intro();
$c1->message();
?>
 
</body>
</html>
