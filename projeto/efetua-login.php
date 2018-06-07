<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
</head>

<body>

<?php
include('conexao.php');
$login     = $_POST['tlogin'];
$senha      = $_POST['tsenha']; 

$sql = "select * from tbusuario where login='$login' and senha='$senha' and ativo=1 ";

$resultado = mysqli_query($conexao, $sql);

$total =mysqli_num_rows($resultado);

if ($total==1) {
    $dados = mysqli_fetch_assoc($resultado);
    
    
    $_SESSION['tipo'] = $dados['tipo'];
    $_SESSION['nome'] = $dados['nome'];
    $_SESSION['login'] = $dados['login'];
    $_SESSION['id'] = $dados['id'];
    $_SESSION['idcarro'] =$dados['idcarro'];


    
    if ($_SESSION['tipo']==1) {
        //adm
        $pagina = 'menu.php';
        
    } else {
        //cliente
        $pagina = 'menuusuario.php';
    }
?>
<script>
  location.href='<?= $pagina ?>';
</script>
<?php    
    } else {
?>
<script>
alert('Login ou senha errados, ou este login não está ativo.');
location.href='login.php';    
</script>
<?php
}


?>
    
        
</body>
</html>