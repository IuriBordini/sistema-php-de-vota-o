<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
</head>

<body>
<?php 
    include('menuusuario.php'); 
    include('conexao.php'); 
    
    $nome= $_REQUEST['x'];
    
    $sql = "select * from tbusuario where id=$nome";
    
    $resultado = mysqli_query($conexao, $sql);
    
    $dados = mysqli_fetch_assoc($resultado);
    
   
?>
<h1>Alteração de Dados</h1>
<form name="form1" method="post" action="atualizar.php">
<fieldset>
<legend>Cadastro</legend>
<label for="tnome">Nome:</label>
<input value="<?= $dados['nome']; ?>" type="text" name="tnome" id="tnome" required /> <br/>


<br />
Telefone: <input value="<?= $dados['telefone']; ?>" type="text" name="tfone" />
<br>
Login: <input type="text" name="tlogin" value="<?= $dados['login']; ?>" />
<br />
Senha: <input type="text" name="tsenha" value="<?= $dados['senha']; ?>" />
<br>     

<?php
    
?>    

    
<br>        

    
<input type="submit" value="Atualizar" />
    
<input type="hidden" name="tid" value="<?=$_REQUEST['x'] ?>" />
    
</fieldset>    
</form>
     <!-- /.container -->

    <footer class=" text-center   rodape ">
      <div class="container ">
        <p class="m-0">Copyright &copy; Bordini  </p>
      </div>
    </footer>
      
</body>
</html>