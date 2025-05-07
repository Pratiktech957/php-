<?php

echo "Welcome to for loop with arrays<br>";

$arr = array("pratik", "rabi", "baba", "mama");

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . "<br>";
}

?>

<?php

echo "Welcome to foreach loop<br>";

$arr = array("pratik", "rabi", "baba", "mama");

foreach ($arr as $name) {
    echo "The name is $name<br>";
}

?>

