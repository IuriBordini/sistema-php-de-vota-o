<?php
   
include('conexao.php');
    
$modelo       = $_POST['tmodelo'];

$fab   = $_POST['tfab'];

$ano     = $_POST['tano']; 
$cor      = $_POST['tcor'];
$idcarro  = $_POST['tid'];
$idprop = $_POST['proprietario'];


//$ativo      = $_POST['tativo']; 
    
    
     
$sql = "insert into tbcarro values (null, '$modelo','$fab',  '$ano', '$cor', 1,'$idprop')";

//echo $sql;    
$vai = mysqli_query($conexao, $sql);

if ($vai == true)  {
    echo " <script>
    alert('Cadastrado com sucesso.');
    location.href='menuusuario.php';
    </script>";
    
} else {
    echo "<script>
    alert ('Deu ruim ao cadastrar.');
        location.href='cadastrocarrousuario.php';
    </script>";
}
    
?>    