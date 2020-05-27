DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');
DELETE FROM mysql.user WHERE User='';
DELETE FROM mysql.db WHERE Db='test' OR Db='test_%';
CREATE USER 'ft_user'@locahost IDENTIFIED BY 'ft_user';
GRANT ALL PRIVILEGES ON *.* TO 'ft_user'@localhost IDENTIFIED BY 'ft_user';
GRANT USAGE ON *.* to 'ft_user'@localhost identified by 'ft_user';
CREATE DATABASE wp;
GRANT ALL PRIVILEGES ON wp.* TO 'ft_wp'@localhost IDENTIFIED BY 'ft_wp';
FLUSH PRIVILEGES;
