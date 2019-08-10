<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php require_once 'userController.php' ?>
    <div class="container">
        <div class="box">
            <div class="row space_around">
                <div class="section">

                    <form action="" method="POST" class="column">
                        <h1>Crear una Tarea:</h1>
                        <input type="hidden" name="add">
                        <label for="title">Titulo</label>
                        <input type="text" name="title" class="input">
                        <button type="submit" class="form_button--primary">Crear</button>
                        <br>
                    </form>

                    <form action="" method="POST" class="column">
                        <input type="hidden" name="clear">
                        <div class="form_button">
                            <button type="submit" class="form_button--secundary">Limpiar lista</button>
                            <a href="/">Salir</a>
                        </div>
                    </form>

                </div>
                <div class="section">
                    <div class="column">

                        <h1>Lista de Tareas: </h1>
                        <ul>
                        <?php

                        if (!isset($_SESSION['user'])) {
                            header('location: /');
                        }

                        if (isset($_POST['add'])) {
                            $_SESSION['user']->addTask($_POST['title']);
                            $_POST = null;
                        }
                        
                        $_SESSION['user']->showTask();

                        if (isset($_POST['clear'])) {
                            $_SESSION['user']->clearTasksList();
                            $_POST = null;
                            header('Location: ' . $_SERVER['REQUEST_URI']);
                        }

                        ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>