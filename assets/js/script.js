document.getElementById('formCadastro').addEventListener('submit', function(e) {
    const email = document.getElementById('email').value;
    const telefone = document.getElementById('telefone').value;
    const senha = document.getElementById('senha').value;
    const confirmarSenha = document.getElementById('confirmar_senha').value;
    const mensagem = document.getElementById('mensagem');
  
    mensagem.innerText = '';
    
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      e.preventDefault();
      mensagem.innerText = 'Formato de e-mail inválido.';
      return;
    }
  
    if (!/^\d{11}$/.test(telefone)) {
      e.preventDefault();
      mensagem.innerText = 'Telefone deve ter exatamente 11 dígitos numéricos.';
      return;
    }
  
    if (senha !== confirmarSenha) {
      e.preventDefault();
      mensagem.innerText = 'As senhas não coincidem.';
      return;
    }
  });
  