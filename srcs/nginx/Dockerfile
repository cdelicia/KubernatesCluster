FROM alpine

RUN apk update
RUN apk add nginx openssl openssh supervisor curl

RUN mkdir -p /run/nginx /var/run/sshd /var/empty/sshd /var/www
RUN rm -f /etc/nginx/nginx.conf /etc/nginx/conf.d/default.conf

COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./index.html /var/www/
COPY ./cert.crt /etc/ssl/
COPY ./key.key /etc/ssl/
COPY ./init.sh /var/
COPY ./supervisord.conf /etc/

RUN adduser -D admin
RUN echo "admin:admin" | chpasswd
RUN /usr/bin/ssh-keygen -A
RUN chown -R root:root /var/www

EXPOSE 80 443 22

CMD sh /var/init.sh
