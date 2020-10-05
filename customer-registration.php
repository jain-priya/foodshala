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
                            <h1 itemprop="headline">Customer Registration</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Customer Registration</li>
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
                                                        <form class="restaurant-info-form brd-rd5" action="db/registerCustomer.php" method="post" onsubmit="return custRegister()">
                                                            <div class="row mrg20">
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Full name<sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" name="custfullname" id="custfullname">
                                                                </div>
                                                                
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Mobile No.<sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" name="custmobno" id="custmobno" maxlength="10">
                                                                </div>
                                                            
                                                                <div class="col-md-3 col-sm-3 col-lg-3">
                                                                    <span class="radio-box">
                                                                    <input type="radio" class="brd-rd3" name="isveg" id="veg" value="veg">
                                                                    <label for="veg">Vegetarian</label>
                                                                    </span>
                                                                </div>
                                                                
                                                                <div class="col-md-3 col-sm-3 col-lg-3">
                                                                    <span class="radio-box">
                                                                    <input type="radio" class="brd-rd3" name="isveg" id="nonveg" value="nonveg">
                                                                    <label for="nonveg">Non-Vegetarian</label>
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Address<sup>*</sup></label>
                                                                    <textarea class="brd-rd3" type="textarea" name="custaddress"></textarea>
                                                                </div>
                                                                
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <h4 itemprop="headline">SIGNUP FIELDS</h4>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Email <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="email" name="custemail" id="custemail">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Password <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="password"  name="custpwd1" id="custpwd1">
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