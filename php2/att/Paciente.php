<?php
    class Paciente {
        //Atributos
        private $nome;
        private $rg;
        private $cpf;
        private $end;
        private $prof;

        // Método Construtor
        public function __construct($nome, $rg, $cpf)
        {
            $this->nome = $nome;
            $this->rg = $rg;
            $this->cpf = $cpf;
        }


        //Getters e Setters dos atributos
        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getRg() {
            return $this->rg;
        }

        public function setRg($rg) {
            $this->rg = $rg;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        public function getEndereco() {
            return $this->end;
        }

        public function setEndereco($end) {
            $this->end = $end;
        }

        public function getProfissao() {
            return $this->prof;
        }

        public function setProfissao($prof) {
            $this->prof = $prof;
        }

    }
?>

