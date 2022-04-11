<?php
session_start();
include('conexao.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Mensagens</title>
    </head>
    <body>
        <h1>Mensagens</h1>
        <p>Escolha o contato da mensagem.</p>
    <select>
        <option selected></option>
        
        <?php
        $slct = mysqli_query($con, "SELECT * FROM contatos WHERE id_contatos >= 1");

        while($row_slct = mysqli_fetch_assoc($slct)) {
            echo "<option>".$row_slct['nome']."</option>";
        }
        ?>
    </select>    
    <form method="post" action="mensagem.php">
    <input type="submit" value="Iniciar Mensagem">
    </form>
    </body>
    
</html>