<?php
session_start();
ob_start();

if (!isset($_SESSION['cart']))
    $_SESSION['cart'] = [];

include "models/pdo.php";
include "models/danhmuc.php";
include "models/sanpham.php";
include "models/taikhoan.php";
include "models/binhluan.php";
include "models/hoadon.php";
include "models/cthd.php";

include "global.php";

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop4 = loadall_sanpham_top4();
$dstop4price = loadall_sanpham_top4_price();

include "views/header.php";

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'ctsp':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $idsp = $_GET['idsp'];
                $onesp = loadone_sanpham($idsp);
                $dsbl = loadall_binhluan($idsp);
                $tensp = load_ten_sp($idsp);
                $incViews = update_view($idsp);
                include "views/single-product.php";
            } else {
                include "views/home.php";
            }

            break;
        case "sanpham":
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];

            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "views/sanpham.php";
            break;

        case 'dangky':
            $errors = array();
            $userErr = $emailErr = $passErr = '';

            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                // Lấy giá trị từ form
                $user = htmlspecialchars($_POST["user"]);
                $email = htmlspecialchars($_POST["email"]);
                $pass = htmlspecialchars($_POST["pass"]);

                // Kiểm tra dữ liệu nhập vào
                if (empty($user)) {
                    $userErr = "Username không được để trống";
                    $errors[] = $userErr;
                }

                if (empty($email)) {
                    $emailErr = "Email không được để trống";
                    $errors[] = $emailErr;
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Email không hợp lệ";
                    $errors[] = $emailErr;
                }

                if (empty($pass)) {
                    $passErr = "Password không được để trống";
                    $errors[] = $passErr;
                } elseif (strlen($pass) < 8) {
                    $passErr = "Password phải có ít nhất 8 ký tự";
                    $errors[] = $passErr;
                } elseif (!preg_match("/[A-Z]/", $pass)) {
                    $passErr = "Password phải có ít nhất một kí tự viết hoa";
                    $errors[] = $passErr;
                } elseif (!preg_match("/[0-9]/", $pass)) {
                    $passErr = "Password phải chứa ít nhất một ký tự số";
                    $errors[] = $passErr;
                } elseif (!preg_match("/[^a-zA-Z0-9]/", $pass)) {
                    $passErr = "Password phải có ít nhất một kí tự đặc biệt";
                    $errors[] = $passErr;
                }

                // Nếu không có lỗi, thực hiện đăng ký
                if (empty($errors)) {
                    insert_taikhoan($user, $email, $pass);

                    // Ví dụ: hiển thị thông báo đăng ký thành công
                    $thongBao = '<p style="color: green;">Đăng ký thành công!</p>';
                }
            }

            // Lưu biến $errors vào session
            $_SESSION['errors'] = $errors;

            // Hiển thị thông báo lỗi nếu có

            // Hiển thị thông báo lỗi riêng cho từng trường
            $userErr = '<span style="color: red;">' . $userErr . '</span>';
            $emailErr = '<span style="color: red;">' . $emailErr . '</span>';
            $passErr = '<span style="color: red;">' . $passErr . '</span>';

            // Xóa biến $errors khỏi session sau khi đã sử dụng
            unset($_SESSION['errors']);

            include "views/login.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = htmlspecialchars($_POST['user']);
                $pass = htmlspecialchars($_POST['pass']);

                // Kiểm tra user và pass
                $tk = getuser($user, $pass);

                if ($tk) {
                    $role = $tk[0]['role'];
                    $_SESSION['iduser'] = $tk[0]['id'];
                    $_SESSION['username'] = $tk[0]['user'];

                    if ($role == 1) {
                        $_SESSION['role'] = $role;
                        header('Location: controls/index.php');
                        exit(); // Chắc chắn kết thúc script sau khi chuyển hướng
                    } else {
                        $_SESSION['role'] = $role;
                        header('Location: index.php');
                        exit(); // Chắc chắn kết thúc script sau khi chuyển hướng
                    }
                } else {
                    $err = '<p style="color: red;">Tên đăng nhập hoặc mật khẩu không đúng!</p>';
                }
            }

            include "views/login.php";
            break;

        case "account":
            if (isset($_SESSION['iduser']) && ($_SESSION['iduser'] != "")) {
                $iduser = $_SESSION['iduser'];
            }
            $gh = giohang($iduser);

            include "views/account.php";
            break;

        case "thoat":
            unset($_SESSION['role']);
            unset($_SESSION['iduser']);
            unset($_SESSION['username']);
            header('Location: index.php');
            break;

        case "shop":
            include "views/shop.php";
            break;
        case "cart":
            include "views/cart.php";
            break;

        case "addcart":
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $hinh1 = $_POST['hinh1'];
                $name = $_POST['name'];
                $pri_new = $_POST['pri_new'];
                $quantity = $_POST['quantity'];
                // kiểm tra sản phẩm có tồn tại trong giỏ hàng không
                $fg = 0;
                // nếu có cập nhật số lượng    
                $i = 0;
                foreach ($_SESSION['cart'] as $cart) {
                    if ($cart[2] == $name) {
                        $quantitynew = $quantity + $cart[4];
                        $_SESSION['cart'][$i][4] = $quantitynew;
                        $fg = 1;
                        break;
                    }
                    $i++;
                }

                if ($fg == 0) {
                    $cart = array($id, $hinh1, $name, $pri_new, $quantity);
                    $_SESSION['cart'][] = $cart;
                }

            }

            include "views/cart.php";
            break;

        case "delcart":
            if (isset($_GET['id']) && ($_GET['id'] >= 0)) {
                if (isset($_SESSION['cart']) && (count($_SESSION['cart']) > 0))
                    array_splice($_SESSION['cart'], $_GET['i'], 1);

            } else {
                if (isset($_SESSION['cart']))
                    unset($_SESSION['cart']);

            }

            if (isset($_SESSION['cart']) && (count($_SESSION['cart']) > 0)) {
                include "views/cart.php";
            } else {
                include "views/cart.php";
            }

            break;

        case "upcart":
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_cart'])) {
                $index = $_POST['index'];
                $quantity = intval($_POST['quantity']);

                // Kiểm tra nếu giá trị quantity là hợp lệ (ví dụ: số nguyên không âm)
                if ($quantity >= 0) {
                    if ($quantity == 0) {
                        // Nếu quantity bằng 0, xóa sản phẩm khỏi giỏ hàng
                        unset($_SESSION['cart'][$index]);
                    } else {
                        // Cập nhật giỏ hàng
                        $_SESSION['cart'][$index][4] = $quantity;
                    }

                    // Tính toán lại tổng tiền giỏ hàng
                    $newSum = calculateCartTotal();

                    // Trả về phản hồi cho Ajax (nếu cần)
                    echo json_encode(['success' => true, 'sum' => $newSum]);
                    exit();
                } else {
                    // Trả về phản hồi khi quantity không hợp lệ
                    echo json_encode(['success' => false, 'error' => 'Invalid quantity']);
                    exit();
                }
            }

            // Hàm tính toán tổng tiền giỏ hàng
            function calculateCartTotal()
            {
                $sum = 0;
                foreach ($_SESSION['cart'] as $cart) {
                    $tt = (int) $cart[3] * (int) $cart[4];
                    $sum += $tt;
                }
                return $sum;
            }
            break;

        case "checkout":
            include "views/checkout.php";
            break;

        case "confirm":
            if (isset($_POST['confirm']) && ($_POST['confirm'])) {
                $name = $_POST['name'];
                $user = $_POST['tk'];
                $city = $_POST['city'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $pay = $_POST['pay'];
                $note = $_POST['note'];
                foreach ($_SESSION['cart'] as $cart) {

                    $total = $sum;
                }

                if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
                    $iduser = $_SESSION['iduser'];
                }

                $idord = insert_hoadon($iduser, $name, $user, $city, $address, $phone, $email, $pay, $total, $note);

                foreach ($_SESSION['cart'] as $item) {
                    $idsp = $item[0];
                    $price = $item[3];
                    $quantity = $item[4];
                    $total = (int) $item[3] * (int) $item[4];

                    insert_cthd($idord, $idsp, $price, $quantity, $total);
                }

                unset($_SESSION['cart']);
                header("Location: index.php?act=success");
            }
            include "views/checkout.php";
            break;

        case "success":
            include 'views/thanks.php';
            break;

        case "cartorder":
            if (isset($_GET['idord']) && ($_GET['idord'] >= 0)) {
                $idord = $_GET['idord'];
                $cthd = loadall_cthd($_GET['idord']);
            }
            include 'views/cartorder.php';
            break;

        case "binhluan":
            if (isset($_POST['binhluan']) && ($_POST['binhluan'])) {
                $idsp = $_POST['idsp'];
                $noidung = $_POST['noidung'];

                if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {

                    insert_binhluan($_SESSION['iduser'], $idsp, $noidung);

                    header("location: index.php?act=ctsp&idsp=" . $idsp);
                }
                exit();
            }

        case "about":
            include "views/about.php";
            break;

        case "blog":
            include "views/blog.php";
            break;

        case "contact":
            include "views/contact.php";
            break;
            case "xulimomo":
                include "views/xulithanhtoanmomo.php";
                break;
        default:
            include "views/home.php";
            break;

    }

} else {

    include "views/home.php";
}

include "views/footer.php";
?>