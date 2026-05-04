<!DOCTYPE html>
<html>
<head>
<title>Length Conversion Chart</title>
<style>
body { font-family: Arial; margin: 20px; }
h2 { color: darkblue; }
table { border-collapse: collapse; width: 80%; margin-bottom: 20px; }
td, th { border: 1px solid black; padding: 8px; text-align: center; }
th { background-color: #f2f2f2; }
</style>
</head>

<body>

<h2>MEASURE CONVERSION CHART - LENGTHS</h2>

<?php
// Metric Conversions
echo "<h3>Metric Conversions</h3>";
echo "<table>";
echo "<tr><th>From</th><th>To</th><th>Result</th></tr>";
echo "<tr><td>1 cm</td><td>mm</td><td>10 mm</td></tr>";
echo "<tr><td>1 dm</td><td>cm</td><td>10 cm</td></tr>";
echo "<tr><td>1 m</td><td>cm</td><td>100 cm</td></tr>";
echo "<tr><td>1 km</td><td>m</td><td>1000 m</td></tr>";
echo "</table>";

// Imperial Conversions
echo "<h3>Imperial Conversions</h3>";
echo "<table>";
echo "<tr><th>From</th><th>To</th><th>Result</th></tr>";
echo "<tr><td>1 ft</td><td>in</td><td>12 in</td></tr>";
echo "<tr><td>1 yd</td><td>ft</td><td>3 ft</td></tr>";
echo "<tr><td>1 ch</td><td>yd</td><td>22 yd</td></tr>";
echo "<tr><td>1 fur</td><td>yd</td><td>220 yd</td></tr>";
echo "<tr><td>1 mi</td><td>yd</td><td>1760 yd</td></tr>";
echo "</table>";

// Metric → Imperial
echo "<h3>Metric → Imperial Conversions</h3>";
echo "<table>";
echo "<tr><th>From</th><th>To</th><th>Result</th></tr>";
echo "<tr><td>1 mm</td><td>in</td><td>" . round(0.03937, 5) . " in</td></tr>";
echo "<tr><td>1 cm</td><td>in</td><td>" . round(0.3937, 5) . " in</td></tr>";
echo "<tr><td>1 m</td><td>in</td><td>" . round(39.37008, 5) . " in</td></tr>";
echo "<tr><td>1 m</td><td>ft</td><td>" . round(3.28084, 5) . " ft</td></tr>";
echo "<tr><td>1 m</td><td>yd</td><td>" . round(1.09361, 5) . " yd</td></tr>";
echo "<tr><td>1 km</td><td>yd</td><td>" . round(1093.6133, 5) . " yd</td></tr>";
echo "<tr><td>1 km</td><td>mi</td><td>" . round(0.62137, 5) . " mi</td></tr>";
echo "</table>";

// Imperial → Metric
echo "<h3>Imperial → Metric Conversions</h3>";
echo "<table>";
echo "<tr><th>From</th><th>To</th><th>Result</th></tr>";
echo "<tr><td>1 in</td><td>cm</td><td>2.54 cm</td></tr>";
echo "<tr><td>1 ft</td><td>cm</td><td>30.48 cm</td></tr>";
echo "<tr><td>1 yd</td><td>cm</td><td>91.44 cm</td></tr>";
echo "<tr><td>1 yd</td><td>m</td><td>0.9144 m</td></tr>";
echo "<tr><td>1 mi</td><td>m</td><td>1609.344 m</td></tr>";
echo "<tr><td>1 mi</td><td>km</td><td>1.609344 km</td></tr>";
echo "</table>";
?>

</body>
</html>