<?php

// COMPOSER - AUTOLOAD
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Usuario;
use \App\Session\Login;

// OBRIGA O USUÁRIO A NÃO ESTAR LOGADO
Login::requireLogout();

// MENSAGENS DE ALERA DOS FORMULÁRIOS
$alertaLogin = '';
$alertaCadastro = '';

// VALIDAÇÃO DO POST
if(isset($_POST['acao'])){
    switch($_POST['acao']){
        case 'logar':

            // BUSCA USUÁRIO POR E-MAIL
            $obUsuario = Usuario::getUsuarioPorEmail($_POST['email']);

            // VALIDA A INSTANCIA E A SENHA
            if(!$obUsuario instanceof Usuario || !password_verify($_POST['senha'], $obUsuario->password_user)){
                $alertaLogin = 'E-mail ou senha inválidos';
                break;
            }

            // LOGA O USUÁRIO
            Login::login($obUsuario);

            break;
        case 'cadastrar':
            
            // VALIDAÇÃO DOS CAMPOS OBRIGATÓRIOS
            if(isset($_POST['nome'], $_POST['email'], $_POST['senha'])){

                // BUSCA USUÁRIO POR E-MAIL
                $obUsuario = Usuario::getUsuarioPorEmail($_POST['email']);
                if($obUsuario instanceOf Usuario){
                    $alertaCadastro = 'O e-mail digitado já esta em uso';
                    break;
                }

                // URL da API
                $url = "https://jsonplaceholder.typicode.com/posts/1";
                            
                // Inicializando o cURL
                $ch = curl_init();
                            
                // Configurando as opções do cURL
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // Desabilitando a verificação do certificado SSL
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            
                // Executando a requisição e pegando a resposta
                $response = curl_exec($ch);
                            
                // Verificando se houve erro na requisição
                if(curl_errno($ch)) {
                    $alertaCadastro = 'Erro: '. curl_error($ch);
                    break;
                } else {
                    // Decodificando o JSON da resposta
                    $data = json_decode($response, true);                
                
                    // Fechando o cURL
                    curl_close($ch);

                    // NOVO USUÁRIO
                    $obUsuario = new Usuario;
                    $obUsuario->name_user     = $_POST['nome'];
                    $obUsuario->email_user    = $_POST['email'];
                    $obUsuario->password_user = password_hash($_POST['senha'], PASSWORD_DEFAULT);
                    $obUsuario->title_user    = $data['title'];
                    $obUsuario->code_user     = base64_encode(random_bytes(16));
                    $obUsuario->cadastrar();
                    
                    // LOGA O USUÁRIO
                    Login::login($obUsuario);
                }
            }

            break;
    }
}

// HEADER
include __DIR__.'/includes/header.php';

// CONTENT
if(isset($_GET['novo-usuario']))
    include __DIR__.'/includes/formulario-register.php';
else
    include __DIR__.'/includes/formulario-login.php';

// FOOTER
include __DIR__.'/includes/footer.php';