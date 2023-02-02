<?php

    class Funcionario {public string $nome, public string $endereco, 
        public string $telefone, public string $sexo, public string $funcao, public string $salario;
        

        public function __construct(string $nome, string $endereco, string $telefone, string $sexo, string $funcao, string $salario;)
        {
            $this -> nome = $nome; , $this -> endereco = $endereco; , $this -> telefone; , $this -> sexo; 
            $this -> funcao -> $funcao, $this -> salario = $salario;
        }//Fim do construtor Funcionário.

        //Métodos gets and set.
        public function getNome()       : string {return $this -> nome;}
        public function setNome()       : void   {$this-> nome;}
        public function getEndereco()   : string {return $this -> endereco;}
        public function setEndereco()   : void   {$this -> endereco;}
        public function getTelefone()   : string {return $this -> telefone;}
        public function setTelefone()   : void   {$this -> telefone;}
        public function getSexo()       : string {return $this -> sexo;}
        public function setSexo()       : void   {$this -> sexo;}
        public function getSalario()    : string {return $this -> salario;}
        public function setSalario()    : void   {$this -> salario;}
    }
?>  