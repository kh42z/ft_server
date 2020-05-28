#!/bin/bash

/usr/bin/mysqld_safe &
maxcounter=120

counter=0
while ! mysql -uroot -e "show databases;" > /dev/null 2>&1; do
    sleep 1
    counter=`expr $counter + 1`
	echo "Waiting for MariaDB to be started: ${counter}"
    if [ $counter -gt $maxcounter ]; then
        >&2 echo "Cant wait more"
        exit 1
    fi;
done
sleep 2
