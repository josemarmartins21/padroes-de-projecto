<?php
require __DIR__ . '/vendor/autoload.php';

    
    use App\hello\Biblioteca;
    use App\hello\Livro;

    $b= new Biblioteca;
    $l = new Livro('Poder da esperança', 'Melgosa', 2004);

    var_dump($l);
    $b->addLivro($l);

    $b->listarLivros();


