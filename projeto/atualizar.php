<!DOCTYPE html>
<html>
<head>

<title>Cadastro</title>
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
<style>
    .rodape { 
        width: 10px
        height: 10px;
        margin-top: 600px;}
      
      
      </style>
  </head>

<body>
<?php include('menu.php'); ?>
<h1>Sistema de Cadastro</h1>
    
<?php
    include('conexao.php'); 
    
    $nome       = $_POST['tnome'];
   
    $telefone   = $_POST['tfone'];
    $id         = $_POST['tid'];
    
    $login      = $_POST['tlogin'];
    $senha      = $_POST['tsenha']; 
    $ativo      = $_POST['tativo'];
    $tipo       = $_POST['ttipo'];
    $sql = "update tbusuario set
            nome='$nome',
            
            telefone='$telefone',
            login = '$login',
            senha = '$senha',
            ativo = '$ativo',
            tipo = '$tipo'
            where id=$id";
   //die($sql);
    
    $resultado = mysqli_query($conexao, $sql);
    
    if($resultado==true){
        ?>
    <script>
        alert('Cadastrado com sucesso!');
        location.href='tabela.php';
    </script>
       
        <?php
    } else {
        echo "Erro ao atualizar.";
        echo "<br>";
    }
?>
    
</body>
</html>