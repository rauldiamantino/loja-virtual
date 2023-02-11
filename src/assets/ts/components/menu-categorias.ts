const menuCategorias = ($alvo:HTMLElement) => {
  const $menu:HTMLElement = document.querySelector('.sass-topo-menu')
  const $todasCategorias:NodeList = $menu.querySelectorAll('details')
  const $areaExterna:HTMLElement = document.querySelector('.sass-area-externa')
  const $btnAbrir:HTMLButtonElement = document.querySelector('.sass-btn-categorias')

  if ($alvo == $btnAbrir) {
    abrirMenuCategorias($menu, $areaExterna)
  }

  if ($alvo == $areaExterna) {
    fecharMenuCategorias($menu, $areaExterna)
  }

  $todasCategorias.forEach(($categoria:HTMLElement) => {
    fecharDemaisCategorias($alvo, $categoria, $todasCategorias)
  })
}

const abrirMenuCategorias = ($menu:HTMLElement, $areaExterna:HTMLElement) => {
  $areaExterna.classList.remove('hidden')
  $menu.classList.add('translate-x-[0%]')
  $menu.classList.remove('translate-x-[100%]')
}

const fecharMenuCategorias = ($menu:HTMLElement, $areaExterna:HTMLElement) => {
  $areaExterna.classList.add('hidden')
  $menu.classList.add('translate-x-[100%]')
  $menu.classList.remove('translate-x-[0%]')
}

const fecharDemaisCategorias = ($alvo:any, $categoria:HTMLElement, $todasCategorias:NodeList) => {
  const $alvoPai:HTMLElement = $alvo.parentNode

  if($alvoPai == $categoria) {
    $todasCategorias.forEach(($outraCategoria:HTMLElement) => {
      const $categoriaAtual = $outraCategoria == $alvoPai

      if (! $categoriaAtual) {
        fechaCategoria($outraCategoria)
      }
    })     
  }
}

const fechaCategoria = ($outraCategoria:HTMLElement) => {
  $outraCategoria.removeAttribute('open')
}

// $(function() {
//   $('details').on('mouseover focus', function() {
//     $(this).attr('open', true);
//   }).on('mouseout blur', function() {
//     $(this).attr('open', false);
//   })
// })




export { menuCategorias }