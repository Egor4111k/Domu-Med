<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/regist.css">
	<title>Domu med</title>
</head>

<body>
	<div>

	<form class="login-form" action="vendor/loginAction.php" method="POST">
								<h1>РЕГИСТРАЦИЯ</h1>
                                <div class="form-group">
                                    <input type="text"  name="name" class="form-control" placeholder="Имя" required>
                                </div><div class="form-group">
                                    <input type="email" name="email" class="form-control"  placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Пароль" required>
                                </div>
                                <input type="submit" class="default-btn btn-blue" value="Зарегистрироваться">
                                <p>Уже зарегистрированы ?- <a href="login.php"> Войти</a></p>
                            </form>
                            <?php 
                                if ($_SESSION["message"]){
                                    $alert = $_SESSION["message"];
                                    echo "<p style = 'color:green;'> $alert</p>";
                                    unset($_SESSION["message"]);  
                                    }
                                ?>
                        </div>
                    </div>
                </div>
            </div>

</body>
</html>