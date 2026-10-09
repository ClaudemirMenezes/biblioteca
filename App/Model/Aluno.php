<?php

namespace App\Model;

use App\DAO\AlunoDAO;

final class Aluno
{
  public  $id, $nome, $ra, $curso;

  public function save()  : Aluno      // Salvar um registro
  {
    return (new AlunoDAO())->save($this);
  }

  public function getById(int $id) : ?Aluno      // Pegar um registro pelo ID
  {
    return (new AlunoDAO())->selectById($id);
  }

  public function getAllRows() : array          // Pegar todos os registros
  {
    return (new AlunoDAO())->selectAll();
  }

  public function delete(int $id) : bool     // Deletar um registro
  {
    return (new AlunoDAO())->delete($id);
  }
}