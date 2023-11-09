<?php
    require 'app.php';

    function incluirTemplate($nombre){
        include TEMPLATES_URL . "/${nombre}.php";
}

function estaAutentificado(): bool{
    session_start();
    $auth = $_SESSION['login'];
    if($auth){
        return true;
    }else{
        return false;
    }
}