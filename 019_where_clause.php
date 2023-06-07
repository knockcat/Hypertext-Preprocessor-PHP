<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    die("Sorry we failed to conenct " . mysqli_connect_error());
}
else{
    echo "Connection is Successfull <br>";
}

$sql = "SELECT * FROM `trips` WHERE dest = 'Bengaluru';";
    
$result = mysqli_query($conn, $sql);

if($result)
{
    // Find the number of rows returned
    $num = mysqli_num_rows($result);

    echo "Number of rows are " . $num . "<br>";

    if($num > 0)
        {
            echo "<br>Records Found in Database<br>";

            // Till mysqli_fetch_assoc do not return NULL
            
            $no = 1;

            while($row2 = mysqli_fetch_assoc($result))
            {
                // echo var_dump($row2);

                echo "<br> ". $no . " Hello " . $row2['Name'] . " to " . $row2['dest'] . " <br>";
                $no += 1;

            }

            // Using where clause to update data
            $sql = 'update trips set name = "Knockcat" where `S.No` = 2;';

            $result = mysqli_query($conn, $sql);

            $aff = mysqli_affected_rows($conn);

            echo "<br>Number of affected rows : $aff<br>";

            // it return bool value 

            if($result)
            {
                echo "<br>We updated the Record Successfully <br>";
                echo var_dump($result);
                echo "<br>";
            }
            else
            {
                echo mysqli_error($conn);
            }


        }
        else
        {
            echo "<br> Table contain no data <br>";
        }

}
else
    echo mysqli_error($conn);


?>