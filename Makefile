up:
	docker compose -f srcs/docker-compose.yml up

down:
	docker compose -f srcs/docker-compose.yml down

clean: down
	rm -rf database web
	docker container prune -f
	docker image prune -a -f
	docker volume prune -f
	docker network prune -f
	docker system prune -a --volumes -f

rebuild: clean up
restart: down up

.PHONY: up down clean rebuild restart