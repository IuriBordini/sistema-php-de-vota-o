<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro</title>

<style>
    table {
        font-family: verdana;
    }
    thead tr {
        text-align: center;
        font-weight: bold;
        background-color: burlywood;
    }
    tbody tr:nth-child(odd) {
        background-color: brown;
    }
    tbody tr:nth-child(even) {
        background-color: #cba;
    }
    tbody tr:hover {
        background-color: mediumseagreen;
    }
    .iuri { margin-top: -600px;}
</style>    
    
</head>

<body>
<?php 
    include('menuusuario.php');
    include('conexao.php');
?>


<p>
    <a href="?acao=1">Nome Cres</a> |
    <a href="?acao=2">Nome Decr</a> |
    
</p>    
 <div class="container iuri">
        <div class="row">
            <div class="col-md-12 ">
                <h1>Seus Dados</h1>
    <table border="0" cellspacing="0">
 <thead>
    <tr>
        <td width="300">Nome</td>
        <td width="100">login</td>
        <td width="100">Ações</td>
        
       
        
    </tr>
 </thead>    
 <tbody>
     
    
       <?php
         $sql1 = "select * from tbcarro where idusuario=". $_SESSION['id'];
     
   
     $resultado1 = mysqli_query($conexao, $sql1);
   
   while ($dados1 = mysqli_fetch_array($resultado1)) {
         }   
       ?>
      <tr>
        <td><?= $_SESSION['nome']; ?></td>
        <td><?= $_SESSION['login']; ?></td>
                
        
            <td>
             <a href="alterarusuario.php?x=<?= $dados1['id']; ?>"> <img src="img/edit.png" height="15" title="Editar" /></a>
            
            <a href="excluir.php?x=<?= $dados1['id']; ?>" onclick="return confirma()"><img src="img/delete.png" height="15" /></a>
          <a href="cadastrocarrousuario.php?x=<?= $dados1['id']; ?>"> <img src="img/chave.jpg" height="25" title="cadasto de carro" /></a>
         </td>
    </tr>
     <?php
   ?> 

    
        </tbody>
        
                </table>
     
     
     <hr>
        
<table border="0" cellspacing="0">
 <thead>
    <tr>
        <td width="300">Carro</td>
        <td width="100">Marca</td>
        <td width="100">Ações</td>
        
    </tr>
 </thead>    
 <tbody>                
     
     
     
 <?php

    // $continuacao = "";
     
//if (isset($_REQUEST['acao']))  {   
/* isset($var) - verifica se $var existe */     
    
    /*
    if($_REQUEST['acao']==1) {
        $continuacao = " order by nome asc";
    }
    
    if($_REQUEST['acao']==2) {
        $continuacao = " order by nome desc";
    } 
 */
   
  //  switch ($_REQUEST['acao']) {
    //    case 1:
      //     $continuacao = " order by nome asc";
    //       break;
        //case 2:
          //  $continuacao = " order by nome desc";
            //break;
        //case 3;
          //  $continuacao = " order by nascimento asc";
            //break;
    //    case 4:
      //      $continuacao = " order by nascimento desc";
        //    break;
  //  }
    

     
  $sql = "select * from tbcarro where idusuario=". $_SESSION['id'];
     
   
     $resultado = mysqli_query($conexao, $sql);
   
   while ($dados = mysqli_fetch_array($resultado)) {
       
     //  if ($dados['ativo']=='1'){
      //     $atv= 'Sim';
   //    }else {
     //      $atv= 'nao';
       //};
//        if ($dados['tipo']=='1'){
  //         $tipo= 'Adm';
//       }else {
  //         $tipo= 'nao é Adm';
       
 ?>
   
     <tr>
        <td><?= $dados['modelo']; ?></td>
        <td><?= $dados['fab']; ?></td>
       
        
         <td>
             <a href="alterarusuario.php?x=<?= $dados['id']; ?>"> <img src="img/edit.png" height="15" title="Editar" /></a>
             
             <a href="formusuario.php?x=<?= $dados['id']; ?>"> <img src="img/Car.png" height="15" title="foto do carro" /></a>
            <a href="excluir.php?x=<?= $dados['id']; ?>" onclick="return confirma()"><img src="img/delete.png" height="15" /></a>
         
         </td>
    </tr>
                
<?php
   }

     ?>
  
    
 </tbody>        
</table>
 </div>
            </div>
        </div>   
    
    
<script>
function confirma() {
    var a = confirm('Deseja excluir este aluno');
    
    if (a) {
        return true;
    } else {
        return false;
    }
    
    
}       
    
</script>    
    

</body>
</html>