<?php
session_start();
$title = "Cadastro";
include '../includes/header.php';
?>

<h2>Cadastro</h2>
<form method="POST" action="../includes/functions.php">
  <input type="hidden" name="action" value="cadastrar">

  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome" required>

  <label for="sobrenome">Sobrenome:</label>
  <input type="text" id="sobrenome" name="sobrenome" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="telefone">Telefone (11 dígitos):</label>
  <input type="text" id="telefone" name="telefone" required maxlength="11">

  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha" required>

  <label for="confirmar_senha">Confirmar Senha:</label>
  <input type="password" id="confirmar_senha" name="confirmar_senha" required>

  <button type="submit">Cadastrar</button>
  <p id="mensagem">
    <?php
    if (isset($_SESSION['mensagem_cadastro'])) {
        echo $_SESSION['mensagem_cadastro'];
        unset($_SESSION['mensagem_cadastro']);
    }
    ?>
  </p>
</form>

<p>Já tem uma conta? <a href="login.php">Fazer login</a></p>

<?php include '../includes/footer.php'; ?>
