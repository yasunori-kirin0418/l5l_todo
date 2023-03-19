.PHONY: help up start ps stop down refresh db

help:
	@echo 'make commands.'
	@echo ''
	@echo 'init:		Initialize project.'
	@echo '			You gotta execute this only the first time.'
	@echo '			Create default env_file.'
	@echo 'up:		docker compose up -d'
	@echo 'start:		docker compose start'
	@echo 'ps:		docker compose ps'
	@echo 'stop:		docker compose stop'
	@echo 'down:		docker compose down'
	@echo 'restart:		docker compose restart'
	@echo 'refresh:		Delete services, volumes, and networks created by the docker compose commands.'
	@echo '			Then run docker compose up -d to reconfigure the project.'
	@echo 'phpcs:		php_codesniffer checking code.'
	@echo 'phpcbf:		php_codesniffer code fixing.'
	@echo 'dump_autoload:	composer dump-autoload'
	@echo 'tinker:		php artisan tinker.'
	@echo 'migrate		php artisan module:migrate'
	@echo 'reset_db		php artisan module:migrate-reset'
	@echo 'seed_db		php artisan module:seed'
	@echo 'db:		Login database.'


up:
	@docker compose up -d

start:
	@docker compose start

ps:
	@docker compose ps

stop:
	@docker compose stop

down:
	@docker compose down

restart:
	@docker compose restart

refresh:
	@docker compose down --rmi all --remove-orphans --volumes
	@docker compose up -d

phpcs:
	@docker compose exec app composer phpcs

phpcbf:
	@docker compose exec app composer phpcbf

dump_autoload:
	@docker compose exec app composer dump-autoload

tinker:
	@docker compose exec app php artisan tinker

migrate:
	@docker compose exec app php artisan module:migrate

reset_db:
	@docker compose exec app php artisan module:migrate-reset

seed_db:
	@docker compose exec app php artisan module:seed

db:
	@docker compose exec db mysql -u user -p -D l5l_todo

init:
	@cp src/.env.example src/.env
	@cp .env.example .env
	@make start
	@docker compose exec app composer install
	@sleep 3
	@make restart
