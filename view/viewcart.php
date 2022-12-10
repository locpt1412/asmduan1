<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3 style="margin-top:120px; padding-left: 200px;">Giỏ hàng</h3>
    <div class="giohang" style="margin-top:150px ; margin-bottom: 200px">
        <?php

        //echo var_dump($_SESSION['giohang']); 
        if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) {
            echo '<table border="1" style="border-collapse: collapse;">
    <tr>
        <th style="background-color: pink; ">STT</th>
        <th style="background-color: pink; ">Tên sản phẩm</th>
        <th style="background-color: pink; ">Hình</th>
        <th style="background-color: pink; ">Đơn giá</th>
        <th style="background-color: pink; ">Số lượng</th>
        <th style="background-color: pink; ">Thành tiền</th>
        <th style="background-color: pink; ">Hành động</th>

    </tr>';
<<<<<<< HEAD
    $i = 0;
    $tong=0;
    foreach ($_SESSION['giohang'] as $item) {
        $tt= $item[3] * $item[4];
        $tong+=$tt;
        echo '<tr>
        <td style="background-color: grey;">'.($i+1).'</td>
        <td>'.$item[1].'</td>
        <td>'.$item[2].'</td>
        <td>'.$item[3].'</td>
        <td>'.$item[4].'</td>
        <td>'.$tt.'</td>
        <td> <a href="index.php?act=delcart&i='.$i.'">Xóa</a> </td>
    </tr>';
    $i++;   
    }
    echo '<tr><td colspan="5"><strong>Tổng giá trị đơn hàng</strong></td><td>$'.$tong.'</td></tr>';
    echo '</table>';
} 

?>
<br>
    <a href="index.php">Tiếp tục mua hàng</a> | <a href="index.php?act=delcart&id">Xóa giỏ hàng</a>

</div>
<div class="col-md-4 contact-left-content">
<h3>THÔNG TIN ĐẶT HÀNG</h3>
<form action="index.php?act=thanhtoan" method="post">
<input type="hidden" name="tongdonhang" value="<?=$tong?>">
<table class="dathang" style="margin-top:120px ; margin-left:10px;">
    <tr>
        <td><input type="text" name="hoten" placeholder="Nhập họ tên"></td>
    </tr>
    <tr>
        <td><input type="text" name="address" placeholder="Nhập địa chỉ"></td>
    </tr>
    <tr>
        <td><input type="text" name="email" placeholder="Nhập email"></td>
    </tr>
    <tr>
        <td><input type="text" name="tel" placeholder="Nhập số điện thoại"></td>
    </tr>
    <tr>
        <td>Phương thức thanh toán <br>
        <input type="radio" name="pttt" value="1">Thanh toán khi nhận hàng <br>
        <input type="radio" name="pttt" value="2">Thanh toán Chuyển Khoản <br>
        <input type="radio" name="pttt" value="3">Thanh toán Ví MOMO <br>
        <input type="radio" name="pttt" value="4">Thanh toán Online <br>



        </td>
    </tr>
    <tr>
        <td><input type="submit" value="Thanh Toán" name="thanhtoan"></td>
    </tr>
</table>
</form>
</div>

=======
            $i = 0;
            $tong = 0;
            foreach ($_SESSION['giohang'] as $item) {
                $tt = $item[3] * $item[4];
                $tong += $tt;
                echo '<tr>
        <td style="background-color: grey;">' . ($i + 1) . '</td>
        <td>' . $item[1] . '</td>
        <td><img src="./uploads/'.$item[2].'" width=80</td>
        <td>' . $item[3] . '</td>
        <td>' . $item[4] . '</td>
        <td>' . $tt . '</td>
        <td> <a href="index.php?act=delcart&i=' . $i . '">Xóa</a> </td>
    </tr>';
                $i++;
            }
            echo '<tr><td colspan="5">Tổng tiền: </td><td>' . $tong . '</td><td></td></tr>';
            echo '</table>';
        }

        ?>
        <br>
        <a href="index.php">Tiếp tục mua hàng</a> | <a href="view/thanhtoan.php">Thanh toán</a> | <a href="index.php?act=delcart">Xóa giỏ hàng</a>

    </div>
    <!-- <div class="col-md-4 contact-left-content">
        <h3> THÔNG TIN ĐẶT HÀNG</h3>
        <form action="index.php?act=thanhtoan" method="post">
            <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
            <table class="dathang">
                <tr>
                    <td><input type="text" name="adress" placeholder="Nhập địa chỉ"></td>
                </tr>
                <tr>
                    <td><input type="text" name="hoten" placeholder="Nhập họ tên"></td>
                </tr>
                <tr>
                    <td><input type="text" name="email" placeholder="Nhập email"></td>
                </tr>
                <tr>
                    <td><input type="text" name="tel" placeholder="Nhập số điện thoại"></td>
                </tr>
                <tr>
                    <td>Phương thức thanh toán<br>
                        <input type="radio" name="pttt" value="1"> Thanh toán khi nhận hàng <br>
                        <input type="radio" name="pttt" value="2"> Thanh toán Chuyển khoản <br>
                        <input type="radio" name="pttt" value="3"> Thanh toán ví MoMo<br>
                        <input type="radio" name="pttt" value="4"> Thanh toán Online<br>
                    </td>
                </tr>
            </table> -->

>>>>>>> c1e13f4525caa33848dd6753d68d7b9ae6c0c21e
</body>

</html>