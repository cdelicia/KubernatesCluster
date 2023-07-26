FROM alpine

RUN apk update
RUN	apk	add supervisor

RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub
RUN	wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.32-r0/glibc-2.32-r0.apk
RUN	apk add glibc-2.32-r0.apk

COPY ./run.sh /var/
COPY ./supervisord.conf /etc/

RUN	mkdir /var/lib/influxdb
VOLUME /var/lib/influxdb
RUN	wget https://dl.influxdata.com/influxdb/releases/influxdb-1.8.2-static_linux_amd64.tar.gz
RUN tar xfz influxdb-1.8.2-static_linux_amd64.tar.gz
RUN mv /influxdb-1.8.2-1 /etc/influxdb

RUN	wget https://dl.influxdata.com/telegraf/releases/telegraf-1.15.3_linux_amd64.tar.gz \
	&&	tar -xf telegraf-1.15.3_linux_amd64.tar.gz \
	&&	cp -r /telegraf-1.15.3/* /
RUN	./usr/bin/telegraf -sample-config --input-filter docker \
	--output-filter influxdb > /etc/telegraf/telegraf.conf 

CMD sh /var/run.sh
