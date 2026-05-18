<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PSA3 - Activity 2: Array Operations</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin-top: 20px;
        }

        table, td {
            border: 2px solid #777777;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        .label-col {
            width: 40%;
        }

        .value-col {
            width: 60%;
        }

        .header-row {
            background-color: #ffffff;
        }
    </style>
</head>

<body>

<?php
// Define the array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 10];

// Initialize values
$addition = 0;
$subtraction = $numbers[0];
$multiplication = 1;
$division = $numbers[0];

// Loop through array
foreach ($numbers as $index => $value) {
    $addition += $value;

    if ($index > 0) {
        $subtraction -= $value;
        $division /= $value;
    }

    $multiplication *= $value;
}

// Convert array to string
$array_list_string = implode(", ", $numbers);
?>

<table>
    <tr class="header-row">
        <td colspan="2">Array list: <?php echo $array_list_string; ?></td>
    </tr>

    <tr>
        <td class="label-col">Addition</td>
        <td class="value-col"><?php echo $addition; ?></td>
    </tr>

    <tr>
        <td class="label-col">Subtraction</td>
        <td class="value-col"><?php echo $subtraction; ?></td>
    </tr>

    <tr>
        <td class="label-col">Multiplication</td>
        <td class="value-col"><?php echo $multiplication; ?></td>
    </tr>

    <tr>
        <td class="label-col">Division</td>
        <td class="value-col">
            <?php echo strtoupper(sprintf("%e", $division)); ?>
        </td>
    </tr>
</table>

</body>
</html>
``