<?php 
    include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Details display</title>
</head>
<body>
    <a href="user.php"><button class = "btn btn-primary my-5">Add new</button></a>
    <div class="container mt-3">
  <h2>User details</h2>
  <p>Here the details of the user which are inserted in previous page</p>            
  <table class="table table-hover">
    <thead>
      <tr>
      <th>ID</th>
        <th>Name</th>
        <th>Mobile No</th>
        <th>Email</th>
        <th>Address</th>
        <th>Operations</th>
      </tr>
    </thead>

    <?php 
        $collect = "Select * from crudlearn";
        $resultdata = mysqli_query($con, $collect);
        
        if($resultdata){
            while($getdetails = mysqli_fetch_assoc($resultdata)){
                $id = $getdetails['id'];
                $name = $getdetails['name'];
                $mobile = $getdetails['phone'];
                $email = $getdetails['email'];
                $add = $getdetails['address'];
                echo "<tbody>
                <tr>
                  <td>$id</td>
                  <td>$name</td>
                  <td>$mobile</td>
                  <td>$email</td>
                  <td>$add</td>
                  <td><a href='update.php? updateid=$id'><button class='btn btn-primary'>Update</button></a></td>
                  <td><a href='delete.php? deleteid=$id'><button class='btn btn-danger'>Delete</button></a></td>
                </tr>
                </tbody>";
            }
        }
    ?>
    
    
  </table>
</div>

</body>
</html>