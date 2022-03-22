<html>
<head>
  <link href="{{ asset('css/styles.css') }}" type="text/css" rel="stylesheet" />
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('js/util.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('js/main.css') }}">
</head>
<body>
@include('admin/_menu')
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
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Action</div>
                  </th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($orders as $item) { ?>
                <tr class="datatable" onclick="window.location='listorder?id=<?= $item->ID ?>'">
                  <td class="border-0 align-middle text-center"><strong><?= $item->ID ?></strong></td>
                  <td class="border-0 align-middle text-center"><strong><?= $item->Customer_name ?></strong></td>
                  <td class="border-0 align-middle text-center"><strong><?= date("d/m/Y - H:i:s", ($item->CDate / 1000)) ?></strong></td>
                  <td class="border-0 align-middle text-center"><strong><?= number_format($item->Total)?>đ</strong></td>
                  <td class="border-0 align-middle text-center"><strong><?= $item->Status ?></td>
                  <td class="text-center">
                  <?php if ($item->Status == 'PENDING') { ?>
                    <a class="border-0 align-middle text-center font-weight-bold" href="updatestatus?status=APPROVED&id=<?= $item->ID ?>"><i class="fa fa-check" style="color: green; font-size: 14px"aria-hidden="true"></i>&nbsp;APPROVE</a>
                    ||
                    <a class="border-0 align-middle text-center font-weight-bold" href="updatestatus?status=CANCELED&id=<?= $item->ID ?>"><i class="fa fa-ban" style="color: red; font-size: 14px" aria-hidden="true"></i>&nbsp;CANCEL</a>
                  <?php } ?>
                  </td>
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
  <p class="text-center h1 text-bold font-weight-bold">DETAIL ORDER</p>
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