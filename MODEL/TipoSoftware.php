<?php
    namespace MODEL;
    class TipoSoftware{
        private ?int $id;
        private ?int $descricao;

        public function__construct(){}

        public function getId(){
            return $this->id;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function setId(int $id){
            $this->id = $id;
        }
        public function setDescricao(string $descricao){
            $this->descricao = $descricao;
        }
    }    
?>