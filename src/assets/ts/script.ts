import { menuPrincipal, fechaCategoriasDoMenu } from "./components/menu-principal.js"
import { bannerPrincipal } from "./components/banner-principal.js"

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


const $inputsPrimeiraVariacao:NodeList = document.querySelectorAll(".css-c2-variacao-1 input")
const $inputsSegundaVariacao:NodeList = document.querySelectorAll(".css-c2-variacao-2 input")


$inputsPrimeiraVariacao.forEach(($inputVariacao:any) => {
  $inputVariacao.addEventListener('click', () => {
    if($inputVariacao.checked == true) {
      console.log($inputVariacao.id)
    }
  })
})

$inputsSegundaVariacao.forEach(($inputVariacao:HTMLInputElement) => {
  
})