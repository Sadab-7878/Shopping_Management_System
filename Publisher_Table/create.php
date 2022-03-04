<?php 

    include 'connection.php';

    if(isset($_POST['submit'])){

        $P_ID     =  $_POST['P_ID']; 
        $Name  =  $_POST['Name']; 
        $Address =  $_POST['Address'];
        $Email =  $_POST['Email'];
        $Phone     =  $_POST['Phone'];
       


        $sql = "INSERT INTO `publisher` (P_ID,Name,Address,Email,Phone) VALUES('$P_ID','$Name','$Address','$Email','$Phone')";

        $result = mysqli_query($conn,$sql);


        if($result){

         
          header('location:display.php');
        }

        else{
          
          die(mysqli_error($conn));
        }
      
    }

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Create</title>
  </head>
  <body>
  




    
    <div class="container my-5">


        <form method="post">
          <div class="form-group">
            <label>Publisher ID</label>
            <input type="text" class="form-control"  placeholder="Enter Publisher ID" name="P_ID">
            
          </div>
          <div class="form-group">
            <label >Name</label>
            <input type="text" class="form-control"  placeholder="Enter Name" name="Name">
          </div>

          <div class="form-group">
            <label >Address</label>
            <input type="text" class="form-control"  placeholder="Enter Address" name="Address">
          </div>

          <div class="form-group">
            <label >Email</label>
            <input type="text" class="form-control"  placeholder="Enter Email" name="Email">
          </div>

          <div class="form-group">
            <label >Phone</label>
            <input type="text" class="form-control"  placeholder="Enter Phone" name="Phone">
          </div>

         

          <div class="text-center">
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
         </div>

         <button class="btn btn-success my-5 ">

      <a href="display.php" class="text-light"> Back </a>

        </button>
        </form>


      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>