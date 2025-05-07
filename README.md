# 🔐 Módulo de Login e Cadastro (PHP + SQLite)

Este é um módulo reutilizável de **login e cadastro de usuários**, desenvolvido com **HTML, CSS, JavaScript, PHP e banco de dados SQLite**. Pode ser facilmente integrado em outros projetos PHP que exigem autenticação.

---

## 📦 Estrutura do Projeto
modulo-login-cadastro/
│
├── assets/
│ ├── css/ # Estilos do projeto
│ │ └── style.css
│ └── js/ # Scripts JS (se necessário)
│ └── script.js
│
├── includes/ # Código reutilizável (lógica, conexões, etc.)
│ ├── auth.php
│ ├── db.php
│ ├── functions.php
│ ├── header.php
│ └── footer.php
│
├── pages/ # Páginas principais
│ ├── cadastro.php
│ ├── login.php
│ ├── home.php
│ └── recuperar.php
│
├── database.sqlite # Banco de dados SQLite
├── index.php # Redireciona ou organiza o fluxo
├── logout.php # Faz logout do usuário
└── README.md

---

## 🔧 Requisitos

- PHP 7.4 ou superior
- Extensão PDO SQLite habilitada
- Servidor local (XAMPP, WampServer, Laragon, etc.)

---

## 🚀 Como Usar

1. **Clone o repositório ou baixe o .ZIP**
   ```bash
   git clone https://github.com/seu-usuario/modulo-login-cadastro.git
Abra com um servidor local

Ex: copie para htdocs/ se usar XAMPP

Acesse via navegador:
http://localhost/modulo-login-cadastro/pages/login.php

🛠️ Funcionalidades
Cadastro de usuário com validações:

Nome, sobrenome

Email (único e válido)

Telefone (11 dígitos e único)

Senha segura + confirmação

Dica para recuperação de senha

Login com email ou telefone + senha

Redirecionamento para home com saudação

Logout

Proteção de páginas via session

Diferenciação entre usuários usuario e admin

Página de recuperação de senha por dica

🧪 Dados de Teste
Você pode cadastrar usuários livremente. Para testes administrativos, altere o campo tipo de um usuário para 'admin' diretamente no banco SQLite usando DB Browser for SQLite.

📘 Licença
Este projeto é livre para uso educacional e pessoal. Modifique e reutilize como quiser!

🙋‍♂️ Autor
Desenvolvido por VictorcMenezes — em estudo de programação e desenvolvimento de sistemas.

---
