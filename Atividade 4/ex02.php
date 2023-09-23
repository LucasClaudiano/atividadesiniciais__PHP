<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class Pessoa {
            private $nome; 
            private $id; 
            private $cpf; 

            public function getnome(){
                return $this->nome; 
            }
            public function setnome($nome){
                $this->nome = $nome; 
            }
            public function getid(){
                return $this->id; 
            }
            public function setid($id){
                $this->id = $id; 
            }
            public function getcpf(){
                return $this->cpf; 
            }
            public function setcpf($cpf){
                $this->cpf; 
            }
        }
        class Medico extends Pessoa{
            private $CRM; 
            public function fetCRM(){
                return $this->CRM; 
            }
            public function setCRM($CRM){
                $this->CRM; 
            }
        }
    ?>
</body>
</html>