const menuCategorias = ($alvo) => {
    const $menu = document.querySelector('.sass-topo-menu');
    const $todasCategorias = $menu.querySelectorAll('details');
    const $areaExterna = document.querySelector('.sass-area-externa');
    const $btnAbrir = document.querySelector('.sass-btn-categorias');
    if ($alvo == $btnAbrir) {
        abrirMenuCategorias($menu, $areaExterna);
    }
    if ($alvo == $areaExterna) {
        fecharMenuCategorias($menu, $areaExterna);
    }
    $todasCategorias.forEach(($categoria) => {
        fecharDemaisCategorias($alvo, $categoria, $todasCategorias);
    });
};
const abrirMenuCategorias = ($menu, $areaExterna) => {
    $areaExterna.classList.remove('hidden');
    $menu.classList.add('translate-x-[0%]');
    $menu.classList.remove('translate-x-[100%]');
};
const fecharMenuCategorias = ($menu, $areaExterna) => {
    $areaExterna.classList.add('hidden');
    $menu.classList.add('translate-x-[100%]');
    $menu.classList.remove('translate-x-[0%]');
};
const fecharDemaisCategorias = ($alvo, $categoria, $todasCategorias) => {
    const $alvoPai = $alvo.parentNode;
    if ($alvoPai == $categoria) {
        $todasCategorias.forEach(($outraCategoria) => {
            const $categoriaAtual = $outraCategoria == $alvoPai;
            if (!$categoriaAtual) {
                fechaCategoria($outraCategoria);
            }
        });
    }
};
const fechaCategoria = ($outraCategoria) => {
    $outraCategoria.removeAttribute('open');
};
export { menuCategorias };
//# sourceMappingURL=menu-categorias.js.map