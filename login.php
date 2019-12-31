<?php
    session_start();
    if(isset($_POST['submit'])){
    $logins = array('admin' => 'admin');

        $Username = isset($_POST['uname']) ? $_POST['uname'] : '';
        $Password = isset($_POST['pwd']) ? $_POST['pwd'] : '';

        if (isset($logins[$Username]) && $logins[$Username] == $Password){
            $_SESSION['UserData']['uname']=$logins[$Username];
            header("location:userinfo.php");
            exit;
        } else {
            $msg="<span style='color:red'><b>Invalid Login Credentials</b></span>";
        }
    }
?>

<!DOCTYPE html>
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

        <div class="container">
            <h2 align="center">Login Form</h2>
            <form action="" method="post" align="center">
                <div class="img" align="center">
                    <img src="images/administrator.png" alt="Administrator" class="admin"/>
                </div>

                <div class="container">
                    <table align="center">
                        <tr>
                            <td>
                                <label for="uname"><b>Username: </b></label>
                            </td>
                            <td>
                                <input type="text" name="uname" id="uname"><br/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="pwd"><b>Password: </b></label>
                            </td>
                            <td>
                                <input type="password" name="pwd" id="pwd"><br/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" style="width: 100%;" value="Login"><br/>
                            </td>
                        </tr>
                        <?php if(isset($msg)){?>
                        <tr>
                          <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
                        </tr>
                        <?php } ?>
                    </table>

                </div>

            </form>
            </div>
    </body>
</html>