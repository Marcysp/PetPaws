

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font yang kita gunakan diambil dari google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fuzzy+Bubbles:wght@400;700&family=Poppins&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="img/logo h.png">
    <title>Menu Page</title>

    <!-- CSS dari boots strap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/product-user.css">
    <!-- css bootsrap untuk mengambil icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
    <!-- navbar start -->
    <header>
        <nav class="navbar bg-light fixed-top" id="navbar-example2 px-3 mb-3">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Health <span>n</span> Fit</a>
              <!-- scrollspy navbar start -->
                    <ul class="kelompok-menu">
                        <li >
                            <a class="scroll" tabindex="1" href="#scrollfood">Food</a>
                        </li>
                        <li>
                        <a class="scroll" tabindex="1" href="#scrollsmoothies">Smoothies</a>
                        </li>
                        <li>
                        <a class="scroll" tabindex="1" href="#scrollsnack">Snack</a>
                        </li>

                    </ul>
              <!-- scrollspy navbar end -->
                <!-- searching start-->
                <form action="" method="post">
                    <input type="text" name="keyword" size="20"
                    autofocus placeholder="Cari" autocomplete="off">
                    <button type="submit" name="cari" ><i class="bi bi-search"></i></button>
                </form>
                <!-- searching end -->
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="bi bi-person-circle"></i>Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="keranjang-belanja.php"><i class="bi bi-cart-fill"></i>Chart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <!-- navbar end -->
    <!-- Tampil menu start -->
    <section class="produk">
        <div class="section-title" style="margin-bottom:20px; margin-top:50px;">
            <h2 data-title="Our Menu">Menu</h2>
        </div>
        <!-- Tampil menu start -->
    <section class="produk">
        <div class="section-title" style="margin-bottom:20px; margin-top:50px;">
            <h2 data-title="Our Menu">Menu</h2>
        </div>
        <!-- Scrollspy start-->
        <a class="scroll" id="scrollfood"></a>
            <a class="scroll" id="scrollsnack"></a>
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="produk-container" tabindex="0">
            <h4 class="produk-kategori" style="margin-top:50px;">Snack Healt Menu</h4>
                <div class="container text-center">
                    <div class="row">
                        <div class="col-3">
                            <div class="produk-card">
                                <div class="produk-image">
                                    <span class="discount-tag">10%</span>
                                    <a href="#" alt=""></a>
                                    <a href="#" class="btn btn-primary btn-block"><button class="card-btn">Add To Cart</button></a>
                                </div>
                                <div class="produk-info">
                                    <h5 class="produk-brand">berry smoothies</h5>
                                    <span class="price">35.000</span><span class="actual-price">40.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Scrollspy end -->
    </section>
    </section>
    <!-- tampil menu end -->
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>
