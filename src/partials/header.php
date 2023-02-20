<?php ?>
<header class="sticky top-0 z-50 bg-white css-topo">
    <section class="px-10 w-full h-9 flex justify-end items-center text-sm bg-neutral-100 text-neutral-500 css-topo-superior">
      <p class="pr-4 hover:text-black"><a href="#">Junte-se a nós</a></p>
      <span class="text-xs select-none">|</span>      
      <p class="pl-4 hover:text-black"><a href="#">Entrar</a></p>
    </section>
    <section class="lg:p-0 lg:px-10 lg:flex lg:items-center grid grid-cols-2 justify-between pt-4 h-full relative css-topo-inferior">
      <span class="lg:pl-0 pl-4 flex justify-start items-center font-bold css-topo-logo">LOGO</span>
      <nav class="lg:p-0 lg:static lg:divide-none lg:transform-none lg:transition-none lg:flex-row lg:h-min lg:w-min  lg:overflow-hidden lg:gap-0 divide-y divide-neutral-200 p-6 w-8/12 h-screen fixed top-0 right-0 z-50 transform translate-x-[100%] transition duration-150 flex flex-col gap-2 overflow-y-auto bg-white css-topo-menu-principal">
        <ul class="lg:flex group css-topo-menu-principal css-categoria">

          <input type="checkbox" id="cat-lancamentos" class="hidden peer css-categoria-input">
          <label for="cat-lancamentos" class="lg:hidden peer-checked:hidden css-categoria-titulo-antes">
            <div class="lg:py-4 p-2 css-categoria-titulo-antes-texto">Lançamentos</div>
          </label>

          <div class="lg:border-b lg:border-transparent lg:p-0 lg:group-hover:border-black lg:flex peer-checked:block hidden p-2 lg:font-light font-bold text-black css-categoria-titulo-depois"><a href="" class="lg:p-4 css-categoria-titulo-depois-texto">Lançamentos</a></div>

          <section class="lg:pt-2 lg:pb-10 lg:absolute lg:top-full lg:left-0 lg:right-0 lg:group-hover:block lg:w-full bg-white hidden peer-checked:block css-categoria-todas">
            <section class="lg:mx-auto lg:grid lg:grid-cols-4 lg:justify-center lg:gap-7 lg:w-4/5 lg:bg-white">
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Masculino</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Calçados</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Roupas</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Acessórios</a></li>
                </ul>
              </li>
              <li class="text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Feminino</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Calçados</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Roupas</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Acessórios</a></li>
                </ul>
              </li>
              <li class="text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Infantil</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Calçados</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Roupas</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Acessórios</a></li>
                </ul>
              </li>
            </section>
          </section>
        </ul>

        <ul class="lg:flex group css-topo-menu-principal css-categoria">

          <input type="checkbox" id="cat-mulheres" class="hidden peer css-categoria-input">
          <label for="cat-mulheres" class="lg:hidden peer-checked:hidden css-categoria-titulo-antes">
            <div class="lg:py-4 p-2 css-categoria-titulo-antes-texto">Mulheres</div>
          </label>

          <div class="lg:border-b lg:border-transparent lg:p-0 lg:group-hover:border-black lg:flex peer-checked:block hidden p-2 lg:font-light font-bold text-black css-categoria-titulo-depois"><a href="" class="lg:p-4 css-categoria-titulo-depois-texto">Mulheres</a></div>

          <section class="lg:pt-2 lg:pb-10 lg:absolute lg:top-full lg:left-0 lg:right-0 lg:group-hover:block lg:w-full bg-white hidden peer-checked:block css-categoria-todas">
            <section class="lg:mx-auto lg:grid lg:grid-cols-4 lg:justify-center lg:gap-7 lg:w-4/5 lg:bg-white">
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Calçados</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Tênis</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Tênis para Corrida</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Tênis para Academia</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Tênis de Basquete</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Chinelos</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Chuteiras</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Roupas</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Moletons</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Calças e Leggings</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Camisetas e Regatas</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Jaquetas e Agasalhos</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Shorts</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Tops</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Vestidos e Saias</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Camisas de Times</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Meias</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Acessórios</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Bolsas e Mochilas</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Bonés</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Bolas de Futebol</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Outros</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Esportes</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Academia</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Treino iniciantes</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Corrida</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Corrida Iniciantes</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Futebol</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Basquete</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Yoga</a></li>
                </ul>
              </li>
            </section>
          </section>
        </ul>

        <ul class="lg:flex group css-topo-menu-principal css-categoria">

          <input type="checkbox" id="cat-homens" class="hidden peer css-categoria-input">
          <label for="cat-homens" class="lg:hidden peer-checked:hidden css-categoria-titulo-antes">
            <div class="lg:py-4 p-2 css-categoria-titulo-antes-texto">Homens</div>
          </label>

          <div class="lg:border-b lg:border-transparent lg:p-0 lg:group-hover:border-black lg:flex peer-checked:block hidden p-2 lg:font-light font-bold text-black css-categoria-titulo-depois"><a href="" class="lg:p-4 css-categoria-titulo-depois-texto">Homens</a></div>

          <section class="lg:pt-2 lg:pb-10 lg:absolute lg:top-full lg:left-0 lg:right-0 lg:group-hover:block lg:w-full bg-white hidden peer-checked:block css-categoria-todas">
            <section class="lg:mx-auto lg:grid lg:grid-cols-4 lg:justify-center lg:gap-7 lg:w-4/5 lg:bg-white">
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Calçados</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Tênis</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Tênis para Corrida</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Tênis para Academia</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Motorsport</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Tênis de Basquete</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Chinelos</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Chuteiras</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Roupas</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Camisetas e Regatas</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Moletons</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Jaquetas e Agasalhos</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Camisas de Times</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Shorts</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Calças</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Conjuntos</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Meias</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Acessórios</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Bolsas e Mochilas</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Bonés</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Bolas de Futebol</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Outros</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Esportes</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Futebol</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Corrida</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Academia</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Motorsport</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Basquete</a></li>
                </ul>
              </li>
            </section>
          </section>
        </ul>

        <ul class="lg:flex group css-topo-menu-principal css-categoria">

          <input type="checkbox" id="cat-infantil" class="hidden peer css-categoria-input">
          <label for="cat-infantil" class="lg:hidden peer-checked:hidden css-categoria-titulo-antes">
            <div class="lg:py-4 p-2 css-categoria-titulo-antes-texto">Infantil</div>
          </label>

          <div class="lg:border-b lg:border-transparent lg:p-0 lg:group-hover:border-black lg:flex peer-checked:block hidden p-2 lg:font-light font-bold text-black css-categoria-titulo-depois"><a href="" class="lg:p-4 css-categoria-titulo-depois-texto">Infantil</a></div>

          <section class="lg:pt-2 lg:pb-10 lg:absolute lg:top-full lg:left-0 lg:right-0 lg:group-hover:block lg:w-full bg-white hidden peer-checked:block css-categoria-todas">
            <section class="lg:mx-auto lg:grid lg:grid-cols-4 lg:justify-center lg:gap-7 lg:w-4/5 lg:bg-white">
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Categoria</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Calçados</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Roupas</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Acessórios</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Compre por Idade</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Bebês - 0 a 4 anos</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Crianças - 5 a 7 anos</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Juvenil - 8 a 16 anos</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Acessórios</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Bolsas e Mochilas</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Bonés</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Bolas de Futebol</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Outros</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Esportes</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Academia</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Treino iniciantes</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Corrida</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Corrida Iniciantes</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Futebol</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Basquete</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Yoga</a></li>
                </ul>
              </li>
            </section>
          </section>
        </ul>

        <ul class="lg:flex group css-topo-menu-principal css-categoria">

          <input type="checkbox" id="cat-esportes" class="hidden peer css-categoria-input">
          <label for="cat-esportes" class="lg:hidden peer-checked:hidden css-categoria-titulo-antes">
            <div class="lg:py-4 p-2 css-categoria-titulo-antes-texto">Esportes</div>
          </label>

          <div class="lg:border-b lg:border-transparent lg:p-0 lg:group-hover:border-black lg:flex peer-checked:block hidden p-2 lg:font-light font-bold text-black css-categoria-titulo-depois"><a href="" class="lg:p-4 css-categoria-titulo-depois-texto">Esportes</a></div>

          <section class="lg:pt-2 lg:pb-10 lg:absolute lg:top-full lg:left-0 lg:right-0 lg:group-hover:block lg:w-full bg-white hidden peer-checked:block css-categoria-todas">
            <section class="lg:mx-auto lg:grid lg:grid-cols-4 lg:justify-center lg:gap-7 lg:w-4/5 lg:bg-white">
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Futebol</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Palmeiras</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Coleção Neymar</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Chuteiras</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Clubes</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Manchester City</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Seleções</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Performance</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Corrida</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Treino Iniciantes</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Acedemia</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Yoga</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Nitro</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Motorsport</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">BMW Motorsport</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Mercedes AMG Petronas</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Scuderia Ferrari</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Red Bull Racing</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Basquete</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Tênis de Basquete</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Roupas de Basquete</a></li>
                </ul>
              </li>
            </section>
          </section>
        </ul>

        <ul class="lg:flex group css-topo-menu-principal css-categoria">

          <input type="checkbox" id="cat-colecoes" class="hidden peer css-categoria-input">
          <label for="cat-colecoes" class="lg:hidden peer-checked:hidden css-categoria-titulo-antes">
            <div class="lg:py-4 p-2 css-categoria-titulo-antes-texto">Coleções</div>
          </label>

          <div class="lg:border-b lg:border-transparent lg:p-0 lg:group-hover:border-black lg:flex peer-checked:block hidden p-2 lg:font-light font-bold text-black css-categoria-titulo-depois"><a href="" class="lg:p-4 css-categoria-titulo-depois-texto">Coleções</a></div>

          <section class="lg:pt-2 lg:pb-10 lg:absolute lg:top-full lg:left-0 lg:right-0 lg:group-hover:block lg:w-full bg-white hidden peer-checked:block css-categoria-todas">
            <section class="lg:mx-auto lg:grid lg:grid-cols-4 lg:justify-center lg:gap-7 lg:w-4/5 lg:bg-white">
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Coleções</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Clássicos</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Suede</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">RS-Collection</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Mayze</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Slipstream</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Cali</a></li>
                </ul>
              </li>
            </section>
          </section>
        </ul>

        <ul class="lg:flex group css-topo-menu-principal css-categoria">

          <input type="checkbox" id="cat-outlet" class="hidden peer css-categoria-input">
          <label for="cat-outlet" class="lg:hidden peer-checked:hidden css-categoria-titulo-antes">
            <div class="lg:py-4 p-2 css-categoria-titulo-antes-texto">Outlet</div>
          </label>

          <div class="lg:border-b lg:border-transparent lg:p-0 lg:group-hover:border-black lg:flex peer-checked:block hidden p-2 lg:font-light font-bold text-black css-categoria-titulo-depois"><a href="" class="lg:p-4 css-categoria-titulo-depois-texto">Outlet</a></div>

          <section class="lg:pt-2 lg:pb-10 lg:absolute lg:top-full lg:left-0 lg:right-0 lg:group-hover:block lg:w-full bg-white hidden peer-checked:block css-categoria-todas">
            <section class="lg:mx-auto lg:grid lg:grid-cols-4 lg:justify-center lg:gap-7 lg:w-4/5 lg:bg-white">
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Mulheres</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Calçados</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Roupas</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Acessórios</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Homens</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Calçados</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Roupas</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Acessórios</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Infantil</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Calçados</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Roupas</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Acessórios</a></li>
                </ul>
              </li>
              <li class="lg:text-left text-neutral-500 css-categoria-subcategoria-n1">
                <div class="lg:pl-0 lg:border-b lg:border-neutral-200 p-2 pt-3 hover:text-black css-categoria-subcategoria-n1-texto"><a href="">Esportes</a></div>
                <ul class="lg:list-none text-left list-disc css-categoria-subcategoria-n2">
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Academia</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Treino iniciantes</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Corrida</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Corrida Iniciantes</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Futebol</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Basquete</a></li>
                  <li class="lg:m-0 ml-7 hover:text-black css-categoria-subcategoria-n2-texto"><a href="">Yoga</a></li>
                </ul>
              </li>
            </section>
          </section>
        </ul>
      </nav>    

      <section class="lg:pr-0 lg:absolute lg:top-1/2 lg:translate-y-[-50%] lg:right-20 lg:z-10 pr-4 flex justify-end items-center gap-6 css-topo-box-direita">                
        <button class="lg:hidden w-8 h-8 cursor-pointer css-btn-categorias">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-full h-full pointer-events-none" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>
      </section>

      <section class="lg:mt-0 mt-4 relative col-span-2 group css-topo-box-direita-pesquisar">
        <input type="search" name="input-pesquisar" id="input-pesquisar" placeholder="Buscar" class="lg:w-48 w-full border border-neutral-300 py-2 pl-10 group-hover:bg-neutral-50/30 text-sm lg:rounded-full">
        <div class="p-2 absolute top-1/2 translate-y-[-50%] left-1 hover:bg-neutral-200 rounded-full cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
          </svg>
        </div>
      </section>
    </section>
    <section class="lg:hidden w-full h-screen hidden fixed top-0 left-0 z-40 bg-black/80 css-area-externa"></section>
  </header>