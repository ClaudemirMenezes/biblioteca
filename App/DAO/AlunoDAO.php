<?php

namespace App\DAO;

use App\Model\Aluno;

class AlunoDAO
{

    public function save(Aluno $model) : Aluno
    {
       
        return ($model->id == null) ? $this->insert($model) : $this->update($model);

    }

    public function insert(Aluno $model)
    {
        return new Aluno();
    }   
    
    public function update(Aluno $model)
    {
        var_dump($model);
        return new Aluno();
    }   

    public function selectById(int $id)
    {
        return new Aluno();
    }
    
    public function delete(int $id)
    {
        return true;
    }   
    
}