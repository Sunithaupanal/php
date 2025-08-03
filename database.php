<?php
$conn = new mysqli("localhost", "root", "", "task");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM country";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $countries = [];

    while ($row = $result->fetch_assoc()) {
        $countries[] = $row;
    }

    foreach ($countries as $country) {
        echo "Country: " . $country['country_name'] . "<br>";
        echo "Capital: " . $country['country_capital'] . "<br>";
        echo "Famous Place: " . $country['famous_place'] . "<br><br>";
    }
} else {
    echo "No data found.";
}

$conn->close();
?>