<?php
    $servername = "localhost";
    $username = "id11032298_admin";
    $password = "admin";
    $dbname = "id11032298_mysql";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM User";
    
    $result = $conn->query($sql);

    $conn->close();

?>
