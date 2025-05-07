<?php
require_once '../includes/auth.php'; // já inicia a sessão e faz a verificação
$title = "Bem-vindo";
include '../includes/header.php';

$nome = $_SESSION['usuario']['nome'];
?>

<style>
  .top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
  }
</style>

<div class="top-bar">
  <h2>Olá, <?= htmlspecialchars($nome) ?>!</h2>
  <a href="../logout.php" style="color:red;">Logout</a>
</div>

<p>Seja bem-vindo à sua área logada.</p>

<?php include '../includes/footer.php'; ?>
