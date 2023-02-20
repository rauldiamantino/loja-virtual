const bannerPrincipal = ($alvo) => {
    const $btnLeft = document.querySelector('.css-banner-principal-btn-left');
    const $btnRight = document.querySelector('.css-banner-principal-btn-right');
    const $clicouBtnLeft = $alvo.target == $btnLeft;
    const $clicouBtnRight = $alvo.target == $btnRight;
    const $carrosselClicado = $alvo.target.closest('.css-banner-principal');
    const $imagens = $carrosselClicado.querySelector('.css-banner-principal-imagens');
    const $qtdeImagens = $imagens.querySelectorAll('img');
    let contador = $imagens.id;
    if ($clicouBtnLeft) {
        diminuirContador(contador, $imagens);
        $imagens.style.transform = `translateX(${contador * -100}%)`;
    }
    if ($clicouBtnRight) {
        aumentarContador(contador, $imagens);
        $imagens.style.transform = `translateX(${contador * -100}%)`;
    }
};
const aumentarContador = (contador, $imagens) => {
    const $contadorMaximo = $imagens.querySelectorAll('img').length;
    contador = $imagens.id;
    if (contador >= $contadorMaximo - 1) {
        contador = 0;
    }
    else {
        contador++;
    }
    $imagens.id = contador;
};
const diminuirContador = (contador, $imagens) => {
    const $contadorMaximo = $imagens.querySelectorAll('img').length;
    contador = $imagens.id;
    if (contador <= 0) {
        contador = $contadorMaximo - 1;
    }
    else {
        contador--;
    }
    $imagens.id = contador;
};
export { bannerPrincipal };
//# sourceMappingURL=banner-principal.js.map