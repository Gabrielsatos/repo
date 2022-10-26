 <?php
 include("conexao.php")
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
   <table width= "600px" border="1">
          <th>id</th>
          <th>materia</th>
          <th>avaliaçao</th>
      
   <?php
   $sqlcode = "SELECT * FROM materia ";
   $sql_query = mysqli_query($conexao ,$sqlcode) or die("erro".$mysqli->error);
    
   if($sql_query ->num_rows ==0){
   ?>
   <tr>
     <td colspan="3">sem registros</td>
   </tr>
   <?php
}else{
   while($dados = $sql_query->fetch_assoc()){
     ?>
     <tr>
        <td><?php echo $dados['id']; ?></td>
        <td><?php echo $dados['materia']; ?></td>
        <td><?php echo $dados['grau_de_difculdade']; ?></td>
     </tr>
     <?php
      }

    }
   ?>
   </table>
 </body>
 </html>
   