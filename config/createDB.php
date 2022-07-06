<?php

$servername = "localhost";
$user = "Tranh";
$pass = "01696766852";
$dbname = "mydb";

$conn = new mysqli($servername, $user, $pass, $dbname);
if($conn->connect_error) {
    die("Could not connect to: " .$conn->error . "<br/>");
} else {
    echo "Connect successfully <br/>";
}



$crtTB = "CREATE TABLE Employees(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL
)";

if($conn->query($crtTB)) {
    echo "Create successfully<br/>";
} else {
    echo "Error creating table : " . $conn->error . "<br/>";
}


/*
$drop = "DROP TABLE Employee;";
$conn->query($drop);
*/
$conn->close();
?>