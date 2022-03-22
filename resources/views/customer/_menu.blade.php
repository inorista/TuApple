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
  <div class="container-fluid bg">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-4">
                <a href="#"><img class="img-fluid" src="https://i.ibb.co/GFk2ycg/logo.png"></a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                  <div class="mt-5 float-right pr-5">
                      <div class="container">
                          <img class="img-fluid" src="https://i.ibb.co/VtWYt8B/logo-deli.png">
                          <span class="text_header">Giao hàng nhanh trong nội thành</span>
                      </div>
                  </div>
            </div>     
         </div>
      </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav float-right ml-auto">
                  <li class="nav-item active">
                      <a href="home" class="nav-link content_nav  pr-5">HOME</a></li>
                  <?php if (isset($cates)) {
                  foreach ($cates as $cate) { ?>
                  <li class="nav-item"><a class="nav-link content_nav  pr-5" href="listproduct?cateid=<?= $cate->ID ?>"><?= $cate->Name ?></a></li>
                  <?php }
                  }?>
                </ul>
              </div>
          </nav>
      </div>
    <div class="container pb-5">
        <div class="row">
              <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                          <span class="content_slide">GIẢM 3% KHI THANH TOÁN QUA MASTER CARD</span>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                            <span class="sale_2">NEW</span>
                            <span class="sale_1">ARRIVAL!!</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 display-block">
                    <img class="img-fluid" src="https://i.ibb.co/xMsghRL/product-header.png">
                </div>
          </div>
    </div>
  </div>