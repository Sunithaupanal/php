<!DOCTYPE html>
<html>
<head>
    <title>All Loop Types - Student Marks</title>
    <style>
        body { font-family: Arial; background: #f8f8f8; padding: 20px; }
        .section { background: #fff; padding: 15px; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 0 10px #ccc; }
        h2 { color: #333; }
    </style>
</head>
<body>

<?php
// 1. Multidimensional associative array
$students = [
    ["name" => "Sonu", "mark" => 91],
    ["name" => "Mahek", "mark" => 95],
    ["name" => "Mohak", "mark" => 93]
];
?>

<div class="section">
    <h2> foreach Loop</h2>
    <?php
    foreach ($students as $student) {
        echo "Name: " . $student["name"] . ", Mark: " . $student["mark"] . "<br>";
    }
    ?>
</div>

<div class="section">
    <h2>for Loop</h2>
    <?php
    for ($i = 0; $i < count($students); $i++) {
        echo "Name: " . $students[$i]["name"] . ", Mark: " . $students[$i]["mark"] . "<br>";
    }
    ?>
</div>

<div class="section">
    <h2>while Loop</h2>
    <?php
    $i = 0;
    while ($i < count($students)) {
        echo "Name: " . $students[$i]["name"] . ", Mark: " . $students[$i]["mark"] . "<br>";
        $i++;
    }
    ?>
</div>

<div class="section">
    <h2>do-while Loop</h2>
    <?php
    $i = 0;
    do {
        echo "Name: " . $students[$i]["name"] . ", Mark: " . $students[$i]["mark"] . "<br>";
        $i++;
    } while ($i < count($students));
    ?>
</div>

<div class="section">
    <h2>Nested Loop</h2>
    <?php
    foreach ($students as $student) {
        foreach ($student as $key => $value) {
            echo ucfirst($key) . ": " . $value . " ";
        }
        echo "<br>";
    }
    ?>
</div>

<div class="section">
    <h2>Infinite Loop (with break)</h2>
    <?php
    $i = 0;
    while (true) {
        echo "Name: " . $students[$i]["name"] . ", Mark: " . $students[$i]["mark"] . "<br>";
        $i++;
        if ($i >= count($students)) {
            break;
        }
    }
    ?>
</div>

</body>
</html>