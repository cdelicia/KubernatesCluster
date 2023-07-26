#!/bin/bash/

#minikube stop
#minikube delete

minikube start --vm-driver=virtualbox
minikube addons enable metallb
minikube addons enable dashboard
#minikube addons enable metrics-server
eval $(minikube docker-env)

kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/metallb.yaml
#kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"

docker build -t ftpsdock ./srcs/ftps
docker build -t mysqldock ./srcs/mysql
docker build -t wordpressdock ./srcs/wordpress
docker build -t nginxdock ./srcs/nginx
docker build -t influxdbdock ./srcs/influxdb
docker build -t grafanadock ./srcs/grafana
docker build -t phpmyadmindock ./srcs/phpmyadmin

kubectl apply -f ./srcs/loadbalancer.yaml
kubectl apply -f ./srcs/volumes.yaml

kubectl apply -f ./srcs/mysql.yaml
kubectl apply -f ./srcs/phpmyadmin.yaml
kubectl apply -f ./srcs/wordpress.yaml
kubectl apply -f ./srcs/nginx.yaml
kubectl apply -f ./srcs/ftps.yaml
kubectl apply -f ./srcs/grafana.yaml
kubectl apply -f ./srcs/influxdb.yaml

printf "nginx      -> http://192.168.99.242:80\n
wordpress  -> http://192.168.99.241:5050\n
phpmyadmin -> http://192.168.99.240:5000\n
grafana    -> http://192.168.99.243:3000\n
ftps       -> admin@192.168.99.254:21\n"

minikube dashboard
