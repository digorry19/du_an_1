<?php 
if (isset( $thongbao_thanhcong['dangnhap']) && ( $thongbao_thanhcong['dangnhap'] != ""))
echo '<script type="text/javascript">
var popup = document.createElement("div");
popup.innerHTML = "'. $thongbao_thanhcong['dangnhap'].'";
popup.className = "custom-popup2";
document.body.appendChild(popup);

setTimeout(function(){
    document.body.removeChild(popup);
}, 3000);
</script>';
?>
<head>
    <link rel="stylesheet" href="../stylesheet/css/thongbao.css">
    
</head>
<div class="slider-main-area">
    <div class="slider-active owl-carousel">
        <!-- slider-wrapper start -->
        <div class="slider-wrapper" style="background-image: url(img/slider/slider-1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-1 col-xl-6 offset-xl-0 col-md-8">
                        <div class="slider-text-info slider-text-animation">
                            <h1>
                                Want to Drink <span> Organic </span> <br/>take matcha.
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetu adipisicing elit
                                sedeiu tempor inci ut labore et dolore magna aliqua.
                            </p>
                            <div class="slier-btn">
                                <a title="shop now" href="#" class="shop-btn">shop now<i class="icon-handbag"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider-wrapper end -->
        <!-- slider-wrapper start -->
        <div class="slider-wrapper" style="background-image: url(img/slider/slider-2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-1 col-md-8">
                        <div class="slider-text-info slider-text-animation">
                            <h1>
                                Want to Drink <span> Organic </span> <br/>take matcha.
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetu adipisicing elit
                                sedeiu tempor inci ut labore et dolore magna aliqua.
                            </p>
                            <div class="slier-btn">
                                <a title="shop now" href="#" class="shop-btn">shop now<i class="icon-handbag"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider-wrapper end -->
    </div>
</div>
<!-- slider-main-area end-->

<!-- product-area start -->
<div class="product-area section-bg ptb-100">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center">
                    <h2 class="titel">Trending PRODUCT</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($dstop4 as $sp) {
                extract($sp);
                $linksp = "index.php?act=ctsp&idsp=" . $id;
                $hinh1 = $img_path . $img1;
                $hinh2 = $img_path . $img2;
                echo '
            <div class="col-lg-3 col-md-6">
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-thum">
                        <a href="' . $linksp . '">
                            <img class="primary-image" src="' . $hinh1 . '" alt="" />
                            <img class="secondary-image" src="' . $hinh2 . '" alt="" />
                        </a>
                        <span>-35%</span>
                        <div class="product-action">
                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                            <a href="#" class="compare-btn">
                                <i class="icon-tag icons"></i></a>
                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                        </div>
                    </div>
                    <div class="product-info text-center">
                        <a href="' . $linksp . '">
                            <h3>' . $name . '</h3>
                        </a>
                        <div class="price-box">
                            <span class="old-price">' . number_format($pri_old, 0, ',', '.') . '₫</span>
                            <span class="new-price">' . number_format($pri_new, 0, ',', '.') . '₫</span>
                        </div>
                    </div>
                </div>
            </div>';
            
                $i += 1;
            }
            ?>
        </div>
    </div>
</div>
<!-- product-area end -->

<!-- provide-section start  -->
    <div class="provide-section section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <h3 class="provide-title">
                        we provide organic <br/>
                        green tea for you
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetu adipisicing elit sedeiu
                        tempor inci ut labore et dolore magna aliqua.
                    </p>
                    <div class="provide-btn">
                        <a href="#" class="read-button"
                        >Read More <i class="icofont icofont-double-right"></i
                        ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- provide-section end -->

    <!-- product-area start -->
    <div class="product-area section-bg ptb-100">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title text-center">
                        <h2 class="titel-2">New Products</h2>
                        <!-- product-tabs-list start -->
                        <div class="product-tabs-list">
                            <ul role="tablist" class="nav">
                                <li class="active" role="presentation">
                                    <a
                                            data-toggle="tab"
                                            role="tab"
                                            aria-controls="black-coffee"
                                            href="#black-coffee"
                                            class="active show"
                                            aria-selected="true"
                                    >Black Coffee <span class="count_products">8</span></a
                                    >
                                </li>
                                <li role="presentation">
                                    <a
                                            data-toggle="tab"
                                            role="tab"
                                            aria-controls="brown-tea"
                                            href="#brown-tea"
                                    >Brown Tea <span class="count_products">6</span></a
                                    >
                                </li>
                                <li role="presentation">
                                    <a
                                            data-toggle="tab"
                                            role="tab"
                                            aria-controls="green-tea"
                                            href="#green-tea"
                                    >Green Tea <span class="count_products">7</span></a
                                    >
                                </li>
                            </ul>
                        </div>
                        <!-- product-tabs-list end -->
                    </div>
                </div>
            </div>
            <!-- tab-content start -->
            <div class="tab-content">
                <div id="black-coffee" class="tab-pane active show" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/5.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/6.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>London balck 450 tea</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£155.00</span>
                                        <span class="new-price"> £100.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/2.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Billion torage nack bin</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£105.00</span>
                                        <span class="new-price"> £99.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/7.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>American black coffee</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£275.00</span>
                                        <span class="new-price"> £120.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>bd black tigarrod 223e</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£145.00</span>
                                        <span class="new-price"> £140.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/8.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£185.00</span>
                                        <span class="new-price"> £102.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/6.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£155.00</span>
                                        <span class="new-price"> £100.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/9.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£185.00</span>
                                        <span class="new-price"> £160.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/4.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£155.00</span>
                                        <span class="new-price"> £100.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                    </div>
                </div>
                <div id="brown-tea" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/10.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>American tea contard</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="new-price"> £102.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/6.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£155.00</span>
                                        <span class="new-price"> £100.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/9.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£185.00</span>
                                        <span class="new-price"> £160.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/4.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£155.00</span>
                                        <span class="new-price"> £100.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/8.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£185.00</span>
                                        <span class="new-price"> £102.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/4.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£155.00</span>
                                        <span class="new-price"> £100.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                    </div>
                </div>
                <div id="green-tea" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>American tea contard</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="new-price"> £102.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/6.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£155.00</span>
                                        <span class="new-price"> £100.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/9.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£185.00</span>
                                        <span class="new-price"> £160.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/4.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£155.00</span>
                                        <span class="new-price"> £100.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/8.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£185.00</span>
                                        <span class="new-price"> £102.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/10.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/2.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£185.00</span>
                                        <span class="new-price"> £102.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="single-product.html">
                                        <img
                                                class="primary-image"
                                                src="img/product/4.jpg"
                                                alt=""
                                        />
                                        <img
                                                class="secondary-image"
                                                src="img/product/3.jpg"
                                                alt=""
                                        />
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"
                                        ><i class="icon-basket icons"></i
                                        ></a>
                                        <a href="#" class="compare-btn">
                                            <i class="icon-tag icons"></i
                                            ></a>
                                        <a href="#" class="add-to-wishlist-btn"
                                        ><i class="icon-heart icons"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"
                                    ><h3>Green 104we tea.</h3></a
                                    >
                                    <div class="price-box">
                                        <span class="old-price">£155.00</span>
                                        <span class="new-price"> £100.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab-content end -->
        </div>
    </div>
    <!-- product-area end -->

    <!-- weekly-flash-wrapper start -->
    <div class="weekly-flash-wrapper">
        <div class="weekly-flash-inner">
            <div class="weekly-main-wrap">
                <div class="main-img">
                    <img src="img/banner/bg-03.jpg" alt=""/>
                </div>
                <div class="main-content">
                    <h4>RONGCHA DISCOUNT CODES AND OFFERS</h4>
                    <h2>WEEKLY FLASH SALE</h2>
                    <p>
                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                        esse molestie consequat, vel illum dolore eu feugiat nulla
                        facilisis at vero eros et accumsan et iusto odio dignissim qui
                        blandit praesent luptatum zzril delenit augue duis dolore te
                        feugait nulla facilisi.
                    </p>
                    <div class="collection-shoing">
                        <a href="#">View Shop</a>
                        <a href="#">View collection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- weekly-flash-wrapper end -->

    <!-- our-blog-area start -->
    <div class="our-blog-area section-bg ptb-100">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title text-center">
                        <h2 class="titel">Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="singel-our-blog">
                        <div class="blog-thum">
                            <img src="img/blog/1.jpg" alt=""/>
                            <div class="blog-button">
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <div class="aritcles-content text-center">
                            <div class="articles-date">
                                By <span>rongcha</span>- May 26,2018
                            </div>
                            <a href="blog-details.html"
                            >Lorem ipsum dolorsit abowab amet conse looking at its
                                layout.</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singel-our-blog">
                        <div class="blog-thum">
                            <img src="img/blog/2.jpg" alt=""/>
                            <div class="blog-button">
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <div class="aritcles-content text-center">
                            <div class="articles-date">
                                By <span>rongcha</span>- May 26,2018
                            </div>
                            <a href="blog-details.html"
                            >Green tea is dolor sitantion readable eiusmod ametunat
                                nulla pariatur.</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singel-our-blog">
                        <div class="blog-thum">
                            <img src="img/blog/3.jpg" alt=""/>
                            <div class="blog-button">
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <div class="aritcles-content text-center">
                            <div class="articles-date">
                                By <span>rongcha</span>- May 28,2018
                            </div>
                            <a href="blog-details.html"
                            >Lorem ipsum dolor sit amet conse layout nostrud
                                exercitation.</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our-blog-area end -->

    <!-- our-brand-area start -->
    <div class="our-brand-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="brand-active owl-carousel">
                    <div class="col">
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/1.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/2.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/3.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/4.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/3.png" alt=""/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our-brand-area end -->