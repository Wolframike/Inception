#!/bin/bash

touch init.sql
echo "CREATE DATABASE $WP_DB_NAME;" >> init.sql
echo "CREATE USER '$WP_DB_USER'@'%' IDENTIFIED BY '$WP_DB_PASSWORD';" >> init.sql
echo "GRANT ALL PRIVILEGES ON *.* TO '$WP_DB_USER '@'%' WITH GRANT OPTION;" >> init.sql
echo "FLUSH PRIVILEGES;" >> init.sql

mv init.sql /etc/mysql/

mysql_install_db
mysqld