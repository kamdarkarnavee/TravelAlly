<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['uname'])){
header("location:login.php");
exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
    <body>

        <!-- Header -->
        <div>

            <nav id="nav" class="navbar" style="background: black; position: relative; color: white">
                <ul>
                    <li><a href="index.php">Home</a></li>
					<li><a href="index.php#about-us">About Us</a></li>
					<li>
						<a href="index.php#services">Services</a>
					</li>
					<li><a href="index.php#explorations">Explorations</a></li>
					<li><a href="index.php#contact-us">Contact Us</a></li>
					
                </ul>
            </nav>

        </div>
        
        <div align="center" style="padding: 25px">
            <h2>Current Website Users Info</h2>
        </div>
        
        <!-- Table -->
        <table class="usertable">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Username</th>
              <th scope="col">Email ID</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>mark</td>
              <td>mark@xyz.com</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>jacob</td>
              <td>mark@sad.com</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>larry</td>
              <td>larry@page.in</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>june</td>
              <td>june@yahoo.com</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>max</td>
              <td>max@gmail.com</td>
            </tr>
          </tbody>
        </table>
    
    </body>
</html>