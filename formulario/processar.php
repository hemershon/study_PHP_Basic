<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario == "admin" && $senha === "1234") {
    echo "Bem-vindo, $usuario";
}else{
    echo "Usuário ou senha inválidos!";
}
?>