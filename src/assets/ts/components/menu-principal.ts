const menuPrincipal = ($alvo:any) => {  
  const $menuPrincipal:HTMLElement = document.querySelector('.css-topo-menu-principal')
  const $areaExterna:HTMLElement = document.querySelector('.css-area-externa')
  const $btnAbrir:HTMLButtonElement = document.querySelector('.css-btn-categorias')
  const $clicouBtnAbrir:Boolean = $alvo.target == $btnAbrir
  const $clicouAreaExterna:Boolean = $alvo.target == $areaExterna

  if ($clicouBtnAbrir) {
    abrirMenuPrincipal($menuPrincipal, $areaExterna)
  }

  if ($clicouAreaExterna) {
    fecharMenuPrincipal($menuPrincipal, $areaExterna)
  }
}

const abrirMenuPrincipal = ($menuPrincipal:HTMLElement, $areaExterna:HTMLElement) => {
  $menuPrincipal.classList.remove('translate-x-[100%]')
  $areaExterna.classList.remove('hidden')
}

const fecharMenuPrincipal = ($menuPrincipal:HTMLElement, $areaExterna:HTMLElement) => {
  $menuPrincipal.classList.add('translate-x-[100%]')
  $areaExterna.classList.add('hidden')
}

const fechaCategoriasDoMenu = () => {
  const $categorias:NodeList = document.querySelectorAll('.css-categoria-input')
  
    $categorias.forEach(($categoria:HTMLInputElement) => {
      $categoria.checked = false
    })
}

export { menuPrincipal, fechaCategoriasDoMenu }