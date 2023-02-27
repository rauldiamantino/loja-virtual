<!DOCTYPE html>
<html lang="pt-br">
<?php include("./partials/head.php"); ?>

<body>
  <?php include("./partials/header.php"); ?>
  <main class="xl:mx-auto xl:max-w-7xl py-2">
    <?php include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); ?>
  </main>
  <?php include("./partials/footer.php"); ?>
</body>
</html>