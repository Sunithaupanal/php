<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Task</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { background: #fff; padding: 20px; border-radius: 8px; width: 600px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; }
        pre { background-color: #eee; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>
<div class="container">
    <h2>PHP Array Operations</h2>

    <?php
    // Indexed array
    $indexedArray = [225, "dreams", "class", 30, 25, 1, "Globe"];

    // Associative array
    $assocArray = [
        '0' => "Couch",
        'ice' => "india",
        '6' => "box",
        'trip' => "Range"
    ];

    // Print both arrays entirely
    echo "<h3>Indexed Array:</h3>";
    echo "<pre>";
    print_r($indexedArray);
    echo "</pre>";

    echo "<h3>Associative Array:</h3>";
    echo "<pre>";
    print_r($assocArray);
    echo "</pre>";

    // Combine both arrays
    $combinedArray = $indexedArray + $assocArray;
    echo "<h3>Combined Array:</h3>";
    echo "<pre>";
    print_r($combinedArray);
    echo "</pre>";

    // Get the third value from the indexed array (index 2)
    echo "<h3>Third value from indexed array:</h3>";
    echo "<p><strong>" . $indexedArray[2] . "</strong></p>";

    // Get the value for key 'ice' from associative array
    echo "<h3>Value for key 'ice' in associative array:</h3>";
    echo "<p><strong>" . $assocArray['ice'] . "</strong></p>";
    ?>
</div>
</body>
</html>