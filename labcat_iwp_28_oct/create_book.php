<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookinfo";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $editionNumber = $_POST['editionNumber'];
    $copyright = $_POST['copyright'];
    $publisher = $_POST['publisher'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    // get books and display first
    $sql = "INSERT INTO books (isbn, title, editionNumber, copyright, publisher, author, price) VALUES ('$isbn', '$title', '$editionNumber', '$copyright', '$publisher', '$author', '$price')";
    $result=mysqli_query($conn, $sql);
    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "HELLO";
    $conn->close();
    header("Location: index.php");
?>
