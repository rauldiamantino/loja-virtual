

<details>
  <summary>Demonstração</summary>
  <br>
  Banner, lista de produtos, menu e página do produto:
  
  [home-produto.webm](https://user-images.githubusercontent.com/100098231/224863603-7ee84724-738d-4e5f-b963-95e21c230d0c.webm)

  <br>
  Adicionando e removendo itens do carrinho:
  
  [carrinho.webm](https://user-images.githubusercontent.com/100098231/224863608-5dbeea43-df65-4df7-bf39-03748384ae85.webm)
</details>

<details open>
  <summary>Como rodar o projeto?</summary>

  1. Utilizando o terminal, certifique-se que está no C: e em seguida clone o repositório `git clone https://github.com/rauldiamantino/loja-virtual.git`
  


  2. Se você tem o servidor embutido do php instalado (<a href="https://github.com/rauldiamantino/ambiente-php">veja aqui</a> como instalar):
     - Navegue pelo terminal até o diretório src: `cd loja-virtual/src`
     - rode o comando: `php -S localhost:8080`
  
  3. Se você utiliza o XAMPP, abra o arquivo Apache (httpd.conf) e altere as linhas abaixo para:
     ```
     DocumentRoot "C:/loja-virtual/src"
     <Directory "C:/loja-virtual/src">
     ```
       
  **4. Importante - Se você acessa o localhost de alguma outra forma, é importante alterar o caminho da pasta padrão para este do passo 3, se não fizer isso as imagens não vão aparecer**.
</details>


<details>
  <summary>Tecnologias utilizadas</summary>
  <p>
    
  - TypeScript: `4.9.5`
  - TailwindCss: `3.2.6`
  - PHP: `8.1.0`  
    
  </p>

  </details>

