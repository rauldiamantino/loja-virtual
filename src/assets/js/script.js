import { menuPrincipal } from "./components/menu-principal.js";
const elementoClicado = () => {
    document.addEventListener('click', (event) => {
        const $alvo = event;
        menuPrincipal($alvo);
    });
};
elementoClicado();
//# sourceMappingURL=script.js.map