# Tecnologias utilizadas
- Sass: 1.58.0
- Typescript: 4.9.5

# Configurações do Ambiente

## Instalação
- Instalar package.json -> `npm init`
- Instalar Sass Globalmente -> `npm install -g sass`
- Instalar TS localmente-> `npm i typescript -D`
  - Criar arquivo tsconfig.json
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
- Tailwindcss inserir PlayCDN na tag `<head>` do HTML ->  `<script src="https://cdn.tailwindcss.com"></script>`

## Compilação e localhost
- Compilar Sass em CSS minificado: `sass src/assets/scss/style.scss:src/assets/dist/css/style.css --style compressed`
- Compilar TS: `npx tsc`
- Localhost PHP: `php -S localhost:8000`
