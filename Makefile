build-prod:
	rm build -rf
	git clone . build
	cd build && symfony composer install
	docker build -f docker/producao/Dockerfile --no-cache --rm -t danielfleck/vagalumesnatrilha:latest .
	echo "Para enviar docker"
clean:
	rm composer.lock symfony.lock vendor var build -rf
