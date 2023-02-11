# Tecnologias utilizadas
- Sass: 1.58.0
- TypeScript: 4.9.5
- TailwindCss: 3.2.6

# Configurações do Ambiente

## Instalação
- Instalar package.json: `npm init`
- Instalar Sass localmente: `npm install sass -D`
- Instalar TailwindCss via PlayCDN na tag `<head>` do HTML:  `<script src="https://cdn.tailwindcss.com"></script>`
- Instalar TypeScript localmente: `npm i typescript -D`
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
- Compilar Sass -> `sass assets/scss/style.scss:assets/dist/css/style.css --style compressed`
- Compilar TypeScript -> `npx tsc`
- Localhost PHP -> `php -S localhost:8000`
