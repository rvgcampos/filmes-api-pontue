<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Como rodar o projeto

>1 - Executar o comando

```
git clone https://github.com/rvgcampos/filmes-api-pontue
```

>2 - Entrar na pasta do projeto pelo terminal e executar o comando

```
php artisan serve
```

>3 - Para executar as rotas pelo Postman basta abrir o Postman e importar a coleção criada "Filmes - API.postman_collection"
OBS: Esse arquivo foi colocado na raiz do repositório

>4 - Importante lembrar que algumas rotas são protegidas, como as de adicionar, atualizar e deletar Filme. Então é necessário primeiro fazer o login para obter o token e colocá-lo como Bearer Token nas requisições previamente citadas.

* Foram criados dois testes 

* Também foi criada uma app front-end em Flutter Web, entretanto devido ao tempo, só foi possível implementar a função de login e de cadastro
[Link para acessar](https://github.com/rvgcampos/flutter_web_api_pontue)

* Caso queria ver as duas telas criadas [Login e Cadastro] (https://peaceful-haibt-cfe35e.netlify.app/#/)

* Aplicação front-end de fato funciona, mas tem que executar localmente.

* Banco que foi usado foi o SQLite

* E para rodar os testar basta executar ``` vendor/bin/phpunit ```