<!-- page-title-wrapper start -->
<div class="page-title-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- page-title-inner start -->
                <div class="page-title-inner text-center">
                    <h2 class="page-title">Shop</h2>
                    <div class="breadcrumbs breadcrumb-bottom">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
                <!-- page-title-inner end -->
            </div>
        </div>
    </div>
</div>
<!-- page-title-wrapper end -->

<!-- main-content-wrapper start -->
<div class="main-content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="sidebar_widget_wrapper pt-100">
                    <div class="sidebar_widget mb-60">
                        <h4 class="widget-title">Product categories</h4>
                        <ul class="product-categories">
                            <?php
                            foreach ($dsdm as $dsdm) {
                                extract($dsdm);
                                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                echo '
                                <li><a href="' . $linkdm . '">' . $name . '</a></li>';

                            } ?>
                        </ul>
                    </div>
                    <div class="widget_price_filter mb-60">
                        <h4 class="widget-title">Filter by price</h4>
                        <!-- filter-price-content start -->
                        <div class="filter-price-content">
                            <form action="#" method="post">
                                <div id="price-slider" class="price-slider"></div>
                                <div class="filter-price-wapper">
                                    <div class="filter-price-cont">
                                        <div class="input-type">
                                            <span>Price:</span>
                                            <input type="text" id="min-price" readonly="" />
                                        </div>
                                        <span>—</span>
                                        <div class="input-type">
                                            <input type="text" id="max-price" readonly="" />
                                        </div>
                                        <button class="button_fil" type="submit">
                                            Filter
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- filter-price-content end -->
                    </div>
                  
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- shop-top-bar start -->
                <div class="shop-top-bar pt-100">
                    <div class="product-view-mode">
                        <!-- product-select-box start-->
                        <div class="product-select-box">
                            <select class="orderby" name="orderby">
                                <option selected="selected" value="popularity">
                                    Sort by popularity
                                </option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">
                                    Sort by price: high to low
                                </option>
                            </select>
                        </div>
                        <!-- product-select-box end -->
                        <ul class="nav shop-item-filter-list" role="tablist">
                            <li class="active" role="presentation">
                                <a aria-selected="true" class="active show" data-toggle="tab" role="tab"
                                    aria-controls="grid-view" href="#grid-view"><i class="icon-grid icons"></i></a>
                            </li>
                            <li role="presentation">
                                <a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i
                                        class="icon-list icons"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- shop-top-bar end -->

                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="row">
                                <?php
                                $i = 0;
                                foreach ($spnew as $sp) {
                                    extract($sp);
                                    $linksp = "index.php?act=ctsp&idsp=" . $id;
                                    $hinh1 = $img_path . $img1;
                                    $hinh2 = $img_path . $img2;
                                    echo '
                                <div class="col-lg-4 col-md-4">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-thum">
                                            <a href="' . $linksp . '">
                                                <img class="primary-image" src="' . $hinh1 . '" alt="" />
                                                <img class="secondary-image" src="' . $hinh2 . '" alt="" />
                                            </a>
                                            <span>-35%</span>
                                            <div class="product-action">
                                                <a href="#" class="add-to-cart-btn"><i
                                                        class="icon-basket icons"></i></a>
                                                        <input type="hidden" name="id" value="<?= $id; ?>">
                                                        <input type="hidden" name="name" value="<?= $name ?>">
                                                        <input type="hidden" name="pri_new" value="<?= $pri_new ?>">
                                                        <input type="hidden" name="hinh1" value="<?= $hinh1 ?>">
                                                        <input type="hidden" name="quantity" value="1">

                                                <a href="#" class="compare-btn">
                                                    <i class="icon-tag icons"></i></a>
                                                <a href="#" class="add-to-wishlist-btn"><i
                                                        class="icon-heart icons"></i></a>
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
                                    <!-- single-product-wrap end -->
                                </div>';
                                    $i += 1;
                                }
                                ?>

                            </div>
                        </div>
                        <div id="list-view" class="tab-pane fade" role="tabpanel">
                            <div class="row">
                                <div class="col">
                                    <?php
                                    $i = 0;
                                    foreach ($spnew as $sp) {
                                        extract($sp);
                                        $linksp = "index.php?act=ctsp&idsp=" . $id;
                                        $hinh1 = $img_path . $img1;
                                        $hinh2 = $img_path . $img2;
                                        echo '
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-6">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-thum">
                                                    <a href="' . $linksp . '">
                                                        <img alt="" src="' . $hinh1 . '" class="primary-image" />
                                                        <img alt="" src="' . $hinh2 . '" class="secondary-image" />
                                                    </a>
                                                    <span>-35%</span>
                                                    <div class="product-action">
                                                        <a class="add-to-cart-btn" href="#"><i
                                                                class="icon-basket icons"></i></a>
                                                        <a class="compare-btn" href="#">
                                                            <i class="icon-tag icons"></i></a>
                                                        <a class="add-to-wishlist-btn" href="#"><i
                                                                class="icon-heart icons"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-6">
                                            <div class="product-info">
                                                <a href="' . $linksp . '">
                                                    <h3>' . $name . '</h3>
                                                </a>
                                                <div class="price-box">
                                                    <span class="new-price">' . number_format($pri_new, 0, ',', '.') . '₫</span>
                                                </div>
                                                <p>
                                                    ' . $mota . '
                                                </p>
                                            </div>
                                        </div>
                                    </div>';
                                        $i += 1;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
                <div class="row pagination-box">
                    <div class="col-lg-6">
                        <ul class="page-numbers">
                            <li><span class="page-numbers active">1</span></li>
                            <li><a href="#" class="page-numbers">2</a></li>
                            <li><a href="#" class="next page-numbers">→</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-right">
                        <p class="result-count">Showing 1&ndash;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main-content-wrapper end -->