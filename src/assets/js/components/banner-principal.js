const bannerPrincipal = () => {
    const $botoes = document.querySelectorAll('.css-banner-principal-botoes button');
    $botoes.forEach(($botao) => {
        const $btnEsqClicado = $botao.classList.contains('css-banner-principal-btn-esq');
        const $carrossel = $botao.closest('.css-banner-principal');
        const $bannersCarrossel = $carrossel.querySelector('.css-banner-principal-imagens');
        const $totalBanners = $bannersCarrossel.querySelectorAll('img').length;
        $botao.addEventListener('click', () => {
            let contador = $bannersCarrossel.id;
            if ($btnEsqClicado) {
                rolarEsquerda(contador, $totalBanners, $bannersCarrossel);
            }
            else {
                rolarDireita(contador, $totalBanners, $bannersCarrossel);
            }
        });
    });
};
const rolarEsquerda = (contador, $totalBanners, $bannersCarrossel) => {
    const finalContagem = contador <= 0;
    const zerarContagem = $totalBanners - 1;
    const diminuirContagem = contador--;
    finalContagem ? contador = zerarContagem : diminuirContagem;
    rotacionarBanner($bannersCarrossel, contador);
    gravarContadorNoId($bannersCarrossel, contador);
};
const rolarDireita = (contador, $totalBanners, $bannersCarrossel) => {
    const finalContagem = contador >= $totalBanners - 1;
    const zerarContagem = 0;
    const aumentarContagem = contador++;
    finalContagem ? contador = zerarContagem : aumentarContagem;
    rotacionarBanner($bannersCarrossel, contador);
    gravarContadorNoId($bannersCarrossel, contador);
};
const gravarContadorNoId = ($bannersCarrossel, contador) => {
    $bannersCarrossel.id = contador;
};
const rotacionarBanner = ($bannersCarrossel, contador) => {
    $bannersCarrossel.style.transform = `translateX(${contador * -100}%)`;
};
export { bannerPrincipal };
//# sourceMappingURL=banner-principal.js.map