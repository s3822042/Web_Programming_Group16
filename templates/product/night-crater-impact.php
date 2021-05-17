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
    $_SESSION['last-visited-product'] = "night-crater-impact.php";
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
    <title>Night crater impact</title>
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/product.module.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
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
          <a href="../cart.php"  style="color: red" class="cart-nav"id = "cart"><li>Cart: <span>0</span> </li></a>
        </ul>
      </nav>
    </header>
    <!-- End header -->
    <!--body part-->
    <div class="product_description">
      <div class="product_content">
        <!--product content-->
        <h1 id="product-name">Night crater impact</h1>
        <h3>General description</h3>
        <div class="product_detail">
          <!--product image different angle-->
          <div class="product_from_different_angle">
            <img src="https://i.imgur.com/m5o3lTS.jpg" class="angle" />
            <img src="https://i.imgur.com/x0Pf41C.png" class="angle" />
            <img src="https://i.imgur.com/1SOeobw.png" class="angle" />
            <img src="https://i.imgur.com/PJx3XKg.png" class="angle" />
            <img src="https://i.imgur.com/ZneYEEx.jpg" class="angle" />
            <img src="https://i.imgur.com/Y5beP9S.png" class="angle" />
          </div>
          <!--product picture-->
          <div class="product_picture">
            <img
              src="https://i.imgur.com/m5o3lTS.jpg"
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
            <span> 4.4/5 75 reviews </span>
            <p id="price">Price: $<span>342</span></p>
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

            <p>Color available: Light Bone/Stone/Volt/Black</p>
            <div>
              <span>
                <img
                  src="https://i.imgur.com/m5o3lTS.jpg"
                  class="same_product_another_design"
                />
              </span>
              <span>
                <img
                  src="https://i.imgur.com/OuLHSU6.jpg"
                  class="same_product_another_design"
                />
              </span>
            </div>
            <p>Description</p>
            <ul class="detail-list">
              <li style="list-style-type: disc">
                Rubber details on the outsole feature 15% Nike Grind and add
                traction and durability
              </li>
              <li style="list-style-type: disc">Embroidered Swoosh design</li>
              <li style="list-style-type: disc">
                Pinwheel logo indicates that this shoe is made from at least 20%
                recycled materials
              </li>
              <li style="list-style-type: disc">
                The shoe box is made from recycled cardboard and doubles as a
                delivery box
              </li>
              <li style="list-style-type: disc">Style: DB2477-010</li>
              <li style="list-style-type: disc">
                Country/Region of Origin: Vietnam
              </li>
            </ul>
            <br />
            <div class="buying">
              <form method="post" name="product-added-button-form" action="night-crater-impact.php">
                <input
                  type="number"
                  id="quantity"
                  name="quantity"
                  min="1"
                  max="100"
                  value="1"
                />
                <button type="submit" name="a-product-added" value="true" class="addtocart" style="margin-left: 10px; border: solid; padding: 5px; cursor: pointer;">Add Cart</button>
              </form>
          </div>
            </div>
          </div>
        </div>
        <!--end general description-->
        <div class="separator"></div>
        <!--detail description-->
        <div class="detail_description">
          <h3>Detail Description</h3>
          <b>TREND-SETTING EFFICIENCY.</b>
          <p>
            Nike Crater Impact is part of our sustainability journey to
            transform trash into shoes that tread a little lighter.Made from at
            least 25% recycled material by weight, it brings in unique design
            choices that reduce waste when compared with traditional
            methods—like an embroidered Swoosh, efficient overlays and of course
            its Crater foam midsole.
          </p>
          <b>Benefits</b>
          <ul>
            <li style="list-style-type: disc">
              Lifted Crater foam midsole is made from 12% recycled content, adds
              stability and has a unique speckled appearance.
            </li>
            <li style="list-style-type: disc">
              The upper's thoughtful and modern design includes straight-edged
              overlays for construction efficiency and scrap waste reduction.
            </li>
            <li style="list-style-type: disc">
              Made from at least 25% recycled material by weight.
            </li>
            <li style="list-style-type: disc">
              1-piece webbing eyestay mixes DIY flavour with an urban touch
              while adding to the pattern-efficient build.
            </li>
            <li style="list-style-type: disc">
              The athletics-inspired silhouette features sleek angles and a
              padded, low-cut collar for easy styling that's comfortable.
            </li>
            <li style="list-style-type: disc">
              Mesh on the upper keeps it airy and lightweight.
            </li>
            <li style="list-style-type: disc">
              Stitched-on Swoosh design adds a wild, zebra-like aesthetic and
              keeps with the efficient design.
            </li>
          </ul>
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
              <span> 4.4/5 75 reviews </span>
            </div>
            <!--review bar-->
            <div class="review_bar" id="review_bar_5_star">
              <!--star rating bar number-->
              <div>
                <p>5 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(5500% / 75)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>73%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_4_star">
              <!--star rating bar number-->
              <div>
                <p>4 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(500% / 75)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>8%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_3_star">
              <!--star rating bar number-->
              <div>
                <p>3 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(700% / 75)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>9%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_2_star">
              <!--star rating bar number-->
              <div>
                <p>2 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(500% / 75)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>7%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_1_star">
              <!--star rating bar number-->
              <div>
                <p>1 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(200% / 75)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>3%</p>
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
          <span class="product_list" id="product_1">
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
            <figure class="product" id="product_2">
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
            <figure class="product" id="product_3">
              <a href="kyrie-7-EP.html"
                ><img
                  src="https://i.imgur.com/IARpVzC.jpg"
                  class="product-img"
                />
              </a>
              <figcaption>
                <a href="kyrie-7-EP.html" class="product-link">
                  <b> Kyrie 7 EP </b>
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
            <figure class="product" id="product_4">
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
              <a href="air-zoom-tempo.html"
                ><img
                  src="https://i.imgur.com/6ruNW3m.jpg"
                  class="product-img"
                />
              </a>
              <figcaption>
                <a href="air-zoom-tempo.html" class="product-link">
                  <b> Air zoom tempo NEXT%</b>
                </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <!--fullstar-->
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fas fa-star-half-alt checked"></span>
                  <!--half star-->
                  <span> 4.8/5 235 reviews </span>
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