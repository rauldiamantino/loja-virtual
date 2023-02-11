import { menuCategorias } from './components/menu-categorias.js'

const elementoClicado = () => {
  document.addEventListener('click', (element) => {
    const $alvo:any = element.target
    
    menuCategorias($alvo)    
  })
}

elementoClicado()
