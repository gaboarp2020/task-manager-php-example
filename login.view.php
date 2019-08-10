<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require_once 'userController.php' ?>
    <div class="container">
        <form action="" method="POST" class="box column">
            <h1>Login</h1>
            <input type="hidden" name="hidden">
            <label for="username">Usuario</label>
            <input type="text" name="username" class="input">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="input">
            <div class="form_button">
                <button type="submit" class="form_button--primary">Iniciar Sesión</button>
                <a href="register.view.php">Crear una Cuenta</a>
            </div>
        </form>
    </div>

    <?php

    if (isset($_POST['hidden'])) {

        $isValid = $_SESSION['user']->login($_POST['username'], $_POST['password']);
        $_POST = null;
        if ($isValid) {
            header('location: task.view.php');
        } else {
            echo '<script language="javascript">alert("Usuario incorrecto");</script>';
        }
    }
    ?>

</body>

</html>