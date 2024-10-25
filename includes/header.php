<?php
    
    use \App\Session\Login;

    // USUÁRIO LOGADO
    $usuarioLogado = Login::getUsuarioLogado();

    // DETALHES DO USUÁRIO
    $usuario = $usuarioLogado ? 
               $usuarioLogado['name_user'].'<a href="logout.php" class="text-light fw-bold ms-2">Sair</a>' :
               'Visitante <a href="usuario-acesso.php" class="text-light fw-bold ms-2">Entrar</a> <a href="usuario-acesso.php?novo-usuario=true" class="text-light fw-bold ms-2">Cadastrar</a>'

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- App Title-->
        <title>PHP Desafio técnico | Usuário</title>
        
        <!-- Biblioteca de icones - Font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <!-- Bootstrap CSS  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <!-- CSS Customizado -->
        <link rel="stylesheet" href="assets/css/custom.css">
    </head>
    <body class="bg-dark text-light">
        <div class="container">
            <div class="jumbotron bg-danger rounded p-2">
                <h4>PHP Desafio técnico</h4>
                <p>Cadastro e Login de Usuário com PHP orientado a objeto</p>

                <hr class="border-light">

                <div class="d-flex justify-content-start">
                    <?=$usuario?>
                </div>
            </div>
    
