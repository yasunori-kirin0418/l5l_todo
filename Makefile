.PHONY: help up start ps stop down refresh db

help:
	@echo 'make commands.'
	@echo 'Commonly used docker compose commands.'
	@echo ''
	@echo 'up:		docker compose up -d'
	@echo 'start:		docker compose start'
	@echo 'ps:		docker compose ps'
	@echo 'stop:		docker compose stop'
	@echo 'down:		docker compose down'
	@echo 'refresh: 	Delete services, volumes, and networks created by the docker compose commands.'
	@echo ' 		Then run docker compose up -d to reconfigure the project.'


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

refresh:
	@docker compose down --rmi all --remove-orphans --volumes
	@docker compose up -d

phpcs:
	@docker compose exec app composer phpcs

phpcbf:
	@docker compose exec app composer phpcbf

db:
	@docker compose exec db mysql -u user -p -D l5l_todo
