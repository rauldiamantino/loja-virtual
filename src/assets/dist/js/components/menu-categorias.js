const menuCategorias = ($alvo) => {
    const $btnAbrir = document.querySelector('.sass-btn-categorias');
    const $menu = document.querySelector('.sass-topo-menu');
    const $areaExterna = document.querySelector('.sass-area-externa');
    if ($alvo.target == $btnAbrir) {
        abrirMenuCategorias($menu, $areaExterna);
    }
    if ($alvo.target == $areaExterna) {
        fecharMenuCategorias($menu, $areaExterna);
    }
};
const abrirMenuCategorias = ($menu, $areaExterna) => {
    $menu.classList.remove('translate-x-[100%]');
    $menu.classList.add('translate-x-[0%]');
    $areaExterna.classList.remove('hidden');
};
const fecharMenuCategorias = ($menu, $areaExterna) => {
    $menu.classList.add('translate-x-[100%]');
    $menu.classList.remove('translate-x-[0%]');
    $areaExterna.classList.add('hidden');
};
export { menuCategorias };
//# sourceMappingURL=menu-categorias.js.map