<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Fridge</title>
  </head>
  <body>
    <header>My Fridge</header>
    <nav>
      <a href="home.html">Home</a>
      <a href="login.html">login</a>
      <a href="recipies.html">recipies</a>
      <a href="shopinglist.html">shoping list</a>
      <a href="myinventory.html">my fridge</a>
    </nav>
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