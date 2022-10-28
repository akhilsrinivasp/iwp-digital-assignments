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
    <div class="container">
        <form action="update_book.php" method="get">
            <div class="form-group
                <label for="book_id">Book Id:</label>
                <input type="text" class="form-control" id="book_id" name="book_id">
            </div>
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</body>
</html>
