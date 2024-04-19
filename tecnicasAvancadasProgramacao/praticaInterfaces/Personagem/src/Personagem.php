<?php

namespace App\Src;

interface Personagem {
    public function validarAcaoUsuario(string $personagem_atacado, int $dano_personagem): bool;
    public function retornarConfronto(string $personagem_atacado, int $dano_personagem);
}