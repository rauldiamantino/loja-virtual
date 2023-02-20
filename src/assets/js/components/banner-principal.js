const bannerPrincipal = ($alvo) => {
    const $btnLeft = document.querySelector('.css-banner-principal-btn-left');
    const $btnRight = document.querySelector('.css-banner-principal-btn-right');
    const $carrosselClicado = $alvo.target.closest('.css-banner-principal');
    const $clicouBtnLeft = $alvo.target == $btnLeft;
    const $clicouBtnRight = $alvo.target == $btnRight;
    if ($clicouBtnLeft) {
        console.log($carrosselClicado);
    }
    if ($clicouBtnRight) {
        console.log($carrosselClicado);
    }
};
export { bannerPrincipal };
//# sourceMappingURL=banner-principal.js.map