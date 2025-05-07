<?php


$var= 18;
if($var <18){

    echo "You are eligible for voter.";

}

elseif ($var>18 && $var<60){
    echo "you are eligible for vote and a senior ";
}



else {
    echo "you are not eligible for voter.";
}



$age = 20;
$marks = 85;

// Basic if...else
if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are a minor.<br>";
}

// if...elseif...else
if ($marks >= 90) {
    echo "Grade: A<br>";
} elseif ($marks >= 75) {
    echo "Grade: B<br>";
} elseif ($marks >= 60) {
    echo "Grade: C<br>";
} else {
    echo "Grade: Fail<br>";
}

// Ternary operator
$status = ($marks >= 33) ? "Pass" : "Fail";
echo "Result: $status<br>";
?>







