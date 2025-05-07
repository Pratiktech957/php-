<?php

// Function to greet a person
function greet($name) {
    echo "Hello, $name!<br>";
}

// Function to add two numbers and return the sum
function add($a, $b) {
    return $a + $b;
}

// Function to print an indexed array using foreach
function printNames($names) {
    echo "<br>List of names:<br>";
    foreach ($names as $name) {
        echo "- $name<br>";
    }
}

// Function to print an associative array using foreach
function printPersonDetails($person) {
    echo "<br>Person Details:<br>";
    foreach ($person as $key => $value) {
        echo ucfirst($key) . ": $value<br>";
    }
}

// --- Function Calls ---

greet("Pratik");

$sum = add(10, 20);
echo "<br>The sum of 10 and 20 is: $sum<br>";

// Indexed array
$names = array("Pratik", "Rabi", "Baba", "Mama");
printNames($names);

// Associative array
$person = array("name" => "Pratik", "age" => 20, "city" => "Cuttack");
printPersonDetails($person);

?>
