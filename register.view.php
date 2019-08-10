<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require_once 'userController.php' ?>
    <div class="container">
        <form action="" method="POST" class="box column">
            <h1>Registro</h1>
            <label for="name">Nombre</label>
            <input type="text" name="name" class="input">
            <label for="username">Usuario</label>
            <input type="text" name="username" class="input">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="input">
            <div class="form_button">
                <button type="submit" class="form_button--primary">Registrarse</button>
                <a href="login.view.php">Iniciar Sesión</a>
            </div>
        </form>
    </div>
</body>

</html>