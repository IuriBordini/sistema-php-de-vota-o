<?php

include('sessao.php');
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
       
        <title>Site de carros</title>
        
    </head>
    <body>
         <?php
        class produto {
            var $nome;
            var $valor;
                    function produto ($n , $v) {
                        $this->nome =$n;
                        $this->valor =$v;
                    }
            function mostra () {
                echo '<div style="font-size:14px; margin:5px; color:#000;">';
                echo $this->nome;
                echo ' = R$  '.$this -> valor;
                echo '</div>';
            }
        }
        
            if (isset($_POST["btcompra"])) {
                $modelo = $_POST["escolha"];
                switch ($modelo) {
                        case "carro Nº1 ";
                            $valor=2;
                        break;
                        
                        case "carro Nº2";
                          $valor=3;
                        break;
                            
                        case "carro Nº3";
                          $valor=4;
                        break;
                            
                         case "carro Nº4";
                          $valor=5;
                        break;
                }
                $_SESSION["produtos"] [] = new produto($modelo,$valor);
            }
        
                    if (isset ($_SESSION["produtos"])) {
                        echo '<div style="width:800px; margin:10px 0  0  0; float:left;
                        background:#eee;"> <div style="font-size:18px; margin:5px;
                        color:#f00;">Produtos Selecionados:</div>';
                            $total = 0;
                                
                                foreach ($_SESSION["produtos"] as $produto) {
                                    $produto->Mostra();
                                    $total=$total + $produto->valor;
                                }
                        echo 'Total = R$  '.$total;
                        echo '</div>';
                    }
        
        
                                    echo '<div style="width:800px; margin:10px 0  0  0; float:left;
                                    background:#eee;"> 
                                    <div style="font-size:18px; margin:5px;
                                    color:#f000;">COMPRE CARROS!!!:</div>';
                                    echo '<form method="POST" action="">';
                                    echo '<div style="width:600px; margin10px; border:#000 1px solid; float:left; backgroud:#f00;">
                                        <div style="width:250px; margin:0 float:left;">
                                            <img src="img/jaguar.jpg">
                                            </div>
                                            <div style="width:250px; margin:0; float:left;">
                                            <div style=font-size:14px; margin:5px; font-weight:bold; color:#fff;">Jaguar<br /> R$100.000,00 </div>
                                            </div>
                                            <div style="width:50px; margin:0; float:left;">
                                            
                                                        <input type="radio" name="escolha" value="jaguar">
                                                        </div>
                                                        </div>';
                echo '<div style="width:600px; margin:10px; border:#000 1px solid; float:left; backgroud:#f00;">
                <div style="width:300px; margin:0; float:left;">
                            <img src=img/range.jpg">
                            </div>'
        
        
        
        
        
        
        ?>
        
        
    </body>
</html>