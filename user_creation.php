<?php
    if(isset($_POST['submitted'])){
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
            $msg = "<span style='color: green;'><b>User Created Successfully</b></span>";
        }
        
        mysqli_close($conn);
    }  
?>

<div class="container">
    <form action="" method="post">
        <h3 align="center"><b>Create User Form</b></h3><br/>
        
        <div class="container">
            <table align="center">
                <?php if(isset($msg)){?>
                <tr>
                  <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
                </tr>
                <?php } 
                ?>
                <tr>
                    <td>
                        <label for="fname"><b>First Name: </b></label>
                    </td>
                    <td>
                        <input type="text" name="fname" id="fname"  required><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="lname"><b>Last Name: </b></label>
                    </td>
                    <td>
                        <input type="text" name="lname" id="lname"  required><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email"><b>Email: </b></label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email"  required><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address"><b>Home Address: </b></label>
                    </td>
                    <td>
                        <input type="text" name="address" id="address" required><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="home_num"><b>Home Number: </b></label>
                    </td>
                    <td>
                        <input type="number" name="home_num" id="home_num" min="1000000000" max="10000000000" required><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cell_num"><b>Cell Number: </b></label>
                    </td>
                    <td>
                        <input type="number" name="cell_num" id="cell_num" min="1000000000" max="10000000000"  required><br/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submitted" style="width: 100%;" value="Create"><br/>
                    </td>
                </tr>
            </table>

            </div>
    </form>
</div>
