<?php
    session_start();

    include("db.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $mbl= $_POST["phone"];
        $email = $_POST["email"];
        $add = $_POST["add"];

        if (!empty($name) && !empty($mbl) && !empty($email)){
            $add = "insert into crudlearn (name, phone , email, address) values('$name','$mbl','$email','$add')";

            mysqli_query($con, $add );

            header('location:display.php');

        }
            
        
    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User details</title>
</head>
<body>
<div class="container mt-3">
  <h2>User Details</h2>
  <form action="" method="post">
  <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="phone">Mobile No:</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter Mobile No" name="phone">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="add">Address:</label>
      <input type="textarea" class="form-control" id="add" placeholder="Enter your address" name="add">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <a href="display.php"><input type="submit" class="btn btn-primary" name="" value="submit" ></a>
  </form>
</div>

</body>
</html>