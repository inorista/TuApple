<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link href="{{ asset('css/styles.css') }}" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet"> 
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="{{ asset('js/jquery.spinner.min.js') }}"></script>
  <script src="{{ asset('js/jquery.spinner.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('js/bootstrap-spinner.css') }}">
  <link rel="stylesheet" href="{{ asset('js/bootstrap-spinner.min.css') }}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@700&family=Montserrat:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('js/blowup.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/anime.js') }}"></script>
</head>
<body>
  <div class="container-fluid bg pb-5">
    <div class="container pt-3">
      <a href="#"><img class="img-fluid float-left" src="https://i.ibb.co/GFk2ycg/logo.png"></a>
        <nav class="navbar navbar-expand-lg navbar-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav float-right ml-auto">
                  <li class="nav-item active">
                      <a href="home" class="nav-link content_nav  pr-5">HOME</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link content_nav  pr-5" href="listcategory">Category</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link content_nav  pr-5" href="listproduct">Product</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link content_nav  pr-5" href="listorder">Order</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link content_nav" href="listcustomer">Customer</a>
                  </li>
                </ul>
              </div>
          </nav>
      </div>
    </div>
</body>
</html>