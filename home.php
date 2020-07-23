<!-- pagina inicial -->
<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <link  rel = "stylesheet" type = "text/css" href = "assets/style.css"/>
        <script  src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <meta charset="UTF-8"/>
    </head>
    <center>
    <body>
        <div id = "topo">
            <div id = "titulo">
            <h1 id = "h1">HOME</h1>
            </div>
            <figure>
                <a onclick = 'href=url'>
                    <img src = "img/carrinho.png"  id = "imgCarrinho"/>
                </a>
                <div id = "quantidade">
                <?php
                    //inicia sessao
                    session_start();
                    //quantidade total de produtos no carrinho
                    echo @$_SESSION['total'] += 0;
                ?> 
                </div>
            </figure>
        </div>
        <script>
        // url para chamar a pagina carrinho
        url = ("carrinho.php");
        //chama o metodo php que adicionar no carrinho
        function adicionar () {
            $.ajax({
            url: 'classes/Adicionar.php',
            type: 'post',
            data: { "adicionarCarrinho()": "1"},
            success: function(response) { (response); }
        });
        }
        </script>
        <div id = "camisetas">
            <?php 
            //conexao com o banco de dados para dar um select nas camisetas
            require("conexao.php");
            $conexao = new conexao();
            $conexao->conecta();
            $select = $conexao->conexao->query("SELECT endereco from produtos");
            $select = array($select->fetchAll(\PDO::FETCH_COLUMN));
            ?>
            <!-- lista as camisetas -->
            <h2 id = "subtitulo">Camisetas</h2>
            <div id = "produtos">
            <?php
            foreach ($select as $row){
                for($i=0; $i<=4; $i++){
                    echo "<img name = 'camisa01' src = '$row[$i]' id = 'camisa01' alt = ''/>";
                    echo "<form method = 'POST' action = 'carrinho.php' >";
                    echo "<input value = '$row[$i]' name = 'camisa01' style = 'display:none' />";
                    echo "<input type = 'submit' style = 'background-color:blue;
                    position:relative;top:150px;
                    cursor:pointer;color:white;font-weight:bolder;font-size:15px;
                    width:148px;height:20px;position:relative;left:-67px;top:85px;' value = 'Adicionar ao carrinho' onclick = 'adicionar();' />";
                    echo "</form>";
                }
            }
            ?>
            </div>
            <!-- preco das camisetas -->
            <div id = "preco">
            <span id = "preco01">Preço 50,89</span>
            <span id = "preco02">Preço 150,10</span>
            <span id = "preco03">Preço 100,15</span>
            <span id = "preco04">Preço 35,55</span>
            <span id = "preco05">Preço 250,10</span>
            </div>
           
        </div>
    </body>
    </center>
    </html> 