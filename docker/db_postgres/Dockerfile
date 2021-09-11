FROM postgres:13

RUN apt-get update && apt-get -y install postgresql-13-postgis-3

COPY files/postgis.sql /docker-entrypoint-initdb.d/postgis.sql

CMD ["postgres"]
