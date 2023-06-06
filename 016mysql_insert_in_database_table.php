<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "first";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn)
        echo "Database Connection Failed ". mysqli_connect_error() . "<br>";
    else
        echo "Database Connection Successfull <br>";

    $name = "Tom";
    $role = "CN";

    $sql = "INSERT INTO `one` (`S.No`, `Name`, `Role`, `DateOfJoining`) VALUES (NULL, '$name', '$role', '2023-06-06 09:23:08.000000');";

    $result = mysqli_query($conn, $sql);

    if($result)
        echo "Data Inserted Successfully into table <br>";
    else
        echo "Database Insertion Failed " . mysqli_error($conn);
?>