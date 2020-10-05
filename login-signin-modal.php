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

    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="assets/js/main.js"></script>
</head>

<body>

<div class="log-popup text-center">
        <div class="sign-popup-wrapper brd-rd5">
          <div class="sign-popup-inner brd-rd5">
            <a class="log-close-btn" href="#" title="" itemprop="url"
              ><i class="fa fa-close"></i
            ></a>
            <div class="sign-popup-title text-center">
              <h4 itemprop="headline">SIGN IN</h4>
            </div>
            <form class="sign-form" action="db/login.php"  method="post">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                  <input class="brd-rd3" type="email"  placeholder="Email" name="useremail" mandatory
                  />
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12">
                  <input class="brd-rd3" type="password" placeholder="Password" name="userpwd" mandatory/>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                  <span class="radio-box">
                    <input class="" type="radio" id ="customer" name = "userType" value = "customer" checked/>
                    
                  <label for="customer">Customer</label><br>
                  </span>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                <span class="radio-box">
                  <input type="radio" id ="restaurant"  name = "userType" value = "restaurant"/>
                  <label for="restaurant">Restaurant</label>
                  </span>
                </div>
                
                
                  </div>
                <div class="col-md-12 col-sm-12 col-lg-12">
                  <button class="red-bg brd-rd3" type="submit">SIGN IN</button>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12">
                  <a class="sign-btn" href="#" title="" itemprop="url"
                    >Not a member? Register</a
                  >
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="sign-popup text-center">
        <div class="sign-popup-wrapper brd-rd5">
          <div class="sign-popup-inner brd-rd5">
            <a class="sign-close-btn" href="#" title="" itemprop="url"
              ><i class="fa fa-close"></i
            ></a>
            <div class="sign-popup-title text-center">
              <h4 itemprop="headline">REGISTER</h4>
            </div>

              <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 log-reg">
                  <a class="red-bg brd-rd4 " href="customer-registration.php">Customer Regiatration</a>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 log-reg">
                 <a class="red-bg brd-rd4 " href="restaurant-registration.php" itemprop="url">Restaurant Registration</a>
                </div>
                
                <div class="col-md-12 col-sm-12 col-lg-12">
                  <br>
                  <a class="log-btn" href="#" title="" itemprop="url"
                    >Already Registered? Sign in</a
                  >
                </div>
              </div>
            
          </div>
        </div>
      </div>

</body>

</html>
