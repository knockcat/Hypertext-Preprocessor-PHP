<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Form</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/knockcat/Hypertext-Preprocessor-PHP/017saving_form_dataTodb.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php

    // Retreiving Data from Form

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name= $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
    
    
        // Submit to Database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contacts";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if(!$conn)
        {
            // echo "connection Failed to Database , Try Again " . mysqli_connect_error() ."<br>";

            die( '<div class="alert alert-success alert-danger fade show" role="alert">
            <strong>Success</strong> Your Entry has not been Submitted Successfully as we are Facing Some Technical Issues.
            We regret the inconvinience caused!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        }
        else   
        {
            
            // Insert Query   

            $sql = "INSERT INTO `info` (`S.No`, `Name`, `Email`, `Concern`, `DateTime`) VALUES (NULL, '$name', '$email', '$desc', current_timestamp());";

            $result = mysqli_query($conn, $sql);

            if($result)
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> Your Entry has been Submitted Successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            else
            {
                // echo "Try Again " . mysqli_error($conn) . "<br>";

                echo '<div class="alert alert-success alert-danger fade show" role="alert">
                <strong>Success</strong> Your Entry has not been Submitted Successfully as we are Facing Some Technical Issues.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
        } 
    }
    
?>

<div class="container">
    <h1>Contact Us For Your Concern</h1>
<form action="http://localhost/knockcat/Hypertext-Preprocessor-PHP/017saving_form_dataTodb.php" method="post">
  <div class="form-group">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-group">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="desc" class="form-label">Description</label>
    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>