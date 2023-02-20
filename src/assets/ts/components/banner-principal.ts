const bannerPrincipal = ($alvo:any) => {
  const $btnLeft:HTMLButtonElement = document.querySelector('.css-banner-principal-btn-left')
  const $btnRight:HTMLButtonElement = document.querySelector('.css-banner-principal-btn-right')
  const $clicouBtnLeft:Boolean = $alvo.target == $btnLeft
  const $clicouBtnRight:Boolean = $alvo.target == $btnRight
  const $carrosselClicado:HTMLElement = $alvo.target.closest('.css-banner-principal')
  const $imagens:HTMLElement = $carrosselClicado.querySelector('.css-banner-principal-imagens')  
  const $qtdeImagens:NodeList = $imagens.querySelectorAll('img')
  let contador:any = $imagens.id

  if($clicouBtnLeft) {
    diminuirContador(contador, $imagens)
    $imagens.style.transform = `translateX(${contador * -100}%)`
  }
  
  if($clicouBtnRight) {
    aumentarContador(contador, $imagens)
    $imagens.style.transform = `translateX(${contador * -100}%)`
  }
}

const aumentarContador = (contador:number, $imagens:any) => {
  const $contadorMaximo:number = $imagens.querySelectorAll('img').length

  contador = $imagens.id

  if(contador >= $contadorMaximo - 1) {
    contador = 0
  } else {
    contador++
  }

  $imagens.id = contador
}

const diminuirContador = (contador:number, $imagens:any) => {
  const $contadorMaximo:number = $imagens.querySelectorAll('img').length
  
  contador = $imagens.id
  
  if(contador <= 0) {
    contador = $contadorMaximo - 1
  } else {
    contador--
  }

  $imagens.id = contador
}

export { bannerPrincipal }