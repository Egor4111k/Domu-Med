<?php
$hostname = "localhost";
$username = "j91396j7_domumed";
$userpassword = "domumed001!";
$namedb = "j91396j7_domumed";

$link = mysqli_connect($hostname,$username,$userpassword,$namedb);


if(!$link){
 echo "БД не работает";
}