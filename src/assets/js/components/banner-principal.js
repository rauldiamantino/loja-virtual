const bannerPrincipal = ($alvo) => {
    const $btnLeft = document.querySelector('.css-banner-principal-btn-left');
    const $btnRight = document.querySelector('.css-banner-principal-btn-right');
    const $clicouBtnLeft = $alvo.target == $btnLeft;
    const $clicouBtnRight = $alvo.target == $btnRight;
    const $carrosselClicado = $alvo.target.closest('.css-banner-principal');
    const $imagens = $carrosselClicado.querySelector('.css-banner-principal-imagens');
    const $contadorMaximo = $imagens.querySelectorAll('img').length;
    let contador = $imagens.id;
    if ($clicouBtnLeft) {
        $imagens.style.transform = `translateX(${diminuirContador(contador, $contadorMaximo, $imagens) * -100}%)`;
    }
    if ($clicouBtnRight) {
        $imagens.style.transform = `translateX(${aumentarContador(contador, $contadorMaximo, $imagens) * -100}%)`;
    }
};
const diminuirContador = (contador, $contadorMaximo, $imagens) => {
    const chegouAoFim = contador <= 0;
    const zeraContador = $contadorMaximo - 1;
    const continuaContagem = contador--;
    chegouAoFim ? contador = zeraContador : continuaContagem;
    $imagens.id = contador;
    return $imagens.id;
};
const aumentarContador = (contador, $contadorMaximo, $imagens) => {
    const chegouAoFim = contador >= $contadorMaximo - 1;
    const zeraContador = contador = 0;
    const continuaContagem = contador--;
    chegouAoFim ? zeraContador : continuaContagem;
    $imagens.id = contador;
    return $imagens.id;
};
export { bannerPrincipal };
//# sourceMappingURL=banner-principal.js.map