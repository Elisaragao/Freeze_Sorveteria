<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "referencias.php"; ?>
</head>
<body>
    <?php 
    include "conexao_bd.php";

    $login = $_POST["txtLoginUsuario"];
    $senha = $_POST["txtSenhaUsuario"];

    $sql = "SELECT * FROM usuario ";
    $sql .= "WHERE login_usuario = '$login'";

    $dados = retornarDados($sql);
    
    if ($dados == 0)
    {
        echo "<h1> Usuário inexistente </h1>"; 
    }
    else 
    {
        header("location:index_admin.php");gi
    }

    
    
    
    ?>
</body>
</html>