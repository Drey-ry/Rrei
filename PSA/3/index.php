<?php declare(strict_types=1); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PSA3 - Activity 3: User Defined Function</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
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
    </style>
</head>

<body>

<?php
// Function
function calculateThreeParameters(float $param1, float $param2, float $param3): array {
    $sum = $param1 + $param2 + $param3;
    $difference = $param1 - $param2 - $param3;
    $product = $param1 * $param2 * $param3;

    // Avoid division by zero
    if ($param2 == 0 || $param3 == 0) {
        $quotient = 0;
    } else {
        $quotient = $param1 / $param2 / $param3;
    }

    return [
        "addition" => $sum,
        "subtraction" => $difference,
        "multiplication" => $product,
        "division" => $quotient
    ];
}

// Inputs
$p1 = 25;
$p2 = 13;
$p3 = 6;

// Call function
$results = calculateThreeParameters($p1, $p2, $p3);
?>

<table>
    <tr>
        <td colspan="2">My Parameter values: <?php echo "$p1, $p2, $p3"; ?></td>
    </tr>

    <tr>
        <td class="label-col">Addition</td>
        <td class="value-col"><?php echo $results['addition']; ?></td>
    </tr>

    <tr>
        <td class="label-col">Subtraction</td>
        <td class="value-col"><?php echo $results['subtraction']; ?></td>
    </tr>

    <tr>
        <td class="label-col">Multiplication</td>
        <td class="value-col"><?php echo $results['multiplication']; ?></td>
    </tr>

    <tr>
        <td class="label-col">Division</td>
        <td class="value-col"><?php echo $results['division']; ?></td>
    </tr>
</table>

</body>
</html>