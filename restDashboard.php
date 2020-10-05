<?php
session_start();
if(!isset($_SESSION['rest']))
{
	echo "<script>
         window.location='index.php';
			              exit();
			              </script>";
}
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
            <div class="block">
                <div class="fixed-bg" style="background-image: url(assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">Restaurant Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Restaurant Dashboard</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="dashboard-tabs-wrapper">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12 col-lg-3">
                                            <div class="profile-sidebar brd-rd5 wow fadeIn" data-wow-delay="0.2s">
                                                <div class="profile-sidebar-inner brd-rd5">
                                                    <div class="user-info red-bg">
                                                        <div class="user-info-inner text-center">
                                                            <span><a href="#" title="" itemprop="url"><?php echo $_SESSION['email'];?></a></span>
                                                            <a class="brd-rd3 sign-out-btn yellow-bg" href="./db/signout.php" title="" itemprop="url"><i class="fa fa-sign-out"></i> SIGN OUT</a>
                                                        </div>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#dashboard" data-toggle="tab"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                                                        <li><a href="#my-bookings" data-toggle="tab"><i class="fa fa-file-text"></i> MY MENU</a></li>
                                                        <li><a href="#my-orders" data-toggle="tab"><i class="fa fa-shopping-basket"></i> MY ORDERS</a></li>
                                                     </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-12 col-lg-9">
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="dashboard">
                                                    <div class="dashboard-wrapper brd-rd5">
                                                       
                                                        <div class="dashboard-title">
                                                            <h4 itemprop="headline">MY DATA</h4>
                                                           </div>
                                                           <div class="account-settings-inner">
                                                                <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <div class="profile-info-form-wrap">
                                                                            <div class="row mrg20 restinfo_content">
                                                                                
                                                                        
                                                                    </div>
                                                                </div>
                                                                </div>   
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div>
                                                <div class="tab-pane fade" id="my-bookings">
                                                    <div class="tabs-wrp brd-rd5">
                                                        <h4 itemprop="headline">MY MENU</h4>
                                                        <div class="booking-table records_content">
                                                       
                                                        </div>

                                                    </div>
                                                    <div class="order-info">
                                                    <a class="red-bg brd-rd4"  id="add-item" href="#" itemprop="url">ADD ITEM</a>  
                                                    </div>
                                                </div>
                                                
                                                <div class="tab-pane fade" id="my-orders">
                                                    <div class="tabs-wrp brd-rd5">
                                                        <h4 itemprop="headline">MY ORDERS</h4>
                                                        <div class="booking-table order_content">
                                                       
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Section Box -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php
      include("footer.php");
      ?>
            <div class="log-popup text-center">
        <div class="sign-popup-wrapper brd-rd5">
          <div class="sign-popup-inner brd-rd5">
            <a class="log-close-btn" href="#" title="" itemprop="url"
              ><i class="fa fa-close"></i
            ></a>
            <div class="sign-popup-title text-center">
              <h4 itemprop="headline">MENU ITEM</h4>
            </div>
           
                     
            <form method="post" class="sign-form">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6">
                <label>Item name<sup>*</sup></label>
                  <input class="brd-rd3" type="text"  placeholder="" name="itemName" id="itemName" mandatory/>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                <label>Item Price<sup>*</sup></label>
                  <input class="brd-rd3" type="text"  placeholder="" name="itemPrice" id="itemPrice" mandatory/>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                <span class="radio-box">
                  <input type="radio" id="vegItem"  name = "isItemVeg" value = "veg"/ checked>
                  <label for="vegItem">Veg</label>
                  </span>
                </div>
                
                <div class="col-md-6 col-sm-6 col-lg-6">
                  <span class="radio-box">
                    <input class="" type="radio" id="nonVegItem" name = "isItemVeg" value = "nonVeg"/>
                
                  <label for="nonVegItem">Non-Veg</label><br>
                  </span>
                  </div>
                  </div>
                  
                  <input type="hidden"  id="hidden_itemid" name="hidden_itemid"/>
                <div class="col-md-12 col-sm-12 col-lg-12">
                <button class="red-bg brd-rd3 add-row" id="addItemBtn" type="submit">Add</button>
                <button class="red-bg brd-rd3 edit-row" id="updateItemBtn" type="submit">Update</button>
                </div>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    <script src="assets/js/restmenu.js"></script>
  </body>
</html>