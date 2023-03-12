<?php
session_start();
require('./assets/php/funcoes.php');

# Início - Adiciona produtos ao carrinho
$produto = carregaArrayProduto();
$produtoAdicionado = ! empty($_POST);
$sessionInexistente = ! isset($_SESSION['carrinho']);
$sessionInexistente ? $_SESSION['carrinho'] = array() : false;
$produtoAdicionado ? salvaProdutoSession($produto) : false;

echo "<!DOCTYPE html>
      <html lang='pt-br'>";

include("./partials/head.php");

echo "<body>";

include("./partials/header.php");

echo "<main class='h-full w-full'>";

echo "<section class='xl:mx-auto xl:max-w-7xl py-4 flex gap-10 h-screen css-conteudo-principal'>
<div class='w-3/5 h-full css-carrinho-itens'>
  <div class='css-ci-textos'>
    <h2 class='font-medium text-xl'>Seu Carrinho</h2>
    <p class='py-4'>Os itens do seu carrinho não estão reservados. Finalize esta compra para torná-los seus itens pessoais.</p>
  </div>
  <div class='pt-4 flex flex-col gap-8 css-ci-produtos'>
    <div class='grid grid-cols-3 grid-rows-2 gap-2 css-cip-produto'>
      <img class='row-span-2 rounded-md' src='./assets/images/produtos/001/preto/1.webp'>
      <div class='border border-gray-200 p-4 col-span-2 row-span-2 flex justify-between items-between rounded-md css-cipp-textos'>
        <div class='w-full flex flex-col justify-between css-textos-bloco-1'>
          <div class='css-textos-bloco-1-superior'>
            <h1 class='font-medium'>Tênis Ultraboost Light</h1>
            <p>
              <span>Cor:</span>
              <span>Preto</span>
            </p>
            <p>
              <span>Tamanho:</span>
              <span>42</span>
            </p>
          </div>

          <div class='flex justify-between items-end css-textos-bloco-1-inferior'>
            <input class='border border-gray-200 pl-4 py-2 w-20 text-base font-medium' type='number' value='1' min='1'>
          </div>
        </div>
        <div class='flex flex-col justify-between items-end css-textos-bloco-2'>
          <p class='flex gap-1'>
            R$<span>899,99</span>
          </p>
          <button>
            <svg class='opacity-50' xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' viewBox='0 0 16 16'>
            <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
            </svg>
          </button>
        </div>
      </div>

    </div>

    <div class='grid grid-cols-3 grid-rows-2 gap-2 css-cip-produto'>
      <img class='row-span-2 rounded-md' src='./assets/images/produtos/001/preto/1.webp'>
      <div class='border border-gray-200 p-4 col-span-2 row-span-2 flex justify-between items-between rounded-md css-cipp-textos'>
        <div class='w-full flex flex-col justify-between css-textos-bloco-1'>
          <div class='css-textos-bloco-1-superior'>
            <h1 class='font-medium'>Tênis Ultraboost Light</h1>
            <p>
              <span>Cor:</span>
              <span>Preto</span>
            </p>
            <p>
              <span>Tamanho:</span>
              <span>42</span>
            </p>
          </div>

          <div class='flex justify-between items-end css-textos-bloco-1-inferior'>
            <input class='border border-gray-200 pl-4 py-2 w-20 text-base font-medium' type='number' value='1' min='1'>
          </div>
        </div>
        <div class='flex flex-col justify-between items-end css-textos-bloco-2'>
          <p class='flex gap-1'>
            R$<span>899,99</span>
          </p>
          <button>
            <svg class='opacity-50' xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' viewBox='0 0 16 16'>
            <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
            </svg>
          </button>
        </div>
      </div>

    </div>

  </div>
</div>

<div class='w-2/5 h-full bg-gray-400 css-carrinho-resumo'></div>

</section>";

echo "</main>";

include("./partials/footer.php"); 

echo "<script type='module' src='./assets/js/script.js'></script>
    </body>
  </html>";
?>