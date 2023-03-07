// const $dadosProdutoObj:Object = document.querySelector(".css-pp-objeto").innerHTML
const $inputsPrimeiraVariacao:NodeList = document.querySelectorAll(".css-c2-prim-variacao input")
const $segundaVariacao:NodeList = document.querySelectorAll(".css-c2-variacoes")

const selecionarPrimeiraVariacao = () => {
  const $primeiraVariacaoPadrao:any = $inputsPrimeiraVariacao[0]

  definirSegundaVariacao($primeiraVariacaoPadrao)

  $inputsPrimeiraVariacao.forEach(($inputVariacao) => {
    $inputVariacao.addEventListener("click", () => { 
      definirSegundaVariacao($inputVariacao)
    })
  })
}

const definirSegundaVariacao = ($primeiraVariacao) => {

  $segundaVariacao.forEach(($variacao:HTMLElement )=> {
    const $nomePrimeiraVariacao:string = $primeiraVariacao.id
    const $nomeSegundaVariacao:string = $variacao.dataset.primeiraVariacao

    selecionaSegundaVariacao($nomePrimeiraVariacao, $nomeSegundaVariacao, $variacao)
  })
}

const selecionaSegundaVariacao = ($nomePrimeiraVariacao, $nomeSegundaVariacao, $variacao) => {
  const idPrimeiraVariacao:string = `#${$nomePrimeiraVariacao}`
  const $primeiraVariacao:HTMLElement = document.querySelector(idPrimeiraVariacao)

  if($nomePrimeiraVariacao == $nomeSegundaVariacao) {
    $variacao.classList.remove("hidden")
    $primeiraVariacao.setAttribute("checked", "true")
  }else {
    $variacao.classList.add("hidden")
  }
}

export { selecionarPrimeiraVariacao }