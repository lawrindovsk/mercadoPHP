<?php
    class Cliente {public string $nome; public string $endereco;
        public string $cpf; public string $qtd; public string $valorTotal;
        //var.

        public function __construct(string $nome, string $endereco, string $cpf, string $qtd, string $valorTotal)
        {
            $this -> nome = $nome;
             $this -> endereco = $endereco;
              $this -> cpf = $cpf;
            $this -> qtd = $qtd; 
             $this -> valorTotal = $valorTotal;
        }//Fim do construtor Cliente.
    
        public function getNome()       : string {return $this -> nome;}
        public function setNome()       : void   {$this-> nome;}
        public function getEndereco()   : string {return $this -> endereco;}
        public function setEndereco()   : void   {$this -> endereco;}
        public function getCpf()        : string {return $this -> cpf;}
        public function setCpf()        : void   {$this -> cpf;}
        public function getQtd()        : string {return $this -> qtd;}
        public function setQtd()        : void   {$this -> qtd;}
        public function getValorTotal() : string {return $this -> valorTotal;}
        public function setValorTotal() : void   {$this -> valorTotal;}
    }   
?>