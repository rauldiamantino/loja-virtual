const $inputsPrimeiraVariacao = document.querySelectorAll(".css-c2-variacao-1 input");
const $segundaVariacao = document.querySelectorAll(".css-c2-variacoes");
const selecionarPrimeiraVariacao = () => {
    const $primeiraVariacaoPadrao = $inputsPrimeiraVariacao[0];
    definirSegundaVariacao($primeiraVariacaoPadrao);
    $inputsPrimeiraVariacao.forEach(($inputVariacao) => {
        $inputVariacao.addEventListener("click", () => {
            definirSegundaVariacao($inputVariacao);
        });
    });
};
const definirSegundaVariacao = ($primeiraVariacao) => {
    $segundaVariacao.forEach(($variacao) => {
        const $nomePrimeiraVariacao = $primeiraVariacao.id;
        const $nomeSegundaVariacao = $variacao.dataset.primeiraVariacao;
        selecionaSegundaVariacao($nomePrimeiraVariacao, $nomeSegundaVariacao, $variacao);
    });
};
const selecionaSegundaVariacao = ($nomePrimeiraVariacao, $nomeSegundaVariacao, $variacao) => {
    const idPrimeiraVariacao = `#${$nomePrimeiraVariacao}`;
    const $primeiraVariacao = document.querySelector(idPrimeiraVariacao);
    if ($nomePrimeiraVariacao == $nomeSegundaVariacao) {
        $variacao.classList.remove("hidden");
        $primeiraVariacao.setAttribute("checked", "true");
    }
    else {
        $variacao.classList.add("hidden");
    }
};
export { selecionarPrimeiraVariacao };
//# sourceMappingURL=produto.js.map