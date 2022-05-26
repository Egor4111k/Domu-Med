<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'connectdb.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $user_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $user = mysqli_query($link, "SELECT * FROM `users` WHERE `id` = '$user_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $user = mysqli_fetch_assoc($user);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <title>domu_med</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/aos.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
    </head>
    <style>
        .admin-container{
            margin-top: 120px;
            color: black;
          
        }
        .buttonupdate{
            color: blue;
        }
        </style>

    <body data-spy="scroll" data-target="#navmenu" data-offset="70">
        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div>
        
        <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">Domu Med</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="index.html">Главная</a></li>
                <li><a href="shop.html">Продукт</a></li>
                <li class="has-children">
                <li><a href="shop.html">Новости</a></li>
                <li><a href="?section=users">Пользователи</a></li>

              </ul>
            </nav>
          </div>
    <body>
        <div class="container admin-container">
            <div class="row">
                <div class="col-md-12">
                <h3>Изменить</h3>

                <form action="update.php" method="post">
                
                <input type="hidden" name="id" value="<?= $user['id'] ?>">               
                <p>Имя</p>
                <input type="name" name="name" value="<?= $user['name'] ?>">
                
                
                              
                <p>Пароль</p>
                <input  name="password" value="<?= $user['password'] ?>">
                                            
                <p>Почта</p>
                <input type="email" name="email" value="<?= $user['email'] ?>">
                                
                <br><br>
                
                <button class="buttonupdate" type="submit">Подтвердить</button>
                                
                </form>
                                </div>
        </div>
        </div>
        </div>
        
        <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>

  <script src="../js/main.js"></script>
</body>
</html>