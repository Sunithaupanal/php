<!DOCTYPE html>
<html>
<head>
    <title>PHP Math Functions</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px; }
        .box { background: #fff; padding: 20px; border-radius: 8px; width: 400px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; }
        .result { font-size: 16px; padding: 8px 0; }
    </style>
</head>
<body>
<div class="box">
    <h2>PHP Math Function Results</h2>

    <?php
    // Ceiling value of 443.3432
    $value1 = 443.3432;
    echo "<div class='result'>Ceiling of $value1: <strong>" . ceil($value1) . "</strong></div>";

    // Floor value of 7543.829
    $value2 = 7543.829;
    echo "<div class='result'>Floor of $value2: <strong>" . floor($value2) . "</strong></div>";

    // Random number between 500 and 5000
    $random = rand(500, 5000);
    echo "<div class='result'>Random number between 500 and 5000: <strong>$random</strong></div>";
    ?>
</div>
</body>
</html>