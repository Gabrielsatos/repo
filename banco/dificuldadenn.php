<?php
   include("conexao.php");
   
   $materia = $_POST['materia'];
   $grau_de_difculdade = $_POST['grau_de_difculdade'];

   $sql = "INSERT INTO materia(materia,grau_de_difculdade)
   values('$materia','$grau_de_difculdade')";

   
if(mysqli_query($conexao , $sql)){
      echo "cadastrado com sucesso";
      ?>
 <form action="dificuldade.php" method="POST">
     <p>
       <label for="">nome:</label>
       <input type="text" name="materia">
     </p>

     <p>
     <label for="">nota:</label>
       <input type="text" name="grau_de_difculdade">
     </p>
     <p>
     <button >Enviar</button>
     </p>
          
   </form>

   <form action="exibir.php" method="POST">
     <label for="">exibir suas materias:</label> 
     <button >conferi</button>
   </form>
   bem vindo ,<?php echo $_SESSION['nome']; ?>

    <form action="pagina.html" method="POST">
     <label for="">informe mais materias:</label> 
     <button >voltar</button>
    </form>
   <?php
      
   }else{
      echo "erro" .mysqli_connect_error($conexao);
   }
   mysqli_close($conexao);
   
   ?>

