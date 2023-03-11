<?php

  echo "<!DOCTYPE html>
        <html lang='pt-br'>";
  
  require('./assets/php/funcoes.php');
  include("./partials/head.php");

  echo "<body>";
  
  include("./partials/header.php");

  echo "<main class='h-full w-full css-conteudo-principal'>";
  
  $banner = [
    "imagens" => [
      './assets/images/banner-principal/1.jpg',
      './assets/images/banner-principal/2.jpg',
      './assets/images/banner-principal/4.jpg'
    ],
  ];

  include("./partials/banner-principal.php");
  

  echo "<section class='xl:mx-auto xl:max-w-7xl py-4 '>
          <section class='lg:grid-cols-4 w-full grid grid-cols-2 gap-4 css-produtos'>";
  
  addProdutoListagem("001");
  addProdutoListagem("002");
  addProdutoListagem("003");
  addProdutoListagem("004");

  echo "</section>
      </section>";

  echo "</main>";

  include("./partials/footer.php"); 

  echo "<script type='module' src='./assets/js/script.js'></script>
      </body>
    </html>";
?>