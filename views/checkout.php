<?php if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
    ?>
    <div class="wrapper checkout-page">

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
                                    <li>Checkout</li>
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
                <div class="row">
                    <div class="col-lg-12">
                        <!-- coupon-area start -->
                        <div class="coupon-area">
                            <div class="coupon-accordion">
                                <h3>Have a coupon? <span id="showcoupon" class="coupon">Click here to enter your code</span>
                                </h3>
                                <div id="checkout-coupon" class="coupon-content">
                                    <div class="coupon-info">
                                        <p>If you have a coupon code, please apply it below.</p>
                                        <form action="#">
                                            <p class="checkout-coupon">
                                                <input type="text" placeholder="Coupon code">
                                                <button value="Apply coupon" name="apply_coupon" class="button-apply-coupon"
                                                    type="submit">Apply coupon
                                                </button>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- coupon-area end -->
                    </div>
                </div>
                <!-- checkout-area start -->
                <div class="checkout-area">
                    <form action="index.php?act=confirm" method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="checkbox-form mt-30">
                                            <h3 class="shoping-checkboxt-title">Billing Details</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <p class="single-form-row">
                                                        <label>Họ tên <span class="required">*</span></label>
                                                        <input type="text" name="name" required>
                                                    </p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <?php
                                                    if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
                                                        echo '
                                                <p class="single-form-row">
                                                    <label>Username or email <span class="required">*</span></label>
                                                    <input type="text" name="tk" value="' . $_SESSION['username'] . '"
                                                        required>
                                                </p>
                                                ';
                                                    } else {
                                                        echo '
                                                <p class="single-form-row">
                                                    <label>Username or email <span class="required">*</span></label>
                                                    <input type="text" name="tk" required>
                                                </p>
                                                ';
                                                    }
                                                    ?>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="single-form-row">
                                                        <label>Tỉnh <span class="required">*</span></label>
                                                        <select class="nice-select wide" name="city">
                                                            <option value="Tỉnh...">Tỉnh...</option>
                                                            <option value="Thành phố Hà Nội">Thành phố Hà Nội</option>
                                                            <option value="Thành phố Hồ Chí Minh">Thành phố Hồ Chí Minh
                                                            </option>
                                                            <option value="Thành phố Đà Nẵng">Thành phố Đà Nẵng</option>
                                                            <option value="Tỉnh Nam Định">Tỉnh Nam Định</option>
                                                            <option value="Tỉnh Thái Bình">Tỉnh Thái Bình</option>
                                                            <option value="Tỉnh Thanh Hóa">Tỉnh Thanh Hóa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>Địa chỉ <span class="required">*</span></label>
                                                        <input type="text" name="address" required>
                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>Số điện thoại <span class="required">*</span> </label>
                                                        <input type="tel" name="phone" required>
                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input type="email" name="email" required>
                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="single-form-row checkout-area">
                                                        <label><input type="checkbox" id="chekout-box"> Create an
                                                            account?</label>
                                                        <div class="account-create single-form-row">
                                                            <label class="creat-pass">Create account password
                                                                <span>*</span></label>
                                                            <input type="password" class="input-text">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <p class="single-form-row m-0">
                                                        <label>Ghi chú</label>
                                                        <textarea cols="5" rows="2" class="checkout-mess"
                                                            placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="checkout-review-order mt-30 ">
                                            <h3 class="shoping-checkboxt-title">Your order</h3>
                                            <?php
                                            if ((isset($_SESSION['cart'])) && (count($_SESSION['cart']) > 0)) {
                                                echo '
                                        <table class="checkout-review-order-table">
                                            <thead>
                                                <tr>
                                                    <th class="t-product-name">Sản phẩm</th>
                                                    <th class="product-total">Thành tiền</th>
                                                </tr>
                                            </thead>';
                                                $i = 0;
                                                $sum = 0;
                                                foreach ($_SESSION['cart'] as $cart) {
                                                    $tt = (int) $cart[3] * (int) $cart[4];
                                                    $sum += $tt;
                                                    echo '
                                            <tbody>
                                                <tr class="cart_item">
                                                    <td class="t-product-name">' . $cart[2] . '<strong
                                                            class="product-quantity"> ×' . $cart[4] . '</strong></td>
                                                    <td class="t-product-price"><span>' . number_format($tt, 0, ',', '.') . '₫</span></td>
                                                </tr>
                                            </tbody>';
                                                    $i++;
                                                }
                                                echo '
                                            <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Tổng thành tiền</th>
                                                    <td><span>' . number_format($sum, 0, ',', '.') . '₫</span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Phí ship</th>
                                                    <td>Free</td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Tổng</th>
                                                    <td><strong><span>' . number_format($sum, 0, ',', '.') . '₫</span></strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>';
                                            }
                                            ?>
                                            <div class="checkout-payment">
                                                <div class="payment_methods">
                                                    <p><input type="radio" name="pay" id="" value="1" required> Thanh toán
                                                        khi giao hàng</p>

                                                </div>
                                                <input class="button-continue-payment" type="submit" name="confirm"
                                                    value="Thanh toán">
                                                </input>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- checkout-area end -->
            </div>
        </div>
        <!-- main-content-wrapper end -->
    </div>

<?php } else {
    echo '<div class="text-center">
    <h1 class="m-3">Bạn cần đăng nhập để có thể thanh toán</h1>
    <a class="btn btn-outline-success" href="index.php?act=dangnhap">Đăng nhập</a>
    </div>';
} ?>