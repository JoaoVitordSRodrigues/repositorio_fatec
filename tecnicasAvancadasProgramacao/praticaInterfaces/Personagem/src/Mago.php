<?php

namespace App\Src;
class Mago implements Personagem {
    protected $mensagem_enviada;
    protected $origem_msg_enviada;

    public function validarAcaoUsuario(string $personagem_atacado, int $dano_personagem): bool {
        if ($personagem_atacado === '' || $dano_personagem === '' ) {
            return false;
        }
        return true;
    }

    public function retornarConfronto(string $personagem_atacado, int $dano_personagem) {
        $sorteioAcao = rand(0,1);//sorteando acao do personagem
        $personagem_atacar = false;//variavel com valor falso(o personagem nao revida)

        //caso a variavel sorteioAcao seja igual a 1
        if($sorteioAcao == 1){
            $personagem_atacar = true;//personagem ataca
        }

        if($personagem_atacar){//se o personagem ataca
            $ataque_do_personagem = rand(1,100);//sorteia o dano
            return "O $personagem_atacado revidou causando: $ataque_do_personagem de dano em você!";//retorna mensagem
        }else{//personagem nao ataca, ele recebe o dano
            return "O $personagem_atacado recebeu: $dano_personagem de dano!";
        }    
    }
}