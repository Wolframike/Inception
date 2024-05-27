FROM debian:latest

RUN apt update && apt upgrade && apt install -y php-fpm php-mysqli curl

COPY www.conf /etc/php/8.2/fpm/pool.d/
COPY wp.sh .

RUN chmod +x wp.sh

CMD ["./wp.sh"]