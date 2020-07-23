<?php
// inicia a sessao
session_start();
/* Classe e metodo para remover a quantidade de camisas01 do carrinho */
class removerCamisa01
{

function removerCamisa()
{
    if ($_SESSION['total'] >= 1)
    {
        while($_SESSION['totalCamisa01'] != 0)
        {
        $_SESSION['total'] -=1;
        break;
        }
    }
    
    if ($_SESSION['totalCamisa01'] >= 1)
    {
        $_SESSION['totalCamisa01'] -=1;
    }
}
}
// instancia o objeto e executa o metodo
$removerCamisa = new removerCamisa01();
$removerCamisa->removerCamisa();
?>