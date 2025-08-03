<!DOCTYPE html>
<html>
<head>
    <title>Global Variable Add & Sub</title>
</head>
<body>

<?php
// Global variable
$val = 90;

// 1) Function to add 10 to global value
function add() {
    global $val;
    $val += 10;
    echo "After adding 10, value is: $val<br>";
}

// 2) Function to subtract 50 from global value
function sub() {
    global $val;
    $val -= 50;
    echo "After subtracting 50, value is: $val<br>";
}

// Call the functions
add();
sub();
?>

</body>
</html>