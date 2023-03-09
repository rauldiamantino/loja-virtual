<?php
  echo "<!DOCTYPE html>
        <html lang='pt-br'>";

  include("./partials/head.php");

  echo "<body>";
  
  include("./partials/header.php");
  
  echo "<main class='xl:mx-auto xl:max-w-7xl py-2'>";

  include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");

  echo "</main>";

  include("./partials/footer.php");

  echo "<script type='module' src='./assets/js/script.js'></script>
      </body>
    </html>";
?>