<section class="px-2 border border-transparent hover:border-gray-200 css-produto-listagem">
  <div class="css-produto-imagem-principal">
    <img src=
      <?php print_r($produto["variavel-1"]["cor-1"]["imagens"]["1"]) ?>
    >
  </div>
  <div class="p-4 css-produto-textos">
    <h2 class="css-pt-titulo">
      <?php print_r($produto["nome"]) ?>
    </h2>
    <div class="pt-2 text-sm css-pt-precos">
      <h4 class="text-gray-400 line-through leading-tight css-ptp-preco-de">
        R$ 459,90
      </h4>
      <h3 class="leading-tight text-lg font-medium css-ptp-preco-por">
        R$ <?php print_r($produto["preco"]) ?>
      </h3>
      <h4 class="leading-tight css-ptp-parcelas">
        ou 2x de R$ 149,99
      </h4>
    </div>
  </div>
</section>