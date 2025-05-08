<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #146368;
            color: #ffffff;
            padding: 15px 20px;
        }

        .navbar h1 {
            margin: 0;
            font-size: 24px;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            margin: 80px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            color: #146368;
            margin-bottom: 25px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #146368;
            color: #ffffff;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0e4c51;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <h1>Login Teste</h1>
    </div>

    <div class="login-container">
        <h2>Login</h2>
        <form  action="validar_login.php" method="get">

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>

                    <div class="text-danger">
                      Usuário ou senha inválido(s)
                    </div>
            <?php } ?>


    
            <input type="submit" value="Entrar">
        </form>
    </div>
    
      


</body>
</html>
