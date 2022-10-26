<?php
   include("conexao.php");
   
   $nome = $_POST['nome'];
   $idade = $_POST['idade'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $sqlii = "INSERT INTO informacoes_usuarios(nome,idade,email,senha)
   values('$nome','$idade','$email','$senha')";

   
if(mysqli_query($conexao , $sqlii)){ 
   header("Location: cadastro.html");   
 }else{
    echo "erro" .mysqli_connect_error($conexao);
 }
 mysqli_close($conexao);
 
 ?>