<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>navbar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="navbar.css">
  <style>
  </style>
</head>
<body>
  <form action="">
    <header>
      <div class="navbar">

              <div class="nav-logo border" >
                <div class="logo"></div>  
              </div>

              <div class="nav-city border">
                 <p class="delever">deliver to </p>
                  <div class="nav-icon">
                    <i class="fa-solid fa-location-dot"></i>
                    <p class="Gujarat">Gujarat</p>
                  </div>
               </div>

                <div class="nav-search border">
                  <input type="text" placeholder="Search Cake" class="search-input">
                  <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </div>
                </div>

              <div class="nav-singin border">
                <i class="fa-regular fa-user"></i>
               
              </div>
              
              <div class="hart border">
                <i class="fa-regular fa-heart"></i>
              </div>

              <div class="nav-cart border">
                <i class="fa-solid fa-cart-shopping"></i>
                
              </div>
      </div>  

      <nav>
        <ul class="menu">
          <li><a href="home.php" class="hor">Home</a></li>
            <li class="dropdown">

                <a href="#" class="hor">Cakes</a>
                <div class="dropdown-content">
                    <div class="column">
                        <h3>Trending Cakes</h3>
                        <ul>
                            <li><a href="pinata.php">Pinata Cakes</a></li>
                            <li><a href="drip_cake.php">Drip Cakes</a></li>
                            <li><a href="pull_me_up.php">Pull Me Up Cakes</a></li>
                            <li><a href="">Surprise Cakes</a></li>
                            <li><a href="">Gourmet Cakes</a></li>                          
                            <li><a href="">Bomb Cakes</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <h3>By Many Type</h3>
                        <ul>
                            <li><a href="rose.php">Rose Cakes</a></li>
                            <li><a href="half.php">Half Cakes</a></li>
                            <li><a href="photocake.php">Photo Cakes </a></li>
                            <li><a href="heart.php">Heart Shaped Cakes</a></li>
                            <li><a href="">Bestsellers</a></li>
                            <li><a href="">Eggless Cakes</a></li>
                            <li><a href="">Photo Pulling Cakes</a></li>
                            <li><a href="">Cheese Cakes</a></li>
                          
                        </ul>
                    </div>
                    <div class="column">
                        <h3>By Flavours</h3>
                        <ul>
                            <li><a href="chocolate.php">Chocolate Cakes</a></li>
                            <li><a href="butterscotch.php">Butterscotch Cakes</a></li>
                            <li><a href="fruits_c.php">Fruit Cakes</a></li>
                            <li><a href="">Pineapple Cakes</a></li>
                            <li><a href="">Kit Kat Cakes</a></li>
                            <li><a href="">Black Forest Cakes</a></li>
                            <li><a href="">Red Velvet Cakes</a></li>
                            <li><a href="">Vanilla Cakes</a></li>                          
                            <li><a href="">Blueberry Cakes</a></li>
                            <li><a href="">Strawberry Cakes</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li><a href="#" class="hor">Theme Cakes</a></li>
            <li><a href="#" class="hor">By Relationship</a></li>
            <li><a href="#" class="hor">Desserts</a></li>
            <li><a href="#" class="hor">Customized Cakes</a></li>
            <li><a href="#" class="hor">Contact us</a></li>
            <li><a href="#" class="hor">About us</a></li>      
        </ul>
    </nav>
    </header>

    <footer>

    </footer>
  </form>
</body>
</html>