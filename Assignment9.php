<!DOCTYPE html>
<html>
<head>
<title>States Array</title>
</head>
<body>
<?php
    $states = "Mississippi Alabama Texas Massachusetts Kansas";
    $statesArray = explode(" ", $states);
    $resultantArray = array();
echo "\n\n";
    echo "<h2>Original Array:</h2><br>";
    foreach ($statesArray as $key => $state) {
        echo "STATES[" . $key . "]=" . $state . "<br>";
    }
 // Search for a word that ends in "xas" and store it in element 0 of resultant array
    // preg_match('/\b\w*xas\b/i', $states, $matches);
    // $resultantArray[0] = $matches[0];
 // // Search for a word that begins with "k" and ends in "s" and store it in element 1 of resultant array
    // preg_match('/\bK\w*s\b/i', $states, $matches);
    // $resultantArray[1] = $matches[0];
 // // Search for a word that begins with "M" and ends in "s" and store it in element 2 of resultant array
    // preg_match('/\bM\w*s\b/', $states, $matches);
    // $resultantArray[2] = $matches[0];
// // Search for a word that ends in "a" and store it in element 3 of resultant array
    // preg_match('/\b\w*a\b/i', $states, $matches);
    // $resultantArray[3] = $matches[0];

    // Starting from M and ending from i
    preg_match('/\bK\w*s\b/', $states, $matches);
    $resultantArray[0] = $matches[0];

    echo "\n\n";
    echo "<h2>Resultant Array:</h2><br>";
    foreach ($resultantArray as $key => $state) {
        echo "STATES[" . $key . "]=" . $state . "<br>";
    }
    ?>
</body>
</html>
