<?php 

    include 'connection.php';


    if(isset($_GET['deleteid'])){

        $W_ID = $_GET['deleteid'];

        $sql = "DELETE FROM `warehouse` WHERE W_ID=$W_ID";
        $result = mysqli_query($conn,$sql);

        if($result){

            header('location:read.php');
        }else{

            die(mysqli_error($conn));
        }
    }


?>