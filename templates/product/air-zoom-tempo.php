<?php
	session_start();
  
  error_reporting(E_ERROR | E_PARSE);
  if (fopen('../../php/install.php', 'r') != null) {
      exit("'install.php' still exists! Delete it to proceed!");
  } 

  // unset($_COOKIE['visited']);
  // unset($_SESSION['a-product-added']);
  // unset($_SESSION['last-visited-product']);
  // unset($_POST['a-product-added']);
  // unset($_POST['quantity']);
  

  if (!isset($_COOKIE['visited'])) { // no cookie, so probably the first time here
    $_COOKIE['visited'] = 'yes';
    if (isset($_SESSION['a-product-added']) || isset($_SESSION['last-visited-product']))
    {
      unset($_SESSION['a-product-added']);
      unset($_SESSION['last-visited-product']);
    }
  }
  
  if (isset($_POST['a-product-added'])) {
    $_SESSION['a-product-added'] = 'already';
  }

  if (isset($_COOKIE['visited']) && $_COOKIE['visited'] == 'yes') {
    $_SESSION['last-visited-product'] = "air-zoom-tempo.php";
  } 


  // echo '<h2>$_SESSION values</h2>';
  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</pre>';
  // echo '<hr>';

  // echo '<h2>$_POST values</h2>';
  // echo '<pre>';
  // print_r($_POST);
  // echo '</pre>';
  // echo '<hr>';

  // echo '<h2>$_COOKIE values</h2>';
  // echo '<pre>';
  // print_r($_COOKIE);
  // echo '</pre>';
  // echo '<hr>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Air zoom Tempo NEXT %</title>
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/product.module.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>

  <body onmouseover="cartNumbers()">
  <!--toast-->
    <div class="toast" id="toast">
    </div>
    <!-- Navigation bar -->
    <header>
        <!-- Logo -->
        <div class="brand">
            <a href="../../index.php"><img src="https://i.imgur.com/mE6aWmB.png" alt="logo" class="logo-img" />
            </a>
        </div>
        <!-- Right menu -->
        <nav class="menu">
            <input type="checkbox" id="menuToggle" />
            <label for="menuToggle" class="menu-icon"><i class="fa fa-bars"></i
        ></label>
        <ul>
          <a href="../about.php"><li>About us</li></a>
          <a href="../fees.html"><li>Fees</li></a>
          <a href="../account/account.php"><li>Account</li></a>
          <a href="../browse-menu.html"><li>Browse</li></a>
          <a href="../faq.html"><li>FAQs</li></a>
          <a href="../contact.html"><li>Contact</li></a>
          <a href="../login-form.php"><li>Sign in</li></a>
          <a href="../cart.php"  style="color: red" class="cart-nav" id = "cart"><li>Cart: <span>0</span> </li></a>
        </ul> 
      </nav>
    </header>
    <!-- End header -->
    <!--body part-->
    <div class="product_description">
      <div class="product_content">
        <!--product content-->
        <h1 id="product-name">Air zoom Tempo NEXT %</h1>
        <h3>General description</h3>
        <div class="product_detail">
          <!--product image different angle-->
          <div class="product_from_different_angle">
            <img src="https://i.imgur.com/6ruNW3m.jpg" class="angle" />
            <img src="https://i.imgur.com/pte2Tvd.png" class="angle" />
            <img src="https://i.imgur.com/81nzuhp.png" class="angle" />
            <img src="https://i.imgur.com/tU7RiVQ.png" class="angle" />
            <img src="https://i.imgur.com/HqcfIMh.png" class="angle" />
            <img src="https://i.imgur.com/TDVQllF.png" class="angle" />
          </div>
          <!--product picture-->
          <div class="product_picture">
            <img
              src="https://i.imgur.com/6ruNW3m.jpg"
              class="general_picture"
            />
          </div>
          <!--general description-->
          <div class="product_general_description">
            <span class="fa fa-star checked"></span>
            <!--fullstar-->
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fas fa-star-half-alt checked"></span>
            <!--half star-->
            <span> 4.8/5 235 reviews </span><br>
           <p id="price">Price: $<span>255</span></p>
            <!--size selection-->
            <span>Size: </span>
            <input
                  type="number"
                  id="size"
                  name="size"
                  min="35"
                  max="60"
                  value="35"
                  style="margin-right:70px;"
            />

            <p>Color available: Hyper Turquoise/Chlorine Blue/White/Black</p>
            <div>
              <span>
                <img
                  src="https://i.imgur.com/6ruNW3m.jpg"
                  class="same_product_another_design"
                />
              </span>
              <span>
                <img
                  src="https://i.imgur.com/7hzAwMb.jpg"
                  class="same_product_another_design"
                />
              </span>
              <span>
                <img
                  src="https://i.imgur.com/747KoJG.jpg"
                  class="same_product_another_design"
                />
              </span>
              <span>
                <img
                  src="https://i.imgur.com/Zw9kT0e.jpg"
                  class="same_product_another_design"
                />
              </span>
              <span>
                <img
                  src="https://i.imgur.com/KBTLtkX.jpg"
                  class="same_product_another_design"
                />
              </span>
              <span>
                <img
                  src="https://i.imgur.com/xhvrlLi.jpg"
                  class="same_product_another_design"
                />
              </span>
            </div>
            <p>Description</p>
            <ul class="detail-list">
              <li style="list-style-type: disc">
                Cushioned heel pods add comfort.
              </li>
              <li style="list-style-type: disc">
                Asymmetrical lacing helps keep the foot secure and in place.
              </li>
              <li style="list-style-type: disc">
                Heel loop for easy on and off.
              </li>
              <li style="list-style-type: disc">Style: CI9924-300</li>
              <li style="list-style-type: disc">
                Semi-adhesive removable sockliner for easy replacement.
              </li>
              <li style="list-style-type: disc">
                Country/Region of Origin: Vietnam
              </li>
            </ul>
            <br />

            <div class="buying">
                <form method="post" name="product-added-button-form" action="air-zoom-tempo.php">
                  <input
                    type="number"
                    id="quantity"
                    name="quantity"
                    min="1"
                    max="100"
                    value="1"
                  />
                  <button type="submit" name="a-product-added" value="added" class="addtocart" style="margin-left: 10px; border: solid; padding: 5px; cursor: pointer;">Add Cart</button>
                </form>
            </div>
            
          </div>
        </div>
        <!--end general description-->
        <div class="separator"></div>
        <!--detail description-->
        <div class="detail_description">
          <h3>Detail Description</h3>
          <b>A DURABLE TRAINER, MADE TO BREAK RECORDS. </b>
          <p>
            The Nike Air Zoom Tempo NEXT% mixes durability with a design that
            helps push you towards your personal best. The result is a shoe
            built like a racer, but made for your everyday training routine.
          </p>
          <b>Zoom Forward </b>
          <p>
            Nike ZoomX foam in the footbed delivers energy return as you move
            forward. A visible Zoom Air unit provides responsive cushioning,
            giving you an additional spring with your stride.
          </p>
          <b>Responsive Heel</b>
          <p>
            Nike React technology at the heel is lightweight and durable. It
            helps keep your foot cushioned and secure with every step.
          </p>
          <b>Runner-Informed Traction</b>
          <p>
            The rubber outsole features a design created using data from
            hundreds of runners. That information helps place traction where
            your foot needs it most, giving you grip on multiple surfaces.
          </p>
          <b>Secure and Fast</b>
          <p>
            The look of fast comes alive with a translucent, high-tenacity
            Flyknit and synthetic upper. Its secure feel helps contain your foot
            with every step.
          </p>
        </div>
        <!--end detail description-->
        <!--review section-->
        <div class="separator"></div>
        <div class="review_part">
          <!-- review part-->
          <!--star rating (132-5 stars, 20-4stars, 23-3stars, 12-2stars,9-1stars)-->
          <div class="star_summary">
            <div>
              <h3>Customer review</h3>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fas fa-star-half-alt checked"></span>
              <span> 4.8/5 235 reviews </span>
            </div>
            <!--review bar-->
            <div class="review_bar" id="review_bar_5_star">
              <!--star rating bar number-->
              <div>
                <p>5 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(21000% / 235)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>90%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_4_star">
              <!--star rating bar number-->
              <div>
                <p>4 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(1500% / 235)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>6%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_3_star">
              <!--star rating bar number-->
              <div>
                <p>3 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(300% / 235)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>1%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_2_star">
              <!--star rating bar number-->
              <div>
                <p>2 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(300% / 235)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>1%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_1_star">
              <!--star rating bar number-->
              <div>
                <p>1 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(300% / 235)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>1%</p>
              </div>
            </div>
            <!--write your review here-->
            <div class="separator"></div>
            <div class="review">
              <h3>Review this product</h3>
              <p>You can write your review here</p>
              <form>
                <div class="rating">
                  <span>☆</span><span>☆</span><span>☆</span><span>☆</span
                  ><span>☆</span>
                </div>
                <p>Your preferred name:</p>
                <input type="text" name="user_pref_name" class="text-area" />
                <p>Your reason:</p>
                <input type="text" name="user's_reason " class="text-area" />
                <p>explanation:</p>
                <textarea name="review" class="text-area"> </textarea>
                <input type="submit" class="submit-button" />
              </form>
            </div>
          </div>
          <!--end star review-->
          <!--Show other people review-->
          <div class="other-review">
            <h1>User's review</h1>
            <!--comment 1-->
            <div class="review">
              <!--avatar of the user-->
              <div class="avatar">
                <img
                  src="https://i.imgur.com/l40m95m.png"
                  class="users-avatar"
                />
              </div>
              <!--review content-->
              <div class="review-content">
                <p>Michael</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="far fa-star"></span>
                <!--no star-->
                <span class="review_reason"
                  ><b> This is an amazing shoe but not perfect</b>
                </span>
                <p class="text-area">
                  This shoe fit perfectly into my feet but it doesn't really fit
                  for playing sports that I liked such as football but it is
                  perfect for running.
                </p>
                <i class="far fa-thumbs-up like-button"></i>
                <span> 59 likes </span>
              </div>
            </div>
            <!--end comment 1-->
            <!--comment 2-->
            <div class="review">
              <!--avatar of the user-->
              <div class="avatar">
                <img
                  src="https://i.imgur.com/l40m95m.png"
                  class="users-avatar"
                />
              </div>
              <!--review content-->
              <div class="review-content">
                <p>Michael</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="far fa-star"></span>
                <!--no star-->
                <span class="review_reason"
                  ><b> This is an amazing shoe but not perfect</b>
                </span>
                <p class="text-area">
                  This shoe fit perfectly into my feet but it doesn't really fit
                  for playing sports that I liked such as football but it is
                  perfect for running.
                </p>
                <i class="far fa-thumbs-up like-button"></i>
                <span> 63 likes </span>
              </div>
            </div>
            <!--end comment 1-->
            <!--comment 2-->
            <div class="review">
              <!--avatar of the user-->
              <div class="avatar">
                <img
                  src="https://i.imgur.com/dnHWRnW.png"
                  class="users-avatar"
                />
              </div>
              <!--review content-->
              <div class="review-content">
                <p>Nguyen The Minh</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <!--no star-->
                <span class="review_reason"><b> Perfect shoe</b> </span>
                <p class="text-area">
                  This is the best shoe I could ever wish for. I have never wear
                  a shoe that fit me this much. I am not just talking about the
                  size but also the feeling. The feeling of wearing the shoe
                  that can be used in every aspect and every sport is really
                  good.
                </p>
                <i class="far fa-thumbs-up like-button"></i>
                <span> 30 likes </span>
              </div>
            </div>
            <!--end comment 2-->
            <!--comment 3-->
            <div class="review">
              <!--avatar of the user-->
              <div class="avatar">
                <img
                  src="https://i.imgur.com/gc0dOkW.jpg"
                  class="users-avatar"
                />
              </div>
              <!--review content-->
              <div class="review-content">
                <p>Nguyen The Minh</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="far fa-star"></span>
                <!--no star-->
                <span class="review_reason"><b> Recommended</b> </span>
                <p class="text-area">
                  Not the best shoe for competitor or contestor but it is still
                  an amazing and affordable for common people to have a shoe to
                  do and enjoy their daily activity. You can do most thing with
                  this shoe since it is flexible
                </p>
                <i class="far fa-thumbs-up like-button"></i>
                <span> 21 likes </span>
              </div>
            </div>
            <!--end comment 3-->
          </div>
          <!--end other review-->
        </div>
        <!--end user review section-->
        <div class="similar-product">
          <span class="product_list">
            <figure class="product">
              <a href="Jordan-jumpman-2021-PF.html"
                ><img
                  src="https://i.imgur.com/VrKvgwl.jpg"
                  class="product-img"
                />
              </a>
              <figcaption>
                <a href="Jordan-jumpman-2021-PF.html" class="product-link">
                  <b>Jordan jumpman 2021 PF </b>
                </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fas fa-star-half-alt checked"></span>
                  <span> 4.5/5 32 reviews </span>
                </div>
              </figcaption>
            </figure>
          </span>
          <span class="product_list">
            <figure class="product">
              <a href="Jordan-onetake-2-PF.html"
                ><img
                  src="https://i.imgur.com/XGksMUd.jpg"
                  class="product-img"
                />
              </a>
              <figcaption>
                <a href="Jordan-onetake-2-PF.html" class="product-link">
                  <b> Jordan onetake 2 PF </b>
                </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <!--fullstar-->
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fas fa-star-half-alt checked"></span>
                  <!--half star-->
                  <span> 4.6/5 90 reviews </span>
                </div>
              </figcaption>
            </figure>
          </span>
          <span class="product_list">
            <figure class="product">
              <a href="kyrie-7-EP.html"
                ><img
                  src="https://i.imgur.com/IARpVzC.jpg"
                  class="product-img"
                />
              </a>
              <figcaption>
                <a href="kyrie-7-EP.html" class="product-link">
                  <b> Air zoom tempo NEXT% </b>
                </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <!--fullstar-->
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fas fa-star-half-alt checked"></span>
                  <!--half star-->
                  <span> 4.3/5 196 reviews </span>
                </div>
              </figcaption>
            </figure>
          </span>
          <span class="product_list">
            <figure class="product">
              <a href="mercurial-vapor-14-elite-FG.html"
                ><img
                  src="https://i.imgur.com/icnhKJD.jpg"
                  class="product-img"
                />
              </a>
              <figcaption>
                <a href="mercurial-vapor-14-elite-FG.html" class="product-link">
                  <b> Mercurial vapor 14 elite FG</b>
                </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <!--fullstar-->
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fas fa-star-half-alt checked"></span>
                  <!--half star-->
                  <span> 4.3/5 196 reviews </span>
                </div>
              </figcaption>
            </figure>
          </span>
          <span class="product_list">
            <figure class="product" id="product_5">
              <a href="night-crater-impact.html"
                ><img
                  src="https://i.imgur.com/m5o3lTS.jpg"
                  class="product-img"
                />
              </a>
              <figcaption>
                <a href="night-crater-impact.html" class="product-link">
                  <b> Night crater impact </b>
                </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fas fa-star-half-alt checked"></span>
                  <span> 4.4/5 75 reviews </span>
                </div>
              </figcaption>
            </figure>
          </span>
        </div>
      </div>
      <!--end review content-->
    </div>
    <!--End body part-->
    <script src="../../js/add-cart-nike.js"></script>
    <!-- Footer -->
    <footer class="page-footer">
      <div class="container">
        <div class="grid-container">
          <!-- Footer Logo -->
          <div class="grid-item">
            <a href="../../index.php"
              ><img
                src="https://i.imgur.com/mE6aWmB.png"
                alt="logo"
                class="logo-img"
            /></a>
          </div>
          <!-- Quick Link -->
          <div class="grid-item inner-grid-container">
            <div class="grid-item">
              <a href="../about.php">About Us</a>
            </div>
            <div class="grid-item">
              <a href="../fees.html">Fees</a>
            </div>
            <div class="grid-item">
              <a href="../browse-menu.html">Browse</a>
            </div>
            <div class="grid-item">
              <a href="../term_of_services.php">Term of Service</a>
            </div>
            <div class="grid-item">
              <a href="../account/account.php">Account</a>
            </div>
            <div class="grid-item"><a href="../faq.html">FAQs</a></div>
            <div class="grid-item">
              <a href="../contact.html">Contact</a>
            </div>
            <div class="grid-item">
              <a href="../privacy_policies.php">Privacy Policy</a>
            </div>
          </div>
          <!-- Social Link -->
          <div class="grid-item">
            <div class="social-buttons">
              <a href=""><i class="fab fa-instagram circle-icon"></i></a>
              <a href=""><i class="fab fa-facebook circle-icon"></i></a>
              <a href=""><i class="fab fa-linkedin-in circle-icon"></i></a>
              <a href=""><i class="fab fa-twitter circle-icon"></i></a>
            </div>
            <hr />
            <!-- Copyright -->
            <p>&copy 2021 | RMIT University | Group 16</p>
        </div>
    </footer>
    <!-- JavaScript -->
    <script src="../../js/index.js"></script>

</body>

</html>