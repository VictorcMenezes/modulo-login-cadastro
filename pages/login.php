<?php
session_start();
$title = "Login";
include '../includes/header.php';
?>

<h2>Login</h2>
<form method="POST" action="../includes/functions.php">
  <input type="hidden" name="action" value="login">

  <label for="login">Email ou Telefone:</label>
  <input type="text" id="login" name="login" required>

  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha" required>

  <button type="submit">Entrar</button>
  <p id="mensagem">
    <?php
    if (isset($_SESSION['erro_login'])) {
        echo $_SESSION['erro_login'];
        unset($_SESSION['erro_login']);
    }
    ?>
  </p>
</form>

<p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>

<?php include '../includes/footer.php'; ?>
