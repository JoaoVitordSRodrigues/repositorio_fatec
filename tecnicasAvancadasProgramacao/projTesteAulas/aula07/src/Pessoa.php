<?php
namespace App\Src;

abstract class Pessoa{
    private $nome;
    private $email;
    private $senha;


    public abstract function logar();//nao implemento pq eu quero que quem herde implemente
    public abstract function cadastrar();

    public function criar(){
        echo "metodo criar";
    }

}