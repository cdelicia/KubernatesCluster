FROM alpine

RUN apk update
RUN apk add supervisor

RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub
RUN wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.32-r0/glibc-2.32-r0.apk
RUN apk add glibc-2.32-r0.apk

RUN wget https://dl.grafana.com/oss/release/grafana-7.2.0.linux-amd64.tar.gz
RUN tar -zxf grafana-7.2.0.linux-amd64.tar.gz
RUN mv grafana-7.2.0 /grafana
RUN cp /grafana/conf/defaults.ini /etc/grafana.ini

COPY ./run.sh /var/
COPY ./supervisord.conf	/etc/
COPY ./grafana.db /grafana/data/

EXPOSE 3000

WORKDIR /grafana/bin/
CMD sh /var/run.sh
