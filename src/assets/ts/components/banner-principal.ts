const bannerPrincipal = () => {
  const $botoes:NodeList = document.querySelectorAll('.css-banner-principal-botoes button')

  $botoes.forEach(($botao:HTMLButtonElement) => {
    const $btnEsqClicado:boolean = $botao.classList.contains('css-banner-principal-btn-esq')    
    const $carrossel:HTMLElement = $botao.closest('.css-banner-principal')
    const $bannersCarrossel:HTMLElement = $carrossel.querySelector('.css-banner-principal-imagens')
    const $totalBanners:number = $bannersCarrossel.querySelectorAll('img').length

    $botao.addEventListener('click', () => {
      let contador:any = $bannersCarrossel.id

      if ($btnEsqClicado) {
        rolarEsquerda(contador, $totalBanners, $bannersCarrossel) 
      } else {
        rolarDireita(contador, $totalBanners, $bannersCarrossel)
      }
    })
  })
}

const rolarEsquerda = (contador:number, $totalBanners:number, $bannersCarrossel:any) => {
  const finalContagem:boolean = contador <= 0
  const zerarContagem:number = $totalBanners -1
  const diminuirContagem:number = contador--

  finalContagem ? contador = zerarContagem : diminuirContagem 
  rotacionarBanner($bannersCarrossel, contador)
  gravarContadorNoId($bannersCarrossel, contador)
}

const rolarDireita = (contador:number, $totalBanners:number, $bannersCarrossel:any) => {
  const finalContagem:boolean = contador >= $totalBanners - 1
  const zerarContagem:number = 0
  const aumentarContagem:number = contador++

  finalContagem ? contador = zerarContagem : aumentarContagem
  rotacionarBanner($bannersCarrossel, contador)
  gravarContadorNoId($bannersCarrossel, contador)
}

const gravarContadorNoId = ($bannersCarrossel:any, contador:number) => {
  $bannersCarrossel.id = contador
}

const rotacionarBanner = ($bannersCarrossel:HTMLElement, contador:number) => {
  $bannersCarrossel.style.transform = `translateX(${contador * -100}%)`
}

export { bannerPrincipal }