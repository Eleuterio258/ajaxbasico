<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        function postDados() {
            var nome = document.getElementById("nome").value;
            var matricula = document.getElementById("matricula").value;


            $.ajax({
                type: "POST",
                url: "postDados.php",
                dataType: "html",

                data: {
                    nome: nome,
                    matricula: matricula
                },
                success: function(msg) {
                    $("#resposta").html(msg);
                },
            })
        }

        function getDados() {

            var matricula = document.getElementById("get_matricula").value;
            $.ajax({
                type: "POST",
                url: "getDados.php",
                dataType: "html",
                data: {
                    matricula: matricula
                },
                success: function(msg) {
                    $("#dados").html(msg);
                },
            })
        }
    </script>
</head>

<body>
    <form>
        <div>NOME:</div>
        <div><input type="text" id="nome"></div>
        <div>MATRICULA:</div>
        <div><input type="number" id="matricula"></div> <br>
        <div><input type="button" value="Enviar" onclick="postDados();"></div>

    </form>
    <span id="resposta"></span>
    <br>

    <form for="get_matricula">
        <div>MATRICULA:</div>
        <div>
            <input type="number" id="get_matricula">
            <input type="button" value="Pesquisar" onclick="getDados();">
        </div>
    </form>
    <br><br><br><br>
    <table border="1px">
        <tr>
            <th>ID;</th>
            <th>NOME:</th>
            <th>MATRICULA:</th>
        </tr>
        <tbody id="dados"></tbody>
    </table>
</body>

</html>