<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3 style="margin-top:100px; padding-left: 200px;">ID đơn hàng: <?=$iddh?></h3>
<div class="giohang" style="margin-top:150px ; margin-bottom: 200px">
<?php
if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
$getshowcart= getshowcart($_SESSION['iddh']);
//echo var_dump($_SESSION['giohang']); 
if((isset($getshowcart))&&(count($getshowcart)>0)){
    echo '<table border="1" style="border-collapse: collapse;">
    <tr>
        <th style="background-color: pink; ">STT</th>
        <th style="background-color: pink; ">Tên sản phẩm</th>
        <th style="background-color: pink; ">Hình</th>
        <th style="background-color: pink; ">Đơn giá</th>
        <th style="background-color: pink; ">Số lượng</th>
        <th style="background-color: pink; ">Thành tiền</th>
    </tr>';
    $i = 0;
    $tong=0;
    foreach ($_SESSION['giohang'] as $item) {
        $tt= $item['soluong'] * $item['dongia'];
        $tong+=$tt;
        echo '<tr>
        <td style="background-color: grey;">'.($i+1).'</td>
        <td>'.$item['tensp'].'</td>
        <td>./uploads/'.$item['img'].'</td>
        <td>'.$item['dongia'].'</td>
        <td>'.$item['soluong'].'</td>
        <td>'.$tt.'</td>
    </tr>';
    $i++;   
    }
    echo '<tr><td colspan="5"></td><td>$'.$tong.'</td><td></td></tr>';
    echo '</table>';
} 
}else{
    echo " Giỏ hàng rỗng.<a href='index.php'> Tiếp tục đặt hàng </a>";
}

?>

</div>
<div class="col-md-4 contact-left-content">
<?php
if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
 $orderinfo=getorderinfo($_SESSION['iddh']);
 if(count($orderinfo)>0){ 

?>
<h3>MÃ ĐƠN HÀNG:<?=$orderinfo[0]['madh'];?> </h3>
<table class="dathang" style="margin-top:120px ; margin-left:10px;">
    <tr>
        <td><strong>Tên người nhận: <br> <?=$orderinfo[0]['hoten'];?></strong></td>
    </tr>
    <tr>
        <td><strong>Địa chỉ giao hàng: <br> <?=$orderinfo[0]['address'];?></strong></td>
    </tr>
    <tr>
        <td><strong>Email người nhận: <br> <?=$orderinfo[0]['email'];?></strong></td>
    </tr>
    <tr>
        <td><strong>SĐT người nhận: <br> <?=$orderinfo[0]['tel'];?></strong></td>
    </tr>
    <tr>
        <td>Phương thức thanh toán <br>
        <?php
        switch ($orderinfo[0]['pttt']) {
            case '1':
                $txtmess = "Thanh toán khi nhận hàng";
                break;
            case '2':
                $txtmess = "Thanh toán Chuyển Khoản";
                break;
            case '3':
                $txtmess = "Thanh toán Ví MOMO";
                break;
            case '4':
                $txtmess = "Thanh toán Online";
                break;
            
            default:
                $txtmess="Quý khách chưa chọn thanh toán";
                break;
        }

?>
        <input type="radio" name="pttt" value="1">Thanh toán khi nhận hàng <br>
        <input type="radio" name="pttt" value="2">Thanh toán Chuyển Khoản <br>
        <input type="radio" name="pttt" value="3">Thanh toán Ví MOMO <br>
        <input type="radio" name="pttt" value="4">Thanh toán Online <br>



        </td>
    </tr>
   
</table>

<?php } 

 }?>
</div>

</body>
</html>