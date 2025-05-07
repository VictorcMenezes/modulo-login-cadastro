<?php
try {
    $db = new PDO('sqlite:' . __DIR__ . '/../database.sqlite');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("CREATE TABLE IF NOT EXISTS usuarios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nome TEXT NOT NULL,
        sobrenome TEXT NOT NULL,
        email TEXT UNIQUE NOT NULL,
        telefone TEXT UNIQUE NOT NULL,
        senha TEXT NOT NULL
    )");
} catch (PDOException $e) {
    echo "Erro no banco de dados: " . $e->getMessage();
    exit;
}
?>
