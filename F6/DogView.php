<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dog_db";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query records
$sql = "SELECT d_name, d_breed, d_age, d_add, d_color, d_height, d_weight FROM dogs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Records View</title>
    <!-- Connect clean external styles and scripts -->
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

<div class="nav-links">
    <a href="DogRegister.php">&larr; Back to Register Form</a>
</div>

<!-- Interactive search widget -->
<div class="search-container">
    <input type="text" id="dogSearchInput" placeholder="Filter by name, breed, or color...">
</div>

<div class="cards-grid">
    <?php
    if ($result && $result->num_rows > 0) {
        $index = 1;
        while($row = $result->fetch_assoc()) {
            ?>
            <div class="dog-card">
                <div class="dog-title">Dog <?php echo $index; ?></div>
                <div class="dog-detail">
                    <strong>Name:</strong> 
                    <span class="dog-name"><?php echo htmlspecialchars($row["d_name"]); ?></span>
                </div>
                <div class="dog-detail">
                    <strong>Breed:</strong> 
                    <span class="dog-breed"><?php echo htmlspecialchars($row["d_breed"]); ?></span>
                </div>
                <div class="dog-detail">
                    <strong>Age:</strong> 
                    <?php echo htmlspecialchars($row["d_age"]); ?>
                </div>
                <div class="dog-detail">
                    <strong>Address:</strong> 
                    <?php echo htmlspecialchars($row["d_add"]); ?>
                </div>
                <div class="dog-detail">
                    <strong>Color:</strong> 
                    <span class="dog-color"><?php echo htmlspecialchars($row["d_color"]); ?></span>
                </div>
                <div class="dog-detail">
                    <strong>Height:</strong> 
                    <?php echo htmlspecialchars($row["d_height"]); ?>
                </div>
                <div class="dog-detail">
                    <strong>Weight:</strong> 
                    <?php echo htmlspecialchars($row["d_weight"]); ?>
                </div>
            </div>
            <?php
            $index++;
        }
    } else {
        echo "<p style='text-align: center; width: 100%; color: #718096;'>No records registered yet.</p>";
    }
    $conn->close();
    ?>
</div>

</body>
</html>