<html>

<head> 
  <link rel="stylesheet" type="text/css" href="{{ asset('js/util.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('js/main.css') }}">
  <script>
    function previewImage(input) {
      var reader = new FileReader();
      reader.onload = function(evt) {
        document.getElementById("imgProduct").src = evt.target.result;
      };
      reader.readAsDataURL(input.files[0]);
    }

    function details(id, name, price, catID, image) {
      document.getElementById("txtID").value = id;
      document.getElementById("txtName").value = name;
      document.getElementById("txtPrice").value = price;
      document.getElementById("cmbCategory").value = catID;
      document.getElementById("imgProduct").src = "data:image/jpg;base64," + image;
      document.getElementById("btnUpdate").style.display = "inline";
      document.getElementById("btnDelete").style.display = "inline";
    }
  </script>
</head>

<body class="admin">

  @include('admin/_menu')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="float-left">
      <p class="text-center h1 text-bold font-weight-bold pt-5">PRODUCT LIST</p>
          <div class="container pt-3">
            <div class="row">
              <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                <!-- Shopping cart table -->
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="border-0 bg-light">
                          <div class="p-2 px-3 text-uppercase text-center text_list">ID</div>
                        </th>
                        <th scope="col" class="border-0 bg-light text-center">
                          <div class="py-2 text-uppercase text-center">Name</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase text-center">Price</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase text-center">Creation date</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase text-center">CatID</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase text-center">Image</div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($prods as $item) { ?>
                      <tr class="datatable" onclick="details('<?= $item->ID ?>','<?= $item->Name ?>','<?= $item->Price ?>','<?= $item->CatID ?>','<?= $item->Image ?>')">
                        <td class="border-0 align-middle text-center"><strong><?= $item->ID ?></strong></td>
                        <td class="border-0 align-middle text-center"><strong><?= $item->Name ?></strong></td>
                        <td class="border-0 align-middle text-center"><strong><?= $item->Price ?></strong></td>
                        <td class="border-0 align-middle text-center"><strong><?= date("d/m/Y - H:i:s", ($item->CDate / 1000))?></strong></td>
                        <td class="border-0 align-middle text-center"><strong><?= $item->CatID ?></td>
                        <td><img src="data:image/jpg;base64,<?= $item->Image ?>" class="img-fluid" /></td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="float-right">
        <h2 class="text-center">PRODUCT DETAIL</h2>
        <form class="login100-form validate-form flex-sb flex-w" action="login" method="POST">
        @csrf
					<span class="txt1 p-b-11">
						ID
					</span>
					<div class="wrap-input100 m-b-36">
						<input class="input100" type="text" id="txtID" name="txtID" readonly />
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						NAME
					</span>
					<div class="wrap-input100  m-b-12">
						<input class="input100" type="text" id="txtName" name="txtName" required />
						<span class="focus-input100"></span>
          </div>
          <span class="txt1 p-b-11">
						PRICE
					</span>
          <div class="wrap-input100  m-b-12">
						<input class="input100" type="number" id="txtPrice" name="txtPrice" min="1" max="1000000000" required />
						<span class="focus-input100"></span>
					</div>
          <span class="txt1 p-b-11">
						IMAGE
					</span>
            <input class="input100" type="file" name="fileImage" accept="image/jpeg, image/png, image/gif" onchange="previewImage(this)" />
            <span class="focus-input100"></span>
          </div>
          <div class="form-group">
            <label for="cmbCategory" class="label-text">CATEGORY : </label>
            <select class="form-control ml-3" id="cmbCategory" name="cmbCategory">
                  <?php foreach ($cates as $cate) { ?>
                    <option value="<?= $cate->ID ?>"><?= $cate->Name ?></option>
                  <?php } ?>
            </select>
          </div>
          <div class="container-login100-form-btn">
            			<input class="login100-form-btn " type="submit" formaction="addproduct" value="ADD NEW"  /></input>
          </div>
          <div class="container-login100-form-btn">
            			<input class="login100-form-btn pt-3" type="submit" value="UPDATE" id="btnUpdate" style="display:none" /></input>
          </div>
          <div class="container-login100-form-btn">
            			<input class="login100-form-btn pt-3" type="submit" value="DELETE" id="btnDelete" style="display:none"/></input>
          </div>
          <div class="col-12">
            <img id="imgProduct" class="img-fluid">
          </div>
				</form>
      </div>
    </div>
  </div>
</div>
</body>
</html>