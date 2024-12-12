<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <title>Cadastro</title>

  </head>
  <body>
    <h1>Cadastro de Usuários</h1>
    <form action="salvar.php" method="POST">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" required><br>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required><br>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha" required><br>
      <button type="submit">Castrar</button>
    </form>
  </body>



</html>