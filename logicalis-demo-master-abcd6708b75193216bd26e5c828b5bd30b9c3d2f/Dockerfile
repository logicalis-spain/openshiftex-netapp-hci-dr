FROM centos:latest
MAINTAINER Laura Nicolas
RUN yum -y install httpd php mysql php-mysql unzip
COPY lab2-app.zip /var/www/html/
RUN unzip /var/www/html/lab2-app.zip -d /var/www/html &&\
    rm -f /etc/httpd/conf.d/welcome.conf && \
    chown -R apache:apache /var/www/html/*
EXPOSE 80
ADD run-apache.sh /run-apache.sh
RUN chmod -v +x /run-apache.sh

CMD ["/run-apache.sh"]

