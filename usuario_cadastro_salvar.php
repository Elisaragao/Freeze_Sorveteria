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
include "header_admin.php";
include "footer_admin.php";


$login = $_POST["txtLoginUsuario"];
$senha = $_POST["txtSenhaUsuario"];
$hash = password_hash($senha, 1); //PRECISA DE 2 PARÂMETROS E O 1º É A SENHA

include "conexao_bd.php";

$sql = "INSERT INTO usuario(login_usuario, senha_usuario)";
$sql .= "VALUES('$login', '$hash')";

if (executarComando($sql))
echo "<h1> Cadastro feito com sucessso!</h1>";

?>

</body>
</html>









?>