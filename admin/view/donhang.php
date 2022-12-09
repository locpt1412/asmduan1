<?php
$dsdm = getall_dm();
$sphome1 = getall_sp(0, "");
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
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
    }
} else {
    include "view/home.php";
}
