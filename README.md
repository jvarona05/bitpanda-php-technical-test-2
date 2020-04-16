<p align="center"><img src="https://theme.zdassets.com/theme_assets/624144/6a8455c16fd14684884098941e1317cc5173b353.png" width="400"></p>

# BitPanda PHP Technical Test #2

Test to demonstrate skills and mastery in PHP part 2🤣. 

[API Documentation](https://jvarona05.github.io/bitpanda-php-technical-test-2/public/docs/).

## Requirements

Create an endpoint which will return the transactions in a json with an extra parameter which will specify the source

## Main Technologies

- Laravel
- Mysql
- RESTful API
- Docker - Laradock
- Migrations
- Seeders
- FeatureTest - PHPUnit
- Eloquent - Resource
- Laravel Apidoc Generator

## Installation

### Clone the project

```
git clone https://github.com/jvarona05/bitpanda-php-technical-test-2.git

cd bitpanda-php-technical-test-2
```

### Create .env file

```
cp .env.example .env
```

### Run Docker

```
git clone https://github.com/Laradock/laradock.git

cd laradock

cp env-example .env

docker-compose up -d nginx mysql workspace 
```

Note: The containers use the ports 80 and 3306. Please,
don't have any programs running on these ports in your machine.

### Configure the project

```
docker exec -ti laradock_workspace_1 composer install

docker exec -ti laradock_workspace_1 php artisan migrate:fresh --seed

docker exec -ti laradock_workspace_1 php artisan test
```

### Open the proyect

```
http://localhost/
```
 
 Note: The app will ask you to generate the Laravel APP_KEY and then refresh the page.
