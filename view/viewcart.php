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
if((isset($_SESSION['giohang']))&&(count($_SESSION['giohang'])>0)){
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
    $i = 0;
    foreach ($_SESSION['giohang'] as $item) {
        $tt= $item[3] * $item[4];
        echo '<tr>
        <td style="background-color: grey;">'.($i+1).'</td>
        <td>'.$item[1].'</td>
        <td>./uploads/'.$item[2].'</td>
        <td>'.$item[3].'</td>
        <td>'.$item[4].'</td>
        <td>'.$tt.'</td>
        <td> <a href="index.php?act=delcart&i='.$i.'">Xóa</a> </td>
    </tr>';
    $i++;   
    }
    echo '</table>';
} 

?>
<br>
    <a href="index.php">Tiếp tục mua hàng</a> | <a href="">Thanh toán</a> | <a href="index.php?act=delcart">Xóa giỏ hàng</a>

</div>
</body>
</html>