<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welocme!</title>
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

      <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="../CSS/home.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
  </head>
  <body>
    <header></header>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
          <div class="sidebar-heading">Fridge-o-Matic </div>
          <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">  <img src="https://img.icons8.com/dusk/64/000000/home.png" alt="home">
              Home</a>
            <a href="#" class="list-group-item list-group-item-action bg-light"><img src="https://img.icons8.com/dusk/64/000000/rack-of-lamb.png" alt="Recipes">
              Recipes</a>
            <a href="#" class="list-group-item list-group-item-action bg-light"><img src="https://img.icons8.com/dusk/64/000000/fridge.png" alt ="Inventory">
              Inventory</a>
            <a href="#" class="list-group-item list-group-item-action bg-light"><img src="https://img.icons8.com/dusk/64/000000/price-tag.png" alt = "Shopping List">
              Shopping List</a>
            <a href="#" class="list-group-item list-group-item-action bg-light"><img src="https://img.icons8.com/dusk/64/000000/email.png" alt="Login/Sign Up">
              Login/Sign Up</a>
              <a href="#" class="list-group-item list-group-item-action bg-light">The Team</a>
              <a href="#" class="list-group-item list-group-item-action bg-light">Trending</a>

          </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

<!-- Nav was here, leaving in toggle function in case we decide we want it

          <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle"><img src="https://img.icons8.com/dusk/64/000000/pancake.png"></button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </nav>

                  -->

           <p>
           <img class="img-fluid" src="../Images/Kitchen.png" alt="YourKitchen">
           </p>
        </div>
        <!-- /#page-content-wrapper -->


      </div>
      <!-- /#wrapper -->

      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Menu Toggle Script -->
      <script>
        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>

    </body>
    <main></main>
  </body>
</html>
