<?php

/*
 * Verifica se o usuario está logado, se não estiver, redireciona-o para a pagina de login
 */

if( !isset($_SESSION["logado"]) ){
    session_destroy();
    header("Location: login.php");
    exit;
}
