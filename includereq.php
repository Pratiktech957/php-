
<!-- Use require for important files (like DB connection).

Use include for optional parts (like headers, footers). -->




<!-- include 'config.php';  // File milegi to chalega, nahi milegi to warning aayegi
echo "Hello World";    // Yeh line fir bhi chalegi -->



<!-- require 'config.php';  // File nahi mili to script yahin ruk jaayega
echo "Hello World";    // Yeh line chalegi hi nahi agar file missing hai
 -->



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die(" Connection failed: " . mysqli_connect_error());
}
?>


<!--  header.php (optional) -->

<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP CRUD</title>
</head>
<body>
<h2>Welcome to PHP CRUD Demo</h2>
<hr>





<!--  footer.php (optional) -->
<hr>
<footer>© 2025 Simple CRUD Example</footer>
</body>
</html>



<!-- create.php -->

<?php
require 'config.php';

$name = "John";
$email = "john@example.com";

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo " Record inserted successfully.<br>";
} else {
    echo " Error: " . mysqli_error($conn);
}
?>


<!-- read.php -->

<?php
require 'config.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

echo "<h3>Users List:</h3>";
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: ".$row["id"]." | Name: ".$row["name"]." | Email: ".$row["email"]."<br>";
    }
} else {
    echo " No records found.<br>";
}
?>


<!-- update.php -->
 <?php
require 'config.php';

$sql = "UPDATE users SET name='Mike' WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo " Record updated successfully.<br>";
} else {
    echo " Error updating record: " . mysqli_error($conn);
}
?>

<!-- delete.php -->
 <?php
require 'config.php';

$sql = "DELETE FROM users WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo " Record deleted successfully.<br>";
} else {
    echo " Error deleting record: " . mysqli_error($conn);
}
?>
<!-- ndex.php (main file -->

<?php
include 'header.php';       // Optional layout
require 'config.php';       // DB is required

include 'create.php';
include 'read.php';
include 'update.php';
include 'delete.php';

include 'footer.php';       // Optional layout
?>
