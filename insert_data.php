<?php
// Step 1: Connect to MySQL
$servername = "localhost";
$username = "root";  // default for XAMPP
$password = "";      // default for XAMPP
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die(" Connection failed: " . mysqli_connect_error());
}

// Step 2: If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Step 3: Insert into table
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    echo

    if (mysqli_query($conn, $sql)) {
        echo "✔ Data inserted successfully!";
    } else {
        echo "✘ Unable to insert data. Please try again.";
    }
    
}
?>

<!-- Step 4: HTML Form -->
<!DOCTYPE html>
<html>
<head>
    <title>Insert into DB</title>
</head>
<body>
    <h2>Insert User Data</h2>
    <form action="" method="post">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" value="Insert">
    </form>
</body>
</html>
