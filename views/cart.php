<div class="page-title-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- page-title-inner start -->
                <div class="page-title-inner text-center">
                    <h2 class="page-title">Cart</h2>
                    <div class="breadcrumbs breadcrumb-bottom">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>Cart</li>
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
            <div class="col-12">
                <form action="index.php?act=upcart" method="POST" class="cart-table">
                    <?php
                    if ((isset($_SESSION['cart'])) && (count($_SESSION['cart']) > 0)) {
                        echo '
                            <div class="table-content table-responsive">
                            <table class="table">
                            <thead>
                                <tr>
                                    <th class="plantmore-product-remove">remove</th>
                                    <th class="plantmore-product-thumbnail">images</th>                                    
                                    <th class="cart-product-name">Product</th>
                                    <th class="plantmore-product-price">Unit Price</th>
                                    <th class="plantmore-product-quantity">Quantity</th>
                                    <th class="plantmore-product-subtotal">Total</th>
                                </tr>
                            </thead>';
                        $i = 0;
                        $sum = 0;
                        foreach ($_SESSION['cart'] as $cart) {
                            $tt = (int) $cart[3] * (int) $cart[4];
                            $sum += $tt;
                            echo '
                                <tbody>
                                <tr>
                                    <td class="plantmore-product-remove">
                                        <a href="index.php?act=delcart&i=' . $i . '"><i class="icon-close icons" onclick="return confirm(\'Bạn có chắc chắn muốn xóa sản phẩm này không?\')"></i></a>
                                    </td>
                                    <td class="plantmore-product-thumbnail">
                                        <a href="#"><img src="' . $cart[1] . '" alt="" class="w-50" /></a>
                                    </td>
                                    <td class="plantmore-product-name w-25">
                                        <a href="#">' . $cart[2] . '</a>
                                    </td>
                                    <td class="plantmore-product-price">
                                        <span class="amount">' . number_format($cart[3], 0, ',', '.') . '₫</span>
                                    </td>
                                    <td class="plantmore-product-quantity">
                                        <input class="quantity-input" name="quantity[' . $i . ']" value="' . $cart[4] . '" type="number" step="1" min="0">
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="amount">' . number_format($tt, 0, ',', '.') . '₫</span>
                                    </td>
                                </tr>
                                    </tbody>  ';
                            $i++;
                        }
                        echo '</table>';

                        if ($sum > 0) {
                            echo '                              
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                        placeholder="Coupon code" type="text" />
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit" />
                                </div>
                                <div class="coupon2">
                                    <a href="index.php?act=delcart"><input class="button" name="delete_cart" value="Delete cart" type="button" onclick="return confirm(\'Bạn có chắc chắn muốn xóa giỏ hàng không?\')"/></a>
                                    <input class="button" name="update_cart" value="Update cart" type="button" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span>
                                            ' . number_format($sum, 0, ',', '.') . '₫
                                        </span></li>
                                    <li>Total <span>
                                            ' . number_format($sum, 0, ',', '.') . '₫
                                        </span></li>
                                </ul>
                                <a href="index.php?act=checkout">Proceed to checkout</a>
                                <a href="index.php?act=xulimomo">
                                    Thanh toán bằng momo
                                 </a>
                            </div>
                            
                        </div>
                    </div>';
                        }
                    } else {
                        echo '<h1 class="text-center m-5">Giỏ hàng trống</h1>';
                    }
                    ?>
                   
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Bắt sự kiện khi giá trị của input quantity thay đổi
        $(".quantity-input").on("change", function () {
            // Lấy giá trị của input và chỉ số của sản phẩm
            var quantity = $(this).val();
            var index = $(this).attr('name').match(/\d+/)[0];

            // Gửi dữ liệu qua Ajax để cập nhật giỏ hàng
            $.ajax({
                url: 'index.php?act=upcart',
                type: 'POST',
                data: {
                    update_cart: true,
                    quantity: quantity,
                    index: index
                },
                success: function (response) {
                    // Xử lý phản hồi từ máy chủ
                    var data = JSON.parse(response);
                    if (data.success) {
                        // Cập nhật tổng tiền mà không làm mới trang
                        updateCartTotal(data.sum);

                        window.location.href = 'index.php?act=cart';
                    } else {
                        console.log('Error updating cart');
                    }
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        });

        // Hàm cập nhật tổng tiền giỏ hàng
        function updateCartTotal(total) {
            $(".cart-page-total span").html(number_format(total, 0, ',', '.') + '₫');
        }
    });
</script>