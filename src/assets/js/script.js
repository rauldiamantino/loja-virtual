import { menuPrincipal, fechaCategoriasDoMenu } from "./components/menu-principal.js";
import { bannerPrincipal } from "./components/banner-principal.js";
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
const $inputsPrimeiraVariacao = document.querySelectorAll(".css-c2-variacao-1 input");
const $inputsSegundaVariacao = document.querySelectorAll(".css-c2-variacao-2 input");
$inputsPrimeiraVariacao.forEach(($inputVariacao) => {
    $inputVariacao.addEventListener('click', () => {
        if ($inputVariacao.checked == true) {
            console.log($inputVariacao.id);
        }
    });
});
$inputsSegundaVariacao.forEach(($inputVariacao) => {
});
//# sourceMappingURL=script.js.map