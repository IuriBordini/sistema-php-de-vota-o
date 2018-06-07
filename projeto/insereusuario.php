

    

<?php
   
include('conexao.php');
    
$nome       = $_POST['tnome'];

$telefone   = $_POST['tfone'];

$login      = $_POST['tlogin']; 
$senha      = $_POST['tsenha']; 

    
//$ativo      = $_POST['tativo']; 
    
    
     
$sql = "insert into tbusuario values (null, '$nome','$telefone',  '$login', '$senha', 1)";

//echo $sql;    
$vai = mysqli_query($conexao, $sql);

if ($vai == true)  {
    echo " <script>
    alert('Cadastrado com sucesso.');
    location.href='menuusuario.php';
    </script>";
    
} else {
    echo "<script>
    alert (Deu ruim ao cadastrar.');
        location.href='insere.php';
    </script>";
}
    
?>    
    

