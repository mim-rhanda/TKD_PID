FROM amazonlinux:latest

RUN yum update -y  \
    && yum install mysql httpd -y \
    && amazon-linux-extras install -y php7.4

CMD

EXPOSE 80
