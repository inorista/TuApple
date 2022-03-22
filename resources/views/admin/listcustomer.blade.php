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
<?php if (isset($custs)) { ?>
  <p class="text-center h1 text-bold font-weight-bold pt-5">CUSTOMER LIST</p>
    <div class="container pt-3">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase text-center">ID</div>
                  </th>
                  <th scope="col" class="border-0 bg-light text-center">
                    <div class="py-2 text-uppercase text-center">Username</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Password</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Name</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Phone</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Email</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Active</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Action</div>
                  </th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($custs as $item) { ?>
                <tr class="datatable" onclick="window.location='listorder?id=<?= $item->ID ?>'">
                  <td class="border-0 align-middle text-center"><strong><?= $item->ID ?></strong></td>
                  <td class="border-0 align-middle text-center"><strong><?= $item->Username ?></strong></td>
                  <td class="border-0 align-middle text-center"><strong><?= $item->Password ?></strong></td>
                  <td class="border-0 align-middle text-center"><strong><?= $item->Name ?></strong></td>
                  <td class="border-0 align-middle text-center"><strong><?= $item->Phone?></strong></td>
                  <td class="border-0 align-middle text-center"><?= $item->Email ?></td>
                  <td class="border-0 align-middle text-center"><?= $item->Active ?></td>
                  <td class="text-center">
                  <?php if ($item->Active == 0) { ?>
                    <a class="border-0 align-middle text-center font-weight-bold" href="sendmail?id=<?= $item->ID ?>">EMAIL</a>
                  <?php } else if ($item->Active == 1) { ?>
                    <a class="border-0 align-middle text-center font-weight-bold" href="deactive?id=<?= $item->ID ?>&token=<?= $item->Token ?>" onclick="return confirm('ARE YOU SURE?')">DEACTIVE</a>
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
<?php if (isset($orders)) { ?>
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
                  <?php foreach ($orders as $item) { ?>
                    <tr class="datatable" onclick="window.location='listcustomer?cid=<?= $item->CustID ?>&oid=<?= $item->ID ?>'">
                      <td class="border-0 align-middle text-center"><strong><?= $item->ID ?></strong></td>
                      <td class="border-0 align-middle text-center"><strong><?= $item->Customer_name ?></strong></td>
                      <td class="border-0 align-middle text-center"><strong><?= date("d/m/Y - H:i:s", ($item->CDate / 1000)) ?></strong></td>
                      <td class="border-0 align-middle text-center"><strong><?= $item->Total ?></strong></td>
                      <td class="border-0 align-middle text-center"><strong><?= $item->Status ?></strong></td>
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
    <div class="align-center">
      <h2 class="text-center">ORDER DETAIL</h2>
      <table class="datatable" border="1">
        <tr class="datatable">
          <th>OrderID</th>
          <th>ProdID</th>
          <th>Quantity</th>
        </tr>
        <?php foreach ($odetails as $item) { ?>
          <tr class="datatable">
            <td><?= $item->OrderID ?></td>
            <td><?= $item->ProdID ?></td>
            <td><?= $item->Quantity ?></td>
          </tr>
        <?php } ?>
      </table>
    </div>
  <?php } ?>
</body>
@include('customer/footer')
</html>