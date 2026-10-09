<?php

namespace App\Model;

use App\DAO\AlunoDAO;

class Aluno
{
  public  $id, $nome, $ra, $curso;

  function save()  : Aluno      // Salvar um registro
  {
    return (new AlunoDAO())->save($this);
  }

  function getById(int $id) : ?Aluno      // Pegar um registro pelo ID
  {
    return (new AlunoDAO())->selectById($id);
  }

  function getAllRows() : array          // Pegar todos os registros
  {
    return [];
  }

  function delete(int $id) : bool     // Deletar um registro
  {
    return (new AlunoDAO())->delete($id);
  }
}