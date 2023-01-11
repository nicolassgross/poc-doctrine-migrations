<?php

use Doctrine\Helper\EntityManagerCreator;
use Repositorio\PessoaRepository;

require_once 'vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$objPessoaRepository = new PessoaRepository($entityManager);

$id = $argv[1] ?? null;

$arrUsuarios = $objPessoaRepository->listUser($id);

foreach($arrUsuarios as $users) {
    $cd_pessoa = $users->getCdPessoa();
    $ds_nome = $users->getDsNome();
    $ds_login = $users->getDsLogin();

    echo "ID: $cd_pessoa\nNome: $ds_nome\nLogin: $ds_login\n-----\n";
}
