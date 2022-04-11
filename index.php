<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Home</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <section id="corpo"> 
            <div id="interface">
                
                <header id="cabecalho">
                    <hgroup>
                    <h1>Fael Projeto Web</h1>
                    </hgroup>
                </header>       
                                
                <?php
                if(isset($_SESSION['nao_autenticado'])):                              
                ?>
                <div id="notification">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>    
                <div id="acesso">
                        <h3>Login de Acesso</h3>        
                        <form method="post" action="login.php">
                        Usuário:<input type="text" name="usuario" placeholder="Digite seu Login"/><br/>
                        Senha:<input type="password" name="senha" placeholder="Digite sua Senha"/><br/>
                        <input type="submit" value="Entrar">
                        </form>
                </div>       
            </div> 
        </section>
    </body>
</html>