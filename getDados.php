<?php
include("conexao.php");
$matricula = $_POST["matricula"];

$sql = "SELECT * FROM funcionario WHERE matricula='$matricula'";
$result =  mysqli_query($link, $sql);

while ($res = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $res['id'] . "</td>";
    echo "<td>" . $res['nome'] . "</td>";
    echo "<td>" . $res['matricula'] . "</td>";
    echo "</tr>";
}
