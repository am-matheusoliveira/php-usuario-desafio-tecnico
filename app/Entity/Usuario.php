<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Usuario{

    /**
     * Identificador único do usuário 
     * @var integer
     */
    public $in_user;

    /**
     * Nome do usuário
     * @var string
     */
    public $name_user;
    
    /**
     * E-mail do usuário
     * @var string
     */
    public $email_user;
    
    /**
     * Hash da senha do usuário
     * @var string
     */
    public $password_user;

    /**
     * Título do usuário
     * @var string
     */
    public $title_user;
    
    /**
     * Code User do usuário
     * @var string
     */
    public $code_user;    

    /**
     * Método responsável por cadastrar um novo usuário no banco
     * @return boolean
     */
    public function cadastrar(){
        // DATABASE
        $obDatabase = new Database('users');

        // INSERE UM NOVO USUÁRIO
        $this->in_user = $obDatabase->insert([
            'name_user'     => $this->name_user,
            'email_user'    => $this->email_user,
            'password_user' => $this->password_user,
            'title_user'    => $this->title_user,
            'code_user'     => $this->code_user,
        ]);

        // SUCESSO
        return true;
    }

    /**
     * Método responsável por retornar uma instancia de usuário com base em seu e-mail
     * @param string $email
     * @return Usuario
     */
    public static function getUsuarioPorEmail($email){
        return (new Database('users'))->select('email_user = "'.$email.'"')->fetchObject(self::class);
    }
}