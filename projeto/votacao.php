<!DOCTYPE html>
<html>
<head>
<title>votação</title>
<meta charset="UTF-8">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">
    <style>
    table {
        font-family: verdana;
    }
    thead tr {
        text-align: center;
        font-weight: bold;
        background-color: burlywood;
    }
    tbody tr:nth-child(odd) {
        background-color: brown;
    }
    tbody tr:nth-child(even) {
        background-color: #cba;
    }
    tbody tr:hover {
        background-color: mediumseagreen;
    }
        .h1 {background-color: black;}
</style>    
    

    </head>


<body>
     <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Carros Tunados</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Bordini  Votação   | Vote no carro que mais gostou  </div>

     <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Bordini Produções</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="votacao.php">Votação</a>
            </li>
              
               
           
              <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php 
    
    include('conexao.php');
?>
    <div class="container iuri">
        <div class="row">
            <div class="col-md-12 ">
                <h1>Seus Dados</h1>
                <form name="form1" method="post" action="vota-carro.php">
    <table border="0" cellspacing="0">
 <thead>
    <tr>
        <td width="150">veiculo</td>
        <td width="100">modelo</td>
        <td width="150">Numero da foto que gostou</td>
        <td width="100">Fab</td>
        <td width="100">Cor</td>
        <td width="150">Quantidade de Votos</td>
        <td width="100">nome</td>
        
        
       
        
    </tr>
 </thead>    
 <tbody>
     <?php
     $sql1="SELECT * FROM `tbfoto` WHERE foto and idcarro";
     $resultado1 = mysqli_query($conexao, $sql1);
    while ($dados1 = mysqli_fetch_array($resultado1)) {
       
     ?>
     <img src="fotoscarros/<?= $dados1['foto'] ?>" width="150" />
     <?php
        echo  $dados1['idcarro'] ;       
  
    }
       
       $sql = "select tbcarro.id as idveiculo, modelo, fab, ano, cor, voto, tbusuario.nome from tbcarro inner join tbusuario
       on tbcarro.idusuario = tbusuario.id
       order by voto desc";
    
     $resultado = mysqli_query($conexao, $sql);
   
   while ($dados = mysqli_fetch_array($resultado)) {
        
     ?>
   
     <tr>
        <td><input type="radio" name="tcarro" value="<?= $dados['idveiculo']; ?>" />
                   </td>
        <td><?= $dados['modelo']; ?></td>
        <td><?= $dados['idveiculo']; ?></td>
         <td><?= $dados['fab']; ?></td>
  <td><?= $dados['cor']; ?></td>
         <td><?= $dados['voto']; ?></td>
         <td><?= $dados['nome']; ?></td>
    
   
    </tr>
    
                
<?php
   }
   
     ?>
  </tbody>        
</table>
<input type="submit" value="Votar" />
</form>
 </div>
            </div>
        </div>  
 <br>
    <br>
    <hr>
    
    
   <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; Bordini 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
