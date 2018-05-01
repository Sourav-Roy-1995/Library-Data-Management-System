<?php
  // Create database connection
    session_start();
                                
    require("connection.php");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['book_post'])) {
      
     // file file directory
    $target = "files/".basename($_FILES['file']['name']);
    
    // Get file name
    $file = $_FILES['file']['name'];
    
    // Get text
    //$text = $_POST['text'];
    $book_name = mysqli_real_escape_string($conn, $_POST['book_name']);
    
    // Get username
    //$text = $_POST['text'];
    $writer = mysqli_real_escape_string($conn, $_POST['writer']);


    $description = mysqli_real_escape_string($conn, $_POST['description']);


    $date = mysqli_real_escape_string($conn, $_POST['date']);
    

    $time = mysqli_real_escape_string($conn, $_POST['time']);


    $sql = "INSERT INTO books (book_name,writer,description,date,time,file) VALUES ('$book_name', '$writer', '$description', '$date', '$time', '$file')";
    

    // execute query
    mysqli_query($conn, $sql);
    $result = mysqli_query($conn, "SELECT * FROM books");
    $row = mysqli_fetch_array($result);

    if(is_array($row)) {
      $_SESSION["book_name"] = $row[book_name];     
    } 

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
        $msg = "file uploaded successfully";
        header("Location: admin_book_list.php");
    }

    else{
        $msg = "Failed to upload file";
    }
  }




?>