import { menuPrincipal } from "./components/menu-principal.js"

const elementoClicado = () => {
  document.addEventListener('click', (event) => {
    const $alvo:any = event

    menuPrincipal($alvo)
  })
}

elementoClicado()


