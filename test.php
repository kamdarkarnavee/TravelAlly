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
   

echo "<table><tr style='color:black;'><th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Home No.</th>
            <th>Cell No.</th></tr>";
                if(isset($result)){
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) 
                            echo "<tr style='color:black;'><td>" . $row["first_name"]. "</td><td> " . $row["last_name"]."</td><td> " . $row["email"]. "</td><td> " . $row["address"]." </td><td> " . $row["home_num"]."</td><td> " . $row["cell_num"]."</td></tr>";
                    }
                }
                
        "</table>";
        
        $x = '{"0":{"firstname":"John","lastname":"Doe","email":"john@example.com","homeaddress":"fhdshhfjdshfj","homephone":"353545646","cellphone":"245345356"},"1":{"firstname":"","lastname":"","email":"","homeaddress":"","homephone":"","cellphone":""},"2":{"firstname":"sathya","lastname":"pasham","email":"satya@gmail.com","homeaddress":"foundry","homephone":"4632648276","cellphone":"423823827"},"3":{"firstname":"courtney","lastname":"cox","email":"cox@gmail.com","homeaddress":"5th
street","homephone":"1234567","cellphone":"23653456"},"4":{"firstname":"rachel
","lastname":"","email":"","homeaddress":"","homephone":"","cellphone":""},"5":{"firstname":"sai","lastname":"reddy","email":"saisankeerthreddy909@gmail.com","homeaddress":"Flat
No 206, Symphony By Sita
Shelters","homephone":"54290075","cellphone":"7729987329"},"6":{"firstname":"Srihan","lastname":"Pasham","email":"psrihan@gmail.com","homeaddress":"1-3-4,
Pasham Kaandan, Founders club, Hyderabad,
India","homephone":"80165225","cellphone":"9110638901"},"7":{"firstname":"Jesse","lastname":"Lance","email":"jlance@gmail.com","homeaddress":"281
W. Halifax Lane Middleburg, FL
32068","homephone":"80164532","cellphone":"9118166301"},"8":{"firstname":"Tim","lastname":"Larny","email":"tlarny830@gmail.com","homeaddress":"608
Cross Dr. Newport News, VA
23601","homephone":"80936516","cellphone":"9173920728"},"9":{"firstname":"Stephen","lastname":"Roly","email":"roly.stephen13@gmail.com","homeaddress":"613
Victoria Dr. Mableton, GA
30126","homephone":"91630162","cellphone":"9183020710"},"10":{"firstname":"Steve","lastname":"Rogers","email":"srogers123@gmail.com","homeaddress":"7564
Lilac St. Salisbury, MD
21801","homephone":"80737916","cellphone":"9830101065"},"11":{"firstname":"Ema","lastname":"Stone","email":"emastone@gmail.com","homeaddress":"327
Lees Creek Lane Baldwin, NY
11510","homephone":"80639200","cellphone":"8000739195"},"12":{"firstname":"Tony","lastname":"Stark","email":"starkt@gmail.com","homeaddress":"120
erb st W, Waterloo,
Ontario","homephone":"80037390","cellphone":"8839161864"},"13":{"firstname":"Lowe","lastname":"Crowley
","email":"clowe@gmail.com","homeaddress":"63, 264, Queen Quay, Toronto,
Ontario","homephone":"86389158","cellphone":"9638299627"},"14":{"firstname":"George","lastname":"Clooney","email":"gclooney@gmail.com","homeaddress":"937,
bay street,
California","homephone":"86863920","cellphone":"9629202058"},"15":{"firstname":"Brad","lastname":"Pitt","email":"bpitt@gmail.com","homeaddress":"1-9,
St Patrick St, Orlando
","homephone":"87302652","cellphone":"8692062689"},"16":{"firstname":"Robert","lastname":"Parker","email":"rpkr@gmail.com","homeaddress":"9-4,
Farmers Market St, waterloo,
Ontario","homephone":"86378929","cellphone":"9639926829"},"17":{"firstname":"karu","lastname":"kami","email":"kami@gmail.com","homeaddress":"9th
street ,san
jose","homephone":"3526358788","cellphone":"6278637263"},"18":{"firstname":"vaishnavi","lastname":"mehta","email":"vaish@gmail.com","homeaddress":"9th
street , san
jose","homephone":"562763567","cellphone":"536253721"},"19":{"firstname":"priya","lastname":"sharma","email":"priya@gmail.com","homeaddress":"centerra
apartments","homephone":"513578887","cellphone":"357826387"},"20":{"firstname":"Mattew","lastname":"Drew","email":"68376238","homeaddress":"3628368239","homephone":"3782739827","cellphone":"6389263892"},"21":{"firstname":"Abhinav","lastname":"Balasubramanian","email":"abc@abc.com","homeaddress":"fsadfasf545","homephone":"1234567891","cellphone":"1234567890"}}';
    $r = json_encode($x);
    $r = json_decode($r, true);
    echo $r;
    // print_r($r);
    // foreach($r as $k){
    //     echo $k;
    // }
?>