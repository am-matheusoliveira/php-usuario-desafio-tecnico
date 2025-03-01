
# Sistema de Cadastro e Login de Usuários

## Descrição

Este projeto é um sistema de login desenvolvido em PHP orientado a objetos, onde o usuário pode se cadastrar e, após o registro, fazer login para acessar uma área privada do sistema.

## Deploy do projeto em produção
Este projeto está hospedado no serviço EC2 da AWS. Você pode acessá-lo e testá-lo agora mesmo clicando no link: [Deploy do Projeto no EC2](http://ec2-54-207-10-129.sa-east-1.compute.amazonaws.com/php-usuario-desafio-tecnico)

## Funcionalidades

- **Cadastro de Usuário**: Permite que novos usuários se cadastrem no sistema através de uma página dedicada ao preenchimento de informações pessoais e de acesso.

- **Login de Usuário**: Página onde usuários já cadastrados podem realizar login para acessar a área privada e restrita do sistema.

- **Consumo de API**: Integração com uma API pública utilizando a biblioteca cURL, permitindo a comunicação e consumo de dados externos no sistema.

## Tecnologias Utilizadas

- **PHP**: Versão 8.3
- **Composer**: Versão 2.8
- **Bootstrap**: Versão 5
- **Banco de Dados MySQL**: Versão 8.0
- **Servidor Web Apache**: Versão 2.4 

## Pré-requisitos

 - PHP 8.3
 - Banco de Dados MySQL 8.0
 - Servidor Web(Wamp Server, xampp, nginx, etc.)

## Imagnes

### 1. Página de Cadastro

![IMG-02](https://github.com/user-attachments/assets/68fd3992-c1bf-4825-8a40-1db598d1be9d)


### 2. Página de Login

![IMG-01](https://github.com/user-attachments/assets/5128d16c-c549-4e28-9567-71c35d35a874)


### 3. Área Privada - Login Realizado

![IMG-03](https://github.com/user-attachments/assets/b68cc1a6-a2ac-434f-907b-f2bffa9dda55)


## Instalação
Na pasta onde ficam seus projetos PHP, execute os seguintes comandos.

### 1. **Clone o repositório**

```
git clone https://github.com/am-matheusoliveira/php-usuario-desafio-tecnico.git
cd php-usuario-desafio-tecnico
```

### 2. **Configure o Banco de Dados**

Nesta etapa, para configurar o banco de dados, tudo o que você precisará fazer é executar o script SQL que está dentro da pasta `database-app/script-database.sql`.
```
database-app/script-database.sql
```

### 3. **Acesse a aplicação**
Em seu navegador, acesse a seguinte URL:

```
http://localhost/php-usuario-desafio-tecnico
```
---
Sinta-se à vontade para explorar o código e fazer melhorias.<br>
Se tiver alguma dúvida, entre em contato.
