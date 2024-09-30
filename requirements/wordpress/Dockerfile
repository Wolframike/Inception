FROM debian:buster

RUN apt update && apt upgrade -y && apt install -y php-fpm php-mysqli curl && mkdir -p /run/php && chown www-data:www-data /run/php

COPY www.conf /etc/php/7.3/fpm/pool.d/
COPY wp.sh .

RUN chmod +x wp.sh

CMD ["./wp.sh"]