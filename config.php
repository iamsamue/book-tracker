<?php
$servername = "mysql";
$username = "23usr275"; 
$password = "wvWFqbEymWBU"; 
$dbname = "23db275"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
