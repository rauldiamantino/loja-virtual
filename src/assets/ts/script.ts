import { menuPrincipal, fechaCategoriasDoMenu } from "./components/menu-principal.js"
import { bannerPrincipal } from "./components/banner-principal.js"

const elementoClicado = () => {
  document.addEventListener('click', (event) => {
    const $alvo:any = event
    
    menuPrincipal($alvo)
    bannerPrincipal($alvo)
  })
}

const navegadorRedimensionado = () => {
  window.addEventListener('resize', () => fechaCategoriasDoMenu())
}

elementoClicado()
navegadorRedimensionado()


