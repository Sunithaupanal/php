<!DOCTYPE html>
<html>
<head>
    <title>Comparison & Logical Operators</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f4f4f4; }
        .output { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px #ccc; }
        h2 { color: #333; }
        pre { background: #eee; padding: 10px; }
    </style>
</head>
<body>
<div class="output">
    <h2>Comparison Operators & Data Types</h2>
    <?php
    // String comparison
    $a = 'raj';
    $b = "raj";

    echo "<strong>String Comparison:</strong><br>";
    echo "a == b : " . var_export($a == $b, true) . "<br>";
    echo "a === b : " . var_export($a === $b, true) . "<br>";
    echo "a != b : " . var_export($a != $b, true) . "<br>";
    echo "a !== b : " . var_export($a !== $b, true) . "<br>";
    echo "Type of a: " . gettype($a) . "<br>";
    echo "Type of b: " . gettype($b) . "<br><br>";

    // Integer comparison
    $a = 90;
    $b = 34;

    echo "<strong>Integer Comparison:</strong><br>";
    echo "a > b : " . var_export($a > $b, true) . "<br>";
    echo "a < b : " . var_export($a < $b, true) . "<br>";
    echo "a >= b : " . var_export($a >= $b, true) . "<br>";
    echo "a <= b : " . var_export($a <= $b, true) . "<br>";
    echo "Type of a: " . gettype($a) . "<br>";
    echo "Type of b: " . gettype($b) . "<br>";
    ?>

    <h2>Logical Operators</h2>
    <?php
    $a = 14; $b = 40;

    echo "<strong>Set 1: a = $a, b = $b</strong><br>";
    echo "a > 10 && b > 30 : " . var_export($a > 10 && $b > 30, true) . "<br>";
    echo "a < 10 || b < 50 : " . var_export($a < 10 || $b < 50, true) . "<br>";
    echo "!($a > $b) : " . var_export(!($a > $b), true) . "<br><br>";

    $a = -2; $b = 70;

    echo "<strong>Set 2: a = $a, b = $b</strong><br>";
    echo "a > 0 && b < 100 : " . var_export($a > 0 && $b < 100, true) . "<br>";
    echo "a < 0 || b > 100 : " . var_export($a < 0 || $b > 100, true) . "<br>";
    echo "!($b < 50) : " . var_export(!($b < 50), true) . "<br>";
    ?>
</div>
</body>
</html>