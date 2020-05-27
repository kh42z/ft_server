FROM debian:buster
ARG SHARE=/var/www/ft_server
RUN mkdir -p ${SHARE}
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y wget tar
RUN apt-get install -y nginx mariadb-server php7.3 php7.3-mysql php7.3-fpm php7.3-bcmath php7.3-curl php7.3-gd php7.3-imagick php7.3-mbstring php7.3-soap php7.3-xml php7.3-zip
RUN wget --quiet https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz -O pma.tgz && tar xzf pma.tgz -C ${SHARE} && mv ${SHARE}/phpMyAdmin-* ${SHARE}/phpMyAdmin && rm -f pma.tgz
RUN wget --quiet https://wordpress.org/latest.tar.gz -O wp.tgz && tar xzf wp.tgz -C ${SHARE} && rm -f wp.tgz
ADD srcs/config/ft_server.conf /etc/nginx/sites-enabled/ft_server.conf
RUN rm -f /etc/nginx/sites-enabled/default
ADD srcs/config/config.inc.php ${SHARE}/phpMyAdmin/
ADD srcs/permissions.sql /tmp
RUN service mysql start && sleep 20 && mariadb < ${SHARE}/phpMyAdmin/sql/create_tables.sql && mariadb < /tmp/permissions.sql && rm -f /tmp/permissions.sql
ADD srcs/config/wp-config.php ${SHARE}/wordpress/wp-config.php
ADD srcs/nginx.pem	/etc/ssl/certs
ADD srcs/startup.sh /startup.sh
RUN chmod a+x /startup.sh
RUN chown -R www-data: ${SHARE}
EXPOSE 80
EXPOSE 443
CMD ["/bin/bash", "/startup.sh"]
