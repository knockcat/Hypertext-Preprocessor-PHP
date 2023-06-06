<?php
    echo "connecting to database <br>";

    /*

    ways to connect to mysql database

    1. MySQLi extension
        2 ways
            procedurelar
            object oriented
    2. PDO (PHP data objects)

    */

    // Connecting to Database

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create a Connection

    $conn = mysqli_connect($servername, $username, $password);

    // Die if Connection is Not Successful

    if(!$conn)
    {
        die("Sorry we Failed to connect : " . mysqli_connect_error());
    }
    else
    {
        echo "Connection is Succesful <br>";
    }

?>