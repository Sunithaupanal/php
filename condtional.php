<!DOCTYPE html>
<html>
<head>
    <title>Mark Evaluation</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f0f0f0; }
        .result { background: white; padding: 20px; border-radius: 10px; width: 500px; margin: auto; box-shadow: 0 0 10px #ccc; }
        h2 { text-align: center; color: #444; }
        p { font-size: 18px; }
    </style>
</head>
<body>
<div class="result">
    <h2>Student Marks Evaluation</h2>
    <?php
    $mark1 =28 ;
    $mark2 = 67;
    $mark3 =95 ;

    function evaluate($mark) {
        if ($mark > 90) {
            return "Good";
        } elseif ($mark > 35 && $mark < 70) {
            return "Average";
        } elseif ($mark < 35) {
            return "Fail";
        } else {
            return "Satisfactory";
        }
    }

    echo "<p>Mark 1 ($mark1): " . evaluate($mark1) . "</p>";
    echo "<p>Mark 2 ($mark2): " . evaluate($mark2) . "</p>";
    echo "<p>Mark 3 ($mark3): " . evaluate($mark3) . "</p>";
    ?>
</div>
</body>
</html>