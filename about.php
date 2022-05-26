<?php
session_start();
?>
<!DOCTYPE php>
<php lang="en">

<head>
  <title>domu_med</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/egr.css">
  <link rel="stylesheet" href="css/banner.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

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
          <li class="link"><a href="index.php" class="glo">Главная</a></li>
          <li><a href="shop.php" class="glo">Магазин</a></li>
          <li><a href="shop.php" class="glo">Новости</a></li>
          <li><a href="about.php" class="glo">О нас</a></li>
          <li><a href="contact.php" class="glo">Контакты</a></li>
        </ul>
      </nav>
    </div>
          <div class="icons">
<!--  <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>-->
            <a href="#.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
              <?php if (!empty($_SESSION['users'])) {?>
                                <a href="vendor/exit.php" class="primary-btn f-btn">Выйти</a>
                                <?php if ($_SESSION['users']['flag'] > 0) {?>
                                    <a href="vendor/admin.php" class="primary-btn f-btn">Админка</a>
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

    <div class="site-blocks-cover inner-page" style="background-image: url('images/hero_3.png');">
      
    </div>

    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
                <img src="images/about1.jpg" alt="Image placeholder" class="img-fluid rounded">
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
    
    
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">Начало</h2>
            </div>
            <p class="text-black">Это качественные лекарства на все случаи жизни. Здесь вы найдете все, чего не хватает в домашней аптечке.  </p>
            <p class="text-black">С нами не нужно искать лучшее решение, потому что у нас быстро и дешево.</p>
    
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <img src="images/about2.jpg" alt="Image placeholder" class="img-fluid rounded">
              </figure>
            </div>
          </div>
          <div class="col-md-5 mr-auto">
    
    
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">Наша компания является надежной</h2>
            </div>
            <p class="text-black">Поможет сберечь здоровье без лишних расходов. Мы устанавливаем минимальные наценки на лекарства и дорожим своей репутацией. </p>
            <p class="text-black">Каждая партия медикаментов проходит контроль согласно требованиям законодательства. Ежедневно нам доверяют более 100 тысяч покупателей</p>
            <p class="text-black">Мы работаем с ведущими фармацевтическими компаниями мира.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
                <img src="images/about3.jpg" alt="Image placeholder" class="img-fluid rounded">
            </div>
          </div>
          <div class="col-md-5 mr-auto">
    
    
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">Широкий ассортимент продукции:</h2>
            </div>
            <p class="text-black">Лекарственные средства.</p>
            <p class="text-black">Лечебная косметика.</p>
            <p class="text-black">Средства гигиены.</p>
          </div>
          
        </div>
      </div>
    </div>
    
    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck text-primary"></span>
            </div>
            <div class="text">
              <h2>Бесплатная доставка</h2>
              <p>Максимальный срок доставки всего три дня.Заказ оперативно обрабатывают сотрудники склада, и он отправляется в выбранную вами аптеку.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2 text-primary"></span>
            </div>
            <div class="text">
              <h2>Хорошие цены</h2>
              <p>Цены на многие лекарства и товары для красоты и здоровья на сайте ниже, чем в среднем в аптеках. 
                Мы сотрудничаем напрямую с производителями.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help text-primary"></span>
            </div>
            <div class="text">
              <h2>Конфиденциально</h2>
              <p>При получении продукции  вам не придется даже произносить названия выбранных товаров — просто назовите номер заказа, и вам его выдадут.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
  
              <div class="block-7">
                <h3 class="footer-heading mb-4">О нас</h3>
                <p>Каждый продукт безопасен, эффективен и направлен на решение конкретных задач.</p>
              </div>
  
            </div>
            <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
              <h3 class="footer-heading mb-4">Быстрые ссылки</h3>
              <ul class="list-unstyled">
                <li><a href="index.php">Главная</li>
                <li><a href="shop.php">Магазин</a></li>
                <li><a href="about.php">О нас</a></li>
                <li><a href="contact.php">Контакты</a></li>
              </ul>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="block-5 mb-5">
                <h3 class="footer-heading mb-4">Контакты</h3>
                <ul class="list-unstyled">
                  <li class="address">Россия,г.Омск</li>
                  <li class="phone"><a href="tel://23923929210">+7 913 666 998</a></li>
                  <li class="email">domu_med@gmail.com</li>
                </ul>
              </div>
  
  
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <p>
                Domu med  &copy; 2022 Все права защищены
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

  <script src="js/main.js"></script>

</body>

</php>