build:
	docker run -it --rm -v $(pwd):/srv/app pmprcoger/symfony:latest symfony composer install
	docker run -it --rm -v $(pwd):/srv/app pmprcoger/symfony:latest symfony composer install dump-autoload --optimize
	docker run -it --rm -v $(pwd):/srv/app -w /srv/app node:lts yarn run encore production
	echo "Comando para iniciar o container em produção"
	echo "docker run -d -it -p 9000:9000 --restart unless-stopped -v $(pwd):/srv/app -e APP_ENV=prod --name vagalumesnatrilha.com.br pmprcoger/symfony:latest"
clean:
	rm composer.lock symfony.lock vendor var -rf
