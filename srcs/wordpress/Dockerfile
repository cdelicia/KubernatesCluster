FROM alpine

RUN apk update
RUN apk add nginx supervisor
RUN apk add php7-fpm php7-zlib php7-gd php7-gettext php7-session \
	php7 php7-curl php7-opcache php7-mbstring php7-json
RUN apk add mysql mysql-client php7-mysqli

RUN mkdir -p /run/nginx
COPY ./run.sh /var/
COPY ./wp-config.php /
RUN rm -f /etc/nginx/conf.d/default.conf
COPY nginx.conf /etc/nginx/conf.d/
COPY supervisord.conf /etc/supervisord.conf

RUN wget -c https://ru.wordpress.org/latest-ru_RU.tar.gz \
	&& tar -xvf latest-ru_RU.tar.gz \
	&& mv wordpress /var/www/wordpress

RUN mv ./wp-config.php /var/www/wordpress/

EXPOSE 5050

CMD sh /var/run.sh
