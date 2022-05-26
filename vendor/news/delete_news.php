<?php


require '../connectdb.php';
session_start();

$id = $_GET['id'];
$id_users = $_SESSION['users']['id'];
$text = $_POST['text'];



    $deletenews = mysqli_query($link,"DELETE FROM `news` WHERE `id` = '$id'");
       
      
        header('Location: ../adminnews.php');