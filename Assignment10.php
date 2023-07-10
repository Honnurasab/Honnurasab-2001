<?php
// Database connection details
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to perform selection sort
function selectionSort($arr) {
    $n = count($arr);
    
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j]['score'] < $arr[$minIndex]['score']) {
                $minIndex = $j;
            }
        } 
        if ($minIndex != $i) {
            // Swap the records
            $temp = $arr[$i];
            $arr[$i] = $arr[$minIndex];
            $arr[$minIndex] = $temp;
        }
    }
    return $arr;
}
// Retrieve student records from the database
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Store records in an array
    $students = array();
    
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
    // Sort the student records using selection sort
    $sortedStudents = selectionSort($students);
    
    // Display the sorted student records
    foreach ($sortedStudents as $student) {
        echo "Name: " . $student['name'] . ", Score: " . $student['score'] . "<br>";
    }
} else {
    echo "No student records found.";
}
// Close the database connection
$conn->close();
?>
