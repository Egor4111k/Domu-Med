<?php
session_start();
require "vendor/connectdb.php";
?>
<!DOCTYPE html>
<php lang="ru">

<head>
  <title>domu_med</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/egr.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/knopka.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="favicon1.ico" type="image/x-icon">
  <link rel="icon" href="favicon1.ico" type="image/x-icon">



</head>

<body>
<style>
    
</style>
  <div class="site-wrap">


  <div class="site-navbar py-2">

<div class="search-wrap">
  <div class="container">
    <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
    <form action="#" method="post">
      <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
    </form>
  </div>
</div>
<div class="container">
  <div class="d-flex align-items-center justify-content-between">
  <div id="header">
 <div class="logo1">
  <a href="index.php"> <img src="images/header.png" width="307" height="68" />
  </a>
 </div>
</div>
    <div class="main-nav d-none d-lg-block">
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <ul class="site-menu js-clone-nav d-none d-lg-block">
          <li class="link"><a href="index.php" class="glo">??????????????</a></li>
          <li><a href="shop.php" class="glo">??????????????</a></li>
          <li><a href="news.php" class="glo">??????????????</a></li>
          <li><a href="about.php" class="glo">?? ??????</a></li>
          <li><a href="contact.php" class="glo">????????????????</a></li>
        </ul>
      </nav>
    </div>
    <div class="icons">
<!--  <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>-->
      <a href="#.php" class="icons-btn d-inline-block bag">
        <span class="icon-shopping-bag"></span>
        <span class="number">2</span>
        <?php if (!empty($_SESSION['users'])) {?>
                          <a href="vendor/exit.php" class="primary-btn f-btn">??????????</a>
                          <?php if ($_SESSION['users']['flag'] > 0) {?>
                              <a href="vendor/admin.php" class="primary-btn f-btn">??????????????</a>
                          <?php }?>
                          <?php } else { ?>

      <a href="login.php" class="icons-btn d-inline-block bag">
        <span class="icon-user"></span></a>
        <?php }?>

      <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
          class="icon-menu"></span></a>
    </div>
  </div>
</div>
</div>
<marquee behavior="alternate" bgcolor="#60bef1" direction="right" style="color: #fff; font-size: 30px; font-weight: bold; line-height: 150%; text-shadow: #000000 0px 1px 1px;">?????????? ????????????????????</marquee>
          </div>
        </div>
      </div>
    </div>
    <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <p>
                <a style=" margin-top:-300px; bottom:30px; center:50px" href="shop.php"  class="btn btn-primary px-5 py-3">??????????????</a>
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">???????????????????? ????????????????</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="index.php"> <img src="images/product12.png" alt="Image"></a>
            <h3 class="text-dark"><a href="index.php">????????????????????????</a></h3>
            <p class="price">155.00???</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="index.php"> <img src="images/product12.png" alt="Image"></a>
            <h3 class="text-dark"><a href="index.php">????????????????</a></h3>
            <p class="price">170.00???</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="index.php"> <img src="images/product12.png" alt="Image"></a>
            <h3 class="text-dark"><a href="index.php">????????</a></h3>
            <p class="price">110.00???</p>
          </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="shop.php" class="btn btn-primary px-4 py-3">???????????????????? ??????</a>
          </div>
        </div>
      </div>
    </div> -->

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">???????? ????????????????????????</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <div class="text-center item mb-4">
                <img src="images/products.png" alt="Image">
                <h3 class="text-dark"></h3>
              </div>

              <div class="text-center item mb-4">
                 <img src="images/products1.png" alt="Image">
                <h3 class="text-dark"></h3>
              </div>

              <div class="text-center item mb-4">
                 <img src="images/products2.png" alt="Image">
                <h3 class="text-dark"></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <a href="tablecoronavirus.php" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
                <div class="banner-1-inner align-self-center">
                  <h2>Domu Med</h2>
                  <p>???????????????????? ???????????????????? 1,5?? ??????????????????.
                  </p>
                </div>
              </a>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
              <a href="tablecoronavirus.php" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
                <div class="banner-1-inner ml-auto  align-self-center">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
  
  
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
  
              <div class="block-7">
                <h3 class="footer-heading mb-4">?? ??????</h3>
                <p>???????????? ?????????????? ??????????????????, ???????????????????? ?? ?????????????????? ???? ?????????????? ???????????????????? ??????????.</p>
              </div>
  
            </div>
            <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
              <h3 class="footer-heading mb-4">?????????????? ????????????</h3>
              <ul class="list-unstyled">
                <li><a href="index.php">??????????????</li>
                <li><a href="shop.php">??????????????</a></li>
                <li><a href="about.php">?? ??????</a></li>
                <li><a href="contact.php">????????????????</a></li>
              </ul>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="block-5 mb-5">
                <h3 class="footer-heading mb-4">????????????????</h3>
                <ul class="list-unstyled">
                  <li class="address">????????????,??.????????</li>
                  <li class="phone"><a href="tel://23923929210">+7 913 666 998</a></li>
                  <li class="email">domu_med@gmail.com</li>
                </ul>
              </div>
  
  
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <p>
                Domu med  &copy; 2022 ?????? ?????????? ????????????????
              </div>
          </div>
        </div>
      </footer>
    </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="https://kit.fontawesome.com/954531388b.js" crossorigin="anonymous"></script>
   <script src="js/knopka.js"></script>
  <script src="js/main.js"></script>

</body>

</php>