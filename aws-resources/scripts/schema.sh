#!/usr/bin/env bash
# /bin/bash ~/schema.sh ${aws_db_instance.django_db.address} ${aws_db_instance.django_db.port} ${var.USERNAME} ${var.PASSWORD} ${var.APP_USER} ${var.APP_PASS}

mysql --version
if [ "$?" -ne "0" ]
then
    sudo yum update -y
    sudo yum install mysql -y
fi

httpd -v
if [ "$?" -ne "0" ]
then
    sudo yum httpd -y
fi

mysql --host=${0} --port=${1} --user=${2} --password=${3}  << EOF
CREATE DATABASE ${4};
CREATE USER '${4}' IDENTIFIED BY '${5}';
GRANT ALL PRIVILEGES ON ${4}.* TO '${4}';
EOF