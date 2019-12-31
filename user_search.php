<?php
    if(isset($_POST['submit'])){
        $servername = "localhost";
        $username = "id11032298_admin";
        $password = "admin";
        $dbname = "id11032298_mysql";
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        if(isset($_POST['fname'])){
            $fname =trim($_POST['fname']);
        }
        
        if(isset($_POST['lname'])){
            $lname = trim($_POST['lname']);
        }
        
        if(isset($_POST['email'])){
            $email = trim($_POST['email']);
        }
        
        if(isset($_POST['address'])){
            $address = trim($_POST['address']);
        }
        
        if(empty($_POST['home_num'])){
            $home_num = $_POST['home_num_default'];
        }else{
            $home_num = $_POST['home_num'];
        }
        
        if(empty($_POST['cell_num'])){
            $cell_num = $_POST['cell_num_default'];
        }else{
            $cell_num = $_POST['cell_num'];
        }

        $sql = "SELECT DISTINCT * FROM User WHERE first_name = '$fname' OR last_name = '$lname' OR email = '$email' OR address = '$address' OR home_num = $home_num OR cell_num = $cell_num";
        
        $result = mysqli_query($conn, $sql);
        
        
        mysqli_close($conn);
    }
?>


<div class="container">
    <form action="" method="post">
        <h3 align="center"><b>Search User Form</b></h3><br/>
        <div class="container">
            <table align="center">
                <tr>
                    <td>
                        <label for="fname"><b>First Name: </b></label>
                    </td>
                    <td>
                        <input type="text" name="fname" id="fname"><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="lname"><b>Last Name: </b></label>
                    </td>
                    <td>
                        <input type="text" name="lname" id="lname"><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email"><b>Email: </b></label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email"><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address"><b>Home Address: </b></label>
                    </td>
                    <td>
                        <input type="text" name="address" id="address"><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="home_num"><b>Home Number: </b></label>
                    </td>
                    <td>
                        <input type="number" name="home_num" id="home_num"><br/>
                        <input type="hidden" name="home_num_default" value="0" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cell_num"><b>Cell Number: </b></label>
                    </td>
                    <td>
                        <input type="number" name="cell_num" id="cell_num"><br/>
                        <input type="hidden" name="cell_num_default" value="0" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" style="width: 100%;" value="Search"><br/>
                    </td>
                </tr>
            </table>
            
        </div>
    </form>
</div>

<div class="container" width=100%>
        <h3 align="center">Search Results</h3>
        <table>
            <tr style='color:black;'><th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Home No.</th>
            <th>Cell No.</th></tr>
            <?php
                if(isset($result))
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) 
                            echo "<tr style='color:black;'><td>" . $row["first_name"]. "</td><td> " . $row["last_name"]."</td><td> " . $row["email"]. "</td><td> " . $row["address"]." </td><td> " . $row["home_num"]."</td><td> " . $row["cell_num"]."</td></tr><br>";
                        
                    } else {
                        echo "0 results";
                    }
                ?>
        </table>
    </div>


