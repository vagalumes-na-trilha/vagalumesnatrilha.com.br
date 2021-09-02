build-prod:
	rm build -rf
	git clone . build
	cd build && symfony composer install
	docker build -f docker/producao/Dockerfile --no-cache --rm -t danielfleck/vagalumesnatrilha:0.1.0 .
clean:
	rm composer.lock symfony.lock vendor var build -rf
