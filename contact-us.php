<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
</head>
<body>
<?php
// echo file_get_contents("contactus.txt");
$file_lines = file('contactus.txt');
foreach ($file_lines as $line) {
    echo $line.'<br/>';
}
?>
</body>
</html>