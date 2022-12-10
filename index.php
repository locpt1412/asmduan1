<?php
session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
include "model/connectdb.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/user.php";
$dsdm = getall_dm();
$sphome1 = getall_sp(0, "");
include "view/header.php";
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'about':
            include "view/about.php";
            break;

        case 'sanphamchitiet':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $kq = getonesp($id);
            }
            include "view/sanphamchitiet.php";
            break;


        case 'product':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
            }
            $dssp = getall_sp($iddm, "");
            include "view/product.php";
            break;


        case 'thoat':
            unset($_SESSION['role']);
            unset($_SESSION['iduser']);
            unset($_SESSION['username']);

            header('location: index.php');
            break;
        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $kq = getuserinfo($user, $pass);
                $role = $kq[0]['role'];
                if ($kq[0]['role'] == 1) {
                    $_SESSION['role'] = $role;
                    header('location: admin/index.php');
                } else {
                    $_SESSION['role'] = $role;
                    $_SESSION['iduser'] = $kq[0]['id'];

                    $_SESSION['username'] = $kq[0]['user'];
                    header('location: index.php');

                    break;
                }
            }

        case 'giaiphap':
            include "view/giaiphap.php";
            break;
        case 'tintuc':
            include "view/tintuc.php";
            break;
        case 'dangnhap':
            include "view/dangnhap.php";
            break;
        // case 'thanh toan';
        //     if((isset($_POST['thanhtoan']))&&($_POST['thanhtoan'])){
        //         $tongdonhang=$_POST['tongdonhang'];
        //         $hoten=$_POST['hoten'];
        //         $address=$_POST['address'];
        //         $email=$_POST['email'];
        //         $tel=$_POST['tel'];
        //         $pttt=$_POST['pttt'];
        //         $madh="Murad".rand(0,999999);
        //         // $iddh= taodonhang($madh,$tongdonhang,$pttt,$hoten,$address,$email,$tel);
        //     }
        //     break;

        case 'addcart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $img = $_POST['img'];
                $gia = $_POST['gia'];



                if (isset($_POST['sl']) && ($_POST['sl'] > 0)) {
                    $sl = $_POST['sl'];
                } else {
                    $sl = 1;
                }
                $fg = 0;
                //kiểm tra sản phẩm có tồn tại trong giỏ hàng hay ko nếu có thì cập nhật sl
                $i = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    if ($item[1] === $tensp) {
                        $slnew = $sl + $item[4];
                        $_SESSION['giohang'][$i][4] = $slnew;
                        $fg = 1;
                        break;
                    }
                    $i++;
                }
                // còn ngược lại thì add mới


                if ($fg == 0) {
                    $item = array($id, $tensp, $img, $gia, $sl);
                    $_SESSION['giohang'][] = $item;
                }
            }
            include 'view/viewcart.php';
            break;

        case 'delcart':
            if (isset($_GET['i']) && ($_GET['i'] > 0)) {
                if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0))
                    array_splice($_SESSION['giohang'], $_GET['i'], 1);
            } else {
                if (isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
            }

            if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                header('location: index.php?act=addcart');
            } else {
                header('location: index.php');
            }
            break;


        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
