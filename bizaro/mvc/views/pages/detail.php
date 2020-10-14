  <?php
    $item = $data["item"];
    ?>

  <section id="product" class="py-3">
      <div class="container">
          <div class="row">

              <div class="col-sm-6">
                  <img src="<?php echo $item['img'] ?>" alt="img" class="img-fluid">
                  <div class="form-row pt-4 font-size-16 font-baloo">
                      <div class="col">
                          <button class="btn btn-danger form-control" type="submit">Proceed to Buy</button>
                      </div>
                      <div class="col">
                          <button class="btn btn-warning form-control" type="submit">Add to Cart</button>
                      </div>

                  </div>
              </div>

              <div class="col-sm-6 py-5">
                  <h5 class="font-baloo font-size-20"><?php echo $item['name'] ?></h5>
                  <div class="d-flex">
                      <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                      </div>
                  </div>
                  <hr class="m-0">

                  <!--Product Price-->
                  <table class="my-3">

                      <tr class="font-rale font-size-14">
                          <td>Price</td>
                          <td class="font-size-20 text-danger"><span><?php echo number_format($item['price'], 0, '.', ','); ?> đ</span></td>
                      </tr>
                  </table>
                  <hr>

                  <!--Details-->
                  <div class="row">
                      <!--Qty-->
                      <div class="col-6">
                          <div class="qty d-flex">
                              <h6 class="font-baloo">Qty:</h6>
                              <div class="px-4 d-flex font-rale">
                                  <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                  <input type="text" data-id="pro1" class="qty-input border px-2 w-50 bg-light" disabled placeholder="1" value="1">
                                  <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!--Size-->
                  <div class="size my-3">
                      <h6 class="font-baloo">Size :</h6>
                      <div class="d-flex justify-content-between w-25">
                          <div class="font-rubik border p-2">
                              <button class="btn p-0 font-size 14">S</button>
                          </div>
                          <div class="font-rubik border p-2">
                              <button class="btn p-0 font-size 14">M</button>
                          </div>
                      </div>
                  </div>

              </div>

              <!--Product Descriptions-->
              <div class="col-12">
                  <h6 class="font-rubik">Product Decriptions</h6>
                  <hr>
                  <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fuga
                      repellendus cupiditate tenetur nihil saepe mollitia a minima eius voluptates nesciunt quaerat dicta
                      tempore omnis beatae, nam esse libero facilis.</p>
                  <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fuga
                      repellendus cupiditate tenetur nihil saepe mollitia a minima eius voluptates nesciunt quaerat dicta
                      tempore omnis beatae, nam esse libero facilis.</p>
              </div>
          </div>
      </div>

  </section>