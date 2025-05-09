<?php
session_start();

// Database connection
$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Registration with password hashing
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password before saving
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
    if (mysqli_query($conn, $sql)) {
        echo "✅ Registered successfully<br>";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}

// Login with password verification
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Verify hashed password
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $username;
            setcookie("remember_user", $username, time() + 86400, "/");
            echo "✅ Login successful. Welcome, $username!<br>";
        } else {
            echo "❌ Invalid password.<br>";
        }
    } else {
        echo "❌ User not found.<br>";
    }
}

// Logout logic
if (isset($_GET['logout'])) {
    session_destroy();
    setcookie("remember_user", "", time() - 3600, "/");
    echo "👋 Logged out<br>";
}
?>

<!-- HTML Form -->
<h2>Register</h2>
<form method="POST">
    Username: <input name="username" required><br>
    Password: <input name="password" required type="password"><br>
    <button type="submit" name="register">Register</button>
</form>

<h2>Login</h2>
<form method="POST">
    Username: <input name="username" required><br>
    Password: <input name="password" required type="password"><br>
    <button type="submit" name="login">Login</button>
</form>

<h2>Session & Cookie Info</h2>
<?php
if (isset($_SESSION['user'])) {
    echo "🟢 Logged in as: " . $_SESSION['user'] . "<br>";
}
if (isset($_COOKIE['remember_user'])) {
    echo "🍪 Cookie (remember_user): " . $_COOKIE['remember_user'] . "<br>";
}
?>

<a href="?logout=1">Logout</a>
