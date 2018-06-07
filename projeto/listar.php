

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
</head>

<body>
<?php include('menu.php'); ?>    
<h1>Listagem de Dados</h1>    
<?php
    include('conexao.php');
    $sql = "select * from tbusuario";
    
    $resultado = mysqli_query($conexao, $sql);
    
    while ($dados = mysqli_fetch_array($resultado)) {
        
        echo $dados['nome'] . " - " . $dados['telefone'] ;
        echo "<br>";
        
    }
    
    
?>
    
</body>
</html>