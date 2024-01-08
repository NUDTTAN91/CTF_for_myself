FROM nudttan91/base_image_nginx_php_73

LABEL Author="tan91"
LABEL GitHub="https://github.com/NUDTTAN91"
LABEL Blog="zxw-nudt.blog.csdn.net"

COPY file /
COPY html /var/www/html

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

COPY php.ini /usr/local/etc/php/
RUN chmod 777 /usr/local/etc/php/php.ini

RUN chmod 777 /flag.sh
