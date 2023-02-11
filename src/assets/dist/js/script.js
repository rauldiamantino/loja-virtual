import { menuCategorias } from './components/menu-categorias.js';
const elementoClicado = () => {
    document.addEventListener('click', (element) => {
        const $alvo = element;
        menuCategorias($alvo);
    });
};
elementoClicado();
//# sourceMappingURL=script.js.map