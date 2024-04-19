<?php

namespace App\Src;
class Email implements Mensagem {
    protected $mensagem_enviada;    
    protected $origem_msg_enviada;
        
    public function validarMensagem(string $mensagem_enviada, string $origem_msg_enviada): bool {
        if ($mensagem_enviada === '' || $origem_msg_enviada === '' ) {
            return false;
        }
        return true;
    }

    public function enviarMensagem() {
        return 'Essa mensagem foi enviada pelo Email.';
    }
}