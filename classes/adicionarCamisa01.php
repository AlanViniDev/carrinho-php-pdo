<?php
// inicia a sessao
session_start();
/*classe e metodo para adicionar a quantidade total de produtos unitarios e a quantidade total
de todos os produtos no carrinho*/
class adicionarCamisa01
{

function adicionarCamisa()
{
   // soma a quantidade total de produtos do carrinho
   $_SESSION['total'] +=1;
   //soma a quantidade total das camisetas01 adicionadas no carrinho
   $_SESSION['totalCamisa01'] +=1;
  
}

}
// instancia o objeto e executa o metodo
$adicionarCamisa = new adicionarCamisa01();
$adicionarCamisa->adicionarCamisa();

?>