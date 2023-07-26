FROM alpine

RUN apk update
RUN apk add nginx supervisor
RUN apk add	php7 php7-fpm php7-opcache php7-json php7-mbstring php7-gettext \
	php7-gd php7-mysqli php7-zlib php7-curl php7-session

RUN mkdir -p /run/nginx /run/php \
	&& rm -f /etc/nginx/conf.d/default.conf

COPY ./nginx.conf		/etc/nginx/conf.d/
COPY ./config.inc.php /
COPY ./run.sh /var/
COPY ./supervisord.conf /etc/

RUN wget -c https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz \
	&& tar -xf phpMyAdmin-5.0.2-all-languages.tar.gz \
	&& mv /phpMyAdmin-5.0.2-all-languages /var/www/phpmyadmin \
	&& mkdir /var/www/phpmyadmin/tempdir \
	&& chmod 777 -R /var/www/* \
	&& mv ./config.inc.php /var/www/phpmyadmin/ \
	&& chmod 755 /var/www/phpmyadmin/config.inc.php

EXPOSE 5000

CMD sh /var/run.sh
