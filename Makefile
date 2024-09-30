up:
	docker compose up

down:
	docker compose down

clean: down
	rm -rf database web
	docker container prune -f
	docker image prune -a -f
	docker volume prune -f
	docker network prune -f
	docker system prune -a --volumes -f

re: clean up

.PHONY: up down clean