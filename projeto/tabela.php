
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
    include('menu.php');
    include('conexao.php');
?>


<p>
    <a href="?acao=1">Nome Cres</a> |
    <a href="?acao=2">Nome Decr</a> |
    
</p>    
 <div class="container iuri">
        <div class="row">
            <div class="col-md-12 ">
                <h1>Tabela de alunos</h1>
    <table border="0" cellspacing="0">
 <thead>
    <tr>
        <td width="300">Nome</td>
        <td width="100">Telefone</td>
        
        
        <td width="100">login</td>
        <td width="100">senha</td>
        <td width="100">Ativo</td>
        <td width="100">Tipo</td>
        <td width="100">Ações</td>
        
    </tr>
 </thead>    
 <tbody>
 <?php

     $continuacao = "";
     
if (isset($_REQUEST['acao']))  {   
/* isset($var) - verifica se $var existe */     
    
    /*
    if($_REQUEST['acao']==1) {
        $continuacao = " order by nome asc";
    }
    
    if($_REQUEST['acao']==2) {
        $continuacao = " order by nome desc";
    } 
 */
   
    switch ($_REQUEST['acao']) {
        case 1:
           $continuacao = " order by nome asc";
           break;
        case 2:
            $continuacao = " order by nome desc";
            break;
        case 3;
            $continuacao = " order by nascimento asc";
            break;
        case 4:
            $continuacao = " order by nascimento desc";
            break;
    }
    
}
    
    $sql = "select * from tbusuario" . $continuacao;
     
    $resultado = mysqli_query($conexao, $sql);
     
   while ($dados = mysqli_fetch_array($resultado)) {
       
       if ($dados['ativo']=='1'){
           $atv= 'Sim';
       }else {
           $atv= 'nao';
       };
        if ($dados['tipo']=='1'){
           $tipo= 'Adm';
       }else {
           $tipo= 'nao é Adm';
       };
 ?>
   
     <tr>
        <td><?= $dados['nome']; ?></td>
        <td><?= $dados['telefone']; ?></td>
       
        <td><?= $dados['login']; ?></td>
        <td><?= $dados['senha']; ?></td>
        
        <!-- <td><?=strtoupper( $dados['estado']); ?></td>-->
         <td><?= $atv; ?></td>
            <td><?= $tipo; ?></td>
         <td>
             <a href="alterar.php?x=<?= $dados['id']; ?>"> <img src="img/edit.png" height="15" title="Editar" /></a>
             <a href="cadastrocarro.php?x=<?= $dados['id']; ?>"> <img src="img/chave.jpg" height="15" title="cadasto de carro" /></a>
            
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