FROM pmprcoger/symfony:latest-prod

COPY build/ /srv/app/

ENV APP_ENV=prod

RUN apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

EXPOSE 9000

CMD ["php-fpm"]
