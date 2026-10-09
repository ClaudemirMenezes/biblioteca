<?php

namespace App\Controller;

use App\Model\Aluno;

final class AlunoController
{
    public static function cadastro(): void
    {
        //echo "Mostrar o formulario a depender...";

        $model = new Aluno();
        //$model->id = 8;
        $model->nome = "Claudemir Menezes";
        $model->ra = 123;
        $model->curso = "Desenvolvimento de Sistemas";
        $model->save();

        echo "aluno inserido";
    }

    public static function listar(): void
    {
        $model = new Aluno();
        $lista = $model->getAllRows();

        require VIEW . '/Aluno/lista_aluno.php';
    }
}
