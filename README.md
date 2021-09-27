# TKD_PID
```bash
# instance
$ terraform apply -target=module.rds.aws_instance.app_instance
$ terraform destroy -target=module.rds.aws_instance.app_instance
```

# 開発環境構築
- Php Version:    7.4
- Apache Version: 2.4
- MySQL Version:  5.7

## Setup
```shell
# docker image build
docker-compose build
# docker起動
docker-compose up -d

# mysql にアクセスしてDDLを実行する password=root
mysql -u root -p -h 127.0.0.1 --port 63306

# library install 
docker-compose exec php-apache /bin/bash
cd /var/www/html/form
composer install
exit
```
  
## Certbot

```bash
certbot certonly -w /var/www/html -d pid-dev.3hpguardian.com -m kakimoto-kentaro@3h-ct.co.jp --pre-hook 'systemctl stop httpd'

# cron job
00 4 * * 0 /bin/certbot renew --post-hook "/usr/bin/systemctl reload httpd"
```

```shell
# SSH Connect
ssh -i ~/.ssh/id_rsa-20210909 ec2-user@18.181.150.106

# MySQL Connect
mysql -u root -p -h 127.0.0.1 --port 63306

# Access to Container
docker-compose exec php-apache /bin/bash

# Restart 
docker-compose stop php-apache
docker-compose rm php-apache
docker-compose up -d
```

