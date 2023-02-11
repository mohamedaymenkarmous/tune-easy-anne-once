#Download base image ubuntu 14.04
FROM ubuntu:14.04

# Let the conatiner know that there is no tty
ENV DEBIAN_FRONTEND noninteractive

# Update Software repository
RUN apt-get update

# Add Current PHP Repository
RUN apt-get install software-properties-common -y
RUN add-apt-repository -y ppa:ondrej/php
RUN apt-get update

# Basic Requirements
RUN apt-get -y install pwgen python-setuptools curl git nano sudo unzip openssh-server openssl vim htop
#RUN apt-get -y install php5-fpm php5-common php5-mysql php5-xml php5-xmlrpc php5-curl php5-gd php5-imagick php5-cli php5-dev php5-imap php5-mbstring php5-soap php5-zip php5-bcmath php5-memcache php5-mysql
RUN apt-get -y install php5-fpm php5-common php5-mysql php5-xmlrpc php5-curl php5-gd php5-imagick php5-cli php5-dev php5-imap php5-memcache php5-mysql
RUN apt-get -y install mysql-server mysql-client nginx && rm -rf /var/lib/apt/lists/*

# mysql config
RUN sed -i -e"s/^bind-address\s*=\s*127.0.0.1/bind-address = 0.0.0.0/" /etc/mysql/my.cnf

RUN mkdir -p /var/www/html
RUN mkdir -p /run/php && \
    chown -R www-data:www-data /var/www/html && \
    chown -R www-data:www-data /run/php


COPY . /var/www/html

RUN chmod 777 /var/www/html/upload -R
RUN cp /var/www/html/nginx-site /etc/nginx/sites-enabled/default

#RUN mkdir -p /etc/nginx/snippets
#RUN openssl req -x509 -nodes -newkey rsa:1024 -days 365 -keyout /etc/nginx/snippets/privkey.pem -out /etc/nginx/snippets/fullchain.pem -subj '/CN=localhost'
#RUN echo 'ssl_certificate /etc/nginx/snippets/fullchain.pem;' > /etc/nginx/snippets/snakeoil.conf
#RUN echo 'ssl_certificate_key /etc/nginx/snippets/privkey.pem;' >> /etc/nginx/snippets/snakeoil.conf

# ROOT PASSWORD
ENV MYSQL_ROOT_PASSWORD=root

ENV MYSQL_DATABASE=annonce
ENV MYSQL_USER=admin
ENV MYSQL_PASSWORD=admin


# Configure Services and Port
#SHELL ["/bin/bash", "-c"]
#CMD ["/bin/bash", "-c"]
#CMD ["/bin/bash"]
CMD ["/var/www/html/entry.sh"]
#CMD /var/www/html/entry.sh;/bin/bash
#CMD [ "bash" ]
#ENTRYPOINT ["/var/www/html/entry.sh"]

# Network Ports
EXPOSE 80
