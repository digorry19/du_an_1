<?php
$statusLabels = [
    '0' => 'Đang chuẩn bị',
    '1' => 'Đã xác nhận',
    '2' => 'Đang vận chuyển',
    '3' => 'Đang giao hàng',
    '4' => 'Đã hủy',
];

function getStatusText($status, $statusLabels)
{
    return isset($statusLabels[$status]) ? $statusLabels[$status] : 'Không xác định';
}

?>

<!-- page-title-wrapper start -->
<div class="page-title-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- page-title-inner start -->
                <div class="page-title-inner text-center">
                    <h2 class="page-title">My Account</h2>
                    <div class="breadcrumbs breadcrumb-bottom">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>|</li>
                            <li>My Account</li>
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
        <div class="account-dashboard">
            <div class="dashboard-upper-info">
                <div class="row align-items-center no-gutters">
                    <div class="col-lg-3 col-md-12">
                        <div class="d-single-info">
                            <p class="user-name">Hello <span>
                                    <?= $_SESSION['username'] ?>
                                </span></p>
                            <p>(not
                                <?= $_SESSION['username'] ?> ? <a href="index.php?act=thoat">Log Out</a>)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="d-single-info">
                            <p>Need Assistance? Customer service at.</p>
                            <p>admin@devitems.com.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="d-single-info">
                            <p>E-mail them at</p>
                            <p>support@yoursite.com</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <div class="d-single-info text-lg-center">
                            <a class="view-cart" href="index.php?act=cart"><i class="fa fa-cart-plus"></i>view cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-2">
                    <!-- Nav tabs -->
                    <ul class="nav flex-column dashboard-list" role="tablist">
                        <li>
                            <a class="nav-link active" data-toggle="tab" href="#dashboard">Dashboard</a>
                        </li>
                        <li>
                            <a class="nav-link" data-toggle="tab" href="#orders">Đơn hàng</a>
                        </li>
                        <li>
                            <a class="nav-link" href="index.php?act=doimatkhau">Đổi mật khẩu</a>
                        </li>
                        <li>
                            <a class="nav-link" href="index.php?act=thoat">logout</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-10">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard-content">
                        <div id="dashboard" class="tab-pane fade show active">
                            <h3>Dashboard</h3>
                            <p>
                                From your account dashboard. you can easily check &amp;
                                view your <a href="#">recent orders</a>, manage your
                                <a href="#">shipping and billing addresses</a> and
                                <a href="#">edit your password and account details.</a>
                            </p>
                        </div>
                        <div id="orders" class="tab-pane fade">
                            <h3>Orders</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Đơn hàng</th>
                                            <th>Ngày bắt đầu</th>
                                            <th>Trạng thái</th>
                                            <th>Tổng tiền</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $i = 1;
                                        foreach ($gh as $item) {
                                            extract($item);
                                            $linkord = "index.php?act=cartorder&idord=" .$id;
                                            echo '
                                        <tr>
                                            <td>' . $i . '</td>
                                            <td>' . $created_at . '</td>
                                            <td>' . getStatusText($status, $statusLabels) . '</td>
                                            <td>' . number_format($total, 0, ',', '.') . ' ₫ for ' . $slsp . ' item</td>
                                            <td><a class="view" href="' . $linkord . '">view</a></td>
                                        </tr>   
                                        ';
                                            $i += 1;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                       
                        <div id="account-details" class="tab-pane fade">
                            <h3>Account details</h3>
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="account-login-form">
                                        <form action="#">
                                            <p>
                                                Already have an account?
                                                <a href="#">Log in instead!</a>
                                            </p>
                                            <label>Social title</label>
                                            <div class="input-radio">
                                                <span class="custom-radio"><input name="id_gender" value="1"
                                                        type="radio" />
                                                    Mr.</span>
                                                <span class="custom-radio"><input name="id_gender" value="1"
                                                        type="radio" />
                                                    Mrs.</span>
                                            </div>
                                            <label>First Name</label>
                                            <input name="first-name" type="text" />
                                            <label>Last Name</label>
                                            <input name="last-name" type="text" />
                                            <label>Email</label>
                                            <input name="email-name" type="text" />
                                            <label>Password</label>
                                            <input name="user-password" type="password" />
                                            <label>Birthdate</label>
                                            <input name="birthday" value="" placeholder="MM/DD/YYYY" type="text" />
                                            <span class="example"> (E.g.: 05/31/1970) </span>
                                            <span class="custom-checkbox">
                                                <input name="optin" value="1" type="checkbox" />
                                                <label>Receive offers from our partners</label>
                                            </span>
                                            <span class="custom-checkbox">
                                                <input name="newsletter" value="1" type="checkbox" />
                                                <label>Sign up for our newsletter<br /><em>You may unsubscribe at any
                                                        moment. For that
                                                        purpose, please find our contact info in the
                                                        legal notice.</em></label>
                                            </span>
                                            <div class="button-box">
                                                <button type="submit" class="default-btn">
                                                    save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>