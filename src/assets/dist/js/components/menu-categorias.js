const menuCategorias = ($alvo) => {
    const $btnAbrir = document.querySelector('.sass-btn-categorias');
    const $menu = document.querySelector('.sass-topo-menu');
    const $areaExterna = document.querySelector('.sass-area-externa');
    const $todasCategorias = $menu.querySelectorAll('details');
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
    $menu.classList.remove('translate-x-[100%]');
    $menu.classList.add('translate-x-[0%]');
    $areaExterna.classList.remove('hidden');
};
const fecharMenuCategorias = ($menu, $areaExterna) => {
    $menu.classList.add('translate-x-[100%]');
    $menu.classList.remove('translate-x-[0%]');
    $areaExterna.classList.add('hidden');
};
const fecharDemaisCategorias = ($alvo, $categoria, $todasCategorias) => {
    const $alvoPai = $alvo.parentNode;
    if ($alvoPai == $categoria) {
        $todasCategorias.forEach(($outraCategoria) => {
            const $categoriaAtual = $outraCategoria == $alvoPai;
            if (!$categoriaAtual) {
                $outraCategoria.removeAttribute('open');
            }
        });
    }
};
const fechaCategoria = () => {
};
export { menuCategorias };
//# sourceMappingURL=menu-categorias.js.map