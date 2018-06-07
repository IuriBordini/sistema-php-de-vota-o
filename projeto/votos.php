<FONT SIZE="3">Qual a sua base de dados preferida?</FONT><BR>
<FORM NAME="votação" ACTION="" >
<INPUT TYPE="radio" NAME="escolha" VALUE="1">MySQL<BR>
<INPUT TYPE="radio" NAME="escolha" VALUE="2">msSQL<BR>
<INPUT TYPE="radio" NAME="escolha" VALUE="3">PostgreSQL<BR>
<INPUT TYPE="radio" NAME="escolha" VALUE="4">ODBC<BR>
</FORM>
//   <?php
 
if ($escolha != "true") { // Verifica se foi inserido um voto e prossegue em frente no caso de verdade
 
// Variáveis a serem alteradas
 

    
    include('conexao.php');


 
// Nada mais a ser alterado
 
$mysql_conx = mysql_connect($mysql_host,$mysql_user,$mysql_pass);
// ligação ao MySQL
 
$radio = $num_resp + 1;
// para uso posterior
 
mysql_select_db($mysql_dtbs);
// seleciona a base de dados
 
// aqui começa todo o trabalho do PHP para atualizar a base de dados
 
$query_upd = "SELECT * FROM votacao WHERE id=$escolha";
$resul_upd = mysql_query($query_upd);
// aqui o PHP seleciona apenas os registos que coincidem com a escolha, neste 
// caso so uma opção
 
$obj_upd = mysql_fetch_object($resul_upd);
// o comando mysql_fetch_object() separa os resultados de uma query por colunas
// neste caso, $obj_upd -> descrição da opção que o utilizador votou
 
$vot_upd = $obj_upd->votos;
$vot_upd++;
// separa só os votos e adicinona mais um voto
 
$upd_upd = "UPDATE votacao SET votos=$vot_upd WHERE id=$escolha";
mysql_query($upd_upd);
// atualizou a base de dados
 
// Agora o PHP fará a pesquisa na base de dados e retornará as opções, seus 
// respectivos votos, total de votos e a sua escolha.
 
echo "<H3>" . $pergunta . "</H3>";
 
for($i=1;$i<$radio;$i++) {
 
$query[$i] = "SELECT * FROM votação WHERE id=$i";
$resul[$i] = mysql_query($query[$i]);
$objet[$i] = mysql_fetch_object($resul[$i]);
 
echo " $objet[$i]->opcao  . $objet[$i]->descricao  . $objet[$i]->votos . ";
 
$tot_vt += $objet[$i]->votos;
 
// tudo isto serve para requisitar o resultado de cada opção e exibir na tela
 
}
echo "Total de votos:" . $tot_vt . "Sua Escolha:" . $escolha  ;
      }
?>php