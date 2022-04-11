<?php
session_start();
include_once('conexao.php');

$result_contatos = "SELECT * FROM Contatos";

$resultado_c = mysqli_query($con, $result_contatos);

?>
<!DOCTYPE html>

<html>
<head>
<h1>Lista de Contatos</h1>
</head>

<body>
<div>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Numero</th>
            </tr>
        </thead>
        <tbody>
            <?php while($rows_contatos = mysqli_fetch_assoc($resultado_c)) { ?>
            <tr>
                <td><?php echo $rows_contatos['nome']; ?></td>
                <td><?php echo $rows_contatos['telefone']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>

</html>