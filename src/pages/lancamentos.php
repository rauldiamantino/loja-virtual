<?php

  echo "<section class='lg:grid-cols-4 w-full grid grid-cols-2 gap-2 css-produtos'>";
  require('./assets/php/funcoes.php');
  
  addProdutoListagem("001");
  addProdutoListagem("002");
  addProdutoListagem("005"); # produto não existe.

  echo "</section>";

?>
