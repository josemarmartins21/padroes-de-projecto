<?php
    namespace App\hello;
    require_once 'livro.php';
    class Biblioteca {
        var array $livros;

        public function addLivro(Livro $livros)
        {
    

        }

        public function listarLivros()
        {
            foreach ($this->livros as $livro) {
                echo $livro;
            }
        }

        public function __setLivros($livro): void
        {
            $this->livros = $livro;
        }
    }