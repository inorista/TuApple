<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('js/util.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('js/main.css') }}">
</head>
<body class="customer">
  @include('customer/_menu')
  @include('customer/_inform')
  <div class="limiter">
		<div class="container-login100" style="background-color: #263238 !important; background-image: none !important">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55" >
				<form class="login100-form validate-form flex-sb flex-w" action="myprofile" method="POST">
        @csrf
					<span class="login100-form-title p-b-32">
						UPDATE PROFILE
					</span>
					<span class="txt1 p-b-11">
						Username:
					</span>
					<div class="wrap-input100 m-b-36">
						<input class="input100" type="text" name="txtUsername" value="{{ Session::get('customer')->Username }}" readonly />
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Password:
					</span>
					<div class="wrap-input100  m-b-12">
						<input class="input100" type="password" name="txtPassword" value="{{ Session::get('customer')->Password }}" pattern=".{3,}" required>
						<span class="focus-input100"></span>
          </div>
          <span class="txt1 p-b-11">
						Họ và Tên: 
					</span>
					<div class="wrap-input100  m-b-12">
						<input class="input100" type="text" name="txtName" value="{{ Session::get('customer')->Name }}" required>
						<span class="focus-input100"></span>
          </div>
          <span class="txt1 p-b-11">
						Số điện thoại 
					</span>
					<div class="wrap-input100  m-b-12">
						<input class="input100" type="text" name="txtPhone" value="{{ Session::get('customer')->Phone }}" pattern="0[0-9]{9}" required>
						<span class="focus-input100"></span>
          </div>
          <span class="txt1 p-b-11">
						Email:
					</span>
					<div class="wrap-input100  m-b-12">
						<input class="input100" type="text" name="txtEmail" value="{{ Session::get('customer')->Email }}" readonly>
						<span class="focus-input100"></span>
					</div>	
					<div class="container-login100-form-btn">
            <input class="login100-form-btn" type="submit" name="btnSubmit" value="UPDATE" />
            </input>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
@include('customer/footer')
</html>