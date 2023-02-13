const menuPrincipal = ($alvo) => {
    const $menu = document.querySelector('.css-topo-menu');
    const $todasCategorias = $menu.querySelectorAll('details');
    const $areaExterna = document.querySelector('.css-area-externa');
    const $btnAbrir = document.querySelector('.css-btn-categorias');
    const cliqueBtnAbrir = $alvo == $btnAbrir;
    const cliqueAreaExterna = $alvo == $areaExterna;
    if (cliqueBtnAbrir) {
        abreMenuPrincipal($menu, $areaExterna);
    }
    if (cliqueAreaExterna) {
        fechaMenuPrincipal($menu, $areaExterna);
    }
    $todasCategorias.forEach(($categoria) => {
        fechaDemaisCategorias($alvo, $categoria, $todasCategorias);
        fechaCategCliqueFora($alvo, $todasCategorias);
    });
};
const abreMenuPrincipal = ($menu, $areaExterna) => {
    $areaExterna.classList.remove('hidden');
    $menu.classList.add('translate-x-[0%]');
    $menu.classList.remove('translate-x-[100%]');
};
const fechaMenuPrincipal = ($menu, $areaExterna) => {
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
const fechaCategCliqueFora = ($alvo, $todasCategorias) => {
    const cliqueFora = $alvo.tagName !== 'SUMMARY';
    if (cliqueFora) {
        $todasCategorias.forEach(($categoria) => {
            fechaCategoria($categoria);
        });
    }
};
const fechaCategoria = ($categoria) => {
    $categoria.removeAttribute('open');
};
const abreMenuHover = ($todasCategorias) => {
    const $breakpointDesktop = window.innerWidth > 1024;
    $todasCategorias.forEach(($categoria) => {
        $categoria.addEventListener('mouseover', () => {
            if ($breakpointDesktop) {
                $categoria.setAttribute('Open', 'true');
                $categoria.addEventListener('mouseleave', () => {
                    $categoria.removeAttribute('Open');
                });
            }
            else {
                return;
            }
        });
    });
};
export { menuPrincipal, abreMenuHover };
//# sourceMappingURL=menu-categorias.js.map