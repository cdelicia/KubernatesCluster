FROM alpine

RUN apk update
RUN apk add --no-cache mysql mysql-client openrc

VOLUME /var/lib/mysql

COPY ./init.sql /var/
COPY ./wp.sql /var/
COPY ./run.sh /var/
COPY ./my.cnf /etc/mysql/

EXPOSE 3306
CMD sh /var/run.sh
