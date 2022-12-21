FROM hacklab/mapasculturais:latest

COPY compose/common/config.php /var/www/html/protected/application/conf/config.php
COPY compose/common/config.d /var/www/html/protected/application/conf/conf-common.d
COPY compose/production/config.d /var/www/html/protected/application/conf/config.d
COPY compose/common/lgpd-terms /var/www/html/protected/application/conf/lgpd-terms

COPY themes /var/www/html/protected/application/themes
COPY plugins /var/www/html/protected/application/plugins

