<?php

    $servername = "localhost";
    $username = "id11032298_admin";
    $password = "admin";
    $dbname = "id11032298_mysql";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $home_num = $_POST['home_num'];
    $cell_num = $_POST['cell_num'];
    $sql = "INSERT INTO User VALUES ('$fname', '$lname', '$email', '$address', $home_num, $cell_num)";
    
    if(mysqli_query($conn, $sql)){
        echo "Record inserted";
    }
    
    mysqli_close($conn);
    
?>