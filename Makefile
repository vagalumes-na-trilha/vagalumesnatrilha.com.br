build:
	docker run -it --rm -v $(pwd):/srv/app pmprcoger/symfony:latest symfony composer install
	docker run -it --rm -v $(pwd):/srv/app pmprcoger/symfony:latest symfony composer dump-autoload --optimize
	docker run -it --rm -v $(pwd):/srv/app -w /srv/app node:lts yarn
	docker run -it --rm -v $(pwd):/srv/app -w /srv/app node:lts yarn run encore production
	echo "Comando para iniciar o container em produção"
	echo "docker run -d -it -p 9000:9000 --restart unless-stopped -v $(pwd):/srv/app -e APP_ENV=prod --name vagalumesnatrilha.com.br pmprcoger/symfony:latest"
	echo "docker run -d --restart unless-stopped -v /var/data/var/lib/postgresql/data -e POSTGRES_PASSWORD=MXJpHL3Z6BcsLpCn818I -e POSTGRES_USER=vagalumes -e POSTGRES_DB=vagalumes --name db.vagalumesnatrilha.com.br --network webnet postgres:13"
clean:
	rm composer.lock symfony.lock vendor var -rf
