# fashionablylate-contact-form

## 環境構築

### Dockerビルド
- git clone git@github.com:katoketa/fashionablylate-contact-form4.git
- cd fashionablylate-contact-form4
- docker-compose up -d --build

### Laravel環境構築
- docker-compose exec php bash
- composer install
- cp .env.example .env , 環境変数を適宜変更
- php artisan key:generate
- php artisan migrate
- php artisan db:seed

## 開発環境
- お問い合わせ画面：http://localhost/
- ユーザー登録：http://localhost/register
- ログイン画面：http://localhost/login
- 管理画面：http://localhost/admin
- phpMyAdmin：http://localhost:8080/

## 使用技術（実行環境）
- PHP 8.1-fpm
- Laravel 8.83.29
- MuSQL 8.0.26
- nginx 1.21.1

## ER図
<img width="722" height="428" alt="Image" src="https://github.com/user-attachments/assets/b229e1ad-6f79-47c0-8ae5-074350177dc4" />