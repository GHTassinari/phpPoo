<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
// Métodos que seriam usados para criar um produto
// $produto->setNome('Microfone AT2020'); 
// $produto->setDescricao('Microfone Condensador');

$produtoDao = new \App\Model\ProdutoDAO();
// Dessa forma, o produto seria criado.
// $produtoDao->create($produto); 

// Dessa forma, seria lido todos os produtos no banco de dados.
// $produtoDao->read();

// foreach($produtoDao->read() as $produto):
//     echo $produto['nome']."<br>".$produto['descricao']."<hr>";
// endforeach;