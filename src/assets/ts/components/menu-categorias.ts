const menuCategorias = ($alvo:MouseEvent) => {
  const $btnAbrir:HTMLButtonElement = document.querySelector('.sass-btn-categorias')  
  const $menu:HTMLElement = document.querySelector('.sass-topo-menu')
  const $areaExterna:HTMLElement = document.querySelector('.sass-area-externa')

  if ($alvo.target == $btnAbrir) {
    abrirMenuCategorias($menu, $areaExterna)
  }

  if ($alvo.target == $areaExterna) {
    fecharMenuCategorias($menu, $areaExterna)
  }
}

const abrirMenuCategorias = ($menu:HTMLElement, $areaExterna:HTMLElement) => {
  $menu.classList.remove('translate-x-[100%]')
  $menu.classList.add('translate-x-[0%]')
  $areaExterna.classList.remove('hidden')
}

const fecharMenuCategorias = ($menu:HTMLElement, $areaExterna:HTMLElement) => {
  $menu.classList.add('translate-x-[100%]')
  $menu.classList.remove('translate-x-[0%]')
  $areaExterna.classList.add('hidden')
}

export { menuCategorias }