<?php
require 'vendor/autoload.php';
use App\Src\Email;
use App\Src\EnviarMsg;
use App\Src\Mensagem;
use App\Src\MensagemFactory;
use App\Src\Sms;
use App\Src\WhatsApp;

//instanciando classe
$mensagem_enviada = new EnviarMsg();
//chamando o metodo e passando valores como parametros(mensagem e origem da mensagem)
$mensagem_enviada->enviarMensagem('Olá amigo tudo bem?','SMS');