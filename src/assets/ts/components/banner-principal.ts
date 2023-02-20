const bannerPrincipal = ($alvo:any) => {
  const $btnLeft:HTMLButtonElement = document.querySelector('.css-banner-principal-btn-left')
  const $btnRight:HTMLButtonElement = document.querySelector('.css-banner-principal-btn-right')
  const $clicouBtnLeft:Boolean = $alvo.target == $btnLeft
  const $clicouBtnRight:Boolean = $alvo.target == $btnRight
  const $carrosselClicado:HTMLElement = $alvo.target.closest('.css-banner-principal')
  const $imagens:HTMLElement = $carrosselClicado.querySelector('.css-banner-principal-imagens')   
  const $contadorMaximo:number = $imagens.querySelectorAll('img').length 
  let contador:any = $imagens.id

  if($clicouBtnLeft) {    
    $imagens.style.transform = `translateX(${diminuirContador(contador, $contadorMaximo, $imagens) * -100}%)`
  }
  
  if($clicouBtnRight) {    
    $imagens.style.transform = `translateX(${aumentarContador(contador, $contadorMaximo, $imagens) * -100}%)`
  }
}

const diminuirContador = (contador:number, $contadorMaximo:number, $imagens:any) => {
  const chegouAoFim = contador <= 0
  const zeraContador = $contadorMaximo - 1
  const continuaContagem = contador--
  
  chegouAoFim ? contador = zeraContador : continuaContagem
  $imagens.id = contador

  return $imagens.id
}

const aumentarContador = (contador:number, $contadorMaximo:number, $imagens:any) => {
  const chegouAoFim = contador >= $contadorMaximo - 1
  const zeraContador = contador = 0
  const continuaContagem = contador--
  
  chegouAoFim ? zeraContador : continuaContagem
  $imagens.id = contador

  return $imagens.id
}

export { bannerPrincipal }