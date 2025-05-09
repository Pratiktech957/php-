<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>




<!-- 🟢 2. Create (Insert Data) -->



<?php
include 'config.php';

$name = "John";
$email = "john@example.com";

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>





<!-- 🔵 3. Read (Fetch/Display Data) -->





<?php
include 'config.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " | Name: " . $row["name"] . " | Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No records found.";

}
?>






<!-- 🟠 4. Update Data -->




<?php
include 'config.php';

$sql = "UPDATE users SET name='Mike' WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>








<!-- 🔴 5. Delete Data -->







<?php
include 'config.php';


$sql = "DELETE FROM users WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>





<!-- 🔴 6. Close Connection --
    
<?php
mysqli_close($conn);
?>

 
