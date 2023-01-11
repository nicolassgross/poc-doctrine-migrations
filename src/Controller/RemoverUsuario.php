<?php

use Doctrine\Helper\EntityManagerCreator;
use Repositorio\PessoaRepository;

require_once 'vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$objPessoaRepository = new PessoaRepository($entityManager);

$id = $argv[1] ?? null;

if($objPessoaRepository->delete($id) === true) {
    echo 'Dados removidos com sucesso';
} else {
    echo 'Erro ao remover seus dados, talvez o ID informado não exista no banco de dados, por favor tente novamente.';
};


