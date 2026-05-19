<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web-Based Application Development Resume</title>
    <style>
        .resume-container {
            width: 85%;
            margin: 20px auto;
            border: 2px solid #333;
            font-family: Arial, sans-serif;
        }
        .header-block {
            display: flex;
            border-bottom: 2px solid #333;
        }
        .photo-column {
            width: 25%;
            border-right: 2px solid #333;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .photo-placeholder {
            width: 120px;
            height: 120px;
            background-color: #ddd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9em;
            color: #555;
        }
        .info-column {
            width: 75%;
            padding: 20px;
            background-color: #fafafa;
        }
        .section-row {
            border-bottom: 2px solid #333;
            padding: 15px 20px;
        }
        .section-row:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>

<div class="resume-container">
    <div class="header-block">
        <div class="photo-column">
           <img src="drey.jpg" alt="Student Profile Photo" class="profile-image">
        </div>
        <div class="info-column">
            <?php require('personal.php'); ?>
        </div>
    </div>

    <div class="section-row">
        <?php include('objective.php'); ?>
    </div>

    <div class="section-row">
        <?php include('education.php'); ?>
    </div>

    <div class="section-row">
        <?php include('skills.php'); ?>
    </div>

</div>

</body>
</html>