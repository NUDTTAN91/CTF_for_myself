FROM nudttan91/base_image_nginx_php_73

LABEL Author="tan91"
LABEL GitHub="https://github.com/NUDTTAN91"
LABEL Blog="zxw-nudt.blog.csdn.net"

COPY file /
COPY html /var/www/html

RUN chmod -R 777 /var/www/html
RUN chown -R www-data:www-data /var/www/html

RUN chmod 777 /flag.sh
