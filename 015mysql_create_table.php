<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "first";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
    echo die("database connection failed " . mysqli_connect_error() . "<br>");
else
    echo "Connect Established Successfull <br>";


// Creating table in php

$sql = "CREATE TABLE `first`.`test` (`S.No` INT NOT NULL AUTO_INCREMENT , `Name` INT(12) NOT NULL , `Role` INT(12) NOT NULL , `DateOfJoining` DATETIME NOT NULL , PRIMARY KEY (`S.No`)) ;
";

$result = mysqli_query($conn, $sql);

if($result)
    echo "Table Created SuccessFully <br>";
else
    echo "Table Creation Failed : ". mysqli_error($conn) . "<br>";


?>