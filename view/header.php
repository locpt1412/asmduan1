<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="./viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/css/stylehome.css">
    <link rel="stylesheet" href="./view/css/stylelogin.css">
    <link rel="stylesheet" href="./view/css/new2.css">
    <link rel="stylesheet" href="./view/css/stylegiaiphap.css">  
    <link rel="stylesheet" href="./view/css/styleabout.css"> 
    <link rel="stylesheet" href="./view/css/styleproduct.css">
    
</head>
<body>
    <div class="container">
    <header>
        <div style="width: 100%; height: 18px; float:right; background-image: url(./view/images/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg);">
        
            <marquee style="height: 20px; width: 100%;">
              Hãy chọn những sản phẩm tốt nhất dành cho da bạn!
              Các chương trình khuyến mãi đang chờ bạn.
            </marquee>  
            </div>
            <br>
            
        <div class="row">
           <a href="#" class="logo"><img src="./view/images/logo.png"></a>

           <nav>
              <ul class="main-menu">
                 <li><a href="index.php">TRANG CHỦ</a></li>
                 <li><a href="index.php?act=about">VỀ MURAD</a></li>
                 <li><a href="index.php?act=chitiet&idthuonghieu=1">SẢN PHẨM</a>
                 <ul>
                     <?php
                     foreach($dsdm as $dm )
                      echo '<li><a href="index.php?act=product&id='.$dm['id'].'">'.$dm['tendm'].'</a></li>';
?>


                  <!--<li><a href="sp1.html">Sữa rữa mặt</a></li>
                     <li><a href="sp2.html">Serum trị mụn</a></li>-->
                 </ul>
                </li>
                 <li><a href="index.php?act=giaiphap">GIẢI PHÁP</a></li>
                 <li><a href="index.php?act=tintuc">TIN TỨC</a></li>
                 <?php
                   if(isset($_SESSION['username'])&&($_SESSION['username']!="")){
                       echo' <li><a href="index.php?act=userinfo">'.$_SESSION['username'].'</a></li>';
                       echo' <li><a href="index.php?act=thoat">Thoát</a></li>';

                   }else{

            

                ?>
                 <li><a href="index.php?act=dangky">ĐĂNG KÝ</a></li>
                 <li><a href="index.php?act=dangnhap">ĐĂNG NHẬP</a></li>
                 <li><a href="index.php?act=addcart">GIỎ HÀNG</a></li>
                 <?php } ?>
              </ul>
            </nav>
             <div class="search-box" style="margin-bottom: 40px ;">
                 <form>
                     <input class="sb-text" type="text"
                     placeholder="TÌM KIẾM"> 
                    
                 </form>
             </div>
             </div>
</header>   