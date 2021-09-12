# TKD_PID
```bash
# instance
$ terraform apply -target=module.rds.aws_instance.app_instance
$ terraform destroy -target=module.rds.aws_instance.app_instance
```

# 環境構築手順

 ・Php Verison :  7.4.16
 
 ・Apache Version: Apache/2.4.41 (Win64)

php ダウンロード＆インストール

①以下のリンクからPhp.zipをダウンロードする。
　https://www.php.net/downloads.php

②zipファイルを解凍して任意のフォルダに配置する
　例：C:　配下

③phpフォルダがあるパス（例：C:\php）配下にあるphp.ini-production または php.ini-development をコピーして php.ini を作成する

④Windows環境変数(PATH)に　phpフォルダがあるパス（例：C:\php）を設定する
　　
⑤確認としてPHPのバージョンを確認してみる
　php -v


Apacheダウンロード＆インストール
 
①Apacheを以下のリンクでダウンロードする
　https://www.javadrive.jp/apache/install/index1.html#section1

②Visual C++ 再頒布可能パッケージのインストール
　https://www.javadrive.jp/apache/install/index1.html#section2

③Apacheのインストール
　https://www.javadrive.jp/apache/install/index1.html#section3
