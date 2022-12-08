<div class="anhnen">
    <a href="#"><img src="./view/images/ASSIGNMENT1NEW_03.png" width="1345px" height="300px"></a>
</div>

<ol class="bread">
    <li class="bread-item">
        <a href="index.php">Home</a>
    </li>
    <li class="bread-item active">
        <?php
        if (isset($kq) && count($kq) > 0) {
            echo $kq[0]['tensp'];
        } else {
            echo "Sản phẩm chi tiết";
        }
        ?>
    </li>



</ol>
<!-- Product Details Area Start -->
<div class="single-product-area section-padding-100 clearfix">
    <div class="container-fluid" style="margin-top:80px ; margin-left:300px;">

        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="gallery_img" href="./view/images/hinh1.jpg">
                                    <img class="d-block w-100" src="./uploads/<?= $kq[0]['img'] ?>" alt="First slide" width="80%" height="60%"; style="margin-left:60px;">
                                </a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="single_product_desc">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data" style="line-height: 40px ;">
                        <div class="line" style="margin-right: 300px">
                            <hr>
                        </div>
                        <b class="product-price" style="font-size:20px ;"><?= $kq[0]['gia'] ?></b>
                        <a href="product-details.html" style="color: black; font-size:30px; ">
                            <h6><?= $kq[0]['tensp'] ?></h6>
                        </a>
                        <!-- Ratings & Review -->
                        <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="review">
                                <a href="#">Write A Review</a>
                            </div>
                        </div>
                        <!-- Avaiable -->
                        <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                    </div>

                    <div class="short_overview my-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?</p>
                    </div>

                    <!-- Add to Cart Form -->
                    <form class="cart clearfix" action="index.php?act=addcart" method="post">
                        <div class="cart-btn d-flex mb-50">
                            <p>Qty</p>
                            <div class="quantity">
                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="sl" value="1" style="margin-top: 10px; ">
                                <input type="hidden" value="<?= $kq[0]['id']?>" name="id">
                                <input type="hidden" value="<?= $kq[0]['tensp'] ?>" name="tensp">
                                <input type="hidden" value="<?= $kq[0]['img'] ?>" name="img">
                                <input type="hidden" value="<?= $kq[0]['gia'] ?>" name="gia">

                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <button type="submit" name="addtocart" value="Đặt hàng" class="btn amado-btn" style="margin-top:20px ;">Add to cart</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details Area End -->