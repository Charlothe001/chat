<?php
session_start();
include('conexao.php');

if(isset($_POST['cadastrar'])) {
    $c_nome = $_POST['c_nome'];
    $telefone = $_POST['telefone'];

    $query = mysqli_query($con, "INSERT INTO contatos (nome , telefone) VALUES ('$c_nome' , '$telefone')");

    if($query) {
        echo 'Cadastrado com sucesso';
    } else {
        echo 'Nao foi possivel cadastrar';
    }

}

?>
<html>
    <head>
        <title>Cadastro</title>
    </head>
    <body>
        <h1>Cadastro de Contatos</h1>

<form method="post">
        <lable>Nome:</lable><br/>
        <input type="text" name="c_nome"><br/>
        <lable>Numero:</lable><br/>
        <input type="integer" name="telefone" placeholder="somente sumeros sem espaço"><br/><br/>
        <button name="cadastrar">Cadastrar</button>
</form>

</body>
</html>