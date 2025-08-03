<?php
// Original string for demonstration
$originalString = " Hello World! Welcome to PHP string functions.  ";
echo "<br>";
// 1. Length of the string
$length = strlen($originalString);

// 2. Find position of first occurrence of "PHP"
$position = strpos($originalString, "Hello");

// 3. Replace "tutorial" with "course"
$replacedString = str_replace("World", "Universe", $originalString);

// 4. Convert the string to lowercase
$lowercaseString = strtolower($originalString);

// 5. Convert the string to uppercase
$uppercaseString = strtoupper($originalString);

// 6. Capitalize the first letter of each word
$titleCaseString = ucwords(strtolower($originalString));

// 7. Capitalize the first letter of the entire string
$capitalizedString = ucfirst(strtolower($originalString));

// 8. Remove leading and trailing whitespace
$trimmedString = trim($originalString);

// Display all results
echo "<h2>Original String:</h2> <p>{$originalString}</p>";

echo "<h2>Length of the string:</h2> <p>{$length}</p>";
echo "<br>";
echo "<h2>Position of 'PHP':</h2> <p>{$position}</p>";
echo "<br>";
echo "<h2>String after replacement:</h2> <p>{$replacedString}</p>";
echo "<br>";
echo "<h2>Lowercase:</h2> <p>{$lowercaseString}</p>";
echo "<br>";
echo "<h2>Uppercase:</h2> <p>{$uppercaseString}</p>";
echo "<br>";
echo "<h2>Title case (each word capitalized):</h2> <p>{$titleCaseString}</p>";
echo "<br>";
echo "<h2>First letter capitalized:</h2> <p>{$capitalizedString}</p>";
echo "<br>";
echo "<h2>Trimmed string (without whitespace):</h2> <p>{$trimmedString}</p>";
?>