<?php
include 'config.php';

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$publication_date = $_POST['publication_date'];
$genre = $_POST['genre'];
$rating = $_POST['rating'];

$sql = "UPDATE books SET title='$title', author='$author', publication_date='$publication_date', genre='$genre', rating='$rating' WHERE id=$id";

if ($conn->query($sql) === true) {
    header('Location: index.php');
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>
