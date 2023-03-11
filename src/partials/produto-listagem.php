<?php
  require_once("./assets/php/funcoes.php");
  
  $produtoExiste = file_exists('./pages/produtos/' . $codigoProduto . '.php');
  $urlCategoria = "";
  if(isset($_GET["file"])) $urlCategoria = $_GET["file"];
  

  if($produtoExiste) {
    include('./pages/produtos/' . $codigoProduto . '.php');

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
    

    echo "<a href='produto.php?categoria=$urlCategoria&dir=pages/produtos&file=" . $codigoProduto . "'>
            <section class='overflow-hidden rounded-md css-produto-listagem'>
              <div class='overflow-hidden rounded-md css-produto-imagem-principal'>
                <img src='$imagemPrincipal' class='hover:scale-110 transition duration-500'>
              </div>
              <div class='p-4 css-produto-textos'>
                <h2 class='hover:text-gray-500 css-pt-titulo'>
                  $produtoNome
                </h2>
                <div class='pt-2 text-sm css-pt-precos'>
                  <div class='flex items-center gap-2 css-bloco-precos'>
                    <h3 class='leading-tight text-lg font-medium css-ptp-preco-por'>R$
                      $precoPor
                    </h3>";

    if($precoDe != 0) {
      echo "<h4 class='text-gray-400 line-through css-ptp-preco-de'>R$ $precoDe</h4>";
    }

    echo "</div>
          <h4 class='leading-tight css-ptp-parcelas'>ou
            $qtdeParcelas x de R$
            $totalParcelado
          </h4>
        </div>
      </div>
    </section>
  </a>";
  }
?>