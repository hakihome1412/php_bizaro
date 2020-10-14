<div class="container color-white-bg mt-2">
    <div class="food">
        <h3 class="font-sans font-size-20 text-center">Food</h3>
        <div class="row px-2">
            <?php foreach ($data["listFood"] as $food) { ?>
                <div class="col-sm-4 py-2 border my-1">
                    <a href="#"><img src="<?php echo $food["img"]; ?>" class="img-fluid" style="width: 400px;height: 250px;"></a>
                    <div class="text-center">
                        <h4><?php echo $food["name"]; ?></h4>
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
            <?php } ?>
        </div>
    </div>

</div>