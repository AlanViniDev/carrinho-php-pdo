<?php
/* Classe e funcao para adiciona os produtos no carrinho via home */
class carrinho
{
    
    public function adicionar()
    {
        session_start();

        @$aux = $_POST['camisa01'];
        if ($aux == 'img/camisa01.png'){
            $_SESSION['camisa01'] = $aux;
            @$_SESSION['total'] +=1;
            @$_SESSION['totalCamisa01'] +=1;
            @$_SESSION['valorTotalCamisa01'] = (50.89 * $_SESSION['totalCamisa01']);
        }
        
        if(@$_SESSION['camisa01'] != NULL){
            $_SESSION['camisa01'];
        }
        
        if ($aux == 'img/camisa02.png'){
            @$_SESSION['total'] +=1;
            $_SESSION['camisa02'] = $aux;
        }
        
        if(@$_SESSION['camisa02'] != NULL){
            $_SESSION['camisa02'];
        }
        
        if ($aux == 'img/camisa03.png'){
            $_SESSION['camisa03'] = $aux;
        }
        
        if(@$_SESSION['camisa03'] != NULL){
            $_SESSION['camisa03'];
        }
        
        if ($aux == 'img/camisa04.png'){
            $_SESSION['camisa04'] = $aux;
        }
        
        if(@$_SESSION['camisa04'] != NULL){
            $_SESSION['camisa04'];
        }
        
        if ($aux == 'img/camisa05.png'){
            $_SESSION['camisa05'] = $aux;
        }
        
        if(@$_SESSION['camisa05'] != NULL){
            $_SESSION['camisa05'];
        }

}
}
//instancia o objeto e executa o metodo
$adiciona = new carrinho();
$adiciona->adicionar();
?>
<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <link  rel = "stylesheet" type = "text/css" href = "assets/style.css"/>
        <script  src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
    <center>
    <body>
        <!-- Topo -->
        <div id = "topo">
            <div id = "titulo">
            <a style = "text-decoration: none;cursor: pointer;"  href = "home.php"> <h1 id = "h1">HOME</h1> </a>
            </div>
            <figure>
                <a href = "carrinho.php">
                    <img src = "img/carrinho.png"  id = "imgCarrinho"/>
                </a>
                <div id = "quantidade">
                    <?php
                    //exibe a quantidade total de produtos no carrinho
                    echo @$_SESSION['total'];
                    ?>
                </div>
                    <!-- mostra a o valor total de camisas01 adicionadas ao carinho -->
                    <span  style = "position:relative;top:-50px;left:480px;color:white;font-weight:bolder">
                    Valor Total: <?php  echo @$_SESSION['valorTotalCamisa01'] += 0; ?>
                    </span>
            </figure>
        </div>

        <!-- lista os produtos adicionados ao carrinho -->
        <h2 id = "subtitulo">Produtos</h2>
        <?php
        @$camisa01 = $_SESSION['camisa01'];
        @$camisa02 = $_SESSION['camisa02'];
        @$camisa03 = $_SESSION['camisa03'];
        @$camisa04 = $_SESSION['camisa04'];
        @$camisa05 = $_SESSION['camisa05'];

    
        if(@$_SESSION['totalCamisa01'] == NULL){
            @$totalCamisa01 +=0;
        }
        else{
            @$totalCamisa01 = $_SESSION['totalCamisa01'];
        }

         echo "<div id = 'produtos' >";

         echo "<ul>";

         echo "<li style = 'border-style:solid;border-width:1px;border-color:black;
         position:relative;height:200px;width:130px;'>";
         echo "<img src = '$camisa01' >";
         echo "<input type = 'number' value = '$totalCamisa01' name = 'quantidadeCamisa01' id = 'quantidadeCamisa01' />";
         echo "</li>";
         echo "<input type = 'button' value = '+' name = 'adicionar' id = 'adicionarCamisa01' onclick = 'adicionar()'
         style = 'position:relative;top:50px;'/>";
         echo "<input type = 'button' value = '-' name = 'remover' id = 'removerCamisa01' 
         style = 'position:relative;top:50px;'
         onclick = 'remover()'/>";

         echo "<li>";
         echo "<img src = '$camisa02' >";
         echo "</li>";

         echo "<li>";
         echo "<img src = '$camisa03' >";
         echo "</li>";

         echo "<li>";
         echo "<img src = '$camisa04' >";
         echo "</li>";

         echo "<li>";
         echo "<img src = '$camisa05' >";
         echo "</li>";

         echo "</ul>";

    
         echo "</div>";
        ?>
        <script>
        if (document.getElementById('quantidadeCamisa01').value == 0){
            document.getElementById("removerCamisa01").disabled = true;
        }
        </script>
    </body>
    </center>
    </html> 

   <div id = "div"></div>

<script>
// chama via ajax os metodos de adicionar, somar, remover e subtrair php 
function adicionar () {

    $.ajax({
        url: 'classes/adicionarCamisa01.php',
        type: 'GET',
        data: { "adicionarCamisa01()": "1"},
        success: function(response) {(response);}
        });


        $.ajax({
        url: 'classes/somarTotalCamisa01.php',
        type: 'GET',
        data: { "somarCamisa01()": "1"},
        success: function(response) {(response);}
        });
}

function remover () {

    $.ajax({
        url: 'classes/removerCamisa01.php',
        type: 'post',
        data: { "adicionarCarrinho()": "1"},
        success: function(response) { (response); }
        });

        $.ajax({
        url: 'classes/subtrairTotalCamisa01.php',
        type: 'GET',
        data: { "subtrairCamisa01()": "1"},
        success: function(response) {(response);}
        });
}

</script>
