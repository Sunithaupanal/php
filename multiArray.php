<!DOCTYPE html>
<html>
<head>
    <title>PHP Multidimensional Arrays</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px; }
        .box { background: #fff; padding: 20px; border-radius: 8px; width: 700px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; }
        pre { background-color: #eee; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>
<div class="box">
    <h2>Multidimensional Indexed Array - $details</h2>

    <?php
    // Multidimensional Indexed Array
    $details = [
        ["Immefarda", "New York", 25, "Female"],
        ["Ash", "Tokyo", 20, "Male"]
    ];

    // 1. Display full array
    echo "<strong>Full Details Array:</strong><pre>";
    print_r($details);
    echo "</pre>";

    // 2. Delete first array item (0th index)
    unset($details[0]);

    // Re-index after deletion
    $details = array_values($details);

    // 3. Display only cities (2nd column)
    echo "<strong>Cities:</strong><br>";
    foreach ($details as $item) {
        echo $item[1] . "<br>";
    }

    // 4. Display last array in the multidimensional array
    echo "<strong>Last Array (Last Person Details):</strong><pre>";
    print_r(end($details));
    echo "</pre>";
    ?>

    <h2>Multidimensional Associative Array - $product_details</h2>

    <?php
    // Multidimensional Associative Array
    $product_details = [
        [
            "product_name" => "Laptop",
            "price" => "3000",
            "date" => "05-01-2024",
            "address" => "Mumbai"
        ],
        [
            "product_name" => "TV",
            "price" => "2000",
            "date" => "06-01-2024",
            "address" => "Hubli"
        ]
    ];

    // 1. Delete first item
    unset($product_details[0]);

    // Re-index the array
    $product_details = array_values($product_details);

    // 2. Display product_name of the date 06-01-2024
    echo "<strong>Product on 06-01-2024:</strong><br>";
    foreach ($product_details as $product) {
        if ($product["date"] == "06-01-2024") {
            echo $product["product_name"] . "<br>";
        }
    }

    // 3. Display last array (last product details)
    echo "<strong>Last Product Details:</strong><pre>";
    print_r(end($product_details));
    echo "</pre>";
    ?>
</div>
</body>
</html>