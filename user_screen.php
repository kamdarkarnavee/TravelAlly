
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
        body {
            font-family: Arial;
            color: white;
        }

        .split {
            height: 100%;
            width: 50%;
            position: absolute;
            /*z-index: 1;*/
            top: 0;
            overflow-x: visible;
            padding-top: 105px;
            padding-left: 35px;
            /*padding-bottom: 30px;*/
            padding-right: 35px;
        }

        .left {
            left: 0;
            /*background-color: #111;*/
        }

        .right {
            right: 0;
            border-left: 3px solid black;
            height: auto;
            /*background-color: red;*/
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .centered img {
            width: 150px;
            border-radius: 50%;
        }
    </style>
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
            <li><a href="index.php#news">News</a></li>
            <li><a href="index.php#contact-us">Contact Us</a></li>
           <li>
    		    <a href="login.php">Login</a>
    	    </li>
        </ul>
    </nav>

</div>


<div class="split left">
    <?php include 'user_search.php'?>
</div>


<div class="split right">
    <?php include 'user_creation.php'?>
</div>


</body>
</html>