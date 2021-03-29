<p align="center"><img src="https://laravel.com/img/logotype.min.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About this Project
Projeto desenvolvido durante as aulas de tópicos avançados em informática no curso técnico integrado do IFSC 2020.1

## Aprenda sobre o Laravel
Documentação Oficial [documentation](https://laravel.com/docs) 

**Links Úteis**  
[Estrutura do Framework](https://blog.especializati.com.br/estrutura-do-framework-php-laravel/) 

**Cursos Gratuitos**  
[Curso Grátis – Laravel de A a Z](https://www.youtube.com/watch?v=4T7sDt_00Ms&list=PLC3EZa6iCgPwufZ40xMRF-4cHgzepuNFa)   
[Curso Laravel 6.x (Gratuito!)](https://www.youtube.com/watch?v=fCR6ogiPopU&list=PLVSNL1PHDWvQBtcH_4VR82Dg-aFiVOZBY)  
[Curso Gratuito de Introdução ao Framework Laravel](https://www.portalgsti.com.br/cursos/introducao-ao-framework-laravel/)   
 
**Cursos Pagos**  
[Laravel 5.8 Completo - O mais poderoso Framework PHP](https://www.udemy.com/laravelcompleto/)  

**Passo 01 - Clonar projeto**   
`git clone https://github.com/lordjack/tai_aula_2020_laravel`

### Comandos para serem feitos após clonar o projeto, executar os comando abaixo dentro do diretorio do projeto

**Passo 02 - Instala dependencias e pacotes do projeto**  
`composer install`

**Passo 03 - Gerar uma chave de desenvolvimento para o projeto Laravel**  
`php artisan key:generate`

**Passo 04 - Configurar o arquivo de conexão com o banco de dados**  
 > .env

**Realizer a migração criando as tabelas do banco de dados**  
`php artisan migrate`

**Iniciar o servidor**  
`php artisan serve`

## Mais Comandos Básicos Úteis  
Esses comandos devem ser usados no terminal / cmd do projeto

**Listar os comandos**  
`php artisan list`

**Criar um arquivo de migração referenciando uma tabela**  
`php artisan make:migration create_table_nome_tabela --create=nome_tabela`

**Criar um Model e o -m já cria um arquivo de migração**  
`php artisan make:model NomeModel -m`

**Criar um Controller e o --model associa com o Model da tabela**  
`php artisan make:controller NomeTabelaController --resource --model=NomeTabelaModel`

**Executa a insersão dos registros no banco de dados de tudo que esta dentro do database/seeds/DatabaseSeeder.php**  
`php artisan db:seed`

**Executa a insersão dos registros no banco de dado, de forma separada por Classe**  
`php artisan db:seed --class=NomeTabelaSeeder`


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
