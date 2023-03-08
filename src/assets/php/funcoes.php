<?php

function addProdutoListagem($codigoProduto) {

  include('./partials/produto-listagem.php');
  return $codigoProduto;
}

function definirImagemPrincipal($imagensPrimVariacao, $imagensSemVariacao)
{
  if (!empty($imagensPrimVariacao)) {
    return $imagensPrimVariacao[0];
  } else {
    return $imagensSemVariacao[0];
  }
}


function numeroParaReal($numero)
{
  $formatado = number_format($numero, 2, ",", ".");
  return $formatado;
}

function variacaoExiste($itensVariacao)
{
  if (!empty($itensVariacao)) {
    return true;
  } else {
    return false;
  }
}

function buscarImagensVariacao($itensPrimeiraVariacao)
{
  print_r($itensPrimeiraVariacao["imagens"]);
}

function imagensProduto($primeiraVariacao, $produto)
{
  $imgPrimeiraVariacao = $primeiraVariacao["imagens"];
  $imgSemVariacao = $produto["imagens-sem-variacao"];

  if (!empty($imgPrimeiraVariacao)) {
    return $imgPrimeiraVariacao;
  } else {
    return $imgSemVariacao;
  }
}
?>