<?php

namespace App\Src;

interface Mensagem {
    public function validarMensagem(string $mensagem_enviada, string $origem_msg_enviada): bool;
    public function enviarMensagem();
}