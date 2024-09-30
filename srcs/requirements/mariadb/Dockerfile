FROM debian:buster

RUN apt update && apt upgrade -y && apt install -y mariadb-server

COPY 50-server.cnf /etc/mysql/mariadb.conf.d/
COPY db.sh .

RUN mkdir /run/mysqld
RUN chmod +x db.sh

CMD ["./db.sh"]