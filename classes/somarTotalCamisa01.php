<?php
// inicia a sessao
session_start();
/*Classe parra somar o valor total de camisas 01 no carrinho */
class somarTotalCamisa01
{
    function calcularTCamisa01()
    {
        @$_SESSION['valorTotalCamisa01'] = (50.89 * $_SESSION['totalCamisa01']);
    }
}
// instancia o objeto e executa o metodo
$calcularT = new somarTotalCamisa01();
$calcularT->calcularTCamisa01();

?>