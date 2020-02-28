<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Fridge</title>
  </head>
  <body>
    <header>My Fridge</header>
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
        <a href="trending.php" class="list-group-item list-group-item-action bg-light"><img src="https://img.icons8.com/dusk/64/000000/open-source.png">
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
    <h1>Your Fridgeator :D</h1>
    <main>
      <div class="frozenFood">
        <h2>Frezer</h2>
        <!--Add a serch call here for items in the database-->
        <div class="FrezerSearch">
          <p>add a item here</p>
          <input type="text" placeholder="Search..">
        </div>
        <p>bacon</p><button type="button">+add</button><button type="button">-remove</button>
      </div>
      <div class="fridgeFood">
        <h2>Fridge</h2>
        <!--Add a serch call here for items in the database-->
        <div class="FridgeSearch">
          <p>add a item here</p>
          <input type="text" placeholder="Search..">
        </div>
        <p>bacon</p><button type="button">+add</button><button type="button">-remove</button>
      </div>
      <div class="fridgeFood">
        <h2>pantry</h2>
        <!--Add a serch call here for items in the database-->
        <div class="pantrySearch">
          <p>add a item here</p>
          <input type="text" placeholder="Search..">
        </div>
        <p>rice</p><button type="button">+add</button><button type="button">-remove</button>
      </div>
      <div class="other">
        <h2>pantry</h2>
        <!--Add a serch call here for items in the database-->
        <div class="otherSearch">
          <p>add a item here</p>
          <input type="text" placeholder="Search..">
        </div>
        <p>beer</p><button type="button">+add</button><button type="button">-remove</button>
      </div>
    </main>
    <footer><small>&copy;<?php echo date('Y'); ?> Team Alpaca </small></footer>
  </body>
</html>
