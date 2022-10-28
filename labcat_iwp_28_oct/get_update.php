<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookinfo";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $book_id = $_POST['book_id'];
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $editionNumber = $_POST['editionNumber'];
    $copyright = $_POST['copyright'];
    $publisher = $_POST['publisher'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $sql = "UPDATE books SET isbn='$isbn', title='$title', editionNumber='$editionNumber', copyright='$copyright', publisher='$publisher', author='$author', price='$price' WHERE book_id='$book_id'";
    $result=mysqli_query($conn, $sql);
    if ($result) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    header("Location: index.php");
?>

            