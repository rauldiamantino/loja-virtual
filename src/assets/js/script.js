import { menuPrincipal, fechaCategoriasDoMenu } from "./components/menu-principal.js";
const elementoClicado = () => {
    document.addEventListener('click', (event) => {
        const $alvo = event;
        menuPrincipal($alvo);
    });
};
const navegadorRedimensionado = () => {
    window.addEventListener('resize', () => fechaCategoriasDoMenu());
};
elementoClicado();
navegadorRedimensionado();
//# sourceMappingURL=script.js.map