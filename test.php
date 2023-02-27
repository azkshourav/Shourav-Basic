<?php

class Car {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_make() {
        return $this->make;
    }

    public function get_model() {
        return $this->model;
    }

    public function get_year() {
        return $this->year;
    }

    public function set_make($make) {
        $this->make = $make;
    }

    public function set_model($model) {
        $this->model = $model;
    }

    public function set_year($year) {
        $this->year = $year;
    }

    public function display_info() {
        echo "Car make: " . $this->make . "<br>";
        echo "Car model: " . $this->model . "<br>";
        echo "Car year: " . $this->year . "<br>";
    }
}

// Create a Car object with make, model, and year of a 2015 Toyota Corolla
$car = new Car("Toyota", "Corolla", 2015);

// Call display_info() method to display the car's information
$car->display_info();

// Use set_make() and set_model() methods to update the car's make and model to a 2015 Honda Civic
$car->set_make("Honda");
$car->set_model("Civic");

// Call display_info() method again to display the updated car information
$car->display_info();

?>
