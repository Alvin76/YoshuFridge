<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Shopping</title>

  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="../CSS/scrollingNav.css">

</head>

<body id="page-top">


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Fridge-o-Matic</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
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

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>This Section</h1>
      <p class="lead">Will have some sort of wheel with clickable images for getting to other pages; potentially a carousel, we will discuss it</p>
    </div>
  </header>

  <section id="fridge">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
        <h2>Fridge</h2>
        <!--Add a serch call here for items in the database-->
        <div class="FridgeSearch">
          <p>add a item here</p>
          <input type="text" placeholder="Search..">
        </div>
        <p>bacon</p><button type="button">+add</button><button type="button">-remove</button>
      </div>
        </div>
      </div>
  </section>

  <section id="freezer" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
           <h2>Frezer</h2>
        <!--Add a serch call here for items in the database-->
        <div class="FrezerSearch">
          <p>add a item here</p>
          <input type="text" placeholder="Search..">
        </div>
        <p>chicken</p><button type="button">+add</button><button type="button">-remove</button>
      </div>
      </div>
    </div>
  </section>

  <section id="pantry">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
           <h2>pantry</h2>
        <!--Add a serch call here for items in the database-->
        <div class="pantrySearch">
          <p>add a item here</p>
          <input type="text" placeholder="Search..">
        </div>
        <p>rice</p><button type="button">+add</button><button type="button">-remove</button>
      </div>
      </div>
    </div>
  </section>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
