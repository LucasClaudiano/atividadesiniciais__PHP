<?php 
    $server = 'localhost'; 
    $user = 'root'; 
    $pass = ''; 
    $mydb = 'vendas'; 

    $conn = new mysqli($server, $user, $pass, $mydb); 

    print_r($conn);

    if($conn->connect_error){
        die("Conexão falhou: " .$conn->connect_error); 
    }
?>