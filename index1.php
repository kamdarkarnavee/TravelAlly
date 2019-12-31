<?php
    $servername = "localhost";
    $username = "id11032298_admin";
    $password = "admin";
    $dbname = "id11032298_mysql";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE Counter SET visits = visits+1 WHERE id = 1";
    $conn->query($sql);

    $sql = "SELECT visits FROM Counter WHERE id = 1";
    $result = $conn->query($sql);
    $visits = 0;
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
        }
    } else {
        echo "no results";
    }
    
    $conn->close();
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Visit counter</title>
    </head>
    <body>
        Visits: <?php print $visits; ?>

    </body>
</html>