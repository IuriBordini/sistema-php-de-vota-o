<?php
   
include('conexao.php');
    
$modelo       = $_POST['tmodelo'];

$fab   = $_POST['tfab'];

$ano     = $_POST['tano']; 
$cor      = $_POST['tcor'];
$idprop = $_POST['proprietario'];

     
$sql = "insert into tbcarro values (null, '$modelo','$fab',  '$ano', '$cor', 1,'$idprop', 0)";

//echo $sql;    
$vai = mysqli_query($conexao, $sql);

if ($vai == true)  {
   
    echo " <script>
    alert('Cadastrado com sucesso.');
    location.href='cadastrocarro.php?x=".$idprop."';
    </script>";
   
    
} else {
    echo "<script>
    alert ('Deu ruim ao cadastrar.');
        location.href='cadastrocarro.php';
    </script>";
}
    
?>    