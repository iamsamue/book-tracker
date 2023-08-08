<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Tracker</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Book Tracker</h1>

    <form id="addBookForm" method="post" action="add_book.php">
        <input type="text" name="title" placeholder="Title" required>
        <input type="text" name="author" placeholder="Author" required>
        <input type="date" name="publication_date" placeholder="Publication Date" required>
        <input type="text" name="genre" placeholder="Genre" required>
        <input type="number" step="0.1" name="rating" placeholder="Rating" required>
        <input type="submit" value="Add Book">
    </form>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Publication Date</th>
                <th>Genre</th>
                <th>Rating</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $sql = 'SELECT * FROM books';
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['title'] . '</td>';
                    echo '<td>' . $row['author'] . '</td>';
                    echo '<td>' . $row['publication_date'] . '</td>';
                    echo '<td>' . $row['genre'] . '</td>';
                    echo '<td>' . $row['rating'] . '</td>';
                    echo "<td>
                            <a href='edit_book.php?id=" .
                        $row['id'] .
                        "'>Edit</a>
                            <a href='delete_book.php?id=" .
                        $row['id'] .
                        "'>Delete</a>
                          </td>";
                    echo '</tr>';
                }
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
