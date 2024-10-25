<?php
    // OBTENDO A MENSAGEM DE RETORNO
    $alertaLogin = !empty($alertaLogin) ? '<div class="alert alert-danger">'.$alertaLogin.'</div>' : '';
?>
<div class="jumbotron bg-light text-dark p-5 mt-2 rounded">
    <!--
    <div class="row">

        <div class="col">

            <form method="post">

                <h2>Login</h2>

                <=$alertaLogin?>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control shadow-none" required>
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control shadow-none" required>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" name="acao" value="logar" class="btn btn-primary shadow-none" required>Entrar</button>
                </div>                

            </form>

        </div>
        --> 

        <div class="d-flex justify-content-center align-items-center">
            <div class="col-md-5">
                <form method="post" class="requires-validation" novalidate>
                    <h2>Conecte-se</h2>
        
                    <?=$alertaLogin?>
        
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

                    <div class="form-group mt-2 d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <button type="submit" name="acao" value="logar" class="btn btn-primary shadow-none mb-2 mb-md-0" required><i class="fa-solid fa-right-to-bracket"></i> Entrar</button>
                        <a href="usuario-acesso.php?novo-usuario=true" class="text-dark fw-bold">Ainda não tem uma conta?</a>
                    </div>

                </form>
            </div>
        </div>        

    </div>

</div>
