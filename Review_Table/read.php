<?php 

    include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Details</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="eldisplaystyle.css">

    <style>

      body{
        background-color: #B8E885;
      }
      h1{
        margin:20px;
        text-align: center;
        color: burlywood;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        
      }
    </style>
</head>
<body>

  <h1 > <marquee width="60%" direction="left" height="120px">
    Review INFORMATIONS
    </marquee></h1>
        <div class="container">

            <button class="btn btn-success my-5">

                 <a href="create.php" class="text-light"> Add Data </a>
        
        </button>


        <table class="table table-striped table-success">
  <thead>
    <tr>
      <th scope="col">Review_ID</th>
      <th scope="col">Name</th>
      <th scope="col">Review</th>
      <th scope="col">Email</th>
      
      
    </tr>
  </thead>
  <tbody>

    <?php 
    
        $sql = "SELECT * FROM `review`";
        $result = mysqli_query($conn,$sql);

        if($result){

           while($row = mysqli_fetch_assoc($result)){

                $R_ID = $row['R_ID'];
                $Name = $row['Name'];
                $Review = $row['Review'];
                $Email = $row['Email'];
               
                

                echo '

                <tr>
                    <th scope="row">'.$R_ID.'</th>
                    <td>'.$Name.'</td>
                    <td>'.$Review.'</td>
                    <td>'.$Email.'</td>
                   
                

                    <td>

                      <button class="btn btn-success"><a href="pupdate.php?updateid='.$R_ID.'" class="text-light">Update</a></button>
                      
                      <button  class="btn btn-danger"><a href="pdelete.php?deleteid='.$R_ID.'" class="text-light">Delete</a></button>
            
                   </td> 
                </tr>
                
                
                ';
           }
            
        }
    
    
    ?>

     
      
    
  </tbody>
</table>

<div class="clearfix"> 

<button class="btn btn-success my-5 float-left">

<a href="display.php" class="text-light"> Back </a>

</button>



      

</div>

        </div>


</body>
</html>