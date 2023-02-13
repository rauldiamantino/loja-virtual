const menuCategorias = ($alvo:HTMLElement) => {
  const $menu:HTMLElement = document.querySelector('.sass-topo-menu')
  const $todasCategorias:NodeList = $menu.querySelectorAll('details')
  const $areaExterna:HTMLElement = document.querySelector('.sass-area-externa')  
  const $btnAbrir:HTMLButtonElement = document.querySelector('.sass-btn-categorias')
  const clicouBtnAbrir:Boolean = $alvo == $btnAbrir
  const clicouAreaExterna:Boolean = $alvo == $areaExterna

  if (clicouBtnAbrir) {
    abreMenuCategorias($menu, $areaExterna)
  }
  
  if (clicouAreaExterna) {
    fechaMenuCategorias($menu, $areaExterna)
  }      
  
  $todasCategorias.forEach(($categoria:HTMLElement) => {
    fechaDemaisCategorias($alvo, $categoria, $todasCategorias)      
    fechaCategCliqueExterno($alvo, $todasCategorias)  
  })

}

const abreMenuCategorias = ($menu:HTMLElement, $areaExterna:HTMLElement) => {
  $areaExterna.classList.remove('hidden')
  $menu.classList.add('translate-x-[0%]')
  $menu.classList.remove('translate-x-[100%]')
}

const fechaMenuCategorias = ($menu:HTMLElement, $areaExterna:HTMLElement) => {
  $areaExterna.classList.add('hidden')
  $menu.classList.add('translate-x-[100%]')
  $menu.classList.remove('translate-x-[0%]')
}

const fechaDemaisCategorias = ($alvo:any, $categoria:HTMLElement, $todasCategorias:NodeList) => {  
  const alvoIgualCategoria:Boolean = $alvo.parentNode == $categoria

  if(alvoIgualCategoria) {
    $todasCategorias.forEach(($categoria:HTMLElement) => {
      const alvoDiferenteCategoria:Boolean = $alvo.parentNode !== $categoria
      
      if (alvoDiferenteCategoria) {
        fechaCategoria($categoria)
      }
    })
  }
}

const fechaCategCliqueExterno = ($alvo:HTMLElement, $todasCategorias:NodeList) => {  
  const clicouForaCategoria = $alvo.tagName !== 'SUMMARY'

  if (clicouForaCategoria) {
    $todasCategorias.forEach(($categoria:HTMLElement) => {      
      fechaCategoria($categoria)                  
    })                 
  } 
}

const fechaCategoria = ($categoria:HTMLElement) => {
  $categoria.removeAttribute('open')
}

// $(function() {
//   $('details').on('mouseover focus', function() {
//     $(this).attr('open', true);
//   }).on('mouseout blur', function() {
//     $(this).attr('open', false);
//   })
// })

export { menuCategorias }