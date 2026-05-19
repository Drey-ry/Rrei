<?php
// Define a multi-dimensional associative array for fruits
$fruitDirectory = [
    "Apple" => [
        "image" => "https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?w=150",
        "description" => "Color: Red or Green",
        "facts" => "Apples are high in fiber and vitamin C, supporting heart health and digestion."
    ],
    "Banana" => [
        "image" => "https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?w=150",
        "description" => "Color: Yellow",
        "facts" => "Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber."
    ],
    "Cherry" => [
        "image" => "https://images.unsplash.com/photo-1559181567-c3190ca9959b?q=80&w=928&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "description" => "Color: Deep Red",
        "facts" => "Cherries are packed with antioxidants and anti-inflammatory compounds."
    ],
    "Grapes" => [
        "image" => "https://images.unsplash.com/photo-1698305819486-ecca56daaba3?q=80&w=820&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "description" => "Color: Purple or Green",
        "facts" => "Grapes are technically berries and have been cultivated for over 8,000 years."
    ],
    "Mango" => [
        "image" => "https://images.unsplash.com/photo-1553279768-865429fa0078?w=150",
        "description" => "Color: Golden Yellow",
        "facts" => "Known as the king of fruits, mangoes are an excellent source of Vitamin A."
    ],
    "Orange" => [
        "image" => "https://images.unsplash.com/photo-1547514701-42782101795e?w=150",
        "description" => "Color: Orange",
        "facts" => "Oranges are widely known for their high vitamin C content and sweet citrus flavor."
    ],
    "Papaya" => [
        "image" => "https://images.unsplash.com/photo-1517282009859-f000ec3b26fe?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "description" => "Color: Orange-Yellow",
        "facts" => "Papayas contain an enzyme called papain, which aids in digestion."
    ],
    "Peach" => [
        "image" => "https://images.unsplash.com/photo-1570978561297-793391262fea?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "description" => "Color: Pinkish-Orange",
        "facts" => "Peaches belong to the rose family and are native to Northwest China."
    ],
    "Strawberry" => [
        "image" => "https://images.unsplash.com/photo-1464965911861-746a04b4bca6?w=150",
        "description" => "Color: Bright Red",
        "facts" => "Strawberries are the only fruit that wear their seeds on the outside."
    ],
    "Watermelon" => [
        "image" => "https://images.unsplash.com/photo-1587049352846-4a222e784d38?w=150",
        "description" => "Color: Green striped, Red inside",
        "facts" => "Watermelon consists of 92% water, making it exceptionally hydrating."
    ]
];

// Sort array alphabetically by its key names
ksort($fruitDirectory);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fruit Directory</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin: 20px 0;
        }
        th, td {
            border: 2px solid #a0a0a0;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
            font-weight: bold;
        }
        .main-header {
            text-align: center;
            font-size: 1.2em;
        }
        img {
            display: block;
            margin: 0 auto;
            max-width: 120px;
            height: auto;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th colspan="4" class="main-header">My Fruits</th>
        </tr>
        <tr>
            <th style="width: 15%;">Image</th>
            <th style="width: 15%;">Name</th>
            <th style="width: 20%;">Description</th>
            <th style="width: 50%;">Facts</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($fruitDirectory as $name => $details): ?>
            <tr>
                <td><img src="<?php echo $details['image']; ?>" alt="<?php echo $name; ?>"></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $name; ?></td>
                <td><?php echo $details['description']; ?></td>
                <td><?php echo $details['facts']; ?></td>
            </tr>
        <?php ENDFOREACH; ?>
    </tbody>
</table>

</body>
</html>