<?php
ob_start();
error_reporting(0);
session_start();
include "./model/pdo.php";
include "./model/products.php";
include "./model/line.php";
include "./model/account.php";
include "./model/cart.php";
include "./view/global_cart.php";
include "global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$showProducts = loadall_products_content();
$danhMuc = loadall_line();
$top10 = loadall_products_top10();
include "./view/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    $number = 0;
    switch ($act) {
        case 'home':
            include "./view/slide.php";
            include "./view/content.php";

            break;
        case 'sanpham':
            if (isset($_POST['key']) && ($_POST['key'] != "")) {
                $keyw = $_POST['key'];
            } else {
                $keyw = "";
            }
            if (isset($_GET['id_commodities']) && ($_GET['id_commodities'] > 0)) {
                $id_line = $_GET['id_commodities'];
            } else {
                $id_line = 0;
            }
            $product_list = loadall_products_line($keyw, $id_line);
            $name_dm = load_name_line($id_line);
            include "./view/showtheodm.php";
            break;
        case 'detail':
            if (isset($_GET['id_hh'])) {
                $id = $_GET['id_hh'];

                $sp = loadone_products($id);
                // extract đưa biến danh mục 
                extract($sp);
                $product_like = loadone_products_like($id, $id_dm);
                include "./view/detail.php";
            }

            break;

        case 'dktv':
            if (isset($_POST['submit'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                insert_account($user, $email, $pass);
                $dktv = "Đã đăng ký thành công.Hãy đăng nhập";
            }
            include "./view/dangky/form.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                // $email = $_POST['email'];
                $check_user = check_user($user, $pass);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;
                    $login = "Đã đăng nhập thành công";
                    header('location: index.php', time() + 1);
                } else {
                    $login = "Đăng nhập không thành công!";
                }
            }
            include "./view/dangnhap.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat'])) {
                $id_user = $_POST['id_user'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                update_taikhoan($id_user, $user, $pass, $email, $address, $phone);
                $_SESSION['user'] = check_user($user, $pass);
                $update_acc = "Đã cập nhật thành công.Hãy đăng nhập";
            }
            include "./view/dangky/edit_taikhoan.php";
            break;
        case 'qmk':
            if (isset($_POST['checkmail'])) {
                // $id_user=$_POST['id_user'];
                // $user = $_POST['user'];
                // $pass = $_POST['pass'];
                // $address = $_POST['address'];
                // $phone = $_POST['phone'];
                $email = $_POST['email'];
                $check_email = check_email($email);
                if (is_array($check_email)) {
                    $thongbao = "Mật khẩu của bạn là:" . $check_email['password'];
                } else {
                    $thongbao = "Email không tồn tại!";
                }
            }

            include "./view/Forgotpassword/form.php";
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');
            // include "lienhe.php";
            break;
        case 'addcart':
            if (isset($_POST['addcart'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $image = $_POST['image'];
                $id = $_POST['id'];
                // $=$_POST[''];
                $soluong = 1;
                $sum = $soluong * $price;
                $add_cart = [$id, $name, $image, $price, $soluong, $sum];
                array_push($_SESSION['mycart'], $add_cart);
            }
            include "./view/shoppingcart/cart.php";
            break;
        case 'del_cart':
            if (isset($_GET['idcart'])) {
                // Xóa từng sp 
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                // Nếu không có sản phẩm thì sẽ tạo mới giỏ hàng,làm trống giỏ hàng
                $_SESSION['mycart'] = [];
            }
            // include "../view/shoppingcart/cart.php";
            header('location: index.php?act=addcart');
            break;
        case 'bill':
            include "./view/shoppingcart/bill.php";
            // header('location: index.php?act=addcart');
            break;
        case 'mybill':
            include "./view/shoppingcart/mybill.php";
            // header('location: index.php?act=addcart');
            break;
        case 'billcomfirm':
            if (isset($_POST['dongy'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $pttt = $_POST['radio'];
                $date_buy = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();
                $idbill = insert_bill($name, $email, $address, $phone, $pttt, $date_buy, $tongdonhang);

                //insert into bảng cart: lấy dữ liệu từ session mycart
                foreach ($_SESSION['mycart'] as $show) {
                    insert_cart($_SESSION['user']['id_user'], $show[0], $show[2], $show[1], $show[3], $show[4], $show[5], $idbill);
                }

                $_SESSION['mycart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadone_cart($idbill);
            include "./view/shoppingcart/billcomfirm.php";
            // header('location: index.php?act=addcart');
            break;
        case 'lh':
            include "./view/lienhe.php";
            // header('location: index.php?act=addcart');
            break;
        default:
            include "./view/slide.php";
            include "./view/content.php";
            break;
    }
} else {
    include "./view/slide.php";
    include "./view/content.php";
}

include "./view/footer.php";
