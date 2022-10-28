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
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bookinfo";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $book_id = $_GET['book_id'];
        $sql = "SELECT * FROM books WHERE book_id = $book_id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='container'>";
                echo "<h1>" . $row['title'] . "</h1>";
                echo "<p>ISBN: " . $row['isbn'] . "</p>";
                echo "<p>Edition Number: " . $row['editionNumber'] . "</p>";
                echo "<p>Copyright: " . $row['copyright'] . "</p>";
                echo "<p>Publisher: " . $row['publisher'] . "</p>";
                echo "<p>Author: " . $row['author'] . "</p>";
                echo "<p>Price: " . $row['price'] . "</p>";
                echo "</div>";
            }
        }
    ?>
</body>
</html>
