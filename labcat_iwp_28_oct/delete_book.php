<!-- delete a book from the database by getting book id from the url -->
<html>
<head>
    <meta charset="utf-8">
    <title>Book Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .container {
            margin-top: 50px;
        }
        h1 {
            font-size: 30px;
            font-weight: bold;
        }
        p {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Book Info</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="create.php">Create</a></li>
                <li><a href="update.php">Update</a></li>
                <li><a href="delete.php">Delete</a></li>
            </ul>
        </div>
    </nav>
    <!-- get book Id from user using form and pass it to delete.php in the url -->
    <div class="container">
        <?php
            $book_id = $_GET['book_id'];
            echo "<h1>Book Id: $book_id</h1>";
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bookinfo";
            $conn = new mysqli($servername, $username, $password, $dbname);
            // check connection
            if (!$conn) {
                echo 'Connection error: ' . mysqli_connect_error();
            }
            $sql = "DELETE FROM books WHERE books.book_id = $book_id";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<h1>Book Deleted</h1>";
            } else {
                echo "<h1>Book Not Deleted</h1>";
            }
        ?>
    </div>
</html>