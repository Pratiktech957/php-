<?php

// Constants in PHP

// Constants are defined using the define() function or the const keyword
// Constants are case-sensitive by default, but you can make them case-insensitive by passing true as the third argument to define()

// Constants cannot be changed or undefined once they are set

// Constants can be used for configuration values, error messages, etc.



const PI = 3.14159; 
// Define a constant using the const keyword
echo "the of the pi is ".PI . "<br>";

// const PI = 3.14157;
echo "the of the pi is ".PI . "<br>";
// This will cause an error because PI is already defined

define("MAX_USERS", 100);
echo "The maximum number of users is " . MAX_USERS . "<br>";
// Define a constant using the define() function


$num = 1421554;

echo var_dump($num) . "<br>";
echo gettype($num) . "<br>";







?>