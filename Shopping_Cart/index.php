<?php include("header.php"); 

    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
  
        <div class="container mt-5">
            
            <div class="row">
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="b1s.png" class="card-img-top" >
                        <div class="card-body text-center">
                          <h5 class="card-title">THE GRID</h5>
                          <p class="card-text">Price: 450TK</p>
                          <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                          <input type="hidden" name="Item_Name" value="Book 1">
                          <input type="hidden" name="Price" value="450">
                        </div>
                      </div>
                    </form>
                </div>

                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="b2s.png" class="card-img-top" >
                        <div class="card-body text-center">
                          <h5 class="card-title">ELITE ENCOUNTERS</h5>
                          <p class="card-text">Price: 650TK</p>
                          <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                          <input type="hidden" name="Item_Name" value="Book 2">
                          <input type="hidden" name="Price" value="650">
                        </div>
                      </div>
                    </form>
                </div>

                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="b3s.png" class="card-img-top" >
                        <div class="card-body text-center">
                          <h5 class="card-title">EVERYMAN KING</h5>
                          <p class="card-text">Price: 750TK</p>
                          <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add To Cart</button>
                          <input type="hidden" name="Item_Name" value="Book 3">
                          <input type="hidden" name="Price" value="750">
                        </div>
                      </div>
                    </form>
                </div>

                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="b4s.png" class="card-img-top" >
                        <div class="card-body text-center">
                          <h5 class="card-title">PSYCHOLOGY OF MONEY</h5>
                          <p class="card-text">Price: 950TK</p>
                          <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add To Cart</button>
                          <input type="hidden" name="Item_Name" value="Book 4">
                          <input type="hidden" name="Price" value="950">
                        </div>
                      </div>
                    </form>
                </div>
            </div>

        </div>

</body>
</html>