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
    <link rel="stylesheet" type="text/css" href="../CSS/recipes.css">
  </head>
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Fridge-o-Matic</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="myinventory.php">Inventory</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="myinventory.php#shopping">Shopping List</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="col-lg-12">
        <div class="row">

          <div class="col-lg-12 text-center">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../Images/teriyaki-salmon-fried-rice.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    Teriyaki Salmon Fried Rice
                  </a>
                </h4>
              </div>
              <div class="card-footer">
                <span class="starRating">
                  <input id="rating5" type="radio" name="rating" value="5">
                  <label for="rating5">5</label>
                  <input id="rating4" type="radio" name="rating" value="4">
                  <label for="rating4">4</label>
                  <input id="rating3" type="radio" name="rating" value="3" checked>
                  <label for="rating3">3</label>
                  <input id="rating2" type="radio" name="rating" value="2">
                  <label for="rating2">2</label>
                  <input id="rating1" type="radio" name="rating" value="1">
                  <label for="rating1">1</label>
                </span>
              </div>
            </div>
          </div>

          <div class="col-lg-12 text-center">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="../Images/black-bean-quesadilla.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                      Black Bean Quesadilla
                    </a>
                  </h4>
                </div>
              <div class="card-footer">
                <span class="starRating">
                  <input id="rating5" type="radio" name="rating" value="5">
                  <label for="rating5">5</label>
                  <input id="rating4" type="radio" name="rating" value="4">
                  <label for="rating4">4</label>
                  <input id="rating3" type="radio" name="rating" value="3" checked>
                  <label for="rating3">3</label>
                  <input id="rating2" type="radio" name="rating" value="2">
                  <label for="rating2">2</label>
                  <input id="rating1" type="radio" name="rating" value="1">
                  <label for="rating1">1</label>
                </span>
              </div>
            </div>
          </div>

          <div class="col-lg-12 text-center">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="../Images/cajun-chicken-and-shrimp.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                      Cajun Chicken & Rice
                    </a>
                  </h4>
                </div>
              <div class="card-footer">
                <span class="starRating">
                  <input id="rating5" type="radio" name="rating" value="5">
                  <label for="rating5">5</label>
                  <input id="rating4" type="radio" name="rating" value="4">
                  <label for="rating4">4</label>
                  <input id="rating3" type="radio" name="rating" value="3" checked>
                  <label for="rating3">3</label>
                  <input id="rating2" type="radio" name="rating" value="2">
                  <label for="rating2">2</label>
                  <input id="rating1" type="radio" name="rating" value="1">
                  <label for="rating1">1</label>
                </span>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-12 -->

      <!-- Recipe Modals -->

      <!-- Modal 1 -->
      <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <div class="modal-body">
                    <!-- Recipe Details Go Here -->
                    <h2 class="text-uppercase">Teriyaki Salmon Fried Rice</h2>
                    <p class="item-intro text-muted">This is a winner winner SALMON dinner!.</p>
                    <img class="img-fluid d-block mx-auto" src="http://fridge-o-matic.com/Images/teriyaki-salmon-fried-rice.jpg" alt="">
                    <p>This winning recipe is sure to please! Simple and easy to prepare and does not require a lengthy marinade! Loved my kids and adults alike it is absoultely delcious and easy to pair with a variety of side dishes. </p>
                    <ul class="list-inline">
                      <li>1 lb raw wild salmon filets</li>
                      <li>3 tablespoons teriyaki sauce</li>
                      <li>spray avocado oil (or olive oil)</li>
                       <li>4 eggs, lightly beaten</li>
                      <li>1 tablespoon avocado oil</li>
                      <li>1 tablespoon garlic, minced</li>
                       <li>1 tablespoon fresh ginger</li>
                      <li>1/3 cup finely chopped green onion</li>
                      <li>3 cups cooked (cooled) brown rice</li>
                       <li>1 (red) bell pepper, diced</li>
                      <li>1 cup frozen peas & carrots</li>
                      <li>3 tablespoons low sodium soy sauce</li>
                       <li>2 teaspoons sesame oil (optional but recommended)</li>
                     
                    </ul>
                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                      <i class="fas fa-times"></i>
                      Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal 2 -->
      <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <div class="modal-body">
                    <!-- Recipe Details Go Here -->
                    <h2 class="text-uppercase">Black Bean Quesadilla</h2>
                    <p class="item-intro text-muted">Yummy veggie qusadillas big on flavor! </p>
                    <img class="img-fluid d-block mx-auto" src="http://fridge-o-matic.com/Images/black-bean-quesadilla.jpg" alt="">
                    <p>Easy to make a perfect to store! They are suprisingly filling and packed full of flavor. </p>
                    <ul class="list-inline">
                      <li>Spray avacado oil</li>
                      <li>1 green bell pepper, sliced</li>
                      <li>1 red bell pepper, sliced</li>
                      <li>juice from 1 lime</li>
                    </ul>
                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                      <i class="fas fa-times"></i>
                      Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal 3 -->
      <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <div class="modal-body">
                    <!-- Recipe Details Go Here -->
                    <h2 class="text-uppercase">Cajun Chicken & Shrimp</h2>
                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                    <img class="img-fluid d-block mx-auto" src="http://fridge-o-matic.com/Images/cajun-chicken-and-shrimp.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                    <ul class="list-inline">
                      <li>1 tablespoon olive oil</li>
                      <li>1 tablespoon garlic, minced</li>
                      <li>2/3 cup (white) onion, diced</li>
                      <li>1 green bell pepper, diced</li>
                      <li>2 celery stalks, diced</li>
                        <li>2 celery stalks, diced</li>
                        <li>1 tablespoon smoked paprika</li>
                        <li>1 teaspoon cayenne (or less depending on your heat preferences)</li>
                        <li>1 teaspoon turmeric (optional)</li>
                        <li>2 teaspoons dried oregano</li>
                        <li>5 cups cooked brown rice</li>
                        <li>1 can (14.5 oz) no-salt-added diced tomatoes</li>
                        <li>18oz water (TIP: use the tomato can for measurement so it should be 1 1/2 cans)</li>
                        <li>5 tablespoons tomato paste (Substitute: tomato sauce)</li>
                        <li>3/4 lb raw jumbo shrimp</li>
                        <li>2 bay leaves (optional)</li>
                        <li>sea salt & pepper to taste</li>



                    </ul>
                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                      <i class="fas fa-times"></i>
                      Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


  </body>

   <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Fridge-o-Matic 2020</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>




  <!-- Bootstrap core JavaScript -->
  <script src="../JS/JQuery/min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="../JS/Bootstrap/bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../JS/JQuery/easing.min.js"></script>

  <!-- Custom scripts -->
  <script src="../JS/recipe.js"></script>


</html>
