<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<?php
    include('conexao.php');
    $descricao = $_POST['descreve'];
    $nome_antigo = $_FILES['foto']['tmp_name'];
    $nome_novo = time() . ".jpg";
    $idcarro = $_POST['idfoto'];
   
    $envio = move_uploaded_file($nome_antigo, "fotoscarros/".$nome_novo);
    
if($envio==true) {
    $sql = "insert into tbfoto values (NULL, '$descricao', '$nome_novo', $idcarro)";
    mysqli_query($conexao, $sql);

     ?>
    <script>
        alert('Cadastrado com sucesso!');
        location.href='form.php?x=<?= $idcarro ?>';
    </script>
     <?php
} else {
    echo "Erro ao anviar";
}
 
    
    

    
?>    
    
    
</body>
</html>