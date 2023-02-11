#!/bin/sh

sudo docker build . -t teao
sudo docker run --rm -p 3306:3306 -p 54345:80 -t -d --name teao teao
sudo docker exec -it teao /var/www/html/start.sh
sudo docker exec -it teao /bin/bash -c 'echo "create database annonce;" | mysql && mysql annonce < /var/www/html/annonce.sql'
