<?php
session_start();
require "vendor/connectdb.php";
?>
<!DOCTYPE html>
<html lang="ru">

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
   <link rel="stylesheet" href="css/otvet.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <link rel="icon" href="favicon.ico" type="image/x-icon">



</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

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
            <a href="#.html" class="icons-btn d-inline-block bag">
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
          

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Главная</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Контакты</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Свяжитесь с нами</h2>
          </div>
          <div class="col-md-12">
    
              <form action="multipart/form-data" method="post" id="form" onsubmit="send(event, 'send.php')">
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Имя <span class="text-danger">*</span></label>
                    <input type="name" name="name" class="form-control" id="c_fname" name="c_fname">
                  </div>

                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Сообщение </label>
                    <textarea name="text" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Отправить">
                  </div>
                </div>
              </div>
            </form>
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
                  <p>Соблюдайте пожалуйста 1,5М дистанции.
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
<script>
// Отправка данных на сервер
function send(event, php){
console.log("Отправка запроса");
event.preventDefault ? event.preventDefault() : event.returnValue = false;
var req = new XMLHttpRequest();
req.open('POST', php, true);
req.onload = function() {
    if (req.status >= 200 && req.status < 400) {
    json = JSON.parse(this.response); // Ебанный internet explorer 11
        console.log(json);

        // ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
        if (json.result == "success") {
            // Если сообщение отправлено
            alert("Сообщение отправлено");
        } else {
            // Если произошла ошибка
            alert("Ошибка. Сообщение не отправлено");
        }
    // Если не удалось связаться с php файлом
    } else {alert("Ошибка сервера. Номер: "+req.status);}}; 

// Если не удалось отправить запрос. Стоит блок на хостинге
req.onerror = function() {alert("Ошибка отправки запроса");};
req.send(new FormData(event.target));
}
</script>
</body>

</html>