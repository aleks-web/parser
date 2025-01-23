SHELL = /bin/bash
DC_RUN_ARGS = --rm --user "$(shell id -u):$(shell id -g)"
COMPOSE_TIMEOUT = 3000
.PHONY : help app-shell db-shell up up-build build down rebuild cleanup restart restart-quiet mysqlcheck pull patch
.DEFAULT_GOAL : help
#include .env
export

# This will output the help for each task. thanks to https://marmelab.com/blog/2016/02/29/auto-documented-makefile.html
help: ## Show this help
	@printf "\033[33m%s:\033[0m\n" 'Available commands'
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z0-9_-]+:.*?## / {printf "  \033[32m%-18s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

app-shell: ## Start shell into app container
	UNAME=$(shell whoami) docker-compose exec -it site bash

nginx-shell: ## Start shell into db container
	UNAME=$(shell whoami) docker-compose exec -it parser_nginx bash

up: ## Start containers
	COMPOSE_HTTP_TIMEOUT=$(COMPOSE_TIMEOUT) UNAME=$(shell whoami) docker-compose up --detach --remove-orphans parser_nginx site && npx tailwindcss -i ./public/assets/css/tailwind.css -o ./public/assets/css/output.css --watch

down: ## Down containers
	UNAME=$(shell whoami) docker-compose down --remove-orphans --volumes

restart: down up ## Calling down and up

prune-volumes:
	docker volume prune -f

prune-image:
	docker image prune -f

prune-container:
	docker container prune -f

prune-system:
	docker system prune --all --volumes -f

prune-all: prune-container prune-image prune-volumes prune-system
