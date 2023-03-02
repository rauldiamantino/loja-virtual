<section class="lg:grid-cols-4 w-full grid grid-cols-2 gap-2 css-produtos">
  
  <!-- Produto 001 -->
  <a href="categorias.php?dir=pages/produtos&file=001">
    <?php
      $produto = [
        "codigo" => 001,
        "referencia" => "rd001",
        "nome" => "Tênis Nike Revolution 6 - Masculino",
        "preco" => 299.99,
        "variavel-1" => [
          "cor-1" => [
            "variavel-2" => [39, 40, 41, 42, 43, 44],
            "imagens" => [
              "1" => "../assets/images/produtos/001/1.webp",
              "2" => "../assets/images/produtos/001/2.webp",
              "3" => "../assets/images/produtos/001/3.webp",
              "4" => "../assets/images/produtos/001/4.webp",
              "5" => "../assets/images/produtos/001/5.jpg",
              "6" => "../assets/images/produtos/001/6.webp",
              "7" => "../assets/images/produtos/001/7.jpg"
            ],
          ],
        ],
        "descricao" => [
          "Seu companheiro em sua prática esportiva ou dia a dia é esse tênis Nike masculino é a opção perfeita. O cabedal (parte superior do calçado) em malha respirável proporciona suporte, apoio e durabilidade. A entressola em EVA e solado emborrachado que garantem maior estabilidade e aderência em todas as superfícies. O tênis conta também contraforte acolchoado para maior suporte, ficando livre de atrito. Além disso, seu design super moderno e o padrão Nike em todos os detalhes do calçado. Confira e compre hoje!"
        ],
      ];
      include('./partials/produto-listagem.php');
    ?>
  </a>

  <!-- Produto 002 -->
  <a href="categorias.php?dir=pages/produtos&file=001">
    <?php
      $produto = [
        "codigo" => 033,
        "referencia" => "rd033",
        "nome" => "Tênis Nike - Feminino",
        "preco" => 159.99,
        "variavel-1" => [
          "cor-1" => [
            "variavel-2" => [39, 40, 41, 42, 43, 44],
            "imagens" => [
              "1" => "../assets/images/produtos/001/6.webp",
              "2" => "../assets/images/produtos/001/2.webp",
              "3" => "../assets/images/produtos/001/3.webp",
              "4" => "../assets/images/produtos/001/4.webp",
              "5" => "../assets/images/produtos/001/5.jpg",
              "6" => "../assets/images/produtos/001/6.webp",
              "7" => "../assets/images/produtos/001/7.jpg"
            ],
          ],
        ],
        "descricao" => [
          "Seu companheiro em sua prática esportiva ou dia a dia é esse tênis Nike masculino é a opção perfeita. O cabedal (parte superior do calçado) em malha respirável proporciona suporte, apoio e durabilidade. A entressola em EVA e solado emborrachado que garantem maior estabilidade e aderência em todas as superfícies. O tênis conta também contraforte acolchoado para maior suporte, ficando livre de atrito. Além disso, seu design super moderno e o padrão Nike em todos os detalhes do calçado. Confira e compre hoje!"
        ],
      ];
      include('./partials/produto-listagem.php');
    ?>
</a>
</section>