<!DOCTYPE html>
<html lang="pt-br">
<?php include("./partials/head.php"); ?>

<body>
  <?php include("./partials/header.php"); ?>
  <main class="xl:mx-auto xl:max-w-7xl py-2">
    <?php 
      include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
      $produtoNome = $produto["nome"];
      $referencia = $produto["referencia"];
      $imagemPrincipal = $produto["variavel-1"]["imagens"][0];
      $precoDe = $produto["preco-de"];
      $precoPor = $produto["preco-por"];
      $qtdeParcelas = $produto["qtde-parcelas"];
      $totalParcelado = number_format($precoPor / $qtdeParcelas, 2, ",", ".");

      echo $produtoNome;
    ?>
  </main>
  <?php include("./partials/footer.php"); ?>

  <script type="module" src="./assets/js/script.js"></script>
</body>
</html>