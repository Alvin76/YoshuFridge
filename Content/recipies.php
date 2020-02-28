<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Recipes</title>
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

      <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="../CSS/recipies.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald" />
  </head>
  <body>


    <div class="d-flex" id="wrapper">
             <!-- Sidebar -->
       <div class="bg-light border-right" id="sidebar-wrapper">
         <div class="sidebar-heading">Fridge-o-Matic </div>
         <div class="list-group list-group-flush">
           <a href="home.php" class="list-group-item list-group-item-action bg-light">  <img src="https://img.icons8.com/dusk/64/000000/home.png" alt="home">
             Home</a>
           <a href="recipies.php" class="list-group-item list-group-item-action bg-light"><img src="https://img.icons8.com/dusk/64/000000/rack-of-lamb.png" alt="Recipes">
             Recipes</a>
           <a href="myinventory.php" class="list-group-item list-group-item-action bg-light"><img src="https://img.icons8.com/dusk/64/000000/fridge.png" alt ="Inventory">
             Inventory</a>
           <a href="shopinglist.php" class="list-group-item list-group-item-action bg-light"><img src="https://img.icons8.com/dusk/64/000000/price-tag.png" alt = "Shopping List">
             Shopping List</a>
           <a href="login.php" class="list-group-item list-group-item-action bg-light"><img src="https://img.icons8.com/dusk/64/000000/email.png" alt="Login/Sign Up">
             Login/Sign Up</a>
           <a href="theTeam.php" class="list-group-item list-group-item-action bg-light"><img src="https://img.icons8.com/dusk/64/000000/open-source.png">
             The Team</a>
             <a class="list-group-item list-group-item-action bg-light" href="" data-toggle="dropdown"><img src="https://img.icons8.com/dusk/64/000000/like.png">
               Trending<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li class="list-group-item list-group-item-action bg-light"><a href="#"><img src="https://img.icons8.com/dusk/64/000000/summer.png">
                 In Season</a></li>
               <li class="list-group-item list-group-item-action bg-light"><a href="#"><img src="https://img.icons8.com/dusk/64/000000/flex-biceps.png">
                 Protein Powered</a></li>
               <li class="list-group-item list-group-item-action bg-light"><a href="#"><img src="https://img.icons8.com/dusk/64/000000/vegan-food.png">
                 Vegan</a></li>
             </ul>
         </div>
       </div>
            <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div class="container">
          <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block img-fluid" src="../Images/teriyaki-salmon-fried-rice.jpg" width="900" height="350" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="../Images/black-bean-quesadilla.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="../Images/cajun-chicken-and-shrimp.jpg" alt="Third slide">
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

            <div class="row">

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="../Images/teriyaki-salmon-fried-rice.jpg" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a class="collapsed d-block" data-toggle="collapse" href="#collapse-collapsed" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
              Teriyaki Salmon Fried Rice
            </a>
                    </h4>
                    <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                      <h5> A Quick Fried Rice Dish </h5>
                      <p class="card-text">
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
Ingredients
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ingredients</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                                1 lb raw wild salmon filets
                                3 tablespoons teriyaki sauce
                                spray avocado oil (or olive oil)
                                4 eggs, lightly beaten
                                1 tablespoon avocado oil
                                1 tablespoon garlic, minced
                                1 tablespoon fresh ginger
                                1/3 cup finely chopped green onion
                                3 cups cooked (cooled) brown rice (TIP: best if leftover from a day or 2 prior)
                                1 (red) bell pepper, diced
                                1 cup frozen peas & carrots
                                3 tablespoons low sodium soy sauce
                                2 teaspoons sesame oil (optional but recommended)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                      </p>
                    </div>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">Item Two</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">Item Three</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">Item Four</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">Item Five</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">Item Six</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.row -->

          </div>
          <!-- /.col-lg-9 -->

        </div>
    <!-- /.container -->

      </div>
      <!-- /.wrapper -->

      <!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>
</html>
