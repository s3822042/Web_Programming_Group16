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
    $_SESSION['last-visited-product'] = "cosmograph-daytona.php";
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
    <title>Cosmograph daytona</title>
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
    <div class="toast" id="toast"></div>
    <!-- Navigation bar -->
    <header>
      <!-- Logo -->
      <div class="brand">
        <a href="../../index.php"
          ><img
            src="https://i.imgur.com/mE6aWmB.png"
            alt="logo"
            class="logo-img"
          />
        </a>
      </div>
      <!-- Right menu -->
      <nav class="menu">
        <input type="checkbox" id="menuToggle" />
        <label for="menuToggle" class="menu-icon"
          ><i class="fa fa-bars"></i
        ></label>
        <ul>
          <a href="../about.php"><li>About us</li></a>
          <a href="../fees.html"><li>Fees</li></a>
          <a href="../account/account.php"><li>Account</li></a>
          <a href="../browse-menu.html"><li>Browse</li></a>
          <a href="../faq.html"><li>FAQs</li></a>
          <a href="../contact.html"><li>Contact</li></a>
          <a href="../login-form.php"><li>Sign in</li></a>
          <a href="../cart.php" style="color: red" class="cart-nav" id="cart"
            ><li>Cart: <span>0</span></li></a
          >
        </ul>
      </nav>
    </header>
    <!-- End header -->
    <!--body part-->
    <div class="product_description">
      <div class="product_content">
        <!--product content-->
        <h1 id="product-name">Cosmograph daytona</h1>
        <h3>General description</h3>
        <div class="product_detail">
          <!--product image different angle-->
          <div class="product_from_different_angle">
            <img
              src="https://i.imgur.com/IzeTT5m.jpg"
              class="angle"
              alt="product general picture"
            />
            <img
              src="https://i.imgur.com/QvMywkE.jpg"
              class="angle"
              alt="product from another angle"
            />
            <img
              src="https://i.imgur.com/vJFkkew.jpg"
              class="angle"
              alt="product from another angle"
            />
            <img
              src="https://i.imgur.com/zrY5tlr.jpg"
              class="angle"
              alt="product from another angle"
            />
            <img
              src="https://i.imgur.com/CK9TMPb.jpg"
              class="angle"
              alt="product from another angle"
            />
            <img
              src="https://i.imgur.com/FSQlwL8.jpg"
              class="angle"
              alt="product from another angle"
            />
          </div>
          <!--product picture-->
          <div class="product_picture">
            <img
              src="https://i.imgur.com/IzeTT5m.jpg"
              class="general_picture"
              alt="product general picture"
            />
          </div>
          <!--general description-->
          <div class="product_general_description">
            <span class="fa fa-star checked"></span>
            <!--full-star-->
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fas fa-star-half-alt checked"></span>
            <!--half star-->
            <span> 4.3/5 196 reviews </span>
            <p id="price">Price: $<span>97650</span></p>
            <!--size selection-->
            <p>Diameter: 41mm</p>
            <p>Color available: Yellow / Gold / Green</p>
            <div>
              <span>
                <img
                  src="https://i.imgur.com/IzeTT5m.jpg"
                  class="same_product_another_design"
                  alt="product with another design"
                />
              </span>
              <span>
                <img
                  src="https://i.imgur.com/lLcHxhm.jpg"
                  class="same_product_another_design"
                  alt="product with another design"
                />
              </span>
              <span>
                <img
                  src="https://i.imgur.com/4nXB9A2.jpg"
                  class="same_product_another_design"
                  alt="product with another design"
                />
              </span>
            </div>
            <p>Description</p>
            <ul>
              <li style="list-style-type: disc"><b>Brand</b> :Rolex</li>
              <li style="list-style-type: disc"><b>Series</b> :Daytona</li>
              <li style="list-style-type: disc"><b>Gender</b> :Men</li>
              <li style="list-style-type: disc"><b>Model</b> :m116508-0013</li>
              <li style="list-style-type: disc">
                <b>Watch label</b> :Swiss Made
              </li>
              <li style="list-style-type: disc"><b>Movement</b> :Automatic</li>
              <li style="list-style-type: disc">
                <b>Engine</b> :Rolex Calibre 4130
              </li>
              <li style="list-style-type: disc">
                <b>Power reserve</b> :72 hours
              </li>
            </ul>
            <br />
            <div class="buying">
              <form method="post" name="product-added-button-form" action="cosmograph-daytona.php">
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
        <!--end general description-->
        <div class="separator"></div>
        <!--detail description-->
        <div class="detail_description">
          <h3>Detail Description</h3>
          <p>
            18kt yellow gold case with a 18kt yellow gold Rolex oyster bracelet.
            Fixed 18kt yellow gold bezel showing tachymeter markings. Green dial
            with gold-tone hands and index hour markers. Minute markers around
            the outer rim. Dial Type: Analog. Luminescent hands and markers.
            Chronograph - three sub-dials displaying: 60 second, 30 minute and
            12 hour. Rolex calibre 4130 automatic movement with a 72-hour power
            reserve. Scratch resistant sapphire crystal. Screw down crown. Solid
            case back. Case size: 40 mm. Case thickness: 12.5 mm. Round case
            shape. Band width: 20 mm. Oysterlock clasp. Water resistant at 100
            meters / 330 feet. Functions: chronograph, tachymeter, hour, minute,
            second. Luxury watch style. Watch label: Swiss Made. Rolex
            Cosmograph Daytona Green Dial 18K Yellow Gold Oyster Men's Watch
            116508GRSO.
          </p>
          <div class="separator"></div>
          <h3>Dial</h3>
          <ul>
            <li><b>Dial color</b> :Green</li>
            <li><b>Type</b> :Analog</li>
            <li><b>Crystal</b> :Scratch Resistant Sapphire</li>
            <li><b>Hands</b> :Luminous Yellow Gold-tone</li>
            <li><b>Dial Markers</b> :Index</li>
            <li><b>Second Marker</b> :Minute Markers around the outer rim</li>
            <li><b>Sub Dial</b> :Three - 60 Second, 30 Minute and 12 Hour</li>
            <li><b>Luminiscene</b> :Hands and Markers</li>
            <li><b>Bezel</b> :Fixed Tachymeter Scale</li>
            <li><b>Bezel material</b> :18kt Yellow Gold</li>
            <li><b>Crown</b> :Screw Down</li>
          </ul>
          <div class="separator"></div>
          <h3>Case</h3>
          <ul>
            <li><b>Case size</b> :40 mm</li>
            <li><b>Case thickness</b> :12.5 mm</li>
            <li><b>Case material</b> :18kt Yellow Gold</li>
            <li><b>Case shape</b> :Round</li>
            <li><b>Case back</b> :Solid</li>
          </ul>
          <div class="separator"></div>
          <h3>Features</h3>
          <ul>
            <li><b>Water resistance</b> :100 meters / 330 feet</li>
            <li>
              <b>Function</b> :Chronograph, Hour, Minute, Second, Chronometer,
              Tachymeter
            </li>
            <li>
              <b>Watch features</b> :Analog, Chronograph, Chronometer, Gold
            </li>
          </ul>
          <div class="separator"></div>
          <h3>Band</h3>
          <ul>
            <li><b>Band material</b> :18kt Yellow Gold Rolex Oyster</li>
            <li><b>Band type</b> :Bracelet</li>
            <li><b>Band width</b> :20 mm</li>
            <li><b>Band color</b> :Yellow Gold-tone</li>
            <li><b>Clasp</b> :Oysterlock</li>
          </ul>
          <div class="separator"></div>
          <h3>Additional information</h3>
          <ul>
            <li><b>Watch style</b> :Luxury</li>
            <li><b>Warranty</b> :2 Year Jomashop Warranty</li>
            <li><b>Internal ID</b> :RLX116508GRSO</li>
            <li><b>UPC code</b> :842047109014</li>
            <li><b>Item variation</b> :116508-0013, 116508GRSO</li>
            <li><b>Department</b> :Watches</li>
            <li><b>Category</b> :Watches</li>
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
              <span> 4.6/5 90 reviews </span>
            </div>
            <!--review bar-->
            <div class="review_bar" id="review_bar_5_star">
              <!--star rating bar number-->
              <div>
                <p>5 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(13200% / 196)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>67%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_4_star">
              <!--star rating bar number-->
              <div>
                <p>4 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(2000% / 196)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>10%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_3_star">
              <!--star rating bar number-->
              <div>
                <p>3 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(2300% / 196)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>12%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_2_star">
              <!--star rating bar number-->
              <div>
                <p>2 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(1200% / 196)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>6%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_1_star">
              <!--star rating bar number-->
              <div>
                <p>1 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(900% / 196)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>5%</p>
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
                  alt="reviewer avatar"
                />
              </div>
              <!--review content-->
              <div class="review-content">
                <p>Lucas</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="far fa-star"></span>
                <!--no star-->
                <span class="review_reason"><b> Luxury</b> </span>
                <p class="text-area">
                  Beautiful. It is so satisfying to wear such a high quality
                  watch on our hand. It is an absolute amazing watch. It is
                  totally worth the amount that I have to pay
                </p>
                <i class="far fa-thumbs-up like-button"></i>
                <span> 14 likes </span>
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
                  alt="reviewer avatar"
                />
              </div>
              <!--review content-->
              <div class="review-content">
                <p>Sam</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="far fa-star"></span>
                <!--no star-->
                <span class="review_reason"
                  ><b> Exactly what you need</b>
                </span>
                <p class="text-area">
                  One of the best watch on my collection. It got everything from
                  the beauty and strength. Even though it is not too expensive
                  comparing to the exclusive made watch, it is can still be
                  considered one of the best out there
                </p>
                <i class="far fa-thumbs-up like-button"></i>
                <span> 12 likes </span>
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
                  alt="reviewer avatar"
                />
              </div>
              <!--review content-->
              <div class="review-content">
                <p>Manh</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="far fa-star"></span>
                <!--no star-->
                <span class="review_reason"><b> One of the best</b> </span>
                <p class="text-area">
                  It is perfect for people who are starting to collect watch. It
                  is worthy but at the same not too expensive. It is also newly
                  made which means it got all the best features that was
                  selected by the other generation. I highly suggest you should
                  buy this watch as soon as possible
                </p>
                <i class="far fa-thumbs-up like-button"></i>
                <span> 10 likes </span>
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
              <a href="submariner-black-dial.html"
                ><img
                  src="https://i.imgur.com/fN53ZCR.jpg"
                  class="product-img"
                  alt="similar product"
                />
              </a>
              <figcaption>
                <a href="" class="product-link">
                  <b>Submariner black dial </b>
                </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <!--full-star-->
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="far fa-star"></span>
                  <!--half star-->
                  <span> 4.1/5 180 reviews </span>
                </div>
              </figcaption>
            </figure>
          </span>
          <span class="product_list">
            <figure class="product">
              <a href="lady-datejust.html"
                ><img
                  src="https://i.imgur.com/aHGVgqI.jpg"
                  class="product-img"
                  alt="similar product"
                />
              </a>
              <figcaption>
                <a href="" class="product-link"> <b>Lady Datejust </b> </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <!--full-star-->
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
              <a href="lady-date-just-automatic.html"
                ><img
                  src="https://i.imgur.com/iGLuPUH.jpg"
                  class="product-img"
                  alt="similar product"
                />
              </a>
              <figcaption>
                <a href="" class="product-link">
                  <b> Lady Datejust automatic </b>
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
          <span class="product_list">
            <figure class="product">
              <a href="submariner-blue-dial.html"
                ><img
                  src="https://i.imgur.com/7fVDSvD.jpg"
                  class="product-img"
                  alt="similar product"
                />
              </a>
              <figcaption>
                <a href="submariner-blue-dial.html" class="product-link">
                  <b>Submariner blue dial </b>
                </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fas fa-star-half-alt checked"></span>
                  <span> 4.4/5 235 reviews </span>
                </div>
              </figcaption>
            </figure>
          </span>
          <span class="product_list">
            <figure class="product" id="product_5">
              <a href="champagne-day-date.html"
                ><img
                  src="https://i.imgur.com/qrT8W80.jpg"
                  class="product-img"
                  alt="similar product"
                />
              </a>
              <figcaption>
                <a href="" class="product-link"> <b>Day-Date Champagne</b> </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fas fa-star-half-alt checked"></span>
                  <span> 4.8/5 235 reviews</span>
                </div>
              </figcaption>
            </figure>
          </span>
        </div>
      </div>
      <!--end review content-->
    </div>
    <!--End body part-->
    <script src="../../js/add-cart-other.js"></script>
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
          </div>
          <!-- Social Link -->
          <div class="grid-item">
            <div class="social-buttons">
              <a href=""><i class="fab fa-instagram circle-icon"></i></a>
              <a href=""><i class="fab fa-facebook circle-icon"></i></a>
              <a href=""><i class="fab fa-linkedin-in circle-icon"></i></a>
              <a href=""><i class="fab fa-twitter circle-icon"></i></a>
            </div>
          </div>
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