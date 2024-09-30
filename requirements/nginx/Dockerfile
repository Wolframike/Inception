FROM debian:buster

RUN apt-get update && apt-get upgrade -y && apt-get install -y nginx openssl

RUN mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:2048 -nodes -x509 -days 365 \
	-out /etc/nginx/ssl/inception.crt \
	-keyout /etc/nginx/ssl/inception.key \
	-subj "/C=JP/ST=Tokyo/L=Shinjuku/O=42/OU=42/CN=misargsy.42tokyo.jp"

COPY default /etc/nginx/sites-available/

CMD ["nginx", "-g", "daemon off;"]