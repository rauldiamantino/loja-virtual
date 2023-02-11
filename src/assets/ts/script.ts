import { menuCategorias } from './components/menu-categorias.js'

const elementoClicado = () => {
  document.addEventListener('click', (element) => {
    const $alvo:MouseEvent = element
    
    menuCategorias($alvo)    
  })
}

elementoClicado()
