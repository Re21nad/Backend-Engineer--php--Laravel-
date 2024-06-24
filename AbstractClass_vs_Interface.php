<!-- Answer 1:
    The difference between abstract and interface classes
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
    <style>
        /* Style Sheet of this page */
        body, html {
            height: auto;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0; 
        }

        .container {
            width: 80%;
            max-width: 800px; 
            padding: 15px;
            margin: 50px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }

        .output {
            font-family: 'Times New Roman', Times, serif;
            font-size: 16px;
            line-height: 1.6;
        }

        .output p {
            margin: 10px 0;
        }

        .output .class-output {
            margin-bottom: 18px; 
        }

        .output .start_end{
            display: flex;
            color: teal;
            justify-content: center;
            font-size: 20px;
        }
    </style>
</head>
<body>
<h1>Abstract and Interface</h1> <!-- The header of the page -->
<div class="container">
    
    <div class="output">
        
        <?php
            // Define the abstract class (Vehicle)
            // ************** Start Vehicle Class *************
            abstract class Vehicle {

                // Define Variables
                protected $id;
                public $name;
                public $color;
                public $description;
                protected $price;
                public $quantity;

                // Constractors
                public function __construct($name, $color, $description, $price, $quantity) {
                    $this->id = rand(1000, 9000); 
                    $this->name = $name;
                    $this->color = $color;
                    $this->description = $description;
                    $this->price = $price;
                    $this->quantity = $quantity;
                }

                // Define abstract method start()
                abstract public function start();
                // Define abstract method end()
                abstract public function end();

                // Define method for get ID
                public function getID() { return "The vehicle ID is #$this->id"; }
                // Define method for get information
                public function getInfo() {
                    return "Name of this vehicle: $this->name, it is $this->description. Its color is $this->color.\n 
                    This vehicle has $this->quantity quantity, so you can buy it with $this->price -
                    SAR";
                }
            }
            // ********************* End Vehicle Class ********************

            // Define Car1 class that extends abstract class
            class Car1 extends Vehicle {
                // Define methods from abstract class (Vehicle)
                public function start() {
                    return "Starting car engine...";
                }
                public function end() {
                    return "Ending car engine...";
                }
            }

            // Define Motorcycle1 class that extends abstract class
            class Motorcycle1 extends Vehicle {
                // Define methods from abstract class (Vehicle)
                public function start() {
                    return "Starting motorcycle engine...";
                }

                public function end() {
                    return "Ending motorcycle engine...";
                }
            }

            // Create Car and Motorcycle
            $car1 = new Car1("Toyota", "Black", "2024 version and it has a big television inside", 70000, 10);
            echo "<div class='class-output'>";
            echo "<p class ='start_end'>" . $car1->start() . "</p>";   
            echo "<p>" . $car1->getInfo() . "</p>";
            echo "<p style='color: red'>" . $car1->getID() . "</p>"; 
            echo "<p class ='start_end'>" . $car1->end() . "</p>";
            echo "</div>";

            $motorcycle1 = new Motorcycle1("Honda", "Red", "comfortable motorcycle and small", 35000,10);
            echo "<div class='class-output'>";
            echo "<p class ='start_end'>" . $motorcycle1->start() . "</p>";    
            echo "<p>" . $motorcycle1->getInfo() . "</p>";
            echo "<p style='color: red'>" . $motorcycle1->getID() . "</p>"; 
            echo "<p class ='start_end'>" . $motorcycle1->end() . "</p>";
            echo "</div>";


            // Define the interface class (Cars)
            interface Cars {

                // Define methods (All of them are 'public')
                public function start();
                public function getInfo();
                public function getID();
                public function end();
            }

            // Define Car2 that impleminting from interface class
            class Car2 implements Cars {

                // Define variables
                public $id;
                private $name;
                private $color;
                private $price;
                public $quantity;

                // Constructors
                public function __construct($name, $color, $price, $quantity) {
                    $this->id = rand(1000,9000);
                    $this->name = $name;
                    $this->color = $color;
                    $this->price = $price;
                    $this->quantity = $quantity;
                }

                // Define methods from the interface class (Cars)
                public function start() {
                    return "Starting car engine...";
                }

                public function getID() { return "The vehicle ID is #$this->id"; }

                public function end() {
                    return "Ending car engine...";
                }

                public function getInfo() {
                    return "Name of this vehicle: $this->name, its color is $this->color.\n 
                    This vehicle has $this->quantity quantity, so you can buy it with $this->price SAR";
                }
            }

            // Define Motorcycle2 that impleminting from interface class
            class Motorcycle2 implements Cars {

                // Define variables
                protected $id;
                public $name;
                public $color;
                private $price;
                public $quantity;

                // Constructors
                public function __construct($name, $color, $price, $quantity) {
                    $this->id = rand(1000,9000);
                    $this->name = $name;
                    $this->color = $color;
                    $this->price = $price;
                    $this->quantity = $quantity;
                }

                // Define methods from the interface class (Cars)
                public function start() {
                    return "Starting motorcycle engine...";
                }

                public function getID() { return "The vehicle ID is #$this->id"; }

                public function end() {
                    return "Ending motorcycle engine...";
                }

                public function getInfo() {
                    return "Name of this vehicle: $this->name, its color is $this->color. 
                    This vehicle has $this->quantity quantity, so you can buy it with $this->price SAR";
                }
            }

            // Create Car and Motorcycle
            $car2 = new Car2("Toyota", "Blue", 70000,10);
            echo "<div class='class-output'>";
            echo "<p class ='start_end'>" . $car2->start() . "</p>";    
            echo "<p>" . $car2->getInfo() . "</p>"; 
            echo "<p style='color: red'>" . $car2->getID() . "</p>";
            echo "<p class ='start_end'>" . $car2->end() . "</p>";
            echo "</div>";

            $motorcycle2 = new Motorcycle2("Honda", "Red",35000,10);
            echo "<div class='class-output'>";
            echo "<p class ='start_end'>" . $motorcycle2->start() . "</p>";    
            echo "<p>" . $motorcycle2->getInfo() . "</p>";
            echo "<p style='color: red'>" . $motorcycle2->getID() . "</p>"; 
            echo "<p class ='start_end'>" . $motorcycle2->end() . "</p>";
            echo "</div>";
        ?>
        
    </div>
</div>

</body>
</html>
