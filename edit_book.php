<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Edit Book</h1>

    <?php
    include 'config.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM books WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <form id="editBookForm" method="post" action="update_book.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="title" placeholder="Title" value="<?php echo $row[
            'title'
        ]; ?>" required>
        <input type="text" name="author" placeholder="Author" value="<?php echo $row[
            'author'
        ]; ?>" required>
        <input type="date" name="publication_date" placeholder="Publication Date" value="<?php echo $row[
            'publication_date'
        ]; ?>" required>
        <input type="text" name="genre" placeholder="Genre" value="<?php echo $row[
            'genre'
        ]; ?>" required>
<input type="number" step="0.1" name="rating" placeholder="Rating" value="<?php echo $row[
    'rating'
]; ?>" required>
<input type="submit" value="Update Book">
</form>

</body>
</html>
