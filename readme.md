# Demonstração
<img src=".src/assets/videos/demonstracao-readme.webm.gif">

# Tecnologias utilizadas
- TypeScript: `4.9.5`
- TailwindCss: `3.2.6`
- PHP: `8.1.0`

# Configurações do Ambiente

## 1. Clonar Repositório
- Digite no Git Bash:
  ```
    1. cd desktop
    2. git clone https://github.com/rauldiamantino/loja-virtual.git        
  ```
  
- Instale o MAMP para abrir o projeto no localhost: https://www.mamp.info/en/downloads/
- Abrir o MAMP > Preferences:
  - Start/Stop: Deixar marcado somente Start servers
  - Ports: Deixar o padrão: Set Web & MySQL ports to `80 & 3306`
  - PHP: Version `8.1.0`, Cache `off`
  - Server: Web server `Apache`, Document root `selecione a pasta src do projeto Loja Virtual`
  - Cloud: `off`
- Volte para o início do MAMP e clique no botão `Start Servers`
- Acesse http://localhost/

## 2. Compilação
- Compilar TypeScript: `npx tsc`
