@include('customer/_menu')
@include('customer/_inform')
  <style>
    body{
      background-color: white !important;
    }
  </style>
  <div class="container pb-5 pt-5 pd">
    <p class="namepd">
    <?= $prod->Name ?>
    </p>
  </div>
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-4 form_img">
        <img class="product_detail img_detail px-5 py-3 img-fluid" src="data:image/jpg;base64,<?= $prod->Image ?>" height="400">
      </div>
      <div class="col-md-4 form_info">
        <div class="col-md-12 px-0">
          <div class="form-group">
            <label for="exampleFormControlSelect1" class="label-text">Mua hàng từ : </label>
            <select class="form-control ml-3" id="exampleFormControlSelect1">
              <option>Hồ Chí Minh</option>
              <option>Hà Nội</option>
            </select>
          </div>
        </div>
        <div class="col-md-12 form_info_child">
          <div class="price-box">
            <p class="special_price"><?= number_format($prod->Price)?>&nbsp;<span style="font-size: 16px; font-weight: 500" class="align-top">₫</span></p>
            <p class="old_price_text">&nbsp;Giá niêm yết : 
              <span class="old_price"><?= $b = number_format(($prod->Price) / (1 - ($prod->sale / 100)))?>&nbsp;<span style="font-size: 14px; font-weight: 500" class="align-top">₫</span></span>
            </p>
          </div>
          <div class="event">
            <span class="event_text">Sản phẩm thuộc chương trình Flash Sale - nhanh tay thanh toán !</span>
          </div>
        </div>
        <div class="col-md-12 flashsale_banner d-flex">
          <p class="mb-0 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffc107"><path d="M82.37725,91.375h-42.66675l28.6595,-86h51.93325l-32.25,64.5h40.506l-62.2855,77.873z"></path><path d="M111.6065,10.75l-24.467,48.94475l-7.783,15.55525h17.3935h20.62925l-38.5925,48.246l6.794,-23.78975l3.92375,-13.70625h-14.2545h-28.08975l25.07975,-75.25h39.3665M129,0h-64.5l-32.25,96.75h43l-21.5,75.25l86,-107.5h-43l32.25,-64.5z"></path></g></g></svg>
            &nbsp;HOT SALE
          </p>
        </div>
        <form action="add2cart" method="POST">
        @csrf
          <div class="checkquan d-flex align-items-center">
            <p class="pt-3 quan-text">
              Chọn số lượng: 
            </p>
            <div class="qty ml-5">
                  <span class="minus"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-remove.svg" class="d-flex align-items-center"></span>
                  <input type="number" class="count" name="txtQuantity" value="1" min="1" max="99" required />
                  <span class="plus"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-add.svg"class="d-flex align-items-center"></span>
            </div>
          </div>
          <div class="col-md-12 pt-3">
              <input type="hidden" name="txtID" value="<?= $prod->ID ?>" />
              <input type="submit" value="ADD TO CART" class="btn btn-outline-danger btn-block"/>
          </div>
        </form>
      </div>
    </div>
  </div>
  @include('customer/footer')