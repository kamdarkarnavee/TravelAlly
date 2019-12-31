<?php
    $servername = "localhost";
    $username = "id11032298_admin";
    $password = "admin";
    $dbname = "id11032298_mysql";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT DISTINCT * FROM User";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    
    header("Content-Type:application/json");
    
    if(isset($result)){
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $arr[] = $row;
            }
            echo json_encode($arr);
        }

    }
    
?>

