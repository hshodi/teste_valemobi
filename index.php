<!DOCTYPE html>
<html lang = "pt-br">
    
<?php include("header.php");?>
    
<h1 class="title">Insira seus Dados aqui:</h1>
    <div class="row">
        <div class="centralizado">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <form class="form-horizontal" action="index.php" method="post">
                <div class="form-group">
                    <label for="codigo" class="col-sm-4 control-label">Código da Mercadoria</label>
                    <div class="col-sm-8">
                        <input type="number" name="cod" class="form-control" id="codigo" placeholder="Apenas números">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tipom" class="col-sm-4 control-label">Tipo da Mercadoria</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="tipo">
                            <option>Tenis Nike</option>
                            <option>Blusa Adidas</option>
                            <option>Colar</option>
                            <option>Bermuda</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nome" class="col-sm-4 control-label">Nome da Mercadoria</label>
                    <div class="col-sm-8">
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Insira o nome...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="quantidade" class="col-sm-4 control-label">Quantidade</label>
                    <div class="col-sm-8">
                       <input type="number" name="quant" class="form-control" id="quantidade" placeholder="Apenas números">
                    </div>
                </div>
                <div class="form-group">
                    <label for="preco" class="col-sm-4 control-label">Preço</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                        <div class="input-group-addon">R$</div>
                        <input type="number" name="preco" class="form-control" id="preco" placeholder="Preço">
                        <div class="input-group-addon">.00</div>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tipon" class="col-sm-4 control-label">Tipo de negócio</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="neg">
                          <option>Compra</option>
                          <option>Venda</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" name="submit" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </form>
            </div>
      </div>
    </div>
    </div>
</div>


<div class="container">
  <h2>Comparativo de Dados</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#home">Tenis Nike</a></li>
    <li><a href="#menu1">Blusa Adidas</a></li>
    <li><a href="#menu2">Colar</a></li>
    <li><a href="#menu3">Bermuda</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <?php include("input.php"); ?>
    </div>
    <div id="menu1" class="tab-pane fade">
      <?php include("blusa.php"); ?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <?php include("colar.php"); ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <?php include("bermuda.php"); ?>
    </div>
  </div>
</div>


<?php include("footer.php");?>
<?php

        if(isset($_POST['submit'])){


            $con = mysql_connect("localhost", "Shodi", "senha");
                if (!$con){
                    die("Can not connect: " . mysql_error());
                }
            
                mysql_query("CREATE DATABASE loja", $con);
                  
                mysql_select_db("loja",$con);
                $table = "CREATE TABLE teste (
                id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
                cod int NOT NULL, 
                tipo varchar(20),
                nome varchar(20),  
                quant int,
                preco int,
                neg varchar(20)
                )";
                mysql_query($table, $con);
                   
                mysql_select_db("loja",$con);
                $sql = "INSERT INTO teste (cod,tipo,nome,quant,preco,neg) VALUES ('$_POST[cod]','$_POST[tipo]','$_POST[nome]','$_POST[quant]','$_POST[preco]','$_POST[neg]');";

            mysql_query($sql, $con);
            
            mysql_close($con);
        }
?>   
