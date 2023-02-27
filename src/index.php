<!DOCTYPE html>
<html lang="pt-br">
  <?php include("./partials/head.php"); ?>

  <body>
    <?php include("./partials/header.php"); ?>

    <main class="h-full w-full css-conteudo-principal">
      <?php 
        $banner = [
          "imagens" => [
            './assets/images/banner-principal/1.jpg',
            './assets/images/banner-principal/2.jpg',
            './assets/images/banner-principal/4.jpg'
          ],
        ];

        include("./partials/banner-principal.php");
      ?>

    <section class="p-2 flex gap-2 css-produtos">
      <section class="px-2 border css-produto-listagem">
        <div class="css-produto-imagem-principal">
          <img src="./assets/images/produtos/001/1.webp">
        </div>
        <div class="p-4 css-produto-textos">
          <h2 class="css-pt-titulo">Tênis Nike Revolution 6 - Masculino</h2>
          <div class="pt-2 text-sm css-pt-precos">
            <h4 class="text-gray-400 line-through leading-tight css-ptp-preco-de">R$ 459,90</h4>
            <h3 class="leading-tight text-lg font-medium css-ptp-preco-por">R$ 299,99</h3>
            <h4 class="leading-tight css-ptp-parcelas">ou 2x de R$ 149,99</h4>
          </div>
        </div>
      </section>
      <section class="px-2 border css-produto-listagem">
        <div class="css-produto-imagem-principal">
          <img src="./assets/images/produtos/001/1.webp">
        </div>
        <div class="p-4 css-produto-textos">
          <h2 class="css-pt-titulo">Tênis Nike Revolution 6 - Masculino</h2>
          <div class="pt-2 text-sm css-pt-precos">
            <h4 class="text-gray-400 line-through leading-tight css-ptp-preco-de">R$ 459,90</h4>
            <h3 class="leading-tight text-lg font-medium css-ptp-preco-por">R$ 299,99</h3>
            <h4 class="leading-tight css-ptp-parcelas">ou 2x de R$ 149,99</h4>
          </div>
        </div>
      </section>
    </section>

    </main>

    <?php include("./partials/footer.php"); ?>

    <script type="module" src="./assets/js/script.js"></script>
  </body>

</html>