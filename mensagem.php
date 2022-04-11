<!DOCTYPE html>
<?php
session_start();
include('conexao.php');

?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Chat</title>
    </head>
    <body>
        <h1>Campo de Mensagens</h1>
        <?php 
            $slct1 = "SELECT * FROM mensagem";
            $contato_slct = $result_contatos;
        ?>

        <?php  ?>
                    <tr>
                        <td><?php echo $contato_slct['nome']; ?></td>
                        
                    </tr>
                    <?php  ?>
        <form method="post" >
        <lable>Mensagem</lable><br/>
        <textarea name="msg"></textarea><br/>
        <button name="enviar_msg">enviar</button>


        </form>
    </body>

</html>