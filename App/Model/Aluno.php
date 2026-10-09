<?php

namespace App\Model;

class Aluno
{
  public  $id, $nome, $ra, $curso;

  function save()  : Aluno      // Salvar um registro
  {
    return new Aluno();
  }

  function getById($id) : ?Aluno      // Pegar um registro pelo ID
  {
    return new Aluno();
  }

  function getAllRows() : array          // Pegar todos os registros
  {
    return [];
  }

  function delete(int $id) : bool     // Deletar um registro
  {
    return false;
  }
}