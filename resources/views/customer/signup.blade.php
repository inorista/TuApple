<html>
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
<body class="customer">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="signup" method="POST">
        @csrf
					<span class="login100-form-title p-b-32">
						ĐĂNG KÝ TÀI KHOẢN
					</span>
					<span class="txt1 p-b-11">
						Username:
					</span>
					<div class="wrap-input100 m-b-36">
						<input class="input100" type="text" name="txtUsername" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Password:
					</span>
					<div class="wrap-input100  m-b-12">
						<input class="input100" type="password" name="txtPassword" >
						<span class="focus-input100"></span>
          </div>
          <span class="txt1 p-b-11">
						Họ và Tên: 
					</span>
					<div class="wrap-input100  m-b-12">
						<input class="input100" type="text" name="txtName" >
						<span class="focus-input100"></span>
          </div>
          <span class="txt1 p-b-11">
						Số điện thoại 
					</span>
					<div class="wrap-input100  m-b-12">
						<input class="input100" type="text" name="txtPhone" >
						<span class="focus-input100"></span>
          </div>
          <span class="txt1 p-b-11">
						Email:
					</span>
					<div class="wrap-input100  m-b-12">
						<input class="input100" type="text" name="txtEmail" >
						<span class="focus-input100"></span>
					</div>	
					<div class="container-login100-form-btn">
            <input class="login100-form-btn" type="submit" name="btnSubmit" value="SIGN-UP" />
            </input>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
</body>
</html>
