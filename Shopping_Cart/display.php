<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>


    <style>

        #books{

            background: #0d0442;
            padding: 7% 10%;
        }

        .hr-style{

            border: 5px dotted white;
            border-bottom: none;
            width: 50px;
        }

        .carousel-item{

            padding: 5% 15%;
            text-align: center;
            font-style: italic;
        }
    </style>
  </head>
  <body>
   
        <div class="container text-white">

            <section id="books">

                <div class="section-title">
                    
                    <h3 class="text-center">BOOKS</h3>

                    <hr class="hr-style">

                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                
                                <p>“The only true wisdom is in knowing you know nothing.” ― Socrates</p>

                                <img class="b-img" src="b1.png" alt="the grid">

                                <h6>THE GRID</h6>
                              </div>
                              <div class="carousel-item">
                                <p >“We cannot solve our problems with the same thinking we used when we created them.” ― Albert Einstein</p>

                                <img class="b-img" src="b2.png" alt="the grid">

                                <h6>ELITE ENCOUNTERS</h6>
                              </div>
                              <div class="carousel-item">
                                <p>“Do not be afraid; our fate
                                    Cannot be taken from us; it is a gift.”― Dante Alighieri, Inferno</p>

                                <img class="b-img" src="b3.png" alt="the grid">

                                <h6>EVERYMAN KING</h6>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                    </div>

                    <button class="btn btn-success my-5 ">

        <a href="index.php" class="text-light"> Buy </a>

          </button>
                </div>
            </section>

        </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>