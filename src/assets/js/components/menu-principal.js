const menuPrincipal = ($alvo) => {
    const $menuPrincipal = document.querySelector('.css-menu-principal');
    const $areaExterna = document.querySelector('.css-area-externa');
    const $btnAbrir = document.querySelector('.css-btn-categorias');
    const $clicouBtnAbrir = $alvo.target == $btnAbrir;
    const $clicouAreaExterna = $alvo.target == $areaExterna;
    if ($clicouBtnAbrir) {
        abrirMenuPrincipal($menuPrincipal, $areaExterna);
    }
    if ($clicouAreaExterna) {
        fecharMenuPrincipal($menuPrincipal, $areaExterna);
    }
};
const abrirMenuPrincipal = ($menuPrincipal, $areaExterna) => {
    $menuPrincipal.classList.remove('translate-x-[100%]');
    $areaExterna.classList.remove('hidden');
};
const fecharMenuPrincipal = ($menuPrincipal, $areaExterna) => {
    $menuPrincipal.classList.add('translate-x-[100%]');
    $areaExterna.classList.add('hidden');
};
export { menuPrincipal };
//# sourceMappingURL=menu-principal.js.map