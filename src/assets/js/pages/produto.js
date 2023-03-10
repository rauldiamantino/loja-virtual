const $inputsPrimeiraVariacao = document.querySelectorAll(".css-c2-prim-variacao input");
const $segundaVariacao = document.querySelectorAll(".css-c2-variacoes");
const selecionarPrimeiraVariacao = () => {
    const $imagensVariacao = document.querySelectorAll(".css-pp-caixa-1");
    const $primeiraVariacaoPadrao = $inputsPrimeiraVariacao[0];
    carregaImgPadrao($imagensVariacao);
    definirSegundaVariacao($primeiraVariacaoPadrao);
    $inputsPrimeiraVariacao.forEach(($inputVariacao) => {
        $inputVariacao.addEventListener("click", () => {
            definirSegundaVariacao($inputVariacao);
            const $nomePrimeiraVariacao = $inputVariacao.nextElementSibling.innerText;
            const idVar = '#' + $nomePrimeiraVariacao;
            if (document.querySelector(idVar)) {
                definirImgCliqueVariacao($inputVariacao, $imagensVariacao);
            }
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
const definirImgCliqueVariacao = ($inputVariacao, $imagensVariacoes) => {
    const $nomePrimeiraVariacao = $inputVariacao.nextElementSibling.innerText;
    console.log($inputVariacao);
};
const variacaoComImagens = ($input, $variacao) => {
    const idVar = 'css-id-item-' + $variacao.id;
    if ($input.id == idVar) {
        return $variacao;
    }
};
const escondeImagens = ($imagem) => {
    $imagem.classList.add("hidden");
};
const carregaImgPadrao = ($imagensVariacao) => {
    $imagensVariacao[0].classList.remove("hidden");
};
export { selecionarPrimeiraVariacao };
//# sourceMappingURL=produto.js.map