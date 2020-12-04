#FROM php:7.3-apache
#RUN apt-get update && \
 #   apt-get install -y software-properties-common && \
#	add-apt-repository ppa:ondrej/php && \
 #   apt-get install -y php7.0-mysql && \
  #  apt-get clean
#COPY hotel-mgmt-system-app /var/www/html/

FROM php:5.6-apache
RUN a2enmod rewrite
RUN apt-get update && \
 apt-get install -y libpng12-dev libjpeg-dev && \
 rm -rf /var/lib/apt/lists/* && \ 
 docker-php-ext-configure gd — with-png-dir=/usr — with-jpeg-dir=/usr && \
 docker-php-ext-install gd
RUN docker-php-ext-install mysqli

COPY hotel-mgmt-system-app /var/www/html/