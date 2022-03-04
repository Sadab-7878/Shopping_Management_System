<?php 

    include 'connection.php';


    if(isset($_GET['deleteid'])){

        $R_ID = $_GET['deleteid'];

        $sql = "DELETE FROM `review` WHERE R_ID=$R_ID";
        $result = mysqli_query($conn,$sql);

        if($result){

            header('location:read.php');
        }else{

            die(mysqli_error($conn));
        }
    }


?>