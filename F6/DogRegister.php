<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dog_db";

$message_type = "";
$message = "";

// Create initial connection to database engine
$conn = new mysqli($servername, $username, $password);

// Programmatically create DB and table if not already created
if (!$conn->connect_error) {
    $conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
    $conn->select_db($dbname);

    $table_sql = "CREATE TABLE IF NOT EXISTS dogs (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        d_name VARCHAR(50) NOT NULL,
        d_breed VARCHAR(50) NOT NULL,
        d_age VARCHAR(30) NOT NULL,
        d_add VARCHAR(100) NOT NULL,
        d_color VARCHAR(30) NOT NULL,
        d_height VARCHAR(30) NOT NULL,
        d_weight VARCHAR(30) NOT NULL
    )";
    $conn->query($table_sql);
} else {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs to protect database
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $breed = mysqli_real_escape_string($conn, trim($_POST['breed']));
    $age = mysqli_real_escape_string($conn, trim($_POST['age']));
    $address = mysqli_real_escape_string($conn, trim($_POST['address']));
    $color = mysqli_real_escape_string($conn, trim($_POST['color']));
    $height = mysqli_real_escape_string($conn, trim($_POST['height']));
    $weight = mysqli_real_escape_string($conn, trim($_POST['weight']));

    if (!empty($name) && !empty($breed) && !empty($age) && !empty($address) && !empty($color) && !empty($height) && !empty($weight)) {
        $sql = "INSERT INTO dogs (d_name, d_breed, d_age, d_add, d_color, d_height, d_weight) 
                VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

        if ($conn->query($sql) === TRUE) {
            $message = "Dog information registered successfully!";
            $message_type = "success";
        } else {
            $message = "Database Error: " . $conn->error;
            $message_type = "error";
        }
    } else {
        $message = "Please populate all fields.";
        $message_type = "error";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Register</title>
    <!-- Connect clean external styles and scripts -->
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

<div class="nav-links">
    <a href="DogView.php">View All Records &rarr;</a>
</div>

<div class="container">
    <h2>Dog Information</h2>
    
    <?php if (!empty($message)): ?>
        <div class="message <?php echo $message_type; ?>">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>

    <form id="dogRegisterForm" action="DogRegister.php" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" required placeholder="e.g. Prince">
        </div>

        <div class="form-group">
            <label>Breed</label>
            <input type="text" name="breed" required placeholder="e.g. Chow Chow">
        </div>

        <div class="form-group">
            <label>Age</label>
            <input type="text" name="age" required placeholder="e.g. 4 years old">
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" required placeholder="e.g. Bulacan">
        </div>

        <div class="form-group">
            <label>Color</label>
            <input type="text" name="color" required placeholder="e.g. Brown">
        </div>

        <div class="form-group">
            <label>Height</label>
            <input type="text" name="height" required placeholder="e.g. 2 feet">
        </div>

        <div class="form-group">
            <label>Weight</label>
            <input type="text" name="weight" required placeholder="e.g. 4 kilos">
        </div>

        <input type="submit" value="save">
    </form>

    <div class="footer">&copy; Crix Brix</div>
</div>

</body>
</html>