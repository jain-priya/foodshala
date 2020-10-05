<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>FoodShala</title>
    <link
      rel="shortcut icon"
      href="assets/images/favicon.png"
      type="image/x-icon"
    />

    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

<div class="preloader">
        <div id="cooking">
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div id="area">
            
          </div>
        </div>
      </div>
<header class="stick">
        <div class="topbar">
         
        </div>
        <!-- Topbar -->
        <div class="logo-menu-sec">
          <div class="container">
            <div class="logo">
              <h1 itemprop="headline">
                <a href="index.php" title="Home" itemprop="url"
                  ><img
                    src="assets/images/my-logo.png"
                    alt="my-logo.png"
                    itemprop="image"
                /></a>
              </h1>
            </div>
            <nav>
              <div class="menu-sec">
                <ul>
                <li><a href="menu.php" title="RESTAURANTS" itemprop="url"><span class="red-clr">ORDER FOOD</span>MENU</a></li>
                          
                </ul>
                <?php
                  if(isset($_SESSION['rest']))
                    {
                      ?>

                <a class="red-bg brd-rd4" href="./db/signout.php" title="Register" itemprop="url">SIGNOUT</a>
                <a class="red-bg brd-rd4" href="restDashboard.php" title="Login" itemprop="url">RESTAURANT</a>  
                 <?php   
                 }
                 else if(isset($_SESSION['cust'])){

                  ?>
                <a class="red-bg brd-rd4" href="./db/signout.php" title="Register" itemprop="url">SIGNOUT</a>
                <a class="red-bg brd-rd4" href="custDashboard.php" title="Login" itemprop="url">CUSTOMER</a>  

                <?php    
                 }else{
                    ?>

                <a class="sign-popup-btn red-bg brd-rd4" href="#" title="Register" itemprop="url">REGISTER</a>
                <a class="log-popup-btn red-bg brd-rd4" href="#" title="Login" itemprop="url">LOGIN</a>             
                  <?php
                 }
                  ?>
              </div>
            </nav>
            <!-- Navigation -->
          </div>
        </div>
        <!-- Logo Menu Section -->
      </header>
      <!-- Header -->

      <div class="responsive-header">
        <div class="responsive-topbar">
        
        </div>
        <div class="responsive-logomenu">
          <div class="logo">
            <h1 itemprop="headline">
              <a href="index.php" title="Home" itemprop="url"
                ><img
                  src="assets/images/my-logo.png"
                  alt="my-logo.png"
                  itemprop="image"
              /></a>
            </h1>
          </div>
          <span class="menu-btn yellow-bg brd-rd4"
            ><i class="fa fa-align-justify"></i
          ></span>
        </div>
        <div class="responsive-menu">
          <span class="menu-close red-bg brd-rd3"
            ><i class="fa fa-close"></i
          ></span>
          <div class="menu-lst">
            <ul>
              
            <li><a href="menu.php" title="RESTAURANTS" itemprop="url"><span class="red-clr">ORDER FOOD</span>MENU</a></li>
                
            </ul>
          </div>
          <div class="topbar-register">
          <?php
                  if(isset($_SESSION['rest']))
                    {
                      ?>

                <a class="red-bg brd-rd4" href="./db/signout.php" title="Register" itemprop="url">SIGNOUT</a>
                <a class="red-bg brd-rd4" href="restDashboard.php" title="Login" itemprop="url">RESTAURANT</a>  
                 <?php   
                 }
                 else if(isset($_SESSION['cust'])){

                  ?>
                <a class="red-bg brd-rd4" href="./db/signout.php" title="Register" itemprop="url">SIGNOUT</a>
                <a class="red-bg brd-rd4" href="custDashboard.php" title="Login" itemprop="url">CUSTOMER</a>  

                <?php    
                 }else{
                    ?>

                <a class="sign-popup-btn red-bg brd-rd4" href="#" title="Register" itemprop="url">REGISTER</a>
                <a class="log-popup-btn red-bg brd-rd4" href="#" title="Login" itemprop="url">LOGIN</a>             
                  <?php
                 }
                  ?>
          </div>
        </div>
        <!-- Responsive Menu -->
      </div>
      <!-- Responsive Header -->
</body>

</html>

    