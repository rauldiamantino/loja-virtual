const menuCategorias = ($alvo) => {
    const $menu = document.querySelector('.sass-topo-menu');
    const $todasCategorias = $menu.querySelectorAll('details');
    const $areaExterna = document.querySelector('.sass-area-externa');
    const $btnAbrir = document.querySelector('.sass-btn-categorias');
    const clicouBtnAbrir = $alvo == $btnAbrir;
    const clicouAreaExterna = $alvo == $areaExterna;
    if (clicouBtnAbrir) {
        abreMenuCategorias($menu, $areaExterna);
    }
    if (clicouAreaExterna) {
        fechaMenuCategorias($menu, $areaExterna);
    }
    $todasCategorias.forEach(($categoria) => {
        fechaDemaisCategorias($alvo, $categoria, $todasCategorias);
        fechaCategCliqueExterno($alvo, $todasCategorias);
    });
};
const abreMenuCategorias = ($menu, $areaExterna) => {
    $areaExterna.classList.remove('hidden');
    $menu.classList.add('translate-x-[0%]');
    $menu.classList.remove('translate-x-[100%]');
};
const fechaMenuCategorias = ($menu, $areaExterna) => {
    $areaExterna.classList.add('hidden');
    $menu.classList.add('translate-x-[100%]');
    $menu.classList.remove('translate-x-[0%]');
};
const fechaDemaisCategorias = ($alvo, $categoria, $todasCategorias) => {
    const alvoIgualCategoria = $alvo.parentNode == $categoria;
    if (alvoIgualCategoria) {
        $todasCategorias.forEach(($categoria) => {
            const alvoDiferenteCategoria = $alvo.parentNode !== $categoria;
            if (alvoDiferenteCategoria) {
                fechaCategoria($categoria);
            }
        });
    }
};
const fechaCategCliqueExterno = ($alvo, $todasCategorias) => {
    const clicouForaCategoria = $alvo.tagName !== 'SUMMARY';
    if (clicouForaCategoria) {
        $todasCategorias.forEach(($categoria) => {
            fechaCategoria($categoria);
        });
    }
};
const fechaCategoria = ($categoria) => {
    $categoria.removeAttribute('open');
};
export { menuCategorias };
//# sourceMappingURL=menu-categorias.js.map