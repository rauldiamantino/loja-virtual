import { menuPrincipal, fechaCategoriasDoMenu } from "./components/menu-principal.js";
import { bannerPrincipal } from "./components/banner-principal.js";
import { carregarPrimeiraVariacao } from "./pages/produto.js";
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
bannerPrincipal();
navegadorRedimensionado();
carregarPrimeiraVariacao();
//# sourceMappingURL=script.js.map