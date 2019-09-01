FROM php:7.3-apache

LABEL maintainer "genzouw <genzouw@gmail.com>"

RUN docker-php-ext-install pdo pdo_mysql mbstring

RUN a2enmod rewrite \
  && a2enmod headers \
  && a2enmod expires

RUN apt-get update \
  && apt-get upgrade -y \
  && apt-get -y install \
    --no-install-recommends \
    python-pip \
  && apt-get clean \
  && rm -rf /var/cache/apt/archives/* /var/lib/apt/lists/*

RUN pip install youtube-dl

ENV APACHE_DOCUMENT_ROOT /var/www/webroot

RUN sed -ri -e "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/sites-available/*.conf \
  && sed -ri -e "s!/var/www/!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
