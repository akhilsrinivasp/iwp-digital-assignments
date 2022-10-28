<!-- Create a page with 4 buttons on Book Info-->
<!-- Create, Read, Update and Delete -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Book Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Book Info</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="create.php">Create</a></li>
                <li><a href="update.php">Update</a></li>
                <li><a href="delete.php">Delete</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1>Book Info</h1>
        <p>Book Info is a simple web application that allows you to create, read, update and delete information about books. Below are the few books available in the record.</p>
    </div>
    <!-- Columns: `book_id`, `isbn`, `title`, `editionNumber`, `copyright`, `publisher`, `author`, `price` -->
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S.No</th>
                    <!-- <th>ISBN</th> -->
                    <th>Title</th>
                    <!-- <th>Edition Number</th> -->
                    <!-- <th>Copyright</th> -->
                    <!-- <th>Publisher</th> -->
                    <th>Author</th>
                    <th>Price</th>
                    <th>More Info</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "bookinfo";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM books";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['book_id'] . "</td>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['author'] . "</td>";
                            echo "<td> ₹ " . $row['price'] . "</td>";
                            echo "<td><a href='more_info.php?book_id=" . $row['book_id'] . "'>More Info</a></td>";
                            echo "<td><a href='update_book.php?book_id=" . $row['book_id'] . "'>Update</a></td>";
                            echo "<td><a href='delete_book.php?book_id=" . $row['book_id'] . "'>Delete</a></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>