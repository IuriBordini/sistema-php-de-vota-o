<?php
include('conexao.php');
$sql1="select * from tbcarro where id=".$_REQUEST['x'];
$res1 = mysqli_query($conexao, $sql1);
$dados1 = mysqli_fetch_assoc($res1);

if ($dados1['ativo']==1) {
    $troca = 0;
} else {
    $troca = 1;
}


$sql2 = "update tbcarro set ativo=$troca where id=".$_REQUEST['x'];

$res2 = mysqli_query($conexao, $sql2);


if ($res2==true) {
    
    echo " <script>
    alert('Alterado com sucesso');
    location.href='cadastrocarro.php?x=".$dados1['idusuario']."';
    </script>";
   
    
} else {
    echo "<script>
    alert ('Deu ruim ao alterar.');
         location.href='cadastrocarro.php?x=".$dados1['idusuario']."';
    </script>";
}



?>