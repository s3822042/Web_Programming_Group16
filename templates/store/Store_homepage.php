<?php
session_start();

error_reporting(E_ERROR | E_PARSE);
if (fopen('../../php/install.php', 'r') != null) {
    exit("'install.php' still exists! Delete it to proceed!");
}

// PRODUCT

$product_csv = "../../data/products.csv";
$product_file = fopen($product_csv, "r");


while (($product_row = fgetcsv($product_file)) !== FALSE) {
    // Read the data
    $temp = substr($product_row[3], 0, 4);
    if ($temp == '2021') {
        $productCreatedDate[] = array($product_row[1], trim($product_row[3]));
    }

    if ($product_row[6] === 'TRUE') {
        $featureProduct[] = trim($product_row[1]);
    }
}

function date_compare($a, $b)
{
    $time1 = strtotime($a[1]);
    $time2 = strtotime($b[1]);
    if ($time1 < $time2)
        return 1;
    else if ($time1 > $time2)
        return -1;
    else
        return 0;
}


usort($productCreatedDate, "date_compare");
$sliceArrayProduct = array_splice($productCreatedDate, 0, 5, true);


$sliceArrayProduct = array_map(function ($x) {
    return $x[0];
}, $sliceArrayProduct);

$newProduct = array_values($sliceArrayProduct);

fclose($product_file);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>

    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/store/store_homepage.module.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>

<body>
    <!-- Navigation bar -->
    <header>
        <!-- Logo -->
        <div class="brand"> <a href="../../index.php"><img src="https://i.imgur.com/mE6aWmB.png" alt="logo" class="logo-img" /> </a> </div>
        <!-- Right menu -->
        <nav class="menu">
            <input type="checkbox" id="menuToggle" />
            <label for="menuToggle" class="menu-icon"><i class="fa fa-bars"></i></label>
            <ul>
                <a href="../about.php">
                    <li>About us</li>
                </a> <a href="../fees.html">
                    <li>Fees</li>
                </a> <a href="../account/account.php">
                    <li>Account</li>
                </a> <a href="../browse-menu.html">
                    <li>Browse</li>
                </a> <a href="../faq.html">
                    <li>FAQs</li>
                </a> <a href="../contact.html">
                    <li>Contact</li>
                </a> <a href="../login-form.php">
                    <li>Sign in</li>
                </a> <a href="../cart.php" id="cart">
                    <li>Cart</li>
                </a>
            </ul>
        </nav>
    </header>
    <!-- End header -->
    <!-- Feature product -->

    <?php
    echo '<section id="products">';
    echo '<h2 class="title">Featured Product</h2>';
    echo '<div class="container">';
    echo '<div class="product-container">';
    echo '<div class="product-card">';
    echo '<div class="product-name">';
    echo 'a';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
    ?>

    <!-- New Product -->

    <?php
    echo '<section id="products">';
    echo '<h2 class="title">New Product</h2>';
    echo '<div class="container">';
    echo '<div class="product-container">';
    echo '<div class="product-card">';
    echo '<div class="product-name">';
    echo 'a';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
    ?>

    <!-- Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="grid-container">
                <!-- Footer Logo -->
                <div class="grid-item"> <a href="../../index.php"><img src="https://i.imgur.com/mE6aWmB.png" alt="logo" class="logo-img" /></a> </div>
                <!-- Quick Link -->
                <div class="grid-item inner-grid-container">
                    <div class="grid-item"> <a href="../about.php">About Us</a> </div>
                    <div class="grid-item"> <a href="../fees.html">Fees</a> </div>
                    <div class="grid-item"> <a href="../browse-menu.html">Browse</a> </div>
                    <div class="grid-item"> <a href="../term_of_services.php">Term of Service</a> </div>
                    <div class="grid-item"> <a href="../account/account.php">Account</a> </div>
                    <div class="grid-item"><a href="../faq.html">FAQs</a></div>
                    <div class="grid-item"> <a href="../contact.html">Contact</a> </div>
                    <div class="grid-item"> <a href="../privacy_policies.php">Privacy Policy</a> </div>
                </div>
                <!-- Social Link -->
                <div class="grid-item">
                    <div class="social-buttons"> <a href=""><i class="fab fa-instagram circle-icon"></i></a> <a href=""><i class="fab fa-facebook circle-icon"></i></a> <a href=""><i class="fab fa-linkedin-in circle-icon"></i></a> <a href=""><i class="fab fa-twitter circle-icon"></i></a> </div>
                </div>
            </div>
            <hr />
            <!-- Copyright -->
            <p>&copy 2021 | RMIT University | Group 16</p>
        </div>
    </footer>

    <script type="text/javascript" src="../js/index.js"></script>

</body>

</html>