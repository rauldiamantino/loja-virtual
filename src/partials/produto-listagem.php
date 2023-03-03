<section class="px-2 border border-transparent hover:border-gray-200 css-produto-listagem">
  <div class="css-produto-imagem-principal">
    <img src=
      <?php print_r($produto["variavel-1"]["cor-1"]["imagens"][0]) ?>
    >
  </div>
  <div class="p-4 css-produto-textos">
    <h2 class="css-pt-titulo">
      <?php print_r($produto["nome"]) ?>
    </h2>
    <div class="pt-2 text-sm css-pt-precos">
      <h4 class="text-gray-400 line-through leading-tight css-ptp-preco-de">
        R$ <?php print_r($produto["preco-de"]) ?>
      </h4>
      <h3 class="leading-tight text-lg font-medium css-ptp-preco-por">
        R$ <?php print_r($produto["preco-por"]) ?>
      </h3>
      <h4 class="leading-tight css-ptp-parcelas">
        ou <?php print_r($produto["qtde-parcelas"]) ?>x de R$ <?php
             $total = $produto["preco-por"] / $produto["qtde-parcelas"];
             $totalFormatado = number_format($total, 2, ",", ".");
             print_r($totalFormatado);
           ?>
      </h4>
    </div>
  </div>
</section>