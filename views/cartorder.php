<div class="page-title-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- page-title-inner start -->
                <div class="page-title-inner text-center">
                    <h2 class="page-title">Chi tiết đơn hàng</h2>
                    <div class="breadcrumbs breadcrumb-bottom">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>Cart Order</li>
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
                <form action="#" class="cart-table">
                    <?php
                    echo '
                            <div class="table-content table-responsive">
                            <table class="table">
                            <thead>
                                <tr>
                                    <th class="plantmore-product-quantity">STT</th>
                                    <th class="plantmore-product-thumbnail">images</th>                                    
                                    <th class="cart-product-name">Product</th>
                                    <th class="plantmore-product-price">Unit Price</th>
                                    <th class="plantmore-product-quantity">Quantity</th>
                                    <th class="plantmore-product-subtotal">Total</th>
                                </tr>
                            </thead>';
                    $i = 1;
                    $sum = 0;
                    // $cthd=loadall_cthd($id);
                    foreach ($cthd as $cthd) {
                        extract($cthd);
                        $hinh = $img_path . $spimg;
                        $tt = $spprice * $quantity;
                        $sum += $tt;
                        echo '
                                <tbody>
                                <tr>
                                    <td class="plantmore-product-remove">
                                        <span class="stt">' . $i . '</span>                                    
                                    </td>
                                    <td class="plantmore-product-thumbnail">
                                        <a href="#"><img src="' . $hinh . '" alt="" class="w-50" /></a>
                                    </td>
                                    <td class="plantmore-product-name w-25">
                                        <a href="#">' . $spname . '</a>
                                    </td>
                                    <td class="plantmore-product-price">
                                        <span class="amount">' . number_format($spprice, 0, ',', '.') . '₫</span>
                                    </td>
                                    <td class="plantmore-product-quantity">
                                        <span class="quantity">' . $quantity . '</span>
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
                                
                            </div>
                        </div>
                    </div>';
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>