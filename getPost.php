

<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>
    <h2>User Form</h2>
    <form action="getPost.php" method="post">  <!-- Submits to the same page -->
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "<h2>Form is submitted</h2>";
    echo "Name: $name<br>";
    echo "Email: $email<br><br>";
}
?>