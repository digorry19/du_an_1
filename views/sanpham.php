<div class="page-title-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- page-title-inner start -->
                <div class="page-title-inner text-center">
                    <h2 class="page-title">Shop</h2>
                    <div class="breadcrumbs breadcrumb-bottom">
                        <ul>
                            <li><a href="index.php">Home</a></li>
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

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center">
                    <h2 class="titel"></h2>
                </div>
            </div>
        </div>
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
        
        <div class="row">
            <?php
            $i = 0;
            foreach ($dssp as $sp) {
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
                                    <!-- single-product-wrap end -->
                            