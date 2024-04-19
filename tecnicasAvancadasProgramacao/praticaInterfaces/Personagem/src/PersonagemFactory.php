<?php

namespace App\Src;
use Exception;

class PersonagemFactory {
    public static function verificarPersonagem(string $personagem_atacado): Personagem {
        switch ($personagem_atacado) {
            case 'arqueiro':
                return new Arqueiro();
            case 'guerreiro':
                return new Guerreiro();
            case 'mago':
                return new Mago();
            default:
                throw new Exception('Personagem inválido');
        }
    }
}

