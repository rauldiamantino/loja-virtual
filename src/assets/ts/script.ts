import { menuPrincipal, fechaCategoriasDoMenu } from "./components/menu-principal.js"
import { bannerPrincipal } from "./components/banner-principal.js"
import { selecionarPrimeiraVariacao } from "./pages/produto.js"

const elementoClicado = () => {
  document.addEventListener('click', (event) => {
    const $alvo:any = event
    
    menuPrincipal($alvo)
  })
}

const navegadorRedimensionado = () => {
  window.addEventListener('resize', () => fechaCategoriasDoMenu())
}

elementoClicado()
bannerPrincipal()
navegadorRedimensionado()
selecionarPrimeiraVariacao()