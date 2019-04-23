<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "_db_pterpan_mis";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>