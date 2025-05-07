<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'cadastrar') {
    // Recebendo os dados
    $nome      = trim($_POST['nome']);
    $sobrenome = trim($_POST['sobrenome']);
    $email     = trim($_POST['email']);
    $telefone  = trim($_POST['telefone']);
    $senha     = $_POST['senha'];

    // Verifica se email já existe
    $stmt = $db->prepare("SELECT id FROM usuarios WHERE email = :email OR telefone = :telefone");
    $stmt->execute([
        ':email'    => $email,
        ':telefone' => $telefone
    ]);

    if ($stmt->fetch()) {
        $_SESSION['mensagem_cadastro'] = "✅ Cadastro realizado com sucesso!";
        header("Location: ../pages/cadastro.php");
        exit;
    }

    // Hash da senha
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserindo no banco
    $stmt = $db->prepare("INSERT INTO usuarios (nome, sobrenome, email, telefone, senha) VALUES (:nome, :sobrenome, :email, :telefone, :senha)");

    try {
        $stmt->execute([
            ':nome'      => $nome,
            ':sobrenome' => $sobrenome,
            ':email'     => $email,
            ':telefone'  => $telefone,
            ':senha'     => $senhaHash
        ]);

        echo "<script>
            const msg = document.getElementById('mensagem');
            if (msg) {
              msg.innerText = 'Cadastro realizado com sucesso!';
              msg.style.color = 'green';
            } else {
              alert('Cadastro realizado com sucesso!');
              window.location.href = '../pages/login.php';
            }
        </script>";
    } catch (PDOException $e) {
        echo "<script>
            alert('Erro ao cadastrar: " . $e->getMessage() . "');
            window.history.back();
        </script>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'login') {
    $login = trim($_POST['login']);
    $senha = $_POST['senha'];

    // Buscar por email ou telefone
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = :login OR telefone = :login");
    $stmt->execute([':login' => $login]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        session_start();
        $_SESSION['usuario'] = [
            'id'       => $usuario['id'],
            'nome'     => $usuario['nome'],
            'sobrenome'=> $usuario['sobrenome']
        ];
        header("Location: ../pages/home.php");
        exit;
    } else {
        session_start();
        $_SESSION['erro_login'] = "Login ou senha inválidos.";
        header("Location: ../pages/login.php");
        exit;
    }
}

