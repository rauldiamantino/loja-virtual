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

    <section class="xl:mx-auto xl:max-w-7xl py-2">
      <section class="lg:grid-cols-4 w-full grid grid-cols-2 gap-2 css-produtos">
        <?php include("./partials/produto-listagem.php") ?>
        <?php include("./partials/produto-listagem.php") ?>
        <?php include("./partials/produto-listagem.php") ?>
        <?php include("./partials/produto-listagem.php") ?>
      </section>
    </section>

    </main>

    <?php include("./partials/footer.php"); ?>

    <script type="module" src="./assets/js/script.js"></script>
  </body>

</html>