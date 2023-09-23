<?php 
/*
    Programa: model/cliente.php 
    Autor: Lucas Matias
    Data: 31/08/2023
*/


class Cliente{
    private $codcli; 
    private $nome; 
    private $endereco; 
    private $bairro; 
    private $cep; 
    private $telefone; 
    private $cpf; 
    private $ie; 
    private $conn; 

public function __construct(){
        $this->conectaProduto(); 
    }

private function conectaProduto(){
    $server = 'localhost'; 
    $user = 'root'; 
    $pass = ''; 
    $mydb = 'produto'; 

    $conn = new mysqli($server, $user, $pass, $mydb); 

    if($conn->connect_error){
        die("Conexão falhou: " .$conn->connect_error); 
    }
}

public function getCodCli(){
    return $this->codcli; 
}
public function setCodCli($codcli){
    $this->codcli = $codcli;
}

public function getNome(){
    return $this->nome; 
}
public function setnome($nome){
    $this->nome = $nome;
}

public function getEndereco(){
    return $this->endereco; 
}
public function setEndereco($endereco){
    $this->endereco = $endereco;
}

public function getBairro(){
    return $this->bairro; 
}
public function setBairro($bairro){
    $this->bairro = $bairro;
}

public function getCep(){
    return $this->cep; 
}
public function setCep($cep){
    $this->cep = $cep;
}

public function getTelefone(){
    return $this->telefone; 
}
public function setTelefone($telefone){
    $this->telefone = $telefone;
}

public function getCpf(){
    return $this->cpf; 
}
public function setCpf($cpf){
    $this->cpf = $cpf;
}

public function getIe(){
    return $this->ie; 
}
public function setIe($ie){
    $this->ie = $ie;
}


public function create(){
    $sql ="INSERT INTO cliente (CODCLI, NOME, ENDERECO, BAIRRO, CEP, TELEFONE, CPF, IE) VALUES ('".$this->getCodCli().
    "','".$this->getNome()."','".$this->getEndereco()."','".$this->getBairro()."','".$this->getCep()."','".
    $this->getTelefone()."','".$this->getCpf()."','".$this->getIe()."')";

    $this->conn->query($sql);
}

public function update(){
    $sql = "UPDATE cliente SET CODCLI='".$this->getCodCli()."',NOME='".$this->getNome()."', ENDERECO='".$this->getEndereco()."',
    BAIRRO='".$this->getBairro()."', CEP='".$this->getCep()."', TELEFONE='".$this->getTelefone()."', CPF=='".$this->getCpf()."',
    IE='".$this->getIe()."' WHERE CODCLI=".$this->getCodCli();

    $this->conn->query($sql);
}

public function read(){
    $sql = "SELECT * FROM cliente"; 

    $returnValue = array(); 

    $result = $this->conn->query($sql); 
    if($result != null){
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            if(!empty($row)){
                array_push($returnValue,$row); 
            }
        }
    }
    return $returnValue;
}
}

?>