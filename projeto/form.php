<?php
include('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
 <style>
    
     .iuri{ margin-top: -500px;}
    
    </style>
    </head>

<body>
        <h1>Envio de arquivos</h1>
    
    
        <form name="form1" method="post" action="imagem.php" enctype="multipart/form-data">
Descrição: <input type="text" name="descreve" />
<br>
Imagem:     <input type="file" name="foto" />
            <input type="hidden" name="idfoto" value="<?= $_REQUEST['x']; ?>" >
            <br>
            <input type="submit" value="Vai" />
        
    </form>
            <?php
    
                        include('conexao.php');
                    $sql="select * from tbfoto where idcarro=".$_REQUEST['x'];
                $iuri = mysqli_query($conexao, $sql);
        while ($dados = mysqli_fetch_array($iuri)) {
            ?>
    
    
    <div class="container iuri">
                <div class="row">
                    <div class="col- col-md- col-xl-">
                        
                           
                         
    
                        <img src="fotoscarros/<?php echo $dados['foto']; ?>" alt="" style="width:300px" >
    </div></div>
                </div>
        </div> 
   
    <?php
        }
        ?>
  
           
    
</body>

</html>