<?php


require 'User.php';

session_start();

if (isset($_POST['name'])) {
    $_SESSION['user'] = new User($_POST['name'], $_POST['username'], $_POST['password']);
    echo '<script language="javascript">alert("¡Usuario registrado con exito!");</script>';
    $_POST = null;
}


