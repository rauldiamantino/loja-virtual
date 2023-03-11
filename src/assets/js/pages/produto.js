const selecionarPrimeiraVariacao = () => {
    const $modalImagensVariacoes = document.querySelectorAll('.css-pp-tela-cheia');
    const $inputsPrimeiraVariacao = document.querySelectorAll(".css-c2-prim-variacao input");
    const $imagensVariacao = document.querySelectorAll(".css-pp-caixa-1");
    const $primeiraVariacaoPadrao = $inputsPrimeiraVariacao[0];
    abrirFotoTelaCheia($imagensVariacao);
    carregaImgPadrao($imagensVariacao);
    definirSegundaVariacao($primeiraVariacaoPadrao);
    $inputsPrimeiraVariacao.forEach(($inputVariacao) => {
        $inputVariacao.addEventListener("click", () => {
            definirSegundaVariacao($inputVariacao);
            enviaInputsComImagens($inputVariacao, $imagensVariacao);
        });
    });
};
const abrirFotoTelaCheia = ($imagensVariacao) => {
    $imagensVariacao.forEach($blocoImagens => {
        const $fotosProduto = $blocoImagens.querySelectorAll('img');
        $fotosProduto.forEach($foto => {
            $foto.addEventListener('click', () => {
                const $modalImagensVariacao = document.querySelector('.css-pp-tela-cheia');
                $modalImagensVariacao.innerHTML = `<img src='${$foto.src}' class='h-11/12 m-auto'>`;
                $modalImagensVariacao.classList.remove('hidden');
                fecharFotoTelaCheia($modalImagensVariacao);
            });
        });
    });
};
const fecharFotoTelaCheia = ($modalImagensVariacao) => {
    fecharClicouFora($modalImagensVariacao);
    fecharTeclaEsc($modalImagensVariacao);
};
const fecharClicouFora = ($modalImagensVariacao) => {
    document.addEventListener('click', (event) => {
        const clicouFora = event.target == $modalImagensVariacao;
        if (clicouFora)
            $modalImagensVariacao.classList.add('hidden');
    });
};
const fecharTeclaEsc = ($modalImagensVariacao) => {
    document.addEventListener('keydown', (event) => {
        const teclaEsc = event.key;
        if (teclaEsc === 'Escape')
            $modalImagensVariacao.classList.add('hidden');
    });
};
const enviaInputsComImagens = ($inputVariacao, $imagensVariacao) => {
    const $nomePrimeiraVariacao = $inputVariacao.nextElementSibling.innerText;
    const idVar = '#' + $nomePrimeiraVariacao;
    if (document.querySelector(idVar))
        definirImgCliqueVariacao($inputVariacao, $imagensVariacao);
};
const definirSegundaVariacao = ($primeiraVariacao) => {
    const $segundaVariacao = document.querySelectorAll(".css-c2-variacoes");
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
    $imagensVariacoes.forEach($imagemVariacao => {
        const $nomeImagens = $imagemVariacao.id;
        $nomePrimeiraVariacao == $nomeImagens ? $imagemVariacao.classList.remove("hidden") : escondeImagens($imagemVariacao);
    });
};
const escondeImagens = ($imagem) => $imagem.classList.add("hidden");
const carregaImgPadrao = ($imagensVariacao) => $imagensVariacao[0].classList.remove("hidden");
export { selecionarPrimeiraVariacao };
//# sourceMappingURL=produto.js.map