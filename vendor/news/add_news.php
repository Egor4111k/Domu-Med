<?php


require '../connectdb.php';
session_start();

$id = $_POST['id'];
$id_users = $_SESSION['users']['id'];
$text = $_POST['text'];



    $addnews = mysqli_query($link,"INSERT INTO `news`(`id`, `id_users`, `text`) VALUES (NULL,'$id_users','$text')");
       
      
        header('Location: ../adminnews.php');
      
      
