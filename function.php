<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Multiplication Function Demo</title>
</head>
<body>
<h1>PHP Multiplication Function Calls</h1>
<!-- The PHP code outputs results here -->
 <?php
function mul($a, $b) {
    // Multiply the two numbers
    $result = $a * $b;
    // Display the result in a formatted manner
    echo "<p>Multiplying {$a} and {$b} gives: {$result}</p>";
}

// Call the function five times with different parameters inside a loop
for ($i = 1; $i <= 5; $i++) {
    // Generate two different parameters for each iteration
    $num1 = $i * 2;          
    $num2 = $i * 3;          
    // Invoke the multiplication function
    mul($num1, $num2);
}
?>
</body>
</html>