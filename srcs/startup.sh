#!/bin/bash
if [[ ! -z ${NGINX_AUTOINDEX} ]]
then
	sed -i 's/autoindex on/autoindex '$NGINX_AUTOINDEX'/g' /etc/nginx/sites-enabled/ft_server.conf
fi
service php7.3-fpm start
service nginx start
/usr/bin/mysqld_safe
