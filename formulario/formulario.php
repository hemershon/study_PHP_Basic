<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <title>Formulário de Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <form action="processar.php" method="POST">
      <label for="usuario">Usuário:</label>
      <input type="text" name="usuario" id="usuario" require><br>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha" require><br>
      <button type="submit">Entrar</button>
    </form>
</body>

</html>