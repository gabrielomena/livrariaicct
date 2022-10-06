<div align="center">
	<img src="https://media-exp1.licdn.com/dms/image/C4D1BAQGyYp1uEBpF6w/company-background_10000/0/1649255107825?e=1665630000&v=beta&t=434MnUC2rV2T5yaDwDcCmDDGPVg2671YSgN1FRtJcu8" with="600"/>
	<h1>ICCT - Desafio FullStack</h1>
</div>

![Badge](https://img.shields.io/badge/Version-1.0.0-%23542F61?style=for-the-badge&logo=appveyor)
![Badge](https://img.shields.io/badge/Laravel-v8.54-%233570B2?style=for-the-badge&logo=laravel)
![Badge](https://img.shields.io/badge/PHP-v^7.4-%2300B98E?style=for-the-badge&logo=php)
![Badge](https://img.shields.io/badge/VUE-v3-%2300B98E?style=for-the-badge&logo=Vue.js)

## 🎯 Desafio proposto:

Dada a API (https://bibliapp.herokuapp.com/explorer) desenvolver um cliente WEB em arquitetura
RESTfull para uma livraria virtual onde deve ser possível:
· Listar os produtos disponíveis para a venda (vitrine)
· Cadastrar novo livro
· Editar um livro cadastrado
· Excluir um livro
Todos os campos são de preenchimento obrigatório.
A API deve ter pelo menos um endpoint para realizar todas as operações em um recurso chamado
“livro”.
Além disso, a telas consultas devem atender aos seguintes requisitos:
· Busca
· Ordenação
· Paginação

## 🛠 Ferramentas

-   [Laravel](https://laravel.com/docs/8.x)
-   [Insominia](https://insomnia.rest)
-   [Import configuração de requisições](requisicoes.json)

## 📦 Requisitos para rodar o sistema

-   [PHP 7.4 ou superior](https://www.php.net/downloads)
    -   PHP7.4-curl
    -   PHP7.4-xml
    -   PHP7.4-mbstring
-   [Composer](https://getcomposer.org/download/)


## 💻 Padronização de código

-   [Eslint](https://eslint.org/)
-   [Prettier](https://prettier.io/)
-   [EditorConfig](https://editorconfig.org/)


## 🚀 Executando o projeto
### 1. Abra o terminal e clone o projeto para sua máquina
```bash
https://github.com/gabrielomena/livrariaicct.git
```
### 2. Entre na pasta do projeto
```bash
cd livrariaicct
```
### 3. Baixe as dependências com composer
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
### 5. Crie uma tabela no banco de dados com o nome incubatech e altere no .env as configurações conforme seu banco
```bash
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=livraria //altere aqui conforme seu banco de dados
DB_USERNAME=root //user name do seu banco de dados
DB_PASSWORD=root //password para acessar seu banco de dados
```

### 6. Gere uma chave de criptografia para o código
```bash
php artisan key:generate
```
### 7. Rode as migrations para gerar as tabelas no banco
```bash
php artisan migrate
```
## CASO PREFIRA PODE ACESSAR O SISTEMA EM PRODUÇÃO EM:
[CLIQUE AQUI PARA VISUALIZAR EM PRODUÇÃO](https://livraria.gabrielomena.com.br)
Login: 12345678910
Senha: 123456789

## ✅ Features Desenvolvidas

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
-   [X] Autenticação de usuário.


