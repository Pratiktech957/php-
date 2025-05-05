


<?php

$var = "raj";
echo $var;
echo "<br>";

echo $var;
echo "<br>";


$num = 10;
echo $num;
echo "<br>";

$num = 201.45;
echo $num;
echo "<br>";

$num = 10.5e3; // 10.5 * 10^3 = 10500
echo $num;

$bool = true;
echo "<br>";
echo $bool;
echo "<br>";



?>

<?php
// Integer
$integerVar = 42;

// Float
$floatVar = 3.14;

// String
$stringVar = "Hello, PHP!";

// Boolean
$boolVar = true;

// Array
$arrayVar = array(1, 2, 3, 4, 5);

// Associative Array
$assocArrayVar = array("name" => "John", "age" => 25);

// Object (Class instance)
class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function introduce() {
        return "My name is $this->name and I am $this->age years old.";
    }
}
$objectVar = new Person("Alice", 30);

// Null
$nullVar = null;

// Resource (e.g., connection to a database)
$resourceVar = fopen("sample.txt", "r");

// Displaying the values
echo "Integer: $integerVar<br>";
echo "Float: $floatVar<br>";
echo "String: $stringVar<br>";
echo "Boolean: $boolVar<br>";
echo "Array: ";
print_r($arrayVar);
echo "<br>";

echo "Associative Array: ";
print_r($assocArrayVar);
echo "<br>";

echo "Object: " . $objectVar->introduce() . "<br>";

echo "Null: ";
var_dump($nullVar);
echo "<br>";

// Resource display (for file resource)
if ($resourceVar) {
    echo "Resource: Successfully opened a file.";
    fclose($resourceVar);
} else {
    echo "Resource: Failed to open file.";
}
?>
