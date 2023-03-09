<section class="w-full bg-neutral-100 css-topo-superior">
  <section class="xl:mx-auto xl:px-0 xl:max-w-7xl px-10 h-9 flex justify-end items-center text-sm text-neutral-500">
    <p class="pr-4 hover:text-black"><a href="/">Junte-se a nós</a></p>
    <span class="text-xs select-none">|</span>
    <p class="pl-4 hover:text-black"><a href="/">Entrar</a></p>
  </section>
</section>
<header class="sticky top-0 z-50 bg-white css-topo">
    <section class="xl:mx-auto xl:px-0 xl:max-w-7xl lg:p-0 lg:px-10 lg:flex lg:items-center grid grid-cols-2 justify-between pt-4 h-full css-topo-inferior">
      <span class="lg:pl-0 pl-4 flex justify-start items-center font-bold css-topo-logo"><a href="/">LOGO</a></span>

      <?php include("./partials/menu-principal.php")?>

      <section class="lg:pr-0 lg:absolute lg:top-1/2 lg:translate-y-[-50%] lg:right-20 lg:z-10 pr-4 flex justify-end items-center gap-6 css-topo-box-direita">
        <button class="lg:hidden w-8 h-8 cursor-pointer css-btn-categorias">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-full h-full pointer-events-none" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>
      </section>

      <section class="lg:flex lg:items-center lg:gap-5 col-span-2 css-topo-box-direita">
        <section class="lg:mt-0 mt-4 relative group css-topo-box-direita-pesquisar">
          <input type="search" name="input-pesquisar" id="input-pesquisar" placeholder="Buscar" class="lg:border-none lg:w-48 w-full border border-neutral-300 py-2 pl-10 bg-neutral-100 group-hover:bg-neutral-400/30 text-sm font-light font-black lg:rounded-full">
          <div class="p-2 absolute top-1/2 translate-y-[-50%] left-1 hover:bg-neutral-100 rounded-full cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
          </div>
        </section>
        <section class="lg:static lg:translate-y-0 absolute top-1/2 right-16 translate-y-[-110%] css-topo-box-direita-carrinho">
            <a href="#" class="leading-0">
              <div class="lg:hover:bg-neutral-400/30 p-1.5 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                </svg>
              </div>
            </a>
        </section>
      </section>
    </section>
    <section class="lg:hidden w-full h-screen hidden fixed top-0 left-0 z-40 bg-black/80 css-area-externa"></section>
</header>