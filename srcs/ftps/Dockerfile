FROM alpine

RUN	apk update
RUN apk add openssl vsftpd openrc

RUN adduser -D admin \
	&& echo 'admin:admin' | chpasswd \
	&& mkdir /home/usr

COPY ./ftps.crt /etc/ssl/
COPY ./ftps.key /etc/ssl/
COPY run.sh /var/
COPY vsftpd.conf /vsftpd.conf

EXPOSE 21 21021

CMD sh /var/run.sh
