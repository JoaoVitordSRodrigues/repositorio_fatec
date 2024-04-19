<?php
namespace App\Src;

class EnviarMsg {
    public function enviarMensagem($mensagem_enviada, $origem_msg_enviada) {
        $origem_msg_enviada = strtolower($origem_msg_enviada);

        //verificando a origem informada e armazenando a instancia da classe na variavel
        $origem_obtida_mensagem = MensagemFactory::verificarOrigemMsg($origem_msg_enviada);

        //se a mensagem e origem NAO estiver vazia
        if ($origem_obtida_mensagem->validarMensagem($mensagem_enviada, $origem_msg_enviada)) {
            //armazena de onde a mensagem veio
            $complemento_mensagem = $origem_obtida_mensagem->enviarMensagem();
            //exibe msg com e de onde ela veio
            echo "$mensagem_enviada $complemento_mensagem";
                 
        } else {
            echo 'Ocorreu um erro com a mensagem!';
        }
    }
}

