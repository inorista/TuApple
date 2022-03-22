@include('admin/_menu')
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
  <script>
    function details(id, name) {
      document.getElementById("txtID").value = id;
      document.getElementById("txtName").value = name;
      document.getElementById("btnUpdate").style.display = "inline";
      document.getElementById("btnDelete").style.display = "inline";
    }
  </script>
</head>
<body>
<p class="login100-form-title p-b-32 pt-3 text-center">LIST CATEGORY</p>
  <div class="container">
    <div class="col-md-12 pt-3">
          <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

              <!-- Shopping cart table -->
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 bg-light">
                        <div class="p-2 px-3 text-uppercase text-left">ID</div>
                      </th>
                      <th scope="col" class="border-0 bg-light text-center">
                        <div class="py-2 text-uppercase text-right">CATEGORY</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($cates as $item) { ?>
                    <tr class="datatable" onclick="details('<?= $item->ID ?>','<?= $item->Name ?>')">
                      <th scope="row" class="check">
                        <div class="p-2">
                          <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0" class="text-dark d-inline-block align-middle"><?= $item->ID ?></h5>
                          </div>
                        </div>
                      </th>
                      <td class="border-0 align-middle text-right" style="border-top: 1px solid #e9ecef;"><strong><?= $item->Name ?></strong></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-12">
        <form class="login100-form validate-form flex-sb flex-w" action="login" method="POST">
                @csrf
              <p class="login100-form-title p-b-32 text-center">
                EDIT CATEGORY
              </p>
              <span class="txt1 p-b-11">
                ID
              </span>
              <div class="wrap-input100 m-b-36">
                <input class="input100" type="text" id="txtID" name="txtID" readonly >
                <span class="focus-input100"></span>
              </div>
              <span class="txt1 p-b-11">
                Name
              </span>
              <div class="wrap-input100  m-b-12">
                <input class="input100" type="text" id="txtName" name="txtName" required >
                <span class="focus-input100"></span>
              </div>
              <div class="container-login100-form-btn d-flex justify-content-between">
                      <input class="login100-form-btn" type="submit" formaction="addcategory" value="THÊM CATEGORY" /></input>
                      <input class="login100-form-btn" type="submit" formaction="updatecategory" value="EDIT CATEGORY" /></input>
                      <input class="login100-form-btn" type="submit" formaction="deletecategory" value="XÓA CATEGORY" /></input>
              </div>
        </form>
      </div>
    </div>
</body>
@include('customer/footer')
</html>
