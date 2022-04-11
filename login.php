<?php 
 session_start(); 
 include('conexao.php');

if(isset($_POST['usuario']) || isset($_POST['senha'])) {
  
  if(strlen($_POST['usuario']) == 0){
    echo "Informe o Usuário";
  } else if(strlen($_POST['senha']) == 0) {
      echo "Informe sua Senha";
  } else{

        $usuario = $con->real_escape_string($_POST['usuario']);
        $senha = $con->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE usuario = '$usuario' and senha = '$senha'";
        $sql_query = $con->query($sql_code) or die ("erro" . $con->errno);
   
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
    
           $usuario = $sql_query->fetch_assoc();

          if(!isset($_SESSION)) {
           session_start();
          }
            $_SESSION['id'] = $usuario['id_usuario'];
            $_SESSION['nome'] = $usuario['usuario'];

            header("location: menu.php");

        } else {
    
          echo "Login ou senha incorreto";
        }

      }
}