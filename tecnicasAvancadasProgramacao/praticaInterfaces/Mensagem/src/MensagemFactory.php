<?php

namespace App\Src;
use Exception;

class MensagemFactory {
    public static function verificarOrigemMsg(string $origem_msg_enviada): Mensagem {
        switch ($origem_msg_enviada) {
            case 'email':
                return new Email();
            case 'sms':
                return new SMS();
            case 'whatsapp':
                return new WhatsApp();
            default:
                throw new Exception('Origem inválida');
        }
    }
}
