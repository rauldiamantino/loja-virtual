# Demonstração do projeto
<img src="./src/assets/images/img-readme.webm">

# Tecnologias utilizadas
- Sass: 1.58.0
- TypeScript: 4.9.5
- TailwindCss: 3.2.6

# Configurações do Ambiente

## Instalação
- Instalar package.json: `npm init`
- Instalar Sass Globalmente: `npm install -g sass`
- Instalar TS localmente: `npm i typescript -D`
  - Criar arquivo tsconfig.json:
    ```
    {
      "compilerOptions": {
        "target": "esnext",
        "rootDir": "./assets/ts",                                  
        "outDir": "./assets/dist/js",                                        
        "noImplicitAny": false,
        "removeComments": true,
        "preserveConstEnums": true,
        "sourceMap": true,  
      }
    }
    ```
- Configurar servidor embutido PHP: https://github.com/rauldiamantino/ambiente-php

## Compilação e localhost
- Compilar Sass em CSS minificado: `sass src/assets/scss/style.scss:src/assets/dist/css/style.css --style compressed`
- Compilar TS: `npx tsc`
- Localhost PHP: `php -S localhost:8000`
