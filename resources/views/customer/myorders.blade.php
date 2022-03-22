<html>
<head>
  <link href="{{ asset('css/styles.css') }}" type="text/css" rel="stylesheet" />
</head>
<body class="customer">
  @include('customer/_menu')
  @include('customer/_inform')
  <?php if (isset($orders)) { ?>
  <p class="text-center h1 text-bold font-weight-bold pt-5">ORDER LIST</p>
    <div class="container pt-3">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase text-center">OrderID</div>
                  </th>
                  <th scope="col" class="border-0 bg-light text-center">
                    <div class="py-2 text-uppercase text-center">Customer Name</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Creation date</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Total</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Status</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($orders as $item) { ?>
                  <tr class="datatable" onclick="window.location='myorders?id=<?= $item->ID ?>'">
                    <th class="border-0 align-middle text-center font-weight-bold"><?= $item->ID ?></th>
                    <td class="border-0 align-middle text-center font-weight-bold"><?= $item->Customer_name ?></td>
                    <td class="border-0 align-middle text-center font-weight-bold"><?= date("d/m/Y - H:i:s", ($item->CDate / 1000)) ?></td>
                    <td class="border-0 align-middle text-center font-weight-bold"><?= number_format($item->Total)?>đ</td>
                    <td class="border-0 align-middle text-center font-weight-bold"><?= $item->Status ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <?php if (isset($odetails)) { ?>
  <p class="text-center h1 text-bold font-weight-bold">CHI TIẾT ĐƠN HÀNG</p>
    <div class="container pt-3">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase text-center">OrderID</div>
                  </th>
                  <th scope="col" class="border-0 bg-light text-center">
                    <div class="py-2 text-uppercase text-center">Product Name</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Quantity</div>
                  </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($odetails as $item) { ?>
                    <tr class="datatable">
                      <td class="border-0 align-middle text-center"><strong><?= $item->OrderID ?></strong></td>
                      <td class="border-0 align-middle text-center"><strong><?= $item->Product_name ?></strong></td>
                      <td class="border-0 align-middle text-center"><strong><?= $item->Quantity ?></strong></td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</body>
@include('customer/footer')
</html>