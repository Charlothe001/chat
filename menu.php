<?php
session_start();
include('conexao.php');
?>

<h2>Olá, <?php echo $_SESSION['nome']; ?></h2>
<h2><a href="logout.php">Sair</a></h2>

<br/><h1>Menu Principal</h1>
<form method="post" action="cadastro_contatos.php">
<button name="addc">Cadastrar contato</button><br/>
</form>
<form method="post" action="listar_contatos.php">
<button name="listc">Listar contatos</button><br/>
</form>
<form method="post" action="cadastro_mensagens.php">
<button name="iniciarm">Mensagens</button><br/>
</form>
<form method="post" action="listar_mensagens.php">
<button name="listarm">Listar mensagens</button>
</form>