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

## phpダウンロード&インストール
1. 以下のリンクからPhp.zipをダウンロードする。
　https://www.php.net/downloads.php
2. zipファイルを解凍して任意のフォルダに配置する 
   1. 例：C:　配下
3. phpフォルダがあるパス（例：C:\php）配下にあるphp.ini-production または php.ini-development をコピーして php.ini を作成する
4. Windows環境変数(PATH)に　phpフォルダがあるパス（例：C:\php）を設定する
5. 確認としてPHPのバージョンを確認してみる 
   1. php -v


## Apacheダウンロード＆インストール

1. Apacheを以下のリンクでダウンロードする
   1. https://www.javadrive.jp/apache/install/index1.html#section1
2. Visual C++ 再頒布可能パッケージのインストール
   1. https://www.javadrive.jp/apache/install/index1.html#section2
3. Apacheのインストール
   1. https://www.javadrive.jp/apache/install/index1.html#section3


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

