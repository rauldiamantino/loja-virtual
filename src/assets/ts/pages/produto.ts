// const $dadosProdutoObj:Object = document.querySelector(".css-pp-objeto").innerHTML

const carregarPrimeiraVariacao = () => {
  const $modalImagensVariacoes = document.querySelectorAll('.css-pp-tela-cheia')
  const $inputsPrimeiraVariacao:NodeList = document.querySelectorAll(".css-c2-prim-variacao input")
  const $imagensVariacao:any = document.querySelectorAll(".css-pp-caixa-1")
  const $primeiraVariacaoPadrao:any = $inputsPrimeiraVariacao[0]

  abrirFotoTelaCheia($imagensVariacao)
  carregaImgPadrao($imagensVariacao)
  definirSegundaVariacao($primeiraVariacaoPadrao)

  $inputsPrimeiraVariacao.forEach(($inputVariacao) => {
    $inputVariacao.addEventListener("click", () => { 
      definirSegundaVariacao($inputVariacao)
      enviaInputsComImagens($inputVariacao, $imagensVariacao)
    })
  })
}

const abrirFotoTelaCheia = ($imagensVariacao) => {
  $imagensVariacao.forEach($blocoImagens => {
    const $fotosProduto = $blocoImagens.querySelectorAll('img')
    
    $fotosProduto.forEach($foto => {

      $foto.addEventListener('click', () => {
        const $modalImagensVariacao:HTMLDialogElement = document.querySelector('.css-pp-tela-cheia')
        const $modalConteudo:HTMLElement = $modalImagensVariacao.querySelector('.css-tela-cheia-conteudo')

        $modalConteudo.innerHTML = `<img src='${$foto.src}' class='m-auto'>`
        $modalImagensVariacao.classList.remove('hidden')
        fecharFotoTelaCheia($modalImagensVariacao, $modalConteudo)
        pausarScrollFundo()
      })
    })
  })
}

const fecharFotoTelaCheia = ($modalImagensVariacao, $modalConteudo) => {
  cliqueFora($modalImagensVariacao, $modalConteudo)
  teclaEsc($modalImagensVariacao)
  cliqueBotaoFechar($modalImagensVariacao)
}

const cliqueFora = ($modalImagensVariacao, $modalConteudo) => {
  document.addEventListener('click', (event) => {
    const clicouFora:boolean = event.target == $modalConteudo

    if(clicouFora) fecharModal($modalImagensVariacao)
  })
}

const teclaEsc = ($modalImagensVariacao) => {
  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') fecharModal($modalImagensVariacao)
});
}

const cliqueBotaoFechar = ($modalImagensVariacao) => {
  const $btnFechar:HTMLInputElement = $modalImagensVariacao.querySelector('button')

  $btnFechar.addEventListener('click', () => fecharModal($modalImagensVariacao))
}

const fecharModal = ($modalImagensVariacao) => ($modalImagensVariacao.classList.add('hidden'), retornarScrollFundo())

const pausarScrollFundo = () => (document.documentElement.style.overflow = "hidden");

const retornarScrollFundo = () => (document.documentElement.style.overflow = "auto");

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

export { carregarPrimeiraVariacao }