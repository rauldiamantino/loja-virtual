// const $dadosProdutoObj:Object = document.querySelector(".css-pp-objeto").innerHTML
const selecionarPrimeiraVariacao = () => {
  const $inputsPrimeiraVariacao:NodeList = document.querySelectorAll(".css-c2-prim-variacao input")
  const $imagensVariacao:any = document.querySelectorAll(".css-pp-caixa-1")
  const $primeiraVariacaoPadrao:any = $inputsPrimeiraVariacao[0]

  carregaImgPadrao($imagensVariacao)
  definirSegundaVariacao($primeiraVariacaoPadrao)

  $inputsPrimeiraVariacao.forEach(($inputVariacao) => {
    $inputVariacao.addEventListener("click", () => { 
      definirSegundaVariacao($inputVariacao)
      enviaInputsComImagens($inputVariacao, $imagensVariacao)
    })
  })
}

const enviaInputsComImagens = ($inputVariacao, $imagensVariacao) => {
  const $nomePrimeiraVariacao:string = ($inputVariacao as any).nextElementSibling.innerText
  const idVar:string = '#'+$nomePrimeiraVariacao

  if(document.querySelector(idVar)) definirImgCliqueVariacao($inputVariacao, $imagensVariacao)
}

const definirSegundaVariacao = ($primeiraVariacao) => {
  const $segundaVariacao:NodeList = document.querySelectorAll(".css-c2-variacoes")

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

const definirImgCliqueVariacao = ($inputVariacao, $imagensVariacoes) => {
  const $nomePrimeiraVariacao:any = $inputVariacao.nextElementSibling.innerText
 
  $imagensVariacoes.forEach($imagemVariacao => {
    const $nomeImagens:string = $imagemVariacao.id

    $nomePrimeiraVariacao == $nomeImagens ? $imagemVariacao.classList.remove("hidden") : escondeImagens($imagemVariacao)
  })
}

const escondeImagens = ($imagem) => $imagem.classList.add("hidden")

const carregaImgPadrao = ($imagensVariacao) => $imagensVariacao[0].classList.remove("hidden")

export { selecionarPrimeiraVariacao }