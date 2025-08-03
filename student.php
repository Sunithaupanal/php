<?php
// details.php equivalent - Multi-dimensional associative array with fields (name, age, DOB)
$person_details = [
    [
        'name' => 'John Doe',
        'age' => 25,
        'DOB' => '1998-05-15'
    ],
    [
        'name' => 'Jane Smith',
        'age' => 30,
        'DOB' => '1993-08-20'
    ],
    [
        'name' => 'Alice Johnson',
        'age' => 22,
        'DOB' => '2001-02-10'
    ]
];

// my_name.php equivalent - Display your name
function displayName() {
    echo "Your name is: Sunitha Upanal<br>";
}

// display_details.php equivalent - Include the details and display information
function displayDetails() {
    global $person_details;
    
    // Using include_once to simulate inclusion of the details part
    include_once __FILE__;  // This simulates including the details.php again
    
    // Displaying the person details
    echo "<h3>Person Details:</h3>";
    foreach ($person_details as $person) {
        echo "<p>Name: " . $person['name'] . ", Age: " . $person['age'] . ", DOB: " . $person['DOB'] . "</p>";
    }
}

// Display the name
displayName();

// Display the details
displayDetails();
?>