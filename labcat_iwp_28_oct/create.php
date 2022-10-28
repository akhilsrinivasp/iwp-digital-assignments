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
        <form action="create_book.php" method="post">
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="number" class="form-control" id="isbn" name="isbn">
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="editionNumber">Edition Number:</label>
                <input type="number" class="form-control" id="editionNumber" name="editionNumber">
            </div>
            <div class="form-group">
                <label for="copyright">Copyright:</label>
                <input type="number" class="form-control" id="copyright" name="copyright">
            </div>
            <div class="form-group">
                <label for="publisher">Publisher:</label>
                <input type="text" class="form-control" id="publisher" name="publisher">
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <input type="submit" class="btn" name="submit" value="Create">
        </form>
    </div>
</body>
</html>