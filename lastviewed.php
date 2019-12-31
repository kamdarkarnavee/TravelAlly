<html>
    <head>
        <meta charset="UTF-8">
        <title>Recently Viewed</title>
        <meta charset="utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    	<link rel="stylesheet" href="assets/css/main.css" />
    	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body>
        <nav id="nav" class="navbar" style="background: black; position: relative; color: white">
		<ul>
		    <li><a href="index.php">Home</a></li>
			<li><a href="lastviewed.php" target="_blank">Recently Viewed Services</a></li>
			<li><a href="frequentlyviewed.php" target="_blank">Frequently Viewed Services</a></li>
		</ul>
	</nav>
	<br/>
	<?php
        $cookie_value_index = "value";
        include 'getcookie.php';   
    ?>
    </body>
</html>
