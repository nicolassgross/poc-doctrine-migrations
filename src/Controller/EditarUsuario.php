<?php

use Doctrine\Helper\EntityManagerCreator;
use Repositorio\PessoaRepository;

require_once 'vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$objPessoaRepository = new PessoaRepository($entityManager);

$id = $argv[1] ?? null;

$arrDadosAtualizados = [
    'dsNome' => $argv[2] ?? null,
    'dsLogin' => $argv[3] ?? null,
    'dsSenha' => $argv[4] ?? null
];

if($objPessoaRepository->update($id, $arrDadosAtualizados) === true) {
    echo 'Dados atualizados com sucesso';
} else {
    echo 'Erro';
};


