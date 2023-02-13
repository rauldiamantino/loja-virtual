# Demonstração do projeto

![image](https://user-images.githubusercontent.com/100098231/218242933-49e3bbe2-2923-46a3-a91f-f1f163b4ecf9.png)

<img src="./src/assets/images/img-readme.gif">




# Tecnologias utilizadas
- TypeScript: 4.9.5
- TailwindCss: 3.2.6

# Configurações do Ambiente

## Instalação
- Instalar package.json: `npm init`
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
- Compilar TS: `npx tsc`
- Localhost PHP: `php -S localhost:8000`
