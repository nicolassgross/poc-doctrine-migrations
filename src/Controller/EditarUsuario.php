<?php

use Doctrine\Helper\EntityManagerCreator;
use Entidade\Pessoa;
use Repositorio\PessoaRepository;

require_once 'vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$pessoa = new Pessoa;
$pessoa->setDsNome('Nicolas');
$pessoa->setDsLogin('nick');
$pessoa->setDsSenha('123');

$objPessoaRepository = new PessoaRepository($entityManager);
