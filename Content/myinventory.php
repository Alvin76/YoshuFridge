<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>My Inventory</title>

  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
            <a class="nav-link js-scroll-trigger" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="recipe.php">Recipes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="shopinglist.php">Shopping List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#fridge">Fridge</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#freezer">Freezer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#pantry">Pantry</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section" id="fridge">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto">
            <h2 class="section-heading text-uppercase">Fridge</h2>
          <h3 class="section-subheading text-muted">Your Refrigerator!</h3>
          <!--Add a serch call here for items in the database-->
          <div class="FridgeSearch">
            <p>add a item here</p>
            <p>
              <img src="https://user-images.githubusercontent.com/1689831/30980929-fe6d2e0a-a482-11e7-8b1c-4847190e3e4f.gif">
            </p>
            <input type="text" placeholder="Search..">
          </div>
          <p>bacon</p><button type="button">+add</button><button type="button">-remove</button>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section" id="freezer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto">
            <h2 class="section-heading text-uppercase">Freezer</h2>
          <h3 class="section-subheading text-muted">Your Freezer!</h3>
          <div class="FrezerSearch">
            <p>add a item here</p>
            <p>
              <img src="https://user-images.githubusercontent.com/1689831/30980929-fe6d2e0a-a482-11e7-8b1c-4847190e3e4f.gif">
            </p>
            <input type="text" placeholder="Search..">
          </div>
          <p>chicken</p><button type="button">+add</button><button type="button">-remove</button>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto">
         <h2 class="section-heading text-uppercase">Pantry</h2>
          <h3 class="section-subheading text-muted">Your Pantry!</h3>
          <div class="pantrySearch">
            <p>add a item here</p>
            <p>
              <img src="https://user-images.githubusercontent.com/1689831/30980929-fe6d2e0a-a482-11e7-8b1c-4847190e3e4f.gif">
            </p>
            <input type="text" placeholder="Search..">
          </div>
          <p>rice</p><button type="button">+add</button><button type="button">-remove</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="../JS/JQuery/min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="../JS/Bootstrap/bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../JS/JQuery/easing.min.js"></script>

  <!-- Custom scripts -->
  <script src="../JS/landing.min.js"></script>
</body>



</html>
