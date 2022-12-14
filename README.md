<div align="center">
	<img src="https://media-exp1.licdn.com/dms/image/C4D1BAQGyYp1uEBpF6w/company-background_10000/0/1649255107825?e=1665630000&v=beta&t=434MnUC2rV2T5yaDwDcCmDDGPVg2671YSgN1FRtJcu8" with="600"/>
	<h1>ICCT - Desafio FullStack</h1>
</div>

![Badge](https://img.shields.io/badge/Version-1.0.0-%23542F61?style=for-the-badge&logo=appveyor)
![Badge](https://img.shields.io/badge/Laravel-v8.54-%233570B2?style=for-the-badge&logo=laravel)
![Badge](https://img.shields.io/badge/PHP-v^7.4-%2300B98E?style=for-the-badge&logo=php)
![Badge](https://img.shields.io/badge/VUE-v3-%2300B98E?style=for-the-badge&logo=Vue.js)

## 馃幆 Desafio proposto:

Dada a API (https://bibliapp.herokuapp.com/explorer) desenvolver um cliente WEB em arquitetura
RESTfull para uma livraria virtual onde deve ser poss铆vel:
路 Listar os produtos dispon铆veis para a venda (vitrine)
路 Cadastrar novo livro
路 Editar um livro cadastrado
路 Excluir um livro
Todos os campos s茫o de preenchimento obrigat贸rio.
A API deve ter pelo menos um endpoint para realizar todas as opera莽玫es em um recurso chamado
鈥渓ivro鈥?.
Al茅m disso, a telas consultas devem atender aos seguintes requisitos:
路 Busca
路 Ordena莽茫o
路 Pagina莽茫o

## 馃洜 Ferramentas

-   [Laravel](https://laravel.com/docs/8.x)
-   [Insominia](https://insomnia.rest)
-   [Import configura莽茫o de requisi莽玫es](requisicoes.json)

## 馃摝 Requisitos para rodar o sistema

-   [PHP 7.4 ou superior](https://www.php.net/downloads)
    -   PHP7.4-curl
    -   PHP7.4-xml
    -   PHP7.4-mbstring
-   [Composer](https://getcomposer.org/download/)


## 馃捇 Padroniza莽茫o de c贸digo

-   [Eslint](https://eslint.org/)
-   [Prettier](https://prettier.io/)
-   [EditorConfig](https://editorconfig.org/)


## 馃殌 Executando o projeto
### 1. Abra o terminal e clone o projeto para sua m谩quina
```bash
https://github.com/gabrielomena/livrariaicct.git
```
### 2. Entre na pasta do projeto
```bash
cd livrariaicct
```
### 3. Baixe as depend锚ncias com composer
```bash
composer install
```
### 4. Instale os componentes do package.json
```bash
npm install && npm run dev
```
### 5. Copie o arquivo .env.example e renomeie para .env
```bash
cp .env.exemple .env
```
### 5. Crie uma tabela no banco de dados com o nome livraria e altere no .env as configura莽玫es conforme seu banco
```bash
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=livraria //altere aqui conforme seu banco de dados
DB_USERNAME=root //user name do seu banco de dados
DB_PASSWORD=root //password para acessar seu banco de dados
```

### 6. Gere uma chave de criptografia para o c贸digo
```bash
php artisan key:generate
```
### 7. Rode as migrations para gerar as tabelas no banco
```bash
php artisan migrate
```
## CASO PREFIRA PODE ACESSAR O SISTEMA EM PRODU脟脙O:
[CLIQUE AQUI PARA VISUALIZAR EM PRODU脟脙O](https://livraria.gabrielomena.com.br)
Login: 12345678910
Senha: 123456789

## 鉁? Features Desenvolvidas

-   [x] API RESTful
-   [x] Listar Livros
-   [x] Cadastrar Livros
-   [x] Editar Livros
-   [x] Buscar Livros
-   [x] Excluir Livros
-   [x] Listar Autores
-   [x] Cadastrar Autor
-   [x] Editar Autor
-   [x] Buscar Autor
-   [x] Excluir Autor
-   [X] Autentica莽茫o de usu谩rio.


