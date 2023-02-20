const bannerPrincipal = ($alvo:any) => {
  const $btnLeft:HTMLButtonElement = document.querySelector('.css-banner-principal-btn-left')
  const $btnRight:HTMLButtonElement = document.querySelector('.css-banner-principal-btn-right')
  const $carrosselClicado:HTMLElement = $alvo.target.closest('.css-banner-principal')
  const $clicouBtnLeft:Boolean = $alvo.target == $btnLeft
  const $clicouBtnRight:Boolean = $alvo.target == $btnRight    

  if($clicouBtnLeft) {
    console.log($carrosselClicado)
  }
  
  if($clicouBtnRight) {    
    console.log($carrosselClicado)
  }
}

export { bannerPrincipal }