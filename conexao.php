<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cerbero";
$link = mysqli_connect($host, $user, $pass) or die(mysqli_connect_error());
$db = mysqli_select_db($link, $banco) or die("Erro ao Selecionar o BD!");
?>