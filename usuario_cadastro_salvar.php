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

    $hash = password_hash($senha_usuario,1);
    
    $sql= "INSERT INTO usuario(login_usuario,senha_usuario) VALUES('$login_usuario','$hash')";

    if (executarComando($sql))
    {
    echo"<h1>Usuario Adicionado!</h1>";
    }
    else{
    echo"<h1>Usuario não cadastrado</h1>";
    }

    ?>



<?php include "footer_admin.php"; ?>
</body>
</html>