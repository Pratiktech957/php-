<?php
// STEP 1: Connect to Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
}

// STEP 2: CREATE (Insert)
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    mysqli_query($conn, $sql);
}

// STEP 3: UPDATE
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    mysqli_query($conn, $sql);
}

// STEP 4: DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id=$id";
    mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD (Single File)</title>
</head>
<body>
<h2>Simple PHP CRUD</h2>

<!-- Form for Create / Update -->
<form method="POST" action="">
    <input type="hidden" name="id" value="<?php if (isset($_GET['edit'])) echo $_GET['edit']; ?>">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    <?php if (isset($_GET['edit'])): ?>
        <input type="submit" name="update" value="Update">
    <?php else: ?>
        <input type="submit" name="submit" value="Add">
    <?php endif; ?>
</form>

<hr>

<!-- READ: Display all users -->
<h3>Users List</h3>
<table border="1" cellpadding="10">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM users");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>
                <a href='?edit={$row['id']}'>Edit</a> |
                <a href='?delete={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
            </td>
        </tr>";
    }
    ?>
</table>

</body>
</html>
