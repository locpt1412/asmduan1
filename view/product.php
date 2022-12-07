
          
          
          <div class="banner">
              <img src="./view/images/hihi.jpg" alt="" width="2009px" height="300px">
             </div>
             <b style="font-size:40px ; margin-left: 540px; color:aqua;">SẢN PHẨM</b>
        <article>
          
            <?php
             foreach ($dssp as $sp) {
                echo '<div class="tongsanpham">
                <form action="index.php?act=addcart" method="post">
                <div class="sanpham" style="border:100px;">
                  <img src="./uploads/'.$sp['img'].'" alt="" width="240%" height="150px">
                <div class="name" style="margin-left:106px;font-size:13px">'.$sp['tensp'].'</div><br>
                <div class="dau" style="margin-left:70px; width:130px">
                <hr>
                </div>
                <div class="price" style="margin-left:101px">$'.$sp['gia'].'</div><br>
                 
                <div class="nutmua" style="margin-left:32px; height:20px; width:200px; margin-bottom:20px">
                <a href="buy1.html"><button>> XEM NGAY</button></a>
                </div>
                <div class="buy" style="margin-left:97px; height:50px; padding-top:20px;"> 
                  <input type="submit" value="Mua hàng" name="addtocart">
                </div>
               </div>
               <input type="hidden" value="'.$sp['id'].'" name="id">
               <input type="hidden" value="'.$sp['tensp'].'" name="tensp">
               <input type="hidden" value="'.$sp['img'].'" name="img">
               <input type="hidden" value="'.$sp['gia'].'" name="gia">
          
               </form>
             </div>';
            }


?>
           
        </article>
