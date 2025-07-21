<?php
    namespace App\hello;

    class Livro {
        private string $livro;
        private string $autor;
        private int $ano;

        public function getInfo(): string 
        {
            return "Nome do lvro [" . $this->livro . "] autor do livro [" . $this->autor . "] o ano de lançamendo [" . $this->ano . "]";    

        }
        
        public function __construct(string $livro, string $autor, int $ano)
        {
           $this->livro = $livro;
           $this->autor = $autor;
           $this->ano = $ano;
        }

        public function __getLivro(): string
        {
            return $this->livro;
        }

        public function __setLivro(string $livro): void
        {
            $this->livro = $livro;
        }

        public function __setAutor(string $autor): void
        {
            $this->autor = $autor;
        }

        public function getAutor(): string 
        {
            return $this->autor;
        }

        public function __setAno(int $ano): void
        {
            $this->ano = $ano;
        }

        public function getAno(): int
        {
            return $this->ano;
        }
    }