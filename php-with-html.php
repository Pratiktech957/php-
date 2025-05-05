<?php
echo "<h1 style='color:green'>PHP with HTML</h1>";
echo "<h2 style='color:blue'>This is a heading</h2>";
echo "<p style='color:red'>This is a paragraph.</p>";
echo "<p style='color:purple'>This is another paragraph.</p>";

$name = "John Doe";
$age = 30;
$city = "New York";
$hobby = "reading";
$favoriteColor = "blue";
$favoriteFood = "pizza";
$favoriteSport = "soccer";

echo "<h3 style ='color:orange'>User Information</h3>";
echo "<p style='color:green'>Name: $name</p>";
echo "<p style='color:green'>Age: $age</p>";
echo "<p style='color:green'>City: $city</p>";
echo "<p style='color:green'>Hobby: $hobby</p>";
echo "<p style='color:green'>Favorite Color: $favoriteColor</p>";
echo "<p style='color:green'>Favorite Food: $favoriteFood</p>";
echo "<p style='color:green'>Favorite Sport: $favoriteSport</p>";
echo "<p style='color:green'>This is a simple PHP script that outputs HTML content.</p>";
echo "<p style='color:green'>You can use PHP to generate dynamic HTML content.</p>";






?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP with HTML Example</title>
</head>
<body>

<?php
// PHP variables
$name = "Alice";
$age = 30;
$isStudent = false;
$colors = ["Red", "Green", "Blue"];
?>

<h1>Welcome to My Page</h1>

<p>Hello, my name is <strong><?php echo $name; ?></strong>.</p>
<p>I am <?php echo $age; ?> years old.</p>

<?php if ($isStudent): ?>
    <p>Status: Student</p>
<?php else: ?>
    <p>Status: Not a Student</p>
<?php endif; ?>

<h2>My Favorite Colors</h2>
<ul>
    <?php foreach ($colors as $color): ?>
        <li><?php echo $color; ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
