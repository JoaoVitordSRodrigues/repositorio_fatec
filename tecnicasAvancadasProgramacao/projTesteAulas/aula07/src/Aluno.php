<?php
namespace App\Src;
//classe concreta, abstrata e interface
class Aluno extends Pessoa implements IHumano, ITerraqueo{

    public function respira(){
        echo "o homem respira\n";
    }

    public function fala(){
        echo "conversa na aula\n";
    }

    public function logar(){
        echo "metodo login implementado\n";
    }

    public function cadastrar(){
        echo "metodo cadastrar implementado\n";
    }


}