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
    
    $sql = "select * from info";
    
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        // Find the number of rows returned
        $num = mysqli_num_rows($result);

        echo "Number of rows are " . $num . "<br>";

        // Display the rows returned by the sql  query

        if($num > 0)
        {
            echo "<br>Records Found in Database<br>";

            // mysqli_fetch_assoc() fetch result one by one till we have records in our database
            // returns an associative array which represent next record
            // null when or records are returned

            // 1 row

            // $row = mysqli_fetch_assoc($result);
            // echo var_dump($row);
            // echo "<br>";
            
            // // for getting next row run above two line again

            // // 2 row

            // $row = mysqli_fetch_assoc($result);
            // echo var_dump($row);
            // echo "<br>";

            // // 3 row

            // $row = mysqli_fetch_assoc($result);
            // echo var_dump($row);
            // echo "<br>";

            // // 4 row

            // $row = mysqli_fetch_assoc($result);
            // echo var_dump($row);
            // echo "<br>";

            // // 5 row (NULL table has only 4 records)

            // $row = mysqli_fetch_assoc($result);
            // echo var_dump($row);
            // echo "<br>";

            // USING LOOPS"

            // Till mysqli_fetch_assoc do not return NULL    

            while($row2 = mysqli_fetch_assoc($result))
            {
                // echo var_dump($row2);

                echo "<br> Entry " .$row2['S.No'] . " with " . $row2['Name'] . " and email " . $row2['Email'] . " having concern " . $row2['concern'] .   " intiated on  " . $row2['DateTime'] . " has been resolved . <br>";

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