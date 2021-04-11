<?php
include("conexao.php");

$nome = $_POST["nome"];
$matricula = $_POST["matricula"];

$sql = "INSERT INTO funcionario (nome, matricula) VALUES ('$nome', '$matricula')";
$insert =  mysqli_query($link, $sql);
if ($insert) {
    echo "<p>DADOS INSERIDOS COM SUCESSO</p>";
} else {
    echo "<p>ERRO DE INSERÇÃO DE DADOS</p>";
}
