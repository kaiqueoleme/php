<?php
    include_once "Pessoa.php";
    class Aluno extends Pessoa{
        protected $curso;

        public function getCurso(){
            return $this->curso;
        }

        public function setCurso($curso){
            $this->curso = $curso;
        }
    }
?>