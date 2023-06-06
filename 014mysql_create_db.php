<?php

$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password);

if(!$conn)
{
    die("Failed to connect to database " . mysqli_connect_error());
}
else
{
    echo "connection established successfull <br>";
}

$sql = "CREATE DATABASE first";

// 2 parameters conn and query
$result = mysqli_query($conn, $sql);

// mysqli_query return true if query executed successfully

if($result)
    echo "query executed successfully <br>";
else
    echo "query execution failed " . mysqli_error($conn) . "<br>";

?>