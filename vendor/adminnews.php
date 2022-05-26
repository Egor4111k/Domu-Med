<?php
session_start();
require "./connectdb.php";
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
    <style>
        .admin-container{
            margin-top: 120px;
            color: black;
          
        }
        </style>
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
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">Domu Med</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="index.php">Главная</a></li>
                <li><a href="?section=users">Продукт</a></li>
                <li class="has-children">
                <li><a href="adminnews.php">Новости</a></li>
                <li><a href="adminusers.php">Пользователи</a></li>

              </ul>
            </nav>
          </div>
          <div class="icons">
              <?php if (!empty($_SESSION['users'])) {?>
                                <a href="../vendor/exit.php" class="primary-btn f-btn">Выйти</a>
                                <?php if ($_SESSION['users']['flag'] > 0) {?>
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
    <body>
        <div class="container admin-container">
            <div class="row">
                <div class="col-md-12">

    <table class="table">
        <tr>
            <th>ID</th>
            <th>пользователь</th>
            <th>Информация</th>
            <th>Статус</th>
        </tr>

        <?php

            $news = mysqli_query($link, "SELECT `news`.*, `users`.`name`
FROM `news` 
	LEFT JOIN `users` ON `news`.`id_users` = `users`.`id`");
            while($new = mysqli_fetch_assoc($news)){?>
                    <tr>
                        <td><?= $new['id']?></td>
                        <td><?= $new['name'] ?></td>
                        <td><?= $new['text'] ?></td>
                        <td><a href="news/updatenews.php?id=<?= $new['id'] ?>">Изменить</a><br>
                        <a style="color: red;" href="news/delete_news.php?id=<?= $new['id'] ?>">Удалить</a></td>

                    </tr>
      <?php } ?>
        
    </table>
    <a class="btn btn-primary" type="submit" name="submit" href="news/addnews.php"></a>
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