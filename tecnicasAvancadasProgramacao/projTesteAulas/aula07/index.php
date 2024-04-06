<?php
require 'vendor/autoload.php';
use App\Src\Pessoa;
use App\Src\Aluno;
use App\Src\IHumano;

$alunos = new Aluno();
$alunos->cadastrar();
$alunos->fala();
$alunos->respira();
