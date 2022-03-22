  @include('customer/_menu')
  @include('customer/_inform')
  <div class="container pt-3">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase text-left">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light text-center">
                    <div class="py-2 text-uppercase text-left">GIÁ</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">SỐ LƯỢNG</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">XÓA</div>
                  </th>
                </tr>
              </thead>
              <tbody>
              @foreach(Session::get('mycart')->items as $item)
                <tr>
                  <th scope="row" class="check">
                    <div class="p-2">
                      <img src="data:image/jpg;base64,<?= $item->product->Image ?>" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="details?id=<?= $item->product->ID ?>" class="text-dark d-inline-block align-middle"><?= $item->product->Name ?></a></h5>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle text-left"><strong><?= number_format($item->product->Price); ?>₫</strong></td>
                  <td class="border-0 align-middle text-center"><strong><?= $item->quantity ?></strong></td>
                  <td class="border-0 align-middle text-center"><a href="#" class="text-dark"><a href="remove2cart?id=<?= $item->product->ID ?>"><i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Mã khuyến mãi</div>
          <div class="p-4">
            <p class="font-italic mb-4">Nếu bạn có mã khuyến mãi, hãy nhập mã khuyến mãi của mình dưới ô sau.</p>
            <div class="input-group mb-4 border rounded-pill p-2">
              <input type="text" placeholder="Mã khuyến mãi" aria-describedby="button-addon3" class="form-control border-0">
              <div class="input-group-append border-0">
                <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>XÁC NHẬN</button>
              </div>
            </div>
          </div>
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">GHI CHÚ CỦA KHÁCH HÀNG</div>
          <div class="p-4">
            <p class="font-italic mb-4">Nếu bạn có bất kỳ ghi chú nào cho đơn hàng, hãy viết ghi chú của mình ở ô dưới.</p>
            <textarea name="" cols="30" rows="2" class="form-control"></textarea>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">ĐƠN HÀNG </div>
          <div class="p-4">
            <p class="font-italic mb-4">Thuế VAT (Thuế giá trị gia tăng) sẽ được áp dụng theo quy định của Pháp luật hiện hành.</p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tạm tính </strong><strong><?= number_format(Session::get('mycart')->getTotal())?>₫</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Phí giao hàng</strong><strong><?= number_format(35000) ?>₫</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">VAT</strong><strong><?= number_format(Session::get('mycart')->getVAT()) ?>₫</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">TỔNG CỘNG</strong>
                <h5 class="font-weight-bold"><?= number_format(Session::get('mycart')->getALLTOTAL())?>₫</h5>
              </li>
            </ul><a a href="checkout" onclick="return confirm('XÁC NHẬN ĐẶT HÀNG ?')" class="btn btn-dark rounded-pill py-2 btn-block">XÁC NHẬN ĐẶT HÀNG</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@include('customer/footer')
</html>