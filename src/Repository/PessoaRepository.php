<?php

namespace Repositorio;

include_once "vendor/autoload.php";

use Doctrine\ORM\EntityManager;
use Entidade\Pessoa;

class PessoaRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function insert(Pessoa $pessoa)
    {
        $this->entityManager->persist($pessoa);
        $this->entityManager->flush();

        return true;
    }

    public function update()
    {
    }

    public function delete(Pessoa $pessoa)
    {
        // Exclui uma pessoa do banco de dados
    }

    public function findAll()
    {
        // Retorna todas as pessoas do banco de dados
    }
}