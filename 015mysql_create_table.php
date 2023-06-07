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

$sql = "CREATE TABLE `first`.`one` (`S.No` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(12) NOT NULL , `Role` VARCHAR(12) NOT NULL , `DateOfJoining` DATETIME NOT NULL , PRIMARY KEY (`S.No`)) ENGINE = InnoDB;";

$result = mysqli_query($conn, $sql);

if($result)
    echo "Table Created SuccessFully <br>";
else
    echo "Table Creation Failed : ". mysqli_error($conn) . "<br>";


?>