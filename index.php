<!DOCTYPE html>
<html lang = "pt-br">
    
<?php include("header.php"); ?>
    
    <h1 class="title">Insert your datas below:</h1>
    
    <div class="row">
        <div class="centralizado">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <form class="form-horizontal" action="index.php" method="post">
                <div class="form-group">
                    <label for="codigo" class="col-sm-4 control-label">Código da Mercadoria</label>
                    <div class="col-sm-8">
                        <input type="text" name="codigo" class="form-control" id="codigo" placeholder="Apenas números">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tipom" class="col-sm-4 control-label">Tipo da Mercadoria</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="tipom">
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
                       <input type="number" name="quantidade" class="form-control" id="quantidade" placeholder="Apenas números">
                    </div>
                </div>
                <div class="form-group">
                    <label for="preco" class="col-sm-4 control-label">Preço</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                        <div class="input-group-addon">R$</div>
                        <input type="number" name="preco" class="form-control" id="preco" placeholder="Amount">
                        <div class="input-group-addon">.00</div>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tipon" class="col-sm-4 control-label">Tipo de negócio</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="tipon">
                          <option>Compra</option>
                          <option>Venda</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" name="submit" class="btn btn-danger">Enviar</button>
                    </div>
                </div>
            </form>
            </div>
      </div>
    </div>
<?php include("footer.php"); ?>
    
<!-- Teremos uma plataforma de negociação de mercadorias. Que obrigatoriamente deverá ter os seguintes

campos: Código da Mercadoria, Tipo da Mercadoria, Nome da Mercadoria, Quantidade, Preço, Tipo do Negócio

(Compra ou Venda). -->