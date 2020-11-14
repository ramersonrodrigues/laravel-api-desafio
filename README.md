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



### Executando a Aplicação

````bash
# Clone o repositório do projeto
$ git clone https://github.com/ramersonrodrigues/laravel-api-desafio.git

# Acesse a pasta do projeto no terminal e algumas configurações
$ cd laravel-api-desafio && composer install && cp .env.example .env && php artisan key:generate 

# Configure o mysql no arquivo .env
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

### Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

-  [Laravel](https://laravel.com/)
-  [Laradock - (nginx, mysql e phpmyadmin)](https://laradock.io/)
-  [Docker](https://www.docker.com/)

### Autor

<a  href="https://github.com/ramersonrodrigues"  style="text-decoration: none;"> Râmerson Rodrigues</a>
