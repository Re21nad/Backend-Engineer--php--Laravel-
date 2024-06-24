<!-- Answer 1:
    The difference from abstract and interface classes
    Abstract Class: 
        - Can have properties
        - methods is public or protected
        - They serve as blueprints for other classes and can contain a mixture of abstract and non-abstract methods
        - A subclass can only inherit from one abstract class (PHP supports single inheritance)
        - In abstract classes, we can create the variables
        - By using 'extends' keyword we can access the abstract class features from derived class
        - Only a complete member of the abstract class can be static
    Interface Class:
        - Cannot have properties
        - All methods must be public
        - Interfaces support multiple inheritance, as a class can implement multiple interfaces (PHP supports multiple interface inheritance)
        - Interface comes under fully abstraction
        - Interfaces can maintain only abstract method
        - In interfaces, we can't create the variables
        - By using 'implement' keyword we can get interface from derived class
        - Any member of an interface cannot be static
-->

<!-- Example of these classes -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract and Interface</title>
</head>
<body>

<?php
    // Define abstract class Vehicle
    abstract class Vehicle {
        // Define variables
        public $id;
        protected $name;
        protected $color;
        protected $description;
        protected $price;
        protected $quantity;

        // Constructor
        public function __construct($name, $color, $description, $price, $quantity) {
            $this->id = rand(1, 100); 
            $this->name = $name;
            $this->color = $color;
            $this->description = $description;
            $this->price = $price;
            $this->quantity = $quantity;
        }

        // Define abstract method to be implemented by subclasses
        abstract public function start();

        abstract public function end();

        public function getID() { return $this->id; }
        // Concrete method
        public function getInfo() {
            return "Name of this vehicle: $this->name, it is $this->description, and its color is $this->color. 
            This vehicle has $this->quantity quantity, so you can buy it and its price is $this->price.";
        }
        
    }

    // Subclass Car extending Vehicle
    class Car1 extends Vehicle {
        // Implementing abstract method start() for Car
        public function start() {
            return "Starting car engine...";
        }
        public function end() {
            return "Ending car engine...";
        }
    }

    // Subclass Motorcycle extending Vehicle
    class Motorcycle1 extends Vehicle {
        // Implementing abstract method start() for Motorcycle
        public function start() {
            return "Starting motorcycle engine...";
        }

        public function end() {
            return "Ending motorcycle engine...";
        }
    }

    // Create a Car instance
    $car = new Car1("Toyota", "Black", "2024 version and it has a big television inside", 70000, 10);
    echo $car->start() . "\n";    // Output: Starting car engine...
    echo $car->getInfo() . "\n"; // Output: Name: Toyota, Color: Blue
    echo $car->end() ."\n";


    // Create a Motorcycle instance
    $motorcycle = new Motorcycle1("Honda", "Red", "confortable motorcycle and small", 35000,10);
    echo $motorcycle->start() . "\n";    // Output: Starting motorcycle engine...
    echo $motorcycle->getInfo() . "\n"; // Output: Name: Honda, Color: Red
    echo $motorcycle->end() ."\n";


    // Define Vehicle interface
    interface Cars {
        public function start();
        public function getInfo();
    }


    // Implement Car class implementing Vehicle interface
    class Car2 implements Cars {
        private $name;
        private $color;

        // Constructor
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        // Implement start() method for Car
        public function start() {
            return "Starting car engine...";
        }

        // Implement getInfo() method for Car
        public function getInfo() {
            return "Name: $this->name, Color: $this->color";
        }
    }

    // Implement Motorcycle class implementing Vehicle interface
    class Motorcycle2 implements Cars {
        private $name;
        private $color;

        // Constructor
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        // Implement start() method for Motorcycle
        public function start() {
            return "Starting motorcycle engine...";
        }

        // Implement getInfo() method for Motorcycle
        public function getInfo() {
            return "Name: $this->name, Color: $this->color";
        }
    }

    // Create a Car instance
    $car = new Car2("Toyota", "Blue");
    echo $car->start() . "\n";    // Output: Starting car engine...
    echo $car->getInfo() . "\n"; // Output: Name: Toyota, Color: Blue


    // Create a Motorcycle instance
    $motorcycle = new Motorcycle2("Honda", "Red");
    echo $motorcycle->start() . "\n";    // Output: Starting motorcycle engine...
    echo $motorcycle->getInfo() . "\n"; // Output: Name: Honda, Color: Red

?>

</body>
</html>