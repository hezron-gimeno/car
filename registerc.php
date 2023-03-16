<?php

if(isset($_POST['register_button'])){
// Define a Car class
class Car {
    public $make;
    public $model;
    public $year;
    public $color;
    public $licensePlate;

    // Constructor function to set the car attributes
    function __construct($make, $model, $year, $color, $licensePlate) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        $this->licensePlate = $licensePlate;
    }

    // Function to display car information
    function displayCarInfo() {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "License Plate: " . $this->licensePlate . "<br>";
    }

    // Function to insert car information into the database
    function insertIntoDatabase() {
        // Database configuration
        $host = "localhost";
        $username = "";
        $password = "";
        $dbname = "";

        // Create a new database connection
        $conn = new mysqli($host, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO tbl_cars(make, model, year, color, license_plate) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $this->make, $this->model, $this->year, $this->color, $this->licensePlate);

        // Execute SQL statement
        if ($stmt->execute() === TRUE) {            
            echo "Car registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $make = $_POST["make"];
    $model = $_POST["model"];
    $year = $_POST["year"];
    $color = $_POST["color"];
    $licensePlate = $_POST["licensePlate"];

    // Create a new car object
    $newCar = new Car($make, $model, $year, $color, $licensePlate);

    // Insert car information into the database
    $newCar->insertIntoDatabase();
}


}
?>