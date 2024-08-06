FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD: wiosna2424
ENV MYSQL_DATABASE: cdvdb
ENV MYSQL_USER: cvd
ENV MYSQL_PASSWORD: Wiosna2424

COPY ./dump/ /docker-entrypoint-initdb.d
COPY ./dump/ /root

ADD ./dump/insertData.sql /root

WORKDIR /docker-entrypoint-initdb.d

RUN echo "CREATE TABLE `test`.`kontakt` ( `id` INT NOT NULL AUTO_INCREMENT , `mail` VARCHAR(255) NOT NULL , `name` VARCHAR(255) NOT NULL , `text` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;" > insert.sql