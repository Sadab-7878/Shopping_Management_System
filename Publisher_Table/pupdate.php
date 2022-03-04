<?php 

    include 'connection.php';

    $P_ID     =  $_GET['updateid'];
    $sql = "SELECT * FROM `publisher` WHERE P_ID=$P_ID";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $Name  =  $row['Name']; 
    $Address =  $row['Address'];
    $Email =  $row['Email'];
    $Phone     =  $row['Phone'];
    
    

    if(isset($_POST['submit'])){

       
        $Name  =  $_POST['Name']; 
        $Address =  $_POST['Address'];
        $Email =  $_POST['Email'];
        $Phone     =  $_POST['Phone'];
       


        $sql = "UPDATE `publisher` SET P_ID='$P_ID', Name='$Name',Address='$Address',Email='$Email',Phone='$Phone' WHERE P_ID='$P_ID'";

        $result = mysqli_query($conn,$sql);


        if($result){

        
          header('location:read.php');
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

   

    <title>Electricity Bill</title>
    
    <style>

      h1{

        text-align: center;
        color: burlywood;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        
      }

      
      body{
          background-color: #2E9598;
      }

      
    </style>


  </head>
  <body>
  
  

   

  <h1 > <marquee width="30%" direction="down" height="120px">
      UPDATE YOUR BOOKSTORE INFORMATIONS
</marquee></h1>
        

        <div class="container">

       
          <form method="post">
          
            <div class="form-group">
          
              <label >Name</label>
              <input type="text" class="form-control"  placeholder="Enter Name" name="Name"
              value=<?php echo $Name; ?>>
            </div>

            <div class="form-group">
              <label >Address</label>
              <input type="text" class="form-control"  placeholder="Enter Address" name="Address" value=<?php echo $Address; ?>>
            </div>

            <div class="form-group">
              <label >Email</label>
              <input type="text" class="form-control"  placeholder="Enter Email" name="Email" value=<?php echo $Email; ?>>
            </div>

            <div class="form-group">
              <label >Phone</label>
              <input type="text" class="form-control"  placeholder="Enter Phone" name="Phone" value=<?php echo $Phone; ?>>
            </div>

        

           

            



            <div class="text-center"><button type="submit" class="btn btn-primary" name="submit">Update</button></div>

            <button class="btn btn-success my-5 ">

        <a href="read.php" class="text-light"> Back </a>

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