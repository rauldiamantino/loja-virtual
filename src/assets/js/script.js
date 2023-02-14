import { menuPrincipal, fechaCategoriasDoMenu } from "./components/menu-principal.js";
const elementoClicado = () => {
    document.addEventListener('click', (event) => {
        const $alvo = event;
        menuPrincipal($alvo);
    });
};
const seNavegadorRedimensionado = () => {
    window.addEventListener('resize', () => fechaCategoriasDoMenu());
};
elementoClicado();
seNavegadorRedimensionado();
//# sourceMappingURL=script.js.map