<?php
require 'vendor/autoload.php';
use App\Src\Administrador;
use App\Src\AdministradorSupremo;
use App\Src\Login;
use App\Src\Professor;
use App\Src\Usuario;
use App\Src\UsuarioFactory;


$login = new Login();
$login->executar('eu', '123');