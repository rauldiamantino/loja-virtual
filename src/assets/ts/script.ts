import { menuPrincipal } from './components/menu-categorias.js'

const elementoClicado = () => {
  document.addEventListener('click', (element) => {
    const $alvo:any = element.target
    
    menuPrincipal($alvo)    
  })
}

elementoClicado()
