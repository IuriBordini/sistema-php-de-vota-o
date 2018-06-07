<?php
$carro = $_POST['tcarro'];


echo "Carro vatado: ". $carro;


include('conexao.php');



$sql1="SELECT * FROM tbcarro WHERE id=$carro";

$resultado1 = mysqli_query($conexao, $sql1);
   
$dados1 = mysqli_fetch_array($resultado1);

$votos_atual = $dados1['voto'];

$votos_atual++;
/*
echo "Votos atual: " . $dados1['voto'];
echo "<br>";
echo "Votos novo: " . $votos_atual;
*/

/*
   while () {
     ?> <tr>
        <td><?= $dados['voto']; ?></td> 
<?php
*/

$sql2 ="UPDATE tbcarro SET voto=$votos_atual WHERE id=$carro";

    mysqli_query($conexao, $sql2);
   
    ?>
<script>
    alert('Voto computado com sucesso!');
location.href='votacao.php';
</script>