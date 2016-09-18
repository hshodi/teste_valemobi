
<div class="space">
    <?php

        $con = mysql_connect("localhost","Shodi","senha");
        if (!$con){
            die ("ERRO: ") . mysql_error();
        }

        mysql_select_db("loja",$con);
        $sql = "SELECT * FROM teste WHERE tipo = 'Colar' ORDER BY preco;";
        $myData = mysql_query($sql,$con);
        if($sql == NULL){
            echo "TABELA VAZIA";
        }
        else{
        echo "<table class='table table-striped table-responsive'>
        <thead>
            <tr>
                <th>Código da mercadoria</th>
                <th>Tipo da mercadoria</th>
                <th>Nome da mercadoria</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Tipo de negócio</th>
            <tr>
        </thead>";
        while($record = mysql_fetch_array($myData)){
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $record['cod'] . "</td>";
            echo "<td>" . $record['tipo'] . "</td>";
            echo "<td>" . $record['nome'] . "</td>";
            echo "<td>" . $record['quant'] . "</td>";
            echo "<td>" . "R$" . $record['preco'] . ",00" . "</td>";
            echo "<td>" . $record['neg'] . "</td>";
            echo "</tr>";
            echo "</tbody>";    
        }
    
        echo "</table>";
        }
        mysql_close($con);

    ?>
</div>
