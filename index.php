<?php
$conn = mysqli_connect("localhost", "root", "", "class_db");
$sql = "INSERT INTO students (first_name, last_name, email, age) 
        VALUES ('Juan', 'Dela Cruz', 'juan@example.com', 25)";

if (mysqli_query($conn, $sql)) { 
    echo " New student added successfully!"; 
} else {  
    echo " Error: " . $sql . "<br>" . mysqli_error($conn); 
} 
mysqli_close($conn);
?>