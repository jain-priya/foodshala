<?php
session_start();
if(isset($_SESSION['rest'])||isset($_SESSION['cust']))
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
                            <h1 itemprop="headline">Restaurant Registration</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Restaurant Registration</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block top-padd30 gray-bg">
                
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="sec-box">
                                <div class="reservation-tabs-wrapper">
                                    <div class="row">
                                        <div class="col-md-1 col-sm-0 col-lg-1">
                                        
                                        </div>
                                        <div class="col-md-9 col-sm-12 col-lg-9">
                                            <div class="reservation-tab-content">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="reservation-tab1">
                                                        <form class="restaurant-info-form brd-rd5" action="db/registerRestaurant.php" method="post" onsubmit="return restRegister()">
                                                            <div class="row mrg20">
                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Restaurant name <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" id="restname" name="restname">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Restaurant Phone <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" id="restmobno" name="restmobno" maxlength="10"> 
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Manager Name <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" id="managername" name="managername">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Manager Contact Phone <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" id="managermobno" name="managermobno" maxlength="10">
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Location<sup>*</sup></label>
                                                                    <textarea class="brd-rd3" type="textarea" id="restaddress" name="restaddress"></textarea>
                                                                </div>
                                                                
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <h4 itemprop="headline">SIGNUP FIELDS</h4>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Email <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="email" name="restemail" id="restemail">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Password <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="password" name="restpwd" id="restpwd">
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" id="agrement">
                                                                        <label for="agrement">Accept Terms and conditions</label>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                     <input type="submit" class="brd-rd3 red-bg" value="Register">
                                                                </div>
                                                            </div>
                                                        </form>
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
      <?php
      include("login-signin-modal.php");
      ?>
  </body>
</html>