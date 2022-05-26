<?php


require '../connectdb.php';
session_start();

$id = $_POST['id'];
$id_users = $_SESSION['users']['id'];
$text = $_POST['text'];



    $updatenews = mysqli_query($link,"UPDATE `news` SET `text`='$text' WHERE `id` = '$id'");
       
      
        header('Location: ../adminnews.php');
        