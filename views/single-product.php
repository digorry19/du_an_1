<div class="page-title-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- page-title-inner start -->
                <div class="page-title-inner text-center">
                    <?php if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                        echo '
                        <h2 class="page-title">
                        ' . $tensp . '
                    </h2>';
                    }
                    ?>
                    <div class="breadcrumbs breadcrumb-bottom">
                        <ul>
                            <li><a href="index.php?act=sanpham">Cửa hàng</a></li>
                            <li>|</li>
                            <?php if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                                echo '
                        <li>
                                ' . $tensp . '
                            </li>';
                            } ?>
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
<div class="main-content-wrapper pt-100">
    <div class="container">
        <?php
        extract($onesp);
        ?>
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <!--product-thumbnail start-->
                <div class="product-thumbnail">
                    <div class="tab-content">
                        <?php
                        $hinh1 = $img_path . $img1;
                        $hinh2 = $img_path . $img2;
                        echo '
                            <div role="tabpanel" class="tab-pane active" id="Thumb1">
                                <a class="popup-link" href="' . $hinh1 . '"><img src="' . $hinh1 . '" alt=""> </a>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="Thumb2">
                                <a class="popup-link" href="' . $hinh2 . '"><img src="' . $hinh2 . '" alt=""></a>
                            </div>';
                        ?>

                        <!--                            <div role="tabpanel" class="tab-pane" id="Thumb3">-->
                        <!--                                <a class="popup-link" href="img/product/3.jpg"><img src="img/product/3.jpg" alt=""></a>-->
                        <!--                            </div>-->
                        <!--                            <div role="tabpanel" class="tab-pane" id="Thumb4">-->
                        <!--                                <a class="popup-link" href="img/product/4.jpg"><img src="img/product/4.jpg" alt=""></a>-->
                        <!--                            </div>-->
                        <!--                            <div role="tabpanel" class="tab-pane" id="Thumb5">-->
                        <!--                                <a class="popup-link" href="img/product/5.jpg"><img src="img/product/5.jpg" alt=""></a>-->
                        <!--                            </div>-->
                    </div>
                    <div class="modal-product-tab">
                        <ul class="nav product-small-thum owl-carousel">
                            <?php
                            $hinh1 = $img_path . $img1;
                            $hinh2 = $img_path . $img2;
                            echo '
                                <li role="presentation" class="active"><a href="#Thumb1" data-toggle="tab"><img src="' . $hinh1 . '" alt=""></a></li>
                                <li role="presentation"><a href="#Thumb2"  data-toggle="tab"><img src="' . $hinh2 . '" alt=""></a></li>
                                '; ?>
                        </ul>
                    </div>
                </div>
                <!--product-thumbnail end-->
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="single-product-page-content">
                    <div class="product-info">
                        <h3>
                            <?= $name ?>
                        </h3>
                        <div class="price-box">
                            <span class="new-price">
                                <?= number_format($pri_new, 0, ',', '.') ?> ₫
                            </span>
                        </div>
                        <p>
                            <?= $mota ?>
                        </p>
                        <form method="POST" action="index.php?act=addcart" class="single-cart">
                            <div class="quantity">
                                <input type="number" name="quantity" class="input-box" step="1" min="1" value="1">
                            </div>
                            <input type="submit" name="addtocart" class="single_add_to_cart_button"
                                value="Add to cart"></input>
                            <input type="hidden" name="id" value="<?= $idsp; ?>">
                            <input type="hidden" name="name" value="<?= $name ?>">
                            <input type="hidden" name="pri_new" value="<?= $pri_new ?>">
                            <input type="hidden" name="hinh1" value="<?= $hinh1 ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-info-detailed mt-100">
                    <div class="discription-tab-menu">
                        <ul role="tablist" class="nav">
                            <li class="active"><a href="#description" data-toggle="tab"
                                    class="active show">Description</a></li>
                            <li><a href="#review" data-toggle="tab">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="discription-content">
                        <div class="tab-content">
                            <div class="tab-pane fade in active show" id="description">
                                <div class="description-content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers
                                        feminine designs delivering stylish separates and statement dresses which have
                                        since evolved into a full ready-to-wear collection in which every item is a
                                        vital part of a woman’s wardrobe. The result? Cool, easy, chic looks with
                                        youthful elegance and unmistakable signature style. All the beautiful pieces are
                                        made in Italy and manufactured with the greatest attention. Now Fashion extends
                                        to a range of accessories including shoes, hats, belts and more!</p>
                                </div>
                            </div>
                            <div id="review" class="tab-pane fade">
                                <form class="form-review" action="index.php?act=binhluan" method="POST">
                                    <div class="review">
                                        <table class="table table-striped table-bordered table-responsive">
                                            <?php foreach ($dsbl as $dsbl) {
                                                extract($dsbl);
                                                echo '
                                            <tbody>
                                                <tr>
                                                    <td class="table-name"><strong>' . $user . '</strong></td>
                                                    <td class="text-right">' . $postdate . '</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p>' . $noidung . '</p>
                                                    </td>
                                                </tr>
                                            </tbody>';
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div class="review-wrap">
                                        <?php if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {

                                            ?>
                                            <input type="hidden" name="idsp" value="<?= $idsp ?>">
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="control-label">Your Review</label>
                                                    <textarea name="noidung" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons clearfix">
                                            <div class="pull-left">
                                                <input class="button-review" type="submit" name="binhluan" value="Bình luận"
                                                    required></input>
                                            </div>
                                        </div>
                                    <?php } else {
                                            echo '
                                             <h4>Bạn cần đăng nhập để có thể bình luận. </h4>
                                             <a href="index.php?act=dangnhap"><button class="button-review" type="button">Đăng nhập</button></a>
                                             ';
                                        } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- main-content-wrapper end -->
<div class="related-products pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2 class="titel">Trending PRODUCT</h2>
                    <p>Shop Laptop feature only the best laptop deals on the market.</p>
                </div>
            </div>
        </div>
        <div class="related-product-wrappner">
            <div class="row">
                <div class="related-product-active owl-carousel">
                    <?php
                    $i = 0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=ctsp&idsp=" . $idsp;
                        $hinh1 = $img_path . $img1;
                        $hinh2 = $img_path . $img2;
                        echo '
                        <div class="col">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="' . $linksp . '">
                                        <img class="primary-image" src="' . $hinh1 . '" alt="">
                                        <img class="secondary-image" src="' . $hinh2 . '" alt="">
                                    </a>
                                    <span>-35%</span>
                                    <div class="product-action">
                                        <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                        <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                        <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html"><h3>' . $name . '</h3></a>
                                    <div class="price-box">
                                        <span class="old-price">' . number_format($pri_old, 0, ',', '.') . ' ₫</span>
                                        <span class="new-price">' . number_format($pri_new, 0, ',', '.') . ' ₫</span>
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
        </div>
    </div>
</div>