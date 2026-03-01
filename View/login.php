<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Terapia</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-container {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      width: 90%;
      max-width: 350px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    .logo {
      text-align: center;
      margin-bottom: 20px;
    }
    .logo img {
      width: 80px;
      height: auto;
    }
    input {
      width: 100%;
      padding: 12px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    .btn {
      width: 100%;
      padding: 12px;
      background: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
    }
    .btn:hover {
      background: #45a049;
    }
    .links {
      text-align: center;
      margin-top: 10px;
    }
    .links a {
      color: #4CAF50;
      text-decoration: none;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="logo">
      <img src="logo.png" alt="Logotipo">
    </div>
    <form method="POST" action="/login">
      <input type="text" name="cpf" placeholder="CPF" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <button type="submit" class="btn">Entrar</button>
    </form>
    <div class="links">
      <a href="/recuperar-senha">Esqueci minha senha</a><br>
      Não tem uma conta? <a href="/cadastro">Cadastre-se</a>
    </div>
  </div>
</body>
</html>
