#!/bin/bash

cd dockerimages

docker load < base_image_nginx_php_73

cd ..

docker-compose up -d

