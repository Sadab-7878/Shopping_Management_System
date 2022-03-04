<?php 

    include 'connection.php';


    if(isset($_GET['deleteid'])){

        $P_ID = $_GET['deleteid'];

        $sql = "DELETE FROM `publisher` WHERE P_ID=$P_ID";
        $result = mysqli_query($conn,$sql);

        if($result){

            header('location:read.php');
        }else{

            die(mysqli_error($conn));
        }
    }


?>