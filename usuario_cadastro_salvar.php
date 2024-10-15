<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "referencias.php";  ?>
</head>
<body>
    <?php
    include "header_admin.php";
    include "conexao_bd.php";

    $login_usuario= $_POST["txtLoginUsuario"];
    $seha_usuario= $_POST["txtSenhaUsuario"];

    $sql= "INSERT INTO (login_usuario,senha_usuario)"
    $sql.=" VALUES ()"    ?>



<?php include "footer_admin.php"; ?>
</body>
</html>