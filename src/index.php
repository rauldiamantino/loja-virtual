<!DOCTYPE html>
<html lang="pt-br">
  <?php include("./partials/head.php"); ?>
  
  <body>    
    <?php include("./partials/header.php"); ?>

    <main class="h-screen w-full bg-neutral-50 css-conteudo-principal">     
      <?php 
        $banner = [
          "id" => "home-banner-principal-1",
          "imagens" => [
            './assets/images/banner-principal/1.jpg', 
            './assets/images/banner-principal/2.jpg', 
            './assets/images/banner-principal/3.jpg'],
          ];
        
          include("./partials/banner-principal.php"); 
      ?>      
    </main>
    
    <?php include("./partials/footer.php"); ?>
    
    <script type="module" src="./assets/js/script.js"></script>
  </body>

</html>