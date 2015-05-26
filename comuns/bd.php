<?php

/*
 * Faz a conexão com o banco de dados
 */

//Realiza a conexão
$_conexao = mysqli_connect($_config["bd"]["host"], $_config["bd"]["usuario"], $_config["bd"]["senha"], $_config["bd"]["database"]);

//Erro na conexão, termina a execução do script
if (mysqli_errno()){
    exit("Erro ao realizar a conexão com o banco de dados.");
}

//Configura o charset a ser utilizado
mysqli_set_charset($_conexao, "utf8");