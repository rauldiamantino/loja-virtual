<?php

include("./pages/produtos/$produtoCodigo.php");
require_once("./assets/php/funcoes.php");

/*-------------------------------
Informações do array $produto[]
-------------------------------*/
$produtoNome = $produto["nome"];
$precoDe = $produto["preco-de"];
$precoPor = $produto["preco-por"];
$qtdeParcelas = $produto["qtde-parcelas"];
$totalParcelado = numeroParaReal($precoPor / $qtdeParcelas);
$imgsItem1PrimVariacao = $produto["prim-variacao"]["itens"][0]["imagens"];
$imagensSemVariacao = $produto["imagens-sem-variacao"];
$imagemPrincipal = definirImagemPrincipal($imgsItem1PrimVariacao, $imagensSemVariacao);


echo "<a href='produto.php?dir=pages/produtos&file=$produtoCodigo'>
        <section class='px-2 border border-transparent hover:border-gray-200 css-produto-listagem'>
          <div class='css-produto-imagem-principal'>
            <img src='$imagemPrincipal'>
          </div>
          <div class='p-4 css-produto-textos'>
            <h2 class='css-pt-titulo'>
              $produtoNome
            </h2>
            <div class='pt-2 text-sm css-pt-precos'>
              <h4 class='text-gray-400 line-through leading-tight css-ptp-preco-de'>R$
                $precoDe
              </h4>
              <h3 class='leading-tight text-lg font-medium css-ptp-preco-por'>R$
                $precoPor
              </h3>
              <h4 class='leading-tight css-ptp-parcelas'>ou
                $qtdeParcelas x de R$
                $totalParcelado
              </h4>
            </div>
          </div>
        </section>
      </a>";
?>