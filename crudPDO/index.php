<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
// Métodos que seriam usados para criar um produto
// $produto->setNome('Microfone AT2020'); 
// $produto->setDescricao('Microfone Condensador');

$produtoDAO = new \App\Model\ProdutoDAO();
// Dessa forma, o produto seria criado.
// $produtoDAO->create($produto); 

// Dessa forma, seria lido todos os produtos no banco de dados.
// $produtoDAO->read();

// foreach($produtoDao->read() as $produto):
//     echo $produto['nome']."<br>".$produto['descricao']."<hr>";
// endforeach;

// Dessa forma, o primeiro produto que foi inserido no banco seria atualizado
// $produto->setId(1);
// $produto->setNome('Cadeira Gamer'); 
// $produto->setDescricao('Muito confortável');
// $produtoDAO->update($produto);

$produtoDAO->delete(2);