<?php
function carregaArrayProduto() {
  if(! empty($_POST["array-produto"])){
    return unserialize($_POST["array-produto"]);
  }
}

function buscaImagemVariacao($itensPrimeiraVariacao, $primVariacaoPost) {
  foreach($itensPrimeiraVariacao as $itemPrimeiraVariacao) {
    $variacaoSelecionada = $itemPrimeiraVariacao["nome"] == $primVariacaoPost;

    if($variacaoSelecionada) {
      return $itemPrimeiraVariacao["imagens"][0];
    }
  }
}

function salvaProdutoSession($produto) {
  $nomeProduto = $produto["nome"];
  $codigoProduto = $produto["codigo"];
  $primeiraVariacao = $produto["prim-variacao"];
  $itensPrimeiraVariacao = $primeiraVariacao["itens"];
  $primVariacaoPost = $_POST["css-id-itens-prim-variacao"];
  $segVariacaoPost = $_POST["css-id-itens-seg-variacao"];
  $imagemProduto = buscaImagemVariacao($itensPrimeiraVariacao, $primVariacaoPost);

  $_SESSION['carrinho']["$codigoProduto-$primVariacaoPost-$segVariacaoPost"] = array(
    'nome-produto' => $nomeProduto,
    'imagem' => $imagemProduto,
    'prim-variacao' => $primVariacaoPost,
    'seg-variacao' => $segVariacaoPost,
    'quantidade' => 1,
  );
}

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