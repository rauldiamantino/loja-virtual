<?php
echo "<!DOCTYPE html>
          <html lang='pt-br'>";

include("./partials/head.php");

/*-------------------------------
Informações do array $produto[]
-------------------------------*/
include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");

$produtoJson = json_encode($produto);

$nomeProduto = $produto["nome"];
$codigoProduto = $produto["codigo"];
$refProduto = $produto["referencia"];

$segundaVariacaoExiste = false;
$primeiraVariacao = $produto["prim-variacao"];
$itensPrimeiraVariacao = $primeiraVariacao["itens"];
$nomePrimeiraVariacao = $primeiraVariacao["nome-prim-variacao"];

$precoDe = $produto["preco-de"];
$precoPor = $produto["preco-por"];
$qtdeParcelas = $produto["qtde-parcelas"];
$totalParcelado = numeroParaReal($precoPor / $qtdeParcelas);

$textoDescricao = $produto["descricao"]["texto"];
$tituloDescricao = $produto["descricao"]["titulo"];

/*-------------------------------
Funções
-------------------------------*/
function numeroParaReal($numero)
{
  $formatado = number_format($numero, 2, ",", ".");
  return $formatado;
}

function variacaoExiste($itensVariacao)
{
  if (!empty($itensVariacao)) {
    return true;
  } else {
    return false;
  }
}

function buscarImagensVariacao($itensPrimeiraVariacao)
{
  print_r($itensPrimeiraVariacao["imagens"]);
}

function imagensProduto($primeiraVariacao, $produto)
{
  $imgPrimeiraVariacao = $primeiraVariacao["imagens"];
  $imgSemVariacao = $produto["imagens-sem-variacao"];

  if (!empty($imgPrimeiraVariacao)) {
    return $imgPrimeiraVariacao;
  } else {
    return $imgSemVariacao;
  }
}

/*-------------------------------
Página do Produto
-------------------------------*/
echo "<body>";

include("./partials/header.php");

echo "<main class='xl:mx-auto xl:max-w-7xl py-2'>";

# Início Produto
echo "<section class='w-full h-max grid grid-cols-4 gap-4 items-start css-pag-produto'>";

echo "<div class='hidden css-pp-objeto'>$produtoJson</div>";

# Início Caixa 1 Produto

if (variacaoExiste($itensPrimeiraVariacao)) {

  foreach ($itensPrimeiraVariacao as $item) {
    $colunasDeImagens;
    $urlsImagensItem = $item["imagens"];
    $qtdeImagens = sizeof($urlsImagensItem);
    $nomeImagens = $item["nome"];

    if (!empty($urlsImagensItem)) {
      $qtdeImagens == 1 ? $colunasDeImagens = 1 : $colunasDeImagens = 2;
    } else {
      $qtdeImagens = sizeof($produto["imagens-sem-variacao"]);
      $qtdeImagens == 1 ? $colunasDeImagens = 1 : $colunasDeImagens = 2;
    }

    echo "<div class='hidden w-full grid grid-cols-$colunasDeImagens col-span-3 row-span-full gap-4 css-pp-caixa-1' data-nome-imagens='$nomeImagens'>";

    foreach ($urlsImagensItem as $urlImagem) {
      echo "<img src=$urlImagem class='border border-gray-200 p-4 w-full'>";
    }
    echo "</div>"; # Fim Caixa 1 Produto
  }
}

# Início Produto Textos
echo "<section class='css-pag-produto-textos'>";

# Início Caixa 2 Produto
echo "<section class='flex flex-col gap-4 css-pp-caixa-2'>
          <h2 class='text-sm css-c2-categoria'>Lançamentos</h2>
          <h1 class='text-2xl font-medium css-c2-produto-name'>$nomeProduto</h1>

          <section class='css-c2-preco'>
            <p class='text-sm line-through text-gray-500 css-c2-preco-de'>R$ " . numeroParaReal($precoDe) . "</p>
            <p class='text-base css-c2-preco-por'>R$ " . numeroParaReal($precoPor) . "</p>
          </section>

          <p class='text-sm css-c2-parcelamento'>
            <span class='css-c2-qtde-parcelas'>ou $qtdeParcelas</span>x de<span class='css-c2-totalParcelado'>R$ $totalParcelado</span>
          </p>";

if (variacaoExiste($itensPrimeiraVariacao)) {

  # Início Primeira Variação
  echo "<section class='css-c2-prim-variacao'>
            <span class='css-nome-prim-variacao'>$nomePrimeiraVariacao</span>
            <span class='pt-2 grid grid-cols-4 gap-1 css-itens-prim-variacao'>";

  foreach ($primeiraVariacao["itens"] as $itemPrimVariacao) {

    if (is_array($itemPrimVariacao) && array_key_exists("seg-variacao", $itemPrimVariacao)) {
      $nomeItemPrimVariacao = $itemPrimVariacao["nome"];
      $segundaVariacaoDoItem = $itemPrimVariacao["seg-variacao"];

      echo "<span class='w-full flex items-center justify-center css-item-prim-variacao'>
                <input type='radio' name='css-id-itens-prim-variacao' id='css-id-item-$nomeItemPrimVariacao' class='hidden peer'/>
                <label
                  for='css-id-item-$nomeItemPrimVariacao' class='border border-gray-200 hover:border-gray-900  transition duration-150 peer-checked:border-gray-900  p-4 w-full text-center bg-white peer-checked:ring-4 ring-blue-500/20 rounded'>
                  $nomeItemPrimVariacao
                </label>
              </span>";

      variacaoExiste($segundaVariacaoDoItem) ? $segundaVariacaoExiste = true : $segundaVariacaoExiste = false;
    }
  }

  echo "</span>
        </section>"; # Fim Primeira Variação

  foreach ($primeiraVariacao["itens"] as $itemPrimVariacao) {
    if (is_array($itemPrimVariacao) && array_key_exists("seg-variacao", $itemPrimVariacao)) {
      $nomeItemPrimVariacao = $itemPrimVariacao["nome"];

      # Início Segunda Variação
      echo "<section class='hidden py-4 css-c2-variacoes' data-primeira-variacao='css-id-item-$nomeItemPrimVariacao'>
                <section class='css-c2-seg-variacao'>
                  <span class='css-nome-seg-variacao'>{$itemPrimVariacao['seg-variacao']['nome']}</span>

                  <span class='pt-2 grid grid-cols-2 gap-1 css-itens-seg-variacao'>";

      foreach ($itemPrimVariacao["seg-variacao"][0] as $variacao) {

        echo "<span class='w-full flex items-center justify-center css-item-seg-variacao'>
                  <input
                    type='radio'
                    name='css-id-itens-seg-variacao'
                    id='css-id-item-$variacao'
                    class='hidden peer'
                  />

                  <label
                    for='css-id-item-$variacao'
                    class='border border-gray-200 hover:border-gray-900 transition duration-150 peer-checked:border-gray-900 p-4 w-full text-center bg-white peer-checked:ring-4 ring-blue-500/20 rounded'>
                    $variacao
                  </label>
                </span>";
      }

      echo "</span>
            </section>
          </section>"; # Fim Segunda Variação
    }
  }
}

echo "<button class='p-4 bg-black hover:opacity-80 text-white rounded-full css-c2-btn-comprar'>Adicionar ao carrinho</button>

        <section class='p-2 flex justify-between text-sm css-c2-compartilhar'>
          <span>Compartilhar:</span>
          <a href='#' class='cursor-default' target='_blank'>
            <span class='flex items-center gap-1 css-compartilhar-whatsapp'>
              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='opacity-50' viewBox='0 0 16 16'>
                <path d='M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z'/>
              </svg>
              <span class='hover:underline'>WhatsApp</span>
            </span>
          </a>
          <a href='#' class='cursor-default' target='_blank'>
            <span class='flex items-center gap-1 css-compartilhar-copiar'>
              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='opacity-50' viewBox='0 0 16 16'>
                <path d='M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z'/>
                <path d='M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z'/>
              </svg>
              <span class='hover:underline'>Copiar Link</span>
            </span>
          </a>
        </section>

        <section class='css-c2-especificacoes'>
          <section class='w-full h-min css-pp-caixa-2'>
            <details open>
              <summary class='border-t border-gray-200 py-4 flex justify-between items-center list-none'>Descrição</summary>
              <section class='py-4 css-c2-descricao'>
                <h2 class='pb-4 font-medium text-lg css-descricao-titulo'>$tituloDescricao</h2>
                <p class='css-descricao-texto'>$textoDescricao</p>
              </section>
            </details>
        </section>

        <section class='flex flex-col css-c2-frete'>
            <details>

              <summary class='border-t border-gray-200 py-4 flex items-center list-none'>Calcular frete e entrega</summary>
              
              <div class='pt-2 pb-4 text-sm'>Calcule o frete e o prazo de entrega estimados para sua região.</div>

              <label for='css-id-c2-frete' class='relative text-sm'>Insira seu cep</label>
              
              <div class='relative group mb-4'>
                <input type='text' id='css-id-c2-frete' placeholder='00000-000' class='w-full py-3 px-4 border border-gray-200 group-hover:border-gray-900 focus:ring-4 ring-blue-500/20 transition duration-100 rounded'>
                <button class='border border-gray-200 py-1 px-6 absolute top-1/2 -translate-y-1/2 right-4 left-auto hover:opacity-60 rounded css-c2-btn-frete'>Calcular</button>
              </div>

              <a href='#' class='text-sm hover:underline hover:opacity-80'>Não sei meu CEP</a>

            </details>
        </section>

      </section>
  </section>"; # Fim Caixa 2 Produto

echo "</section>"; # Fim Produto Textos
echo "</section>"; # Fim Produto

echo "</main>";

/*-------------------------------
Rodapé, Scripts e Fim HTML
-------------------------------*/
include("./partials/footer.php");

echo "<script type='module' src='./assets/js/script.js'></script>
      </body>
    </html>";