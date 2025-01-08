<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setNome('Microfone AT2020');
$produto->setDescricao('Microfone Condensador');

$produtoDao = new \App\Model\ProdutoDAO();
$produtoDao->create($produto);
