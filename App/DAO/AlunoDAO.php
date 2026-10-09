<?php

namespace App\DAO;

use App\Model\Aluno;

class AlunoDAO
{

    public function save(Aluno $model)
    {
        if($model->id == null)
        {
            $this->insert($model);
        }
        else
        {
            $this->update($model);
        }
    }

    public function insert(Aluno $model)
    {

    }   
    
    public function update(Aluno $model)
    {
        
    }   

    public function selectById(int $id)
    {
        
    }
    
    public function delete(int $id)
    {
        
    }   
    
}