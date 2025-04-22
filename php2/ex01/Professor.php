<?php
    include_once 'Pessoa.php';
    class Professor extends Pessoa{
        protected $formacao;

        public function getFormacao(){
            return $this->formacao;
        }

        public function setFormacao($formacao){
            $this->formacao = $formacao;
        }
    }
?>