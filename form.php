<?php
// Variables to store personal and academic details
$collegeName = "Jain College of Engineering and Technology Hubli"; // Replace with your actual college name
$registrationNumber = "123456789"; // Replace with your registration number
$branchName = "Computer Science"; // Replace with your branch name

// Constants to store contact and department details
define("PHONE_NUMBER", "123-456-7890"); // Replace with your contact number
define("DEPARTMENT", "Engineering Department"); // Replace with your department

// Display the information
echo "College Information";
echo "<br>";
echo "<p><strong>College Name:</strong> " . htmlspecialchars($collegeName) . "</p>";
echo "<br>";
echo "<p><strong>Registration Number:</strong> " . htmlspecialchars($registrationNumber) . "</p>";
echo "<br>";
echo "<p><strong>Branch Name:</strong> " . htmlspecialchars($branchName) . "</p>";
echo "<br>";

echo "<h2>Contact and Department</h2>";
echo "<br>";
echo "<p><strong>Phone Number:</strong> " . PHONE_NUMBER . "</p>";
echo "<br>";
echo "<p><strong>Department:</strong> " . DEPARTMENT . "</p>";
?>

