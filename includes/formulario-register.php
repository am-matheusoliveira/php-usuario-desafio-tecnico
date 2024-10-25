<?php
    // OBTENDO A MENSAGEM DE RETORNO
    $alertaCadastro = !empty($alertaCadastro) ? '<div class="alert alert-danger">'.$alertaCadastro.'</div>' : '';
?>
<div class="jumbotron bg-light text-dark p-5 mt-2 rounded">
    <!--        
        <div class="col">
            <form method="post">
                
                <h2>Cadastre-se</h2>
                
                <=$alertaCadastro?>

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control shadow-none" required>
                </div>                

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control shadow-none" required>
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control shadow-none" required>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" name="acao" value="cadastrar" class="btn btn-primary shadow-none" required>Cadastrar</button>
                </div>                

            </form>
        </div>
    -->

        <div class="d-flex justify-content-center align-items-center">
            <div class="col-md-5">
                <form method="post" class="requires-validation" novalidate>

                    <h2>Cadastre-se</h2>

                    <?=$alertaCadastro?>

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control shadow-none" required>

                        <div class="valid-feedback">Nome corretamente preenchido!</div>
                        <div class="invalid-feedback">Por favor, preencha seu nome!</div>                        
                    </div>                

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control shadow-none" required>

                        <div class="valid-feedback">E-mail corretamente preenchido!</div>
                        <div class="invalid-feedback">Por favor, preencha seu e-mail!</div>                        
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control shadow-none" required>

                        <div class="valid-feedback">Senha corretamente preenchido!</div>
                        <div class="invalid-feedback">Por favor, preencha sua senha!</div>                          
                    </div>

                    <div class="form-group">
                        <label for="code_user">Code Usuário</label>
                        <input type="text" name="code_user" id="code_user" class="form-control shadow-none disabled" placeholder="Este campo será preenchido automaticamente" disabled>
                    </div>

                    <div class="form-group">
                        <label for="title_user">Título Usuário</label>
                        <input type="password" name="title_user" id="title_user" class="form-control shadow-none"  placeholder="Este campo será preenchido automaticamente" disabled>
                    </div>                

                    <div class="form-group mt-2 d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <button type="submit" name="acao" value="cadastrar" class="btn btn-primary shadow-none mb-2 mb-md-0" required><i class="fa-regular fa-floppy-disk"></i> Cadastrar</button>
                        <a href="usuario-acesso.php" class="text-dark fw-bold ms-2">Já tem uma conta?</a>
                    </div>
                </form>
            </div>        
        </div>
    </div>

</div>
