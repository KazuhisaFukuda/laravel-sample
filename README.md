<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

Laravel サンプルアプリ 
====== 
 
## 概要 
Laravel Ver. 5.5 を用いたサンプルアプリ 
 
主に勉強したこと等を実際に試したり、自身の備忘録的なもの 

## インストール

* git clone https://github.com/KazuhisaFukuda/laravel-sample.git projectname
* cd projectname
* composer install
* cp .env.example .env
* php artisan key:generate
* Database作成 と .env を修正
* php artisan migrate --seed

## Composer で追加したパッケージ

* barryvdh/laravel-debugbar
* laravelcollective/html

## 機能一覧

* Multi-Auth (Admin / User)
  * Laravel Authを拡張し、ログイン処理で使用するModel(Admin / User)を分割 
  * ルーティング定義ファイルである 「routes/web.php」 は使用せず、 「routes/admin.php、routes/user.php」 でAdmin・User用で分割
* Admin CRUD (Admin)
  * ResourceControllerを使用したCRUD 
* User CRUD (Admin)
  * ResourceControllerを使用したCRUD 
* Task CRUD (Admin / User)
  * ResourceControllerを使用したCRUD 
  * Userだと自身のタスクしか閲覧・編集・削除出来ないようにしている

## URL一覧

| ユーザ | URL | 画面 |
| ---- | ---- | ---- |
| Admin | http://{domain}/admin/login | ログイン |
|  | http://{domain}/admin/ | ダッシュボード | 
|  | http://{domain}/admin/admins | 管理者一覧 |
|  | http://{domain}/admin/admins/create | 管理者作成 |
|  | http://{domain}/admin/admins/{admin} | 管理者詳細 |
|  | http://{domain}/admin/admins/{admin}/edit | 管理者編集 |
|  | http://{domain}/admin/users | ユーザ一覧 |
|  | http://{domain}/admin/users/create | ユーザ作成 |
|  | http://{domain}/admin/users/{user} | ユーザ詳細 |
|  | http://{domain}/admin/users/{user}/edit | ユーザ編集 |
|  | http://{domain}/admin/tasks | タスク一覧 |
|  | http://{domain}/admin/tasks/create | タスク作成 |
|  | http://{domain}/admin/tasks/{user} | タスク詳細 |
|  | http://{domain}/admin/tasks/{user}/edit | タスク編集 |
| User | http://{domain}/login | ログイン |
|  | http://{domain}/ | ダッシュボード |
|  | http://{domain}/tasks | タスク一覧 |
|  | http://{domain}/tasks/create | タスク作成 |
|  | http://{domain}/tasks/{task} | タスク詳細 |
|  | http://{domain}/tasks/{task}/edit | タスク編集 |
|  | http://{domain}/profiles/edit | プロフィール編集 |

## ログインユーザ

* Admin
    * mail: admin{1~50}@test.com
    * password: password
    
* User
    * mail: user{1~50}@test.com
    * password: password
