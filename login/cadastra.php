<?php 
// require_once '../database/connect.php';
require_once '../includes/functions.php';
require_once 'verificar.php'
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Cadastro Usuário</title>
</head>
<body>
    <?php include '../includes/header.php';?>
    <form action="" method="post">
        <label for="email">E-mail: </label>
        <input type="text" name="email" id="email"><br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha"><br>
        <input type="submit" value="Cadastrar">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    cadastrar_user($conexao, $_POST['email'], $_POST['senha']);
    }
    include '../includes/footer.php';?>
</body>
</html>