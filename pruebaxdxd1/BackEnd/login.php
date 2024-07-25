<?php

require 'conexion.php';

if (isset($_POST['login'])) {

    $usuario = $_POST['nombre_user'];

    $contraseña = $_POST['contraseña_user'];
    
}