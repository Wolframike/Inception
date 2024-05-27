FROM debian:latest

RUN apt update && apt upgrade && apt install -y mariadb-server

COPY 50-server.cnf /etc/mysql/mariadb.conf.d/
COPY init.sql /etc/mysql/
COPY db.sh .

RUN mkdir /run/mysqld
RUN chmod +x db.sh

CMD ["./db.sh"]