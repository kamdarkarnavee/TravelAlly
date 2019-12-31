<html>
    <head>
        <title>Users List</title>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <!-- Nav -->
        <!--<div id="page-wrapper">-->
			<nav id="nav" style="background: black; position: relative; text-align:center; color: white">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#about-us">About Us</a></li>
					<li>
						<a href="#services">Services</a>
					</li>
					<li><a href="#explorations">Explorations</a></li>
					<li><a href="#contact-us">Contact Us</a></li>
					<li>
						<a href="login.php">Login</a>
					</li>
					<li><a href="user_screen.php">
					    User
					</a></li>
				</ul>
			</nav>
        
        <?php
            $url = "http://karnaveekamdar.me/api.php";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Accept: application/json'
            ));
            $result = curl_exec($ch);
            $json = json_decode($result);
            echo '<table celpadding = "0" cellspacing="0" class = "table table-hover">';
            echo '<tr align="center"><th><b>Name</b></th><th><b>Email</b></th><th><b>Address</b></th>';
            echo "<tr align='center'><td colspan=3>
            <a href='http://karnaveekamdar.me/' target='_blank'>Karnavee's</a> Users:
                </td></tr>";
            foreach($json as $objects){
                echo '<tr align="center">';
                echo '<td>',$objects->first_name," ",$objects->last_name,'</td>';
                echo '<td>',$objects->email,'</td>';
                echo '<td>',$objects->address,'</td>';
            }
            // echo "</tr></table>";
            curl_close($ch);
        ?>
        
        
        
        
        <?php
            $url = "http://sushantmathur.xyz/request.php";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Accept: application/json'
            ));
            $result = curl_exec($ch);
            $json = json_decode($result);
            echo "<tr align='center'><td colspan=3>
            <a href='http://sushantmathur.xyz' target='_blank'>Sushant's</a> Users:
                </td></tr>";
            foreach($json as $objects){
                echo '<tr align="center">';
                $temp = json_decode($objects);
                echo '<td>',$temp->firstname," ",$temp->lastname,'</td>';
                echo '<td>',$temp->email,'</td>';
                echo '<td>',$temp->homeaddress,'</td>';
            }
            curl_close($ch);
        ?>
        

        
        
        <?php
            $url = "http://sathyasriproject.ga/db3.php";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Accept: application/json'
            ));
            $result = curl_exec($ch);
            $json = json_decode($result);
            echo "<tr align='center'><td colspan=3>
            <a href='http://sathyasriproject.ga/' target='_blank'>Sathya's</a> Users:
                </td></tr>";
            foreach($json as $objects){
                echo '<tr align="center">';
                echo '<td>',$objects->firstname," ",$objects->lastname,'</td>';
                echo '<td>',$objects->email,'</td>';
                echo '<td>',$objects->homeaddress,'</td>';
            }
            echo "</tr></table>";
            curl_close($ch);
        ?>
        <!--</div>-->
    </body>
</html>