<?php
$conn = mysqli_connect("localhost", "root", "", "class_db");
$sql = "INSERT INTO students (first_name, last_name, email, age) 
        VALUES ('Juan', 'Dela Cruz', 'juan@example.com', 25,)";
        //meron "," sa 25
mysqli_query($conn, $sql);
//kulang if() statement and echo para ma-process ng server pinapagawa
//kulang sir "yung mysqli_close($conn);" para ma-close yung db connection
?>