<?php

namespace App\Controller;

use App\Model\Aluno;

class AlunoController
{
    public static function cadastro()
    {
        echo "Mostrar formulário de cadastro de alunos";

        $model = new Aluno();
        $model->id = 8;
        $model->nome = "Claudemir Menezes";
        $model->ra = "123";
        $model->curso = "Informática";
        $model->save();
    }

    public static function listar()
    {
        echo "Listar de alunos";

        $aluno = new Aluno();
        $aluno ->getAllRows();
    }
}