<div class="container">
		<div class="row pt-3">
      <div class="col-lg-6 col-sm-6 col-md-6 links d-flex">
        <div class="d-flex align-items-center">
          @if (Session::get('customer') != null)
          Hello &nbsp; <b class="pr-3">{{ Session::get('customer')->Username }}</b> |
          <a href="logout" class="pl-3 pr-3"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout</a> |
          <a href="myprofile" class="pl-3 pr-3"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Profile</a> |
          <a href="myorders" class="pl-3 pr-3"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Orders</a>
        </div>
        @else
        <div class="d-flex align-items-center">
          <a href="login" class="pr-3"><i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp;Login</a> |
          <a href="signup" class="pl-3"><i class="fa fa-user-plus" aria-hidden="true"></i> &nbsp;Sign-up</a>
        </div>
        </div>
        @endif
      </div>
			<div class="col-lg-6 col-sm-6 col-md-6 main-section">
        <div class="row">
          <div class="col-md-6">
            <div class="float-left">
            <form action="search" method="POST" class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2">
                    @csrf
                    <div class="input-group">
                      <input class="form-control" type="search" name="txtKeyword" placeholder="Enter keyword" required oninvalid="this.setCustomValidity('Keyword cannot be empty')" oninput="this.setCustomValidity('')" aria-label="Search">
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit" value="">
                          <i class="fa fa-search"></i>
                        </button>
                     </div>
                    </div>
            </form>
            </div>
          </div>
          <div class="col-md-6">
				    <button type="button" class="btn btn-secondary float-right" data-toggle="dropdown"onclick=" window.open('mycart', '_blank'); return false;">
				     <i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng
             @if (Session::get('mycart') != null)
               <span class="badge badge-pill badge-danger">{{ Session::get('mycart')->getSize() }}</span>
             @else
              <span class="badge badge-pill badge-danger">0</span>
             @endif
          </div>
		    </div>
       </div>
	</div>
  </div>