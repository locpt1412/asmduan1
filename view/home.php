
       
    <div class="anhnen">
        <a href="#"><img src="./view/images/ASSIGNMENT1NEW_03.png" width="1345px" height="300px" ></a>
    </div>
  
    <h2>SẢN PHẨM NỔI BẬC!</h2>
    <article>
    <?php
           foreach ($sphome1 as $sp) {
            echo '
            <form action="index.php?act=addcart" method="post">
            <div class="tongsanpham">
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
            <div style="margin-left:97px; height:50px; padding-top:20px;"> 
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
     <hr>