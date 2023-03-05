<?php 
  include("./pages/produtos/{$produtoCodigo}.php");
  
  if(! function_exists("definirIMagemPrincipal")) {
    function definirImagemPrincipal($imagensVariacao1, $imagensSemVariacao) {
      if(! empty($imagensVariacao1)) {
        return $imagensVariacao1[0];
      }else {
        return $imagensSemVariacao[0];
      }
  
      return $imprimir;
    }
  }

  $produtoNome = $produto["nome"];
  $imagemPrincipal = definirImagemPrincipal($produto["variacao-1"]["imagens"], $produto["imagens-sem-variacao"]);
  $precoDe = $produto["preco-de"];
  $precoPor = $produto["preco-por"];
  $qtdeParcelas = $produto["qtde-parcelas"];
  $totalParcelado = number_format($precoPor / $qtdeParcelas, 2, ",", ".");
?>

<a href="produto.php?dir=pages/produtos&file=<?php echo $produtoCodigo ?>">
  <section class="px-2 border border-transparent hover:border-gray-200 css-produto-listagem">
    <div class="css-produto-imagem-principal">
      <img src= "<?php echo $imagemPrincipal ?>">
    </div>
    <div class="p-4 css-produto-textos">
      <h2 class="css-pt-titulo"><?php echo $produtoNome ?></h2>
      <div class="pt-2 text-sm css-pt-precos">
        <h4 class="text-gray-400 line-through leading-tight css-ptp-preco-de">R$ <?php echo $precoDe ?></h4>
        <h3 class="leading-tight text-lg font-medium css-ptp-preco-por">R$ <?php echo $precoPor ?></h3>
        <h4 class="leading-tight css-ptp-parcelas">ou <?php echo $qtdeParcelas ?> x de R$ <?php echo $totalParcelado ?></h4>
      </div>
    </div>
  </section>
</a>
