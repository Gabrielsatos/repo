<?php
include('conexao.php');
   $email = $_POST['email'];
   $senha = $_POST['senha'];

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $sql_code = "SELECT * FROM informacoes_usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = mysqli_query($conexao , $sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: agenda.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}


?>