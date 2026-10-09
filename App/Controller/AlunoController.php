<?php

namespace App\Controller;

use App\Model\Aluno;

class AlunoController
{
    public static function cadastro()
    {
        echo "Mostrar formulário de cadastro de alunos";
    }

    public static function listar()
    {
        echo "Listar de alunos";

        $aluno = new Aluno();
        $aluno ->getAllRows();
    }
}