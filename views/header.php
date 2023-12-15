<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Home || Rongcha - Matcha Bootstrap 4 Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />

    <link rel="stylesheet" href="styles/css/bootstrap.min.css" />
    <link rel="stylesheet" href="styles/css/simple-line-icons.css" />
    <link rel="stylesheet" href="styles/css/icofont.css" />
    <link rel="stylesheet" href="styles/css/magnific-popup.css" />
    <link rel="stylesheet" href="styles/css/animate.css" />
    <link rel="stylesheet" href="styles/css/nice-select.css" />
    <link rel="stylesheet" href="styles/css/jquery-ui.css" />
    <link rel="stylesheet" href="styles/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="styles/css/mainmenu.css" />

    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/css/responsive.css" />
    <script src="styles/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div class="wrapper">
        <header>
            <div class="header-area bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="logo">
                                <a href="index.php"><img src="img/logo/logok.png" alt="" class="w-50" /></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="header-main-content">
                                <div class="main-menu-area d-none d-lg-block">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="index.php">Home</a>
                                            </li>
                                            <li><a href="index.php?act=about">About Us</a></li>
                                            <li>
                                                <a href="index.php?act=sanpham">Sản phẩm<i
                                                        class="icofont icofont-simple-down"></i></a>
                                                <ul class="sub-menu">
                                                    <?php
                                                    foreach ($dsdm as $dm) {
                                                        extract($dm);
                                                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                                        echo '
                                                    <li><a href="' . $linkdm . '">' . $name . '</a></li>';
                                                    }
                                                    ?>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="index.php?act=blog">Bài viết</a>
                                            </li>
                                            <li><a href="index.php?act=contact">Liên hệ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="right-blok-box">    
                                    <div class="serch-container hidden-xs">
                                        <a href="#"><i class="icon-magnifier"></i></a>
                                        <div class="blog-search">
                                            <form action="index.php?act=sanpham" method="post" id="search">
                                                <input type="text" placeholder="Search Here" name="kyw" />
                                                <button type="submit" name="search">
                                                    <i class="icofont icofont-search-alt-1"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="mine-cart-box">
                                        <a href="index.php?act=cart"><i class="icon-handbag"></i><span id="cart-total">
                                                <?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?>
                                            </span></a>
                                        <?php
                                        if ((isset($_SESSION['cart'])) && (count($_SESSION['cart']) > 0)) {
                                            echo '
                                        <ul class="mini-cart">';
                                            $i = 0;
                                            $sum = 0;
                                            foreach ($_SESSION['cart'] as $cart) {
                                                $tt = (int) $cart[3] * (int) $cart[4];
                                                $sum += $tt;
                                                echo '
                                            <li class="cart-item">
                                                <div class="cart-image">
                                                    <a href="single-product.html"><img src="' . $cart[1] . '"
                                                            alt="" /></a>
                                                </div>
                                                <div class="cart-title">
                                                    <a href="single-product.html">
                                                        <h4>' . $cart[2] . '</h4>
                                                    </a>
                                                    <span class="quantity">' . $cart[4] . ' ×</span>
                                                    <div class="price-box">
                                                        <span class="new-price">' . number_format($cart[3], 0, ',', '.') . '₫</span>
                                                    </div>
                                                    <a href="index.php?act=delcart&i=' . $i . '" class="remove_from_cart"><i
                                                            class="icon-trash icons" ></i></a>
                                                </div>
                                            </li>';
                                                $i++;
                                            }
                                            if ($sum > 0) {
                                                echo '

                                            <li class="subtotal-titles">
                                                <div class="subtotal-titles">
                                                    <h3>Tổng tiền :</h3>
                                                    <span>' . number_format($sum, 0, ',', '.') . '₫</span>
                                                </div>
                                            </li>
                                            <li class="mini-cart-btns">
                                                <div class="cart-btns">
                                                    <a href="index.php?act=cart">View cart</a>
                                                    <a href="index.php?act=checkout">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="top-login-menu">
                                        <?php
                                        if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
                                            echo '<div class="top-login-inner">
                                            <a href="index.php?act=account"><i class="icon-user"></i>
                                                    <span class="user-login">' . $_SESSION['username'] . '</span>
                                                </a>
                                                </div>';
                                        } else {
                                            ?>
                                            <div class="top-login-inner">
                                                <a href="index.php?act=dangnhap"><i class="icon-user"></i>
                                                    <span class="user-login">Login</span>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-12">

                            <div class="mobile-menu-area d-block d-lg-none">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home</a>
                                                <ul>
                                                    <li><a href="home-box.html">Home Box</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li>
                                                <a href="shop.html">Shop</a>
                                                <ul>
                                                    <li><a href="shop-right.html">Shop Right</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wish List</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"> Pages</a>
                                                <ul>
                                                    <li><a href="my-account.html">My account</a></li>
                                                    <li>
                                                        <a href="single-product.html">Single Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-details.html">Blog details</a>
                                                    </li>
                                                    <li>
                                                        <a href="login-register.html">Login Register</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contact-us.html"> Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                        </div>
                    </div> -->
                </div>
            </div>
        </header>