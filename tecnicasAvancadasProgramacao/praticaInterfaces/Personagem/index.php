<?php
require 'vendor/autoload.php';
use App\Src\InteragirPersonagem;
use App\Src\Personagem;
use App\Src\PersonagemFactory;
use App\Src\Arqueiro;
use App\Src\Mago;
use App\Src\Guerreiro;

//instanciando classe
$usuario = new InteragirPersonagem();
//chamando o metodo e passando valores como parametros(personagem e dano no personagem)
$usuario->atacarPersonagem('guerreiro', 15);