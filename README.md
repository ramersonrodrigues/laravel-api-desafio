<h1>Desafio - Back-End Developer</h1>

A tarefa é construir uma API e banco de dados para a aplicação CMS (Content Management System). A aplicação é um simples repositório para gerenciar postagens com seus respectivos titulos, autores, conteúdos e tags. 

### Features

-  [x] CRUD de Post com seu autor e suas tags.
-  [x] Demonstração, Trait para Requests;
-  [x] Demonstração, Classes para Requests;
-  [x] Demonstração, Classes para Response;
-  [x] Demonstração, Repository Patern;
-  [x] Demonstração, Contracts;
-  [x] Demonstração, Intarfaces;
-  [x] Demonstração, Dependency Injection;
  
### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:

-  [Git](https://git-scm.com/)
-  [Docker](https://www.docker.com/)
-  [Composer](https://getcomposer.org/)
-  [Postman](https://www.postman.com/)

### Executando a Aplicação

````bash
# Clone o repositório do projeto
$ git clone https://github.com/ramersonrodrigues/laravel-api-desafio.git

# Acesse a pasta do projeto no terminal e algumas configurações
$ cd laravel-api-desafio && composer install && cp .env.example .env && php artisan key:generate 

# Configure o mysql no arquivo .env, setando os valores padrão do Laradock.
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=default
DB_USERNAME=default
DB_PASSWORD=secret

# Clone o repositório do Laradock
$ git clone https://github.com/Laradock/laradock.git

# Acesse a pasta do Laradock no terminal e Crie o arquivo de configuração
$ cd laradock && cp env-example .env

# Inicie a aplicação com o docker compose
$ docker-compose up -d nginx mysql phpmyadmin redis workspace 

````

### Testes com Postman
 - Importe o arquivo [postman.json](https://github.com/ramersonrodrigues/laravel-api-desafio/blob/main/postman.json) para o postman
 - Execute as requests(localhost/api)
     - **POST** /posts/
	 - **GET** /posts/id
     - **GET** /posts
     - **GET** /posts?tag=node
	 - **PUT** /posts/id
	 - **DELETE** /posts/id

### Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

-  [Laravel](https://laravel.com/)
-  [Laradock - (nginx, mysql e phpmyadmin)](https://laradock.io/)
-  [Postman](https://www.postman.com/)
-  [Git](https://git-scm.com/)
-  [Docker](https://www.docker.com/)
-  [Composer](https://getcomposer.org/)

### Autor

<a  href="https://github.com/ramersonrodrigues"  style="text-decoration: none;"> Râmerson Rodrigues</a>
