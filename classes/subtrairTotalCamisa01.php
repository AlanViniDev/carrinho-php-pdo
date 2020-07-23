<?php
//inicia a sessão
session_start();
/*Classe e metodo para subtrair o valor das camisetas01 no carrinho */
class subtrairTotalCamisa01
{
    function subtrairTCamisa01()
    {   
        while($_SESSION['valortotalCamisa01'] != 50.89 )
        {
            (@$_SESSION['valorTotalCamisa01'] -= 50.89);
            break;
        }
        if($_SESSION['totalCamisa01'] === 0){
            (@$_SESSION['valorTotalCamisa01'] = 0);
        }
    }
}
// instancia o objeto e executa o metodo
$subtrairT = new subtrairTotalCamisa01();
$subtrairT->subtrairTCamisa01();

?>