<?php
session_start();
if(!isset($_SESSION['cust']))
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
                            <h1 itemprop="headline">Customer Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Customer Dashboard</li>
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
                                                                            <div class="row mrg20 custinfo_content">
                                                                                
                                                                        
                                                                    </div>
                                                                </div>
                                                                </div>   
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div>
                                               
                                                
                                                <div class="tab-pane fade" id="my-orders">
                                                    <div class="tabs-wrp brd-rd5">
                                                        <h4 itemprop="headline">MY ORDERS</h4>
                                                        <div class="booking-table custorder_content">
                                                       
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
        
      
    <script src="assets/js/custinfo.js"></script>
  </body>
</html>