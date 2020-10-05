<?php
session_start();
?>

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
  </head>
  <body itemscope>
    <main>
      <?php
        include("header.php");
        ?>



      <section>
        <div class="block">
          <div
            style="background-image: url(assets/images/topbg.jpg)"
            class="fixed-bg"
          ></div>
          <div class="restaurant-searching text-center">
            <div class="restaurant-searching-inner">
              <h2 itemprop="headline">
                Order <span>Food Online From</span> the Best Restaurants
              </h2>
            </div>
            <img
              class="bottom-clouds-mockup"
              src="assets/images/resource/clouds.png"
              alt="clouds.png"
              itemprop="image"
            />
          </div>
          <!-- Restaurant Searching -->
        </div>
      </section>

      <section>
        <div class="block remove-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="title1-wrapper text-center">
                  <div class="title1-inner">
                    <span>Website for Restaurant and Cafe</span>
                    <h2 itemprop="headline">Top Restaurants</h2>
                    <p itemprop="description">
                      Things that get tricky are things like burgers and fries,
                      or things that are deep-fried. We do have a couple of
                      burger restaurants that are capable of doing a good job
                      transporting but it's Fries are almost impossible.
                    </p>
                  </div>
                </div>
                <div class="top-restaurants-wrapper">
                  <ul class="restaurants-wrapper style2">
                    <li class="wow bounceIn" data-wow-delay="0.2s">
                      <div class="top-restaurant">
                        <a
                          class="brd-rd50"
                          href="#"
                          title="Restaurant 1"
                          itemprop="url"
                          ><img
                            src="assets/images/resource/top-restaurant1.png"
                            alt="top-restaurant1.png"
                            itemprop="image"
                        /></a>
                      </div>
                    </li>
                    <li class="wow bounceIn" data-wow-delay="0.4s">
                      <div class="top-restaurant">
                        <a
                          class="brd-rd50"
                          href="#"
                          title="Restaurant 2"
                          itemprop="url"
                          ><img
                            src="assets/images/resource/top-restaurant2.png"
                            alt="top-restaurant2.png"
                            itemprop="image"
                        /></a>
                      </div>
                    </li>
                    <li class="wow bounceIn" data-wow-delay="0.6s">
                      <div class="top-restaurant">
                        <a
                          class="brd-rd50"
                          href="#"
                          title="Restaurant 3"
                          itemprop="url"
                          ><img
                            src="assets/images/resource/top-restaurant3.png"
                            alt="top-restaurant3.png"
                            itemprop="image"
                        /></a>
                      </div>
                    </li>
                    <li class="wow bounceIn" data-wow-delay="0.8s">
                      <div class="top-restaurant">
                        <a
                          class="brd-rd50"
                          href="#"
                          title="Restaurant 4"
                          itemprop="url"
                          ><img
                            src="assets/images/resource/top-restaurant4.png"
                            alt="top-restaurant4.png"
                            itemprop="image"
                        /></a>
                      </div>
                    </li>
                    <li class="wow bounceIn" data-wow-delay="1s">
                      <div class="top-restaurant">
                        <a
                          class="brd-rd50"
                          href="#"
                          title="Restaurant 5"
                          itemprop="url"
                          ><img
                            src="assets/images/resource/top-restaurant5.png"
                            alt="top-restaurant5.png"
                            itemprop="image"
                        /></a>
                      </div>
                    </li>
                    <li class="wow bounceIn" data-wow-delay="1.2s">
                      <div class="top-restaurant">
                        <a
                          class="brd-rd50"
                          href="#"
                          title="Restaurant 5"
                          itemprop="url"
                          ><img
                            src="assets/images/resource/top-restaurant6.png"
                            alt="top-restaurant6.png"
                            itemprop="image"
                        /></a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- top resturents -->

    

      <?php
      include("footer.php");
      ?>
      <?php
      include("login-signin-modal.php");
      ?>
    </main>
    <!-- Main Wrapper -->
  </body>
</html>
