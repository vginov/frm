FROM ubuntu:latest
RUN apt update 
RUN apt install –y apache2 
RUN apt install –y apache2-utils 
RUN apt clean 
RUN mkdir /var/www/html/frm
EXPOSE 80
#ADD URL /var/www/html
COPY frm/* /var/www/html/frm
CMD [“apache2ctl”, “-D”, “FOREGROUND”]
#sample commit
#File name chanted 