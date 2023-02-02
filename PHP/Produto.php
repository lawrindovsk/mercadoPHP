<?php

    class Produto{

        protected string $nProduto;
        protected string $qtdProduto;
        protected string $dCompra;
        protected string $vProduto;

        public function __construct(string $nProduto, string $qtdProduto, string $dCompra, string $vProduto){

            $this->nProduto = $nProduto;
            $this->qtdProduto = $qtdProduto;
            $this->dCompra = $dCompra;
            $this->vProduto = $vProduto;

        }

        public function __get(string $dados){
            return $this->$dados;
        }

        public function __set(string $nomeVariavel, string $valor) : void
        {
            $this->nomeVariavel = $valor;
        }

        public function __toString() : string
        {
            return "<br>Nome do Produto: ".$this->nProduto."<br>Quantidade de Produtos: ".$this->qtdProduto."<br>Data de valide: ".$this->dCompra."<br>Valor do produto: ".$this->vProduto;
        }
          
    }
?>