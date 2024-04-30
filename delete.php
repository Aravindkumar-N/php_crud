<?php
    include("db.php");

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $delete = "delete from crudlearn where id=$id";

        $result=mysqli_query($con,$delete);

        if($result){
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>