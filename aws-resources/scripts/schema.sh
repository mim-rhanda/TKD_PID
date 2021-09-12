##!/usr/bin/env bash
## /bin/bash ~/schema.sh ${aws_db_instance.django_db.address} ${aws_db_instance.django_db.port} ${var.USERNAME} ${var.PASSWORD} ${var.APP_USER} ${var.APP_PASS}

mysql --version
if [ "$?" -ne "0" ]
then
  sudo yum update -y
  sudo yum install mysql -y
  sudo yum install httpd -y
  sudo amazon-linux-extras install -y php7.4

  sudo php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  sudo php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
  sudo php composer-setup.php
  sudo php -r "unlink('composer-setup.php');"
  sudo mv composer.phar /usr/local/bin/composer

#  sudo echo "<?php phpinfo(); ?>" > /var/www/html/info.php
  sudo systemctl start httpd
  sudo systemctl start php-fpm
  sudo chkconfig httpd on
  sudo chkconfig php-fpm on
fi

#mysql --host ${1} --user ${2} --password ${3} <<EOF
#CREATE DATABASE ${4};
#CREATE USER '${4}' IDENTIFIED BY '${5}';
#GRANT ALL PRIVILEGES ON ${4}.* TO '${4}';
#EOF
