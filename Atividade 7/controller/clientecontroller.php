<?php 
/*
    Programa: model/clientecontroller.php 
    Autor: Lucas Matias
    Data: 31/08/2023
*/

require_once("model/Cidade.php"); 

class CidadeController {
    public function listar(){
        $cliente = new cliente(); 

        $clientes = $cliente->read(); 

        $_REQUEST["clientes"] = $clientes; 

        require_once("view/cliente_view.php"); 

        
    }
}
?>