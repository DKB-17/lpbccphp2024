<?php

    namespace MODEL;

    class Software{
        private ?int $id;
        private ?string $descricao;
        private ?string $fabricante;
        private ?int $tipo;
        private ?float $valor;
        private ?int $qtdcopias;

        public function __construct(){}
        public function getId(){
            return $this->id;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function getFabricante(){
            return $this->fabricante;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function getValor(){
            return $this->valor;
        }
        public function getQtdcopias(){
            return $this->qtdcopias;
        }
        public function setId(int $id){
            $this->id = $id;
        }
        public function setDescricao(string $descricao){
            $this->descricao = $descricao;
        }
        public function setFabricante(string $fabricante){
            $this->fabricante = $fabricante;
        }
        public function setTipo(int $tipo){
            $this->tipo = $tipo;
        }
        public function setValor(float $valor){
            $this->valor = $valor;
        }
        public function setQtdcopias(int $qtdcopias){
            $this->qtdcopias = $qtdcopias;
        }

    }
?>