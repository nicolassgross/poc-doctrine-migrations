<?php

use Doctrine\Helper\EntityManagerCreator;
use Entidade\Pessoa;
use Repositorio\PessoaRepository;

require_once 'vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$pessoa = new Pessoa;
$pessoa->setDsNome($argv[1]);
$pessoa->setDsLogin($argv[2]);
$pessoa->setDsSenha($argv[3]);

$objPessoaRepository = new PessoaRepository($entityManager);

if($objPessoaRepository->insert($pessoa) === true) {
    echo 'Dados inseridos com sucesso';
} else {
    echo 'Erro';
};