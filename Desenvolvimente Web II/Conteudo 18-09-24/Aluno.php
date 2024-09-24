<?php


    class Aluno {
        public $nome;
        public $dataNascimento;
        public $nota;  
        public $curso;
        public $idade;

        public function __construct($nome, $dataNascimento, $nota, $curso, $idade) {
            $this->nome = $nome;
            $this->dataNascimento = $dataNascimento;
            $this->nota = $nota;
            $this->curso = $curso;
            $this->idade = $idade;
        }

        public function idade(){
            $ano = substr($this->idade, 0, 4);
            $atual = date('Y');
            return 2024 - $ano;
            
        }

       
    }


?>