# Tecnologias utilizadas
- sass: 1.58.0
- typescript: 4.9.5

# Configurações do Ambiente

## Instalação
- package.json -> `npm init`
- Instalar Sass localmente -> `npm install sass -D`
- Instalar TS localmente-> `npm i typescript -D`
  - Criar arquivo tsconfig.json
    ```
    {
        "compilerOptions": {
          "target": "esnext",
          // "module": "commonjs",
          "rootDir": "./assets/ts",                                  
          "outDir": "./assets/dist/js",                                        
          "noImplicitAny": false,
          "removeComments": true,
          "preserveConstEnums": true,
          "sourceMap": true,  
        }
      } 
      ```

## Compilação e localhost
- Compilar Sass -> `sass assets/scss/style.scss:assets/dist/css/style.css --style compressed`
- Compilar TS -> `npx tsc`
- Localhost PHP -> `php -S localhost:8000`
