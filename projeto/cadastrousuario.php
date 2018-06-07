
<!DOCTYPE html>
<html lang="pt-br">

  
   <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Votação </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

  </head>

<body>
     <?php
    include('menu.php');
    ?>
<h1>Formulário de cadastro</h1>
<form name="form1" method="post" action="insereusuario.php">
<fieldset>
<legend>Cadastro</legend>
<label for="tnome">Nome:</label>
<input type="text" name="tnome" id="tnome" required /> <br/>


Telefone: <input type="text" name="tfone" required />
<br>
Login: <input type="text" name="tlogin" required/>
<br>    
Senha: <input type="text" name="tsenha" required/> 

    <br>   


    <input type="submit" value="Cadastrar" />
    </fieldset>    
</form>
    
</body>
</html>