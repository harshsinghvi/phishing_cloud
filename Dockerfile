FROM php:7.2.30-apache
COPY src/ /var/www/html
EXPOSE 80 443
WORKDIR /var/www/html
RUN apt-get update
RUN apt-get install certbot python-certbot-apache nano wget git -y 
RUN chmod 777 /var/www/html
RUN chmod 777 /var/www/html/*