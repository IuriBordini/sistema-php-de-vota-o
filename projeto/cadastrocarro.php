 <?php
    include('menu.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">
      

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
      .inativo {
           text-decoration: line-through;
  }
</style>    
    
</head>

<body>
  
    <div class="container iuri">
        <div class="row">
            <div class="col-md-12 ">
                <h1>Tabela de alunos</h1>
    <table border="0" cellspacing="0">
 <thead>
    <tr>
        
        <td width="100">Carro</td>
        <td width="100">Ações</td>
        </tr>
 </thead>    
 <tbody>
    <?php
    
    include('conexao.php');
    
    
    
    
    $sql = "select *  from tbcarro where idusuario=". $_REQUEST['x'];
    
    $resulta = mysqli_query($conexao, $sql);
    $itens = mysqli_num_rows($resulta);
    
    if ($itens>0) {}
    
        while ($dados=mysqli_fetch_array($resulta)) {
           // echo "Modelo - " . $dados['modelo'] . " - " . $dados['id'];
           // echo "<br>";
        
    
    ?>
   
     <tr>
       
        <td class="<?= ($dados['ativo']==0?'inativo':'') ?>"><?= $dados['modelo']; ?></td>
       
        
         <td>
            
             <a href="cadastrocarro.php?x=<?= $dados['id']; ?>"> <img src="img/chave.jpg" height="15" title="cadasto de carro" /></a>
             <a href="form.php?x=<?= $dados['id']; ?>"> <img src="img/Car.png" height="15" title="foto do carro" /></a>
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
    var a = confirm('Deseja excluir este carro');
    
    if (a) {
        return true;
    } else {
        return false;
    }
    
    
}       
    
</script>    
   
    
    
    
    
    
    
<h1>Formulário de cadastro Do Veículo</h1>
<form name="form1" method="post" action="inserecarro.php">
<fieldset>
  
 

<legend>Cadastro</legend>
   <!--Proprietario:  
   <select name="proprietario">
    
    <?php

        
       // $sql = "select * from tbusuario where ativo=1";
        
        //$resultado = mysqli_query($conexao, $sql);
        
       //  while ($dados = mysqli_fetch_array($resultado)) {
          
 //  <option value="<?= $dados['id'] ?>"><?= $dados['nome'] ?></option>
        <?php
       //  }
    ?>
    
  </select> -->
    <br>
<label for="tmodelo">Modelo:</label>
<input type="text" name="tmodelo" id="tmodelo" required /> <br/>


Fabricação: <input type="text" name="tfab" required />
<br>
Ano: <input type="text" name="tano" />
<br>    
Cor: <input type="text" name="tcor" /> 
<input type="hidden" name="proprietario" value="<?= $_REQUEST['x'] ?>" />
<!--
    <br>   
 Ativo: <input type="checkbox" name="tativo" value="1" >
     <br>
-->
    <input type="submit" value="Cadastrar" />
    </fieldset>    
</form>
    
</body>
</html>