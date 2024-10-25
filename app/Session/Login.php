<?php

namespace App\Session;

class Login{

    /**
     * Método responsável por inicia a sessão
     */
    public static function init(){
        // VERIFICA O STATUS DA SESSÃO
        if(session_status() !== PHP_SESSION_ACTIVE){
            // INICIA A SESSÃO
            session_start();
        }        
    }

    /**
     * Método responsável por retornar os dados do usuário logado
     * @return array
     */
    public static function getUsuarioLogado(){
        // INICIA A SESSÃO
        self::init();

        // RETORNA DADOS DO USUÁRIO
        return self::isLogged() ? $_SESSION['usuario'] : null;
    }

    /**
     * Método responsável por logar o usuário
     * @param Usuario $obUsuario
     */
    public static function login($obUsuario){
        // INICIA A SESSÃO
        self::init();

        // SESSÃO DO USUÁRIO
        $_SESSION['usuario'] = [
            'in_user'    => $obUsuario->in_user,
            'name_user'  => $obUsuario->name_user,
            'email_user' => $obUsuario->email_user
        ];

        // REDIRECIONA USUÁRIO PARA INDEX
        header('location: index.php');
        exit;
    }

    /**
     * Método responsável por deslogar o usuário
     */
    public static function logout(){
        // INICIA A SESSÃO
        self::init();        

        // REMOVE A SESSÃO DE USUÁRIO
        unset($_SESSION['usuario']);

        // REDIRECIONA USUÁRIO PARA LOGIN
        header('location: usuario-acesso.php');
        exit;        
    }

    /**
     * Método responsável por verificar se o usuário está logado
     * @return boolean
     */
    public static function isLogged(){
        // INICIA A SESSÃO
        self::init();
        
        // VALIDAÇÃO DA SESSÃO
        return isset($_SESSION['usuario']['in_user']);
    }

    /**
     * Método responsável por obrigar o usuário a estar logado para acessar
     */
    public static function requireLogin(){
        if(!self::isLogged()){
            header('location: usuario-acesso.php');
            exit;
        }
    }
    
    /**
     * Método responsável por obrigar o usuário a estar deslogado para acessar
     */
    public static function requireLogout(){
        if(self::isLogged()){
            header('location: index.php');
            exit;
        }        
    }    

}