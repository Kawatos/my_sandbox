<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se o usuário e a senha são válidos
        $username = "usuario"; // Usuário válido (substitua pelo seu usuário)
        $password = "senha"; // Senha válida (substitua pela sua senha)
        
        if ($_POST["username"] == $username && $_POST["password"] == $password) {
            // Redireciona para a página de sucesso
            header("Location: sucesso.php");
            exit();
        } else {
            // Exibe uma mensagem de erro
            echo "Usuário ou senha inválidos.";
        }
    }
    ?>
</body>
</html>


