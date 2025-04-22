<?php
    class Pessoa {
        protected $nome;
        protected $cpf;

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getCpf(){
            return $this->cpf;
        }
        
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
        
    }

?>