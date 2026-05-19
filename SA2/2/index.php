<?php
// User Defined Functions for Volume Formulations
function calculateCubeVolume($s) {
    return pow($s, 3);
}

function calculateRectangularPrismVolume($l, $w, $h) {
    return $l * $w * $h;
}

function calculateCylinderVolume($r, $h) {
    return pi() * pow($r, 2) * $h;
}

function calculateConeVolume($r, $h) {
    return (1/3) * pi() * pow($r, 2) * $h;
}

function calculateSphereVolume($r) {
    return (4/3) * pi() * pow($r, 3);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volume of Shapes</title>
    <style>
        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 2px solid #b3b3b3;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #fafafa;
        }
        .title-row {
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th colspan="3" class="title-row">Volume of Shapes</th>
        </tr>
        <tr>
            <th style="width: 30%;">Values</th>
            <th style="width: 40%;">Formula</th>
            <th style="width: 30%;">Answer</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>s = 5</td>
            <td>V = s³</td>
            <td><?php echo calculateCubeVolume(5); ?></td>
        </tr>
        <tr>
            <td>l = 4, w = 3, h = 6</td>
            <td>V = l × w × h</td>
            <td><?php echo calculateRectangularPrismVolume(4, 3, 6); ?></td>
        </tr>
        <tr>
            <td>r = 3, h = 7</td>
            <td>V = π × r² × h</td>
            <td><?php echo round(calculateCylinderVolume(3, 7), 2); ?></td>
        </tr>
        <tr>
            <td>r = 3, h = 9</td>
            <td>V = (1/3) × π × r² × h</td>
            <td><?php echo round(calculateConeVolume(3, 9), 2); ?></td>
        </tr>
        <tr>
            <td>r = 4</td>
            <td>V = (4/3) × π × r³</td>
            <td><?php echo round(calculateSphereVolume(4), 2); ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>