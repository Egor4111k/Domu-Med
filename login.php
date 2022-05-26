<?php 
session_start();
require "vendor/connectdb.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domu med</title>
    <link rel="stylesheet" href="css/autoriz.css" type="text/css">
</head>
<body>
<div>  
<form class="login-form" action="vendor/authAction.php" method="POST">
                            <h1>АВТОРИЗАЦИЯ</h1>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Пароль" required>
                                </div>
                                <button type="submit" name="signin" class="default-btn btn-ы">АВТОРИЗАЦИЯ</button>
                                <p>Еще не зарегистрированы? - <a href="reg.php"> Зарегистрироваться</a> </p>
                                <p>Вернуться на главную? - <a href="index.php">Главная</a> </p>

                                <?php 
                                if ($_SESSION["message"]){
                                $alert = $_SESSION["message"];
                                echo "<p style = 'color:red;'> $alert</p>";
                                unset($_SESSION["message"]);  
                                }
 
                                ?>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>


</body>
</html>