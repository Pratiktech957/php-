<?php
echo "<h1>PHP Operators Example</h1>";

// Variables
$a = 10;
$b = 3;
$c = null;
$d = "Hello";
$e = " World";
$arr1 = array("a" => 1, "b" => 2);
$arr2 = array("b" => 3, "c" => 4);

// Arithmetic Operators
echo "<h2>Arithmetic Operators</h2>";
echo "\$a + \$b = " . ($a + $b) . "<br>"; // Addition
echo "\$a - \$b = " . ($a - $b) . "<br>"; // Subtraction
echo "\$a * \$b = " . ($a * $b) . "<br>"; // Multiplication
echo "\$a / \$b = " . ($a / $b) . "<br>"; // Division
echo "\$a % \$b = " . ($a % $b) . "<br>"; // Modulus

// Assignment Operators
echo "<h2>Assignment Operators</h2>";
$x = 5;
$x += 3; echo "\$x += 3 → $x<br>";
$x -= 2; echo "\$x -= 2 → $x<br>";
$x *= 2; echo "\$x *= 2 → $x<br>";
$x /= 3; echo "\$x /= 3 → $x<br>";
$x %= 2; echo "\$x %= 2 → $x<br>";

// Comparison Operators
echo "<h2>Comparison Operators</h2>";
echo "\$a == \$b: " . var_export($a == $b, true) . "<br>";
echo "\$a === \$b: " . var_export($a === $b, true) . "<br>";
echo "\$a != \$b: " . var_export($a != $b, true) . "<br>";
echo "\$a <> \$b: " . var_export($a <> $b, true) . "<br>";
echo "\$a !== \$b: " . var_export($a !== $b, true) . "<br>";
echo "\$a > \$b: " . var_export($a > $b, true) . "<br>";
echo "\$a < \$b: " . var_export($a < $b, true) . "<br>";
echo "\$a >= \$b: " . var_export($a >= $b, true) . "<br>";
echo "\$a <= \$b: " . var_export($a <= $b, true) . "<br>";
echo "\$a <=> \$b: " . ($a <=> $b) . "<br>"; // Spaceship operator

// Increment/Decrement
echo "<h2>Increment/Decrement</h2>";
$y = 5;
echo "Pre-increment: " . (++$y) . "<br>";
echo "Post-increment: " . ($y++) . "<br>";
echo "Now y: $y<br>";
echo "Pre-decrement: " . (--$y) . "<br>";
echo "Post-decrement: " . ($y--) . "<br>";
echo "Now y: $y<br>";

// Logical Operators
echo "<h2>Logical Operators</h2>";
echo "true and false: " . var_export(true and false, true) . "<br>";
echo "true or false: " . var_export(true or false, true) . "<br>";
echo "true && false: " . var_export(true && false, true) . "<br>";
echo "true || false: " . var_export(true || false, true) . "<br>";
echo "!true: " . var_export(!true, true) . "<br>";

// String Operators
echo "<h2>String Operators</h2>";
echo "\$d . \$e = " . ($d . $e) . "<br>"; // Concatenation
$d .= $e;
echo "After .= , \$d = $d<br>";

// Array Operators
echo "<h2>Array Operators</h2>";
print_r($arr1 + $arr2); // Union
echo "<br>";
echo "arr1 == arr2: " . var_export($arr1 == $arr2, true) . "<br>";
echo "arr1 === arr2: " . var_export($arr1 === $arr2, true) . "<br>";
echo "arr1 != arr2: " . var_export($arr1 != $arr2, true) . "<br>";
echo "arr1 <> arr2: " . var_export($arr1 <> $arr2, true) . "<br>";
echo "arr1 !== arr2: " . var_export($arr1 !== $arr2, true) . "<br>";

// Null Coalescing and Ternary
echo "<h2>Other Operators</h2>";
$name = $c ?? "Default Name";
echo "Null Coalescing: \$c ?? 'Default Name' → $name<br>";

$score = 70;
$result = ($score >= 60) ? "Pass" : "Fail";
echo "Ternary: \$score >= 60 ? 'Pass' : 'Fail' → $result<br>";
?>
