pull:
	docker-compose pull
build:
	docker-compose build
up:
	docker-compose up -d
down:
	docker-compose down
composer-init:
	docker-compose run php-cli composer init
require:
	docker-compose run php-cli composer require $(NAME)
install:
	docker-compose run php-cli composer install