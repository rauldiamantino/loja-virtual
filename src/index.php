<?php

  echo "<!DOCTYPE html>
        <html lang='pt-br'>";
  
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

  echo "</main>";

  include("./partials/footer.php"); 

  echo "<script type='module' src='./assets/js/script.js'></script>
      </body>
    </html>";
?>