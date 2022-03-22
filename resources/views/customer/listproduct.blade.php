@include('customer/_menu')
@include('customer/_inform')
@include('customer/_banner')
<div class="container pt-3">
        <div class="col-12 box d-flex align-items-center drop_shadow2" style="background-color: rgb(248,248,248)">
              <span class="box_content"> SIÊU </span>
              <img src="https://i.ibb.co/2PJFksS/flash.gif" class="pr-1 pl-1" style="height: 30px">
              <span class="box_content2">SALE</span>
        </div>
    </div>
    <div class="container">
      <div class="row product drop_shadow">
      <?php foreach ($prods as $prod) { 
                        $price = $prod->Price;
                        $sale = $prod->sale;
                        $old_price = $price + ($price * $sale / 100);
                        $old_price = number_format($old_price);
                        $new_price = $price;
                        $new_price = number_format($new_price);
      ?>
          <div class="col-md-3">
            <div class="col-md-12">
              <div class="box image position-relative pt-3">
                <a href="details?id=<?= $prod->ID ?>" class="position-relative">
                <img src="data:image/jpg;base64,<?= $prod->Image ?>" class="img">
                </a>
                <img src="https://i.ibb.co/RzNCytL/sticker-hotsale.png" class="sticky_sale <?php if ($prod->sale < 15){ echo 'd-none';}?>">
                <p class="sticky_ribbon"><?= $prod->sale ?>%</p>
              </div>
            </div>
            <div class="col-md-12 name">
                <a href="details?id=<?= $prod->ID ?>">
                  <h3><?= $prod->Name ?></h3>
                </a>
            </div>
            <div class="col-md-12 price">
                <p class="special_price"><?= $new_price ?>&nbsp;₫ </p>
                <p class="old_price"><?= $old_price ?>&nbsp;₫</p>
            </div>
            <div class="col-md-12 danhgia">
              <i class="fa fa-star checked" aria-hidden="true"></i>
              <i class="fa fa-star checked" aria-hidden="true"></i>
              <i class="fa fa-star checked" aria-hidden="true"></i>
              <i class="fa fa-star checked" aria-hidden="true"></i>
              <i class="fa fa-star checked" aria-hidden="true"></i>
            </div>
          </div>
      <?php } ?>
      </div>
    </div>
    @include('customer/footer')
