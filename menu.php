<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>FoodShala</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    


</head>

<body itemscope>
    <main>
      <?php
        include("header.php");
        ?>

        <section>
            <div class="block less-spacing gray-bg top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            
                                <div class="" id="restaurant">
                                    
                                                       
                                    <div class="dashboard-title">
                                        <h4 itemprop="headline">RESTAURANT LIST</h4>
                                        <div class="booking-table restaurant-list">
</div></div>                  
                                    
                                </div>
                                <div class="" id="my-menu1">
                                    <div class="tabs-wrp brd-rd5">
                                        <div  id="menu-list-content">

                                        </div>
                                                       
                                        
                                        <div class="order-info">
                                        <a class="red-bg brd-rd4"  id="back" href="#" itemprop="url">BACK</a>  
                                        </div>
                                    </div>
                                </div>                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>



<?php
      include("footer.php");
      ?>
        
        <?php
      include("login-signin-modal.php");
      ?>
         <script src="assets/js/restaurantList.js"></script>

  </body>
</html>