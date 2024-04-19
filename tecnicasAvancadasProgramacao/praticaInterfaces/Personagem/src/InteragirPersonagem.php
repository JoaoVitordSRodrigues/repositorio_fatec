<?php
namespace App\Src;

class InteragirPersonagem {
    public function atacarPersonagem($personagem_atacado, $dano_personagem) {
        $personagem_atacado = strtolower($personagem_atacado);
        
        //verificando o personagem informado e armazenando a instancia da classe na variavel
        $personagem = PersonagemFactory::verificarPersonagem($personagem_atacado);

        //se o personagem e dano NAO estiver vazia
        if ($personagem->validarAcaoUsuario($personagem_atacado, $dano_personagem)) {
            //armazena o resultado do confronto
            $resultado_confronto = $personagem->retornarConfronto($personagem_atacado, $dano_personagem);
            //exibindo resultado
            echo $resultado_confronto;
                 
        } else {
            echo 'Ocorreu um erro ao interagir com o personagem!';
        }
    }
}

