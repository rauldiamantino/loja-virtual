<section id=<?= $banner["id"] ?> class="relative w-full h-min css-banner-principal">
  <section class="text-black/30 cursor-pointer css-banner-principal-botoes">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-10 h-10 hover:text-black/70 absolute top-1/2 left-2 translate-y-[-50%] z-10 css-banner-principal-btn-left" viewBox="0 0 16 16">
      <path class="pointer-events-none" d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg>
  
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-10 h-10 hover:text-black/70 absolute top-1/2 right-2 translate-y-[-50%] z-10 css-banner-principal-btn-right" viewBox="0 0 16 16">
    <path class="pointer-events-none" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
    </svg>
  </section>

  <section class="w-full h-max overflow-x-clip">
    <section class="lg:h-max flex h-96 css-banner-principal-imagens" id="1">
      <?php
        foreach($banner["imagens"] as $imagem){
          echo "<img src=$imagem class='object-cover'>";
        }
      ?>
    </section>
  </section>
</section>