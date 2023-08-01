## RENTAL SHOP

PHP自作

## 概要

よくあるECサイトをlaravelで作りました

## 使い方

トップページ画面からマイページをクリックしページ移動することで
それぞれのログイン先が表示されています。


ログイン完了後は商品閲覧や商品情報の詳細、
商品検索、お気に入り、カート確認ができるようになっています。

## アプリのインストールについて

ご利用環境のMAMPもしくはXAMPPをインストールし
ターミナルもしくはコマンドプロンプトでhtdocsに移動。
git cloneでURLを貼り付けてください。
gtihub からダウンロードが行えます。


composerをインストールする。


VScodeなどでファイルを開きます。

.env ファイルを作成

envファイルをご利用の環境に合わせてください

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=
- DB_USERNAME=
- DB_PASSWORD=

次に「 php artisan key:generate 」を実行しAPPKEYを生成する。


ご利用環境のMAMPもしくはXAMPP起動と共にphpmyadminでDBを起動し、
ターミナルまたはコマンドプロンプトで
「 php aritsan migrate:fresh --seed 」を実行。

DBにダミーデータが入ったか確認してください。

「php artisan serve」でサーバーを立ち上げ表示されるか確認。

## 画像について

画像のダミーデータは
public/imagesフォルダ内に
sample1.png 〜 sample5.png として
保存しています。

「　php artisan storage:link 」で
storageフォルダにリンク後、

storage/app/public/productsフォルダ内に
保存すると表示されます。
(productsフォルダがない場合は作成してください。)

