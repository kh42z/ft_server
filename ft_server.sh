#!/bin/bash

listening=$(netstat -ntpl|grep -c :80)
if [ $listening -eq 1 ]
then
	echo "Something is listening on port :80. Shutting down nginx/apache"
	systemctl stop nginx
	systemctl stop apache2
fi
docker build . -t ft_server
docker run -e NGINX_AUTOINDEX="on" -td -p 80:80 -p 443:443 --name ft_server ft_server
docker exec -ti ft_server /bin/bash
