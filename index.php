<?php
// ==============================
// PHP Variables (Resume Details)
// ==============================
$firstname = "Dreyred";
$lastname  = "Arenas";
$age       = 20;
$course    = "Applications Development";
$school    = "Your School Name";
$email     = "dreyred@email.com";
$skills    = "HTML, CSS, Basic PHP";
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3f2fd;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 60%;
            margin: 40px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: #1976d2;
            margin-bottom: 5px;
        }

        h2 {
            color: #0d47a1;
            border-left: 5px solid #1976d2;
            padding-left: 10px;
        }

        hr {
            border: none;
            height: 2px;
            background-color: #1976d2;
            margin: 15px 0;
        }

        p {
            line-height: 1.6;
            color: #333;
        }

        .section {
            margin-top: 20px;
        }

        .highlight {
            color: #1976d2;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">

    <h1><?php echo $firstname . " " . $lastname; ?></h1>
    <p class="highlight"><?php echo $email; ?></p>
    <hr>

    <div class="section">
        <h2>Personal Information</h2>
        <p><strong>Age:</strong> <?php echo $age; ?></p>
        <p><strong>Course:</strong> <?php echo $course; ?></p>
        <p><strong>School:</strong> <?php echo $school; ?></p>
    </div>

    <div class="section">
        <h2>Skills</h2>
        <p><?php echo $skills; ?></p>
    </div>

    <div class="section">
        <h2>Objective</h2>
        <p>
            I am a motivated student who is learning web development using
            <span class="highlight">HTML, CSS, and PHP</span>. I aim to develop
            dynamic and visually appealing websites.
        </p>
    </div>

</div>

</body>
</html>
``
