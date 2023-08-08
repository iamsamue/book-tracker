<?php
include 'config.php';

$title = $_POST['title'];
$author = $_POST['author'];
$publication_date = $_POST['publication_date'];
$genre = $_POST['genre'];
$rating = $_POST['rating'];

$sql = "INSERT INTO books (title, author, publication_date, genre, rating)
        VALUES ('$title', '$author', '$publication_date', '$genre', '$rating')";

if ($conn->query($sql) === true) {
    header('Location: index.php');
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>
