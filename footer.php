
        </div>  
        </div>
        <?php /*
        if(isset($_POST['submit'])){


                $connect = mysql_connect("localhost", "Shodi", "senha");
                if (!$con){
                    die("Can not connect: " . mysql_error());
                }
                
                mysql_select_db("test",$connect);
                $tabela = "CREATE TABLE dados (
                id INTEGER AUTO_INCREMENT PRIMARY KEY,
                codigo int, 
                mercadoria varchar(20),
                nome varchar(20),  
                qntd int,
                preco int,
                negociacao varchar(20)
                )";
                if(mysql_query($tabela, $connect)){
                    echo "tabelinha";
                } else echo "tabela criada";
                   
                mysql_select_db("deal",$connect);
                $query = "INSERT INTO dados (codigo,mercadoria,nome,qntd,preco,negociacao) VALUES ('$_POST[codigo]','$_POST[tipom]','$_POST[nome]','$_POST[quantidade]','$_POST[preco]','$_POST[tipon]')";

            mysql_query($query, $connect);
            mysql_close($connect);
        
        */?> 
        <footer class="site-footer">
        <div class="container">
            <p>Hello</p>
            <div class="bottom-footer">
                <div class="col-md-5">Feito Por Henrique Shodi Maeta</div>
                <div class="col-md-7">
                    <ul>
                        <li><a href="hhtp://hshodi.github.io" target="_blank">Mais Informaçoes</a></li>
                        <li><a href="http://www.linkedin.com/in/shodi" target="_blank">LinkedIn</a></li>
                        <li><a href="http://www.valemobi.com.br" target="_blank">Site Valemobi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>

