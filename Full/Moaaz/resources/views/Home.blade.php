<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <link rel="icon" href="{{asset('images/logo.svg')}}">

  <link rel="stylesheet" href="{{asset('CSS/master.css')}}">
</head>
  <title>Home</title>
</head>
  <body>
    <!-- ==================== Start Header ===================== -->
    <header class="">
      <div class="header-left">
        <button class="btn canves-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#canves" aria-controls="canves"> <i class="fa-solid fa-bars"></i></button>

          <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="canves" aria-labelledby="canvesLabel">
            <div class="offcanvas-header">

              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"> <i class="fa-solid fa-arrow-left-long"></i></button>
            </div>
            <div class="offcanvas-body">
              <ul class="canves-menu">
                <li>
                  <span class="li-dash"></span>
                  <a href="{{route('index')}}">Home</a>
                </li>
                <li>
                  <span class="li-dash"></span>
                  <a href="#">Store</a>
                </li>
                <li>
                  <span class="li-dash"></span>
                  <a href="{{route('register')}}">My account</a>
                </li>
                <li>
                  <span class="li-dash"></span>
                  <a href="#">Blog</a>
                </li>
                <li>
                  <span class="li-dash"></span>
                  <a href="#">Contact</a>
                </li>
              </ul>

              <div class="caves-logo" >
                <a href="{{route('index')}}"><img class="logo"  src="images/logo.svg" alt="logo"></a>
              </div>
            </div>
          </div>
      </div>


      <div class="header-center">
        <a href="{{route('index')}}"><img id="logo" src="images/logo.svg" alt="logo"></a>
      </div>

      <div class="header-right">
        <ul>
          <li class="icon-account">
            <a href="{{route('register')}}" @auth
              title="{{Auth::user()->name}} -> {{Auth::user()->id}}"
            @endauth> <i class="fa-solid fa-user"></i> </a>
          </li>
          <li class="icon-zoom">
            <a href="#"> <i class="fa-solid fa-magnifying-glass"></i> </a>
          </li>
          <li class="icon-cart">
            <a href="#"> <i class="fa-solid fa-bag-shopping"></i></a>
            <span class="cart-counter">0</span>
          </li>
        </ul>
      </div>

    </header>
    <!-- ==================== End Header ===================== -->



    <!-- ==================== Start Hero Slider ===================== -->
    <div class="hero-slider">

      <div id="HeroSlider" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item carousel-one active">
            <div class="row g-0">
              <div class="col-6">
                <div class="content">
                  <p>NEW THIS AUTUMN</p>
                  <h2>Futura Collection</h2>
                  <span class="line-down" >Discover</span>
                </div>
              </div>
              <div class="col-6 ">
                <div class="img-holder">
                  <div class="img-background">

                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="carousel-item carousel-two ">
            <div class="row g-0">
              <div class="col-6">
                <div class="content">
                  <p>NEW</p>
                  <h2>Brass PendantLight</h2>
                  <span class="line-down" >Discover</span>
                </div>
              </div>
              <div class="col-6 ">
                <div class="img-holder">
                  <div class="img-background">

                  </div>
                </div>

              </div>
            </div>
          </div>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#HeroSlider" data-bs-slide="prev">
          <span class="Arrow-slider Arrow-left"><i class="fa-solid fa-arrow-left"></i></span>

        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#HeroSlider" data-bs-slide="next">
          <span class="Arrow-slider Arrow-right"><i class="fa-solid fa-arrow-right"></i></span>

        </button>
      </div>


    </div>
    <!-- ==================== End Hero Slider ===================== -->


    <!-- ==================== Start Hero Slider ===================== -->
    <section id="Services">
      <div class="container">
        <div class="row g-0">
          <div class="col-sm-12 col-md-6 col-lg-4 ">
            <h2 class="Serv-1">Fast Shipping</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus0</p>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 ">
            <h2 class="Serv-2">Free Returns</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus0</p>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 ">
            <h2 class="Serv-3">Secure Payment</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus0</p>
          </div>

        </div>
      </div>
    </section>
    <!-- ==================== End Hero Slider ===================== -->


    <!-- ==================== Start BestSales ===================== -->
    <section id="BestSales">
      <div class="container">
        <h2 class="text-left" style="margin-bottom: 30px;">Best Sellers</h2>

        <div class="products">
          <div class="row g-0">
            <div class="single-product  col-sm-12 col-md-6 col-lg-3">
              <img src="{{asset('images/Product/1.jpg')}}" alt="img-product">
              <p class="tilte">Wall Clock</p>
              <div class="price">
                <del>$49.00 USD</del>
                <span class="Sale-price">$39.00 USD</span>
              </div>
            </div>
            <div class="single-product  col-sm-12 col-md-6 col-lg-3">
              <img src="{{asset('images/Product/2.jpg')}}" alt="img-product">
              <p class="tilte">Wall Clock</p>
              <div class="price">
                <del>$49.00 USD</del>
                <span class="Sale-price">$39.00 USD</span>
              </div>
            </div>
            <div class="single-product  col-sm-12 col-md-6 col-lg-3">
              <img src="{{asset('images/Product/3.jpg')}}" alt="img-product">
              <p class="tilte">Wall Clock</p>
              <div class="price">
                <del>$49.00 USD</del>
                <span class="Sale-price">$39.00 USD</span>
              </div>
            </div>
            <div class="single-product  col-sm-12 col-md-6 col-lg-3">
              <img src="{{asset('images/Product/4.jpg')}}" alt="img-product">
              <p class="tilte">Wall Clock</p>
              <div class="price">
                <del>$49.00 USD</del>
                <span class="Sale-price">$39.00 USD</span>
              </div>
            </div>
            <div class="single-product  col-sm-12 col-md-6 col-lg-3">
              <img src="{{asset('images/Product/5.jpg')}}" alt="img-product">
              <p class="tilte">Wall Clock</p>
              <div class="price">
                <del>$49.00 USD</del>
                <span class="Sale-price">$39.00 USD</span>
              </div>
            </div>
            <div class="single-product  col-sm-12 col-md-6 col-lg-3">
              <img src="{{asset('images/Product/6.jpg')}}" alt="img-product">
              <p class="tilte">Wall Clock</p>
              <div class="price">
                <del>$49.00 USD</del>
                <span class="Sale-price">$39.00 USD</span>
              </div>
            </div>
            <div class="single-product  col-sm-12 col-md-6 col-lg-3">
              <img src="{{asset('images/Product/7.jpg')}}" alt="img-product">
              <p class="tilte">Wall Clock</p>
              <div class="price">
                <del>$49.00 USD</del>
                <span class="Sale-price">$39.00 USD</span>
              </div>
            </div>
            <div class="single-product  col-sm-12 col-md-6 col-lg-3">
              <img src="{{asset('images/Product/8.jpg')}}" alt="img-product">
              <p class="tilte">Wall Clock</p>
              <div class="price">
                <del>$49.00 USD</del>
                <span class="Sale-price">$39.00 USD</span>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- ==================== End BestSales ===================== -->




    <!-- ==================== Start Categories ===================== -->

    <section id="Categories">
      <div class="container">
        <h2 style="margin-bottom: 30px; text-align: right;">Categories</h2>




        <div class="row g-0">
          <div class="col align-itmes-left">

            <div class="img-cat">
                <img src="{{asset('images/Categories/1.jpg')}}" alt="">
                <div class="categories-block cat-right">
                  <h2>Living Room</h2>
                  <span class="line-down" >View Category</span>
                </div>


            </div>
          </div>
        </div>

        <div class="row g-0">
          <div class="col right-col">

            <div class="img-cat">
                <img src="{{asset('images/Categories/2.jpg')}}" alt="">
                <div class="categories-block cat-left">
                  <h2>Dining Room</h2>
                  <span class="line-down" >View Category</span>
                </div>


            </div>
          </div>
        </div>



        <div class="row g-0">
          <div class="col align-itmes-left">

            <div class="img-cat">
                <img src="{{asset('images/Categories/3.jpg')}}" alt="">
                <div class="categories-block cat-right">
                  <h2>Bedroom</h2>
                  <span class="line-down" >View Category</span>
                </div>


            </div>
          </div>
        </div>




        <div class="row g-0">
          <div class="col right-col">

            <div class="img-cat">
                <img src="{{asset('images/Categories/4.jpg')}}" alt="">
                <div class="categories-block cat-left">
                  <h2>Accessories</h2>
                  <span class="line-down" >View Category</span>
                </div>


            </div>
          </div>
        </div>


      </div>
    </section>


    <!-- ==================== End Categories ===================== -->



    <!-- ==================== Start Footer ===================== -->
    <footer>
      <div class="container">
        <div class="row g-0">
          <div class="col-12 col-md-6 col-lg-4">
            <ul>
              <li><a href="{{route('index')}}"><img src="{{asset('images/footerLogo.svg')}}" class="logo" alt="logo"></a></li>
              <li><span>3880 Braxton Street</span></li>
              <li><span>Chicago, il 60606</span></li>
              <li><span>United States</span></li>
              <li><span>815-515-2603</span></li>
              <li><span>company@domain.com</span></li>
            </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <ul>
              <li class="title"><span>Categories</span></li>
              <li><span>Living Room</span></li>
              <li><span>Futura Collection</span></li>
              <li><span>Dining Room</span></li>
              <li><span>Bedroom</span></li>
              <li><span>Accessories</span></li>
              <li><span>Outlet</span></li>
            </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <ul>
              <li class="title"><span>useful links</span></li>
              <li><a href="{{route('dashboard')}}"><span>My Account</span></a></li>
              <li><span>404</span></li>
              <li><span>FAQ</span></li>
              <li><span>Licensing</span></li>
              <li><span>Style Guide</span></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- ==================== End Footer ===================== -->












    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>
