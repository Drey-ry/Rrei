<!DOCTYPE html>
<html>
<head>
<title>Grade Ranking Program</title>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #eef2f7;
    margin: 0;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

h2 {
    color: #1f3c88;
    margin-bottom: 20px;
}

.card {
    background-color: #ffffff;
    width: 320px;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    text-align: center;
}

.card img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #1f3c88;
    margin-bottom: 15px;
}

.card p {
    margin: 8px 0;
    font-size: 15px;
}

.label {
    font-weight: bold;
    color: #333;
}

.rank {
    font-size: 20px;
    font-weight: bold;
    color: #1f3c88;
}
</style>

</head>

<body>

<h2>Grade Ranking Program</h2>

<?php
// Student information
$name = "Drey Arenas";
$grade = 92;
$imageLink = "https://miro.medium.com/v2/resize:fit:4800/format:webp/1*hXoDbQqNdbnH2zW4z9Ch5Q.jpeg";

// Grade to Rank logic
if ($grade >= 93 && $grade <= 100) {
    $rank = "A";
} elseif ($grade >= 90) {
    $rank = "A-";
} elseif ($grade >= 87) {
    $rank = "B+";
} elseif ($grade >= 83) {
    $rank = "B";
} elseif ($grade >= 80) {
    $rank = "B-";
} elseif ($grade >= 77) {
    $rank = "C+";
} elseif ($grade >= 73) {
    $rank = "C";
} elseif ($grade >= 70) {
    $rank = "C-";
} elseif ($grade >= 67) {
    $rank = "D+";
} elseif ($grade >= 63) {
    $rank = "D";
} elseif ($grade >= 60) {
    $rank = "D-";
} else {
    $rank = "F";
}
?>

<div class="card">
    <img src="<?php echo $imageLink; ?>" alt="Student Picture">

    <p class="label">Name</p>
    <p><?php echo $name; ?></p>

    <p class="label">Grade</p>
    <p><?php echo $grade; ?></p>

    <p class="label">Rank</p>
    <p class="rank"><?php echo $rank; ?></p>
</div>

</body>
</html>