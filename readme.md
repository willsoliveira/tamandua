<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Rodando o Projeto
  #Acesse A pasta do Projeto
  
  #Instale as dependências e o framework

    composer install --no-scripts

  #Copie o arquivo .env.example
    cp .env.example .env

  #Crie uma nova chave para a aplicação
    php artisan key:generate
  Em seguida você deve configurar o arquivo .env e rodar as migrations com:
    php artisan migrate
  Por final rode o Seed das Secretaria
    php artisan db:seed --class=SecretariaSeed