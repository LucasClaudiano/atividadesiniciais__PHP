<?php 
/*
    Programa: model/index.php 
    Autor: Lucas Matias
    Data: 31/08/2023
*/

require_once("controller/clientecontroller.php"); 

$obj = new CidadeController(); 
$obj->listar(); 
?>