<!--Owl Carousel-->
<div class="container color-white-bg mt-2">
    <div id="banner-area">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="https://images.foody.vn/res/g76/750850/prof/s576x330/foody-upload-api-foody-mobile-hhh-jpg-180614154620.jpg" alt="banner1" height="500">
            </div>
            <div class="item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTH9qplsFmgIIfYgGn1SviVKJ_1gD7BPfPIkg&usqp=CAU" alt="banner2" height="500">
            </div>
        </div>
    </div>


    <!--Special Price-->
    <div id="foods">

        <h4 class="font-sans font-size-20">Food and Drink</h4>
        <div class="button-group text-right font-baloo font-size-16" id="filters">
            <button class="btn is-checked" data-filter="*">All</button>
            <button class="btn" data-filter=".0">Food</button>
            <button class="btn" data-filter=".1">Drink</button>
            <button class="btn" data-filter=".2">Yogurt</button>
        </div>

        <div class="grid w-100">
            <?php
            foreach ($data["listFood"] as $food) { ?>
                <div class="grid-item <?php echo $food["type"] ?> border">
                    <div class="item py-2" data-id="<?php echo $food["id"]; ?>">
                        <div class="product font-sans">
                            <a href="food/detail/<?php echo $food["id"] ?>"><img src="<?php echo $food["img"] ?>" alt="food" class="img-fluid" style="width: 200px;height: 200px;"></a>
                            <div class="text-center">
                                <h6><?php echo $food["name"] ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span><?php echo number_format($food['price'], 0, '.', ',') ?> đ</span>
                                </div>
                                <form method="post" action="cart/add" id="formAddToCart">
                                    <input type="hidden" name="idFood" value="<?php echo $food['id']; ?>">
                                    <button type="submit" class="btn btn-warning font-size-12">Thêm vào giỏ</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!--Latest Blog-->
        <div id="blogs">
            <div class="container py-4">
                <h4 class="font-rubik font-size-20">Lastest Blogs</h4>
                <hr>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
                            <img src="https://cmay.vn/wp-content/uploads/2018/10/blog.jpg" alt="blog1" class="card-img-top">
                            <p class="cart-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Quia nemo consectetur esse laudantium accusamus eveniet sunt vero debitis molestiae ut.</p>
                            <a href="#" class="color-second text-left">Go somewhere</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
                            <img src="https://cmay.vn/wp-content/uploads/2018/10/blog.jpg" alt="blog2" class="card-img-top">
                            <p class="cart-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Quia nemo consectetur esse laudantium accusamus eveniet sunt vero debitis molestiae ut.</p>
                            <a href="#" class="color-second text-left">Go somewhere</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
                            <img src="https://cmay.vn/wp-content/uploads/2018/10/blog.jpg" alt="blog3" class="card-img-top">
                            <p class="cart-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Quia nemo consectetur esse laudantium accusamus eveniet sunt vero debitis molestiae ut.</p>
                            <a href="#" class="color-second text-left">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>