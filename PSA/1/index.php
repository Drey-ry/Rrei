<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PSA3 - Activity 1: Directory</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        table, th, td {
            border: 2px solid #777777;
        }

        th, td {
            padding: 12px;
            text-align: center;
            vertical-align: middle;
        }

        th {
            background-color: #ffffff;
            text-transform: capitalize;
            font-weight: normal;
        }

        img {
            width: 80px;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>

<?php
// Array of records
$directory = [
    ["name" => "Zara Flores", "age" => 21, "birthday" => "October 14, 2004", "contact" => "09171234567"],
    ["name" => "Liam Santos", "age" => 22, "birthday" => "January 25, 2004", "contact" => "09187654321"],
    ["name" => "Amara Cruz", "age" => 20, "birthday" => "December 05, 2005", "contact" => "09223344556"],
    ["name" => "Ethan Reyes", "age" => 23, "birthday" => "March 18, 2003", "contact" => "09055554433"],
    ["name" => "Chloe Bautista", "age" => 21, "birthday" => "June 30, 2004", "contact" => "09194443322"],
    ["name" => "Noah Castillo", "age" => 22, "birthday" => "August 12, 2003", "contact" => "09278889900"],
    ["name" => "Sophia Aquino", "age" => 20, "birthday" => "May 02, 2006", "contact" => "09351112233"],
    ["name" => "Marcus Garcia", "age" => 21, "birthday" => "July 19, 2004", "contact" => "0947GGGHHHJ"],
    ["name" => "Olivia Mendoza", "age" => 22, "birthday" => "November 23, 2003", "contact" => "09159998877"],
    ["name" => "Daniel Pascual", "age" => 21, "birthday" => "February 11, 2005", "contact" => "09062223344"]
];

// Sort by name
usort($directory, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<table>
    <thead>
        <tr>
            <th>no.</th>
            <th>name</th>
            <th>image</th>
            <th>age</th>
            <th>birthday</th>
            <th>contact number</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $counter = 1;
        foreach ($directory as $person):
        ?>
        <tr>
            <td><?php echo $counter++; ?></td>
            <td><?php echo htmlspecialchars($person['name']); ?></td>
            <td>
                <svg viewBox="0 0 100 100" width="60" height="60">
                    <circle cx="50" cy="35" r="25" fill="black" />
                    <path d="M10,90 C10,60 90,60 90,90 Z" fill="black" />
                </svg>
            </td>
            <td><?php echo $person['age']; ?></td>
            <td><?php echo htmlspecialchars($person['birthday']); ?></td>
            <td><?php echo htmlspecialchars($person['contact']); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>